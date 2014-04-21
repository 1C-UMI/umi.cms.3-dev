<?php
/**
 * UMI.Framework (http://umi-framework.ru/)
 *
 * @link      http://github.com/Umisoft/framework for the canonical source repository
 * @copyright Copyright (c) 2007-2013 Umisoft ltd. (http://umisoft.ru/)
 * @license   http://umi-framework.ru/license/bsd-3 BSD-3 License
 */

namespace umicms\project\admin\api\controller;

use umi\hmvc\exception\http\HttpException;
use umi\http\Response;
use umi\orm\metadata\field\datetime\DateTimeField;
use umi\orm\metadata\field\relation\HasManyRelationField;
use umi\orm\metadata\field\relation\ManyToManyRelationField;
use umi\orm\object\property\datetime\DateTime;
use umi\orm\objectset\IManyToManyObjectSet;
use umi\orm\objectset\IObjectSet;
use umi\orm\persister\IObjectPersisterAware;
use umi\orm\persister\TObjectPersisterAware;
use umicms\exception\RuntimeException;
use umicms\exception\UnexpectedValueException;
use umicms\hmvc\controller\BaseSecureController;
use umicms\orm\collection\ICmsCollection;
use umicms\orm\metadata\field\relation\BelongsToRelationField;
use umicms\orm\object\ICmsObject;
use umicms\project\admin\api\component\DefaultAdminComponent;

/**
 * Базовый REST-контроллер.
 */
abstract class BaseDefaultRestController extends BaseSecureController implements IObjectPersisterAware
{
    use TObjectPersisterAware;

    /**
     * Возвращает компонент, у которого вызван контроллер.
     * @throws RuntimeException при неверном классе компонента
     * @return DefaultAdminComponent
     */
    protected function getComponent()
    {
        $component = parent::getComponent();

        if (!$component instanceof DefaultAdminComponent) {
            throw new RuntimeException(
                $this->translate(
                    'Component for controller "{controllerClass}" should be instance of "{componentClass}".',
                    [
                        'controllerClass' => get_class($this),
                        'componentClass' => 'umicms\project\admin\api\component\DefaultAdminComponent'
                    ]
                )
            );
        }

        return $component;
    }

    /**
     * Возвращает коллекцию, с которой работает компонент.
     * @return ICmsCollection
     */
    protected function getCollection()
    {
        return $this->getComponent()->getCollection();
    }

    /**
     * Возвращает имя коллекции, с которой работает компонент.
     * @return string
     */
    protected function getCollectionName()
    {
        return $this->getComponent()->getCollection()->getName();
    }

    /**
     * Возвращает данные для сохранения объекта.
     * @throws HttpException если не удалось получить данные
     * @return array
     */
    protected function getCollectionIncomingData()
    {
        $data = $this->getIncomingData();

        $collectionName = $this->getCollectionName();
        if (!isset($data[$collectionName]) || !is_array($data[$collectionName])) {
            throw new HttpException(Response::HTTP_BAD_REQUEST, 'Object data not found.');
        }

        return $data[$collectionName];
    }

    /**
     * Возвращает данные, полученные в теле POST- или PUT-запроса, в виде массива.
     * @throws HttpException если не удалось получить данные
     * @return array
     */
    protected function getIncomingData()
    {
        $inputData = file_get_contents('php://input');
        if (!$inputData) {
            throw new HttpException(Response::HTTP_BAD_REQUEST, 'Request body is empty.');
        }

        $data = @json_decode($inputData, true);

        if ($error = json_last_error()) {
            if (function_exists('json_last_error_msg')) {
                $error = json_last_error_msg();
            }
            throw new HttpException(Response::HTTP_BAD_REQUEST, 'JSON parse error: ' . $error);
        }

        return $data;
    }

    /**
     * Обновляет и возвращает объект.
     * @param ICmsObject $object
     * @param array $data
     * @throws RuntimeException если невозможно сохранить объект
     * @return ICmsObject
     */
    protected function save(ICmsObject $object, array $data)
    {
        if (!isset($data[ICmsObject::FIELD_VERSION])) {
            throw new RuntimeException('Cannot save object. Object version is unknown');
        }

        $object->setVersion($data[ICmsObject::FIELD_VERSION]);

        foreach ($data as $propertyName => $value) {
            if ($object->hasProperty($propertyName) && !$object->getProperty($propertyName)->getIsReadOnly()) {

                $field = $object->getProperty($propertyName)->getField();

                switch(true) {
                    case $field instanceof HasManyRelationField: {
                        $this->setObjectSetValue($object, $propertyName, $field, $value);
                        break;
                    }
                    case $field instanceof BelongsToRelationField: {
                        $this->setObjectValue($object, $propertyName, $field, $value);
                        break;
                    }
                    case $field instanceof ManyToManyRelationField: {
                        $this->setManyToManyObjectSetValue($object, $propertyName, $field, $value);
                        break;
                    }
                    case $field instanceof DateTimeField: {
                        $this->setDateTimeValue($object, $propertyName, $value);
                        break;
                    }
                    default: {
                    $object->setValue($propertyName, $value);
                    }
                }
            }
        }

        $this->getObjectPersister()->commit();

        return $object;
    }

    protected function setDateTimeValue(ICmsObject $object, $propertyName, $value)
    {

        if (!is_array($value) || !isset($value['date'])) {
            throw new UnexpectedValueException(
                $this->translate(
                    'Cannot set data for DateTime property "{propertyName}". Data should be an array an contain "date" option.',
                    ['propertyName' => $propertyName]
                )
            );
        }

        /**
         * @var DateTime $dateTime
         */
        $dateTime = $object->getValue($propertyName);

        $dateTime->setTimestamp(strtotime($value['date']));
        if (isset($value['timezone'])) {
            $dateTime->setTimezone(new \DateTimeZone($value['timezone']));
        }
    }

    /**
     * Сохраняет значение объекта для HasManyRelationField.
     * @param ICmsObject $object изменяемый объект
     * @param string $propertyName имя изменяемого объекта
     * @param HasManyRelationField $field поле свойств
     * @param array $value значение (список идентификаторов связанных объектов)
     * @throws UnexpectedValueException если значение некорректно
     */
    protected function setObjectSetValue(ICmsObject $object, $propertyName, HasManyRelationField $field, $value)
    {
        if (!is_array($value)) {
            throw new UnexpectedValueException(
                $this->translate(
                    'Cannot set data for HasManyRelation property "{propertyName}". Data should be an array.',
                    ['propertyName' => $propertyName]
                )
            );
        }

        $targetCollection = $field->getTargetCollection();

        /**
         * @var IObjectSet $objectSet
         */
        $objectSet = $object->getValue($propertyName);
        /**
         * @var ICmsObject $relatedObject
         */
        foreach($objectSet as $relatedObject) {
            $relatedObject->setValue($field->getTargetFieldName(), null);
        }

        foreach ($value as $id) {
            $targetCollection->getById($id)->setValue($field->getTargetFieldName(), $object);
        }
    }

    /**
     * Сохраняет значение объекта для BelongsToRelationField.
     * @param ICmsObject $object изменяемый объект
     * @param string $propertyName имя изменяемого объекта
     * @param BelongsToRelationField $field поле свойств
     * @param int|null $value значение (идентификатор связанного объекта)
     * @throws UnexpectedValueException если значение некорректно
     */
    protected function setObjectValue(ICmsObject $object, $propertyName, BelongsToRelationField $field, $value)
    {
        if (!is_numeric($value) && !is_null($value)) {
            throw new UnexpectedValueException(
                $this->translate(
                    'Cannot set data for BelongsToRelation property "{propertyName}". Data should be numeric or null.',
                    ['propertyName' => $propertyName]
                )
            );
        }

        $value = $value ? $field->getTargetCollection()->getById($value) : null;

        $object->setValue($propertyName, $value);
    }

    /**
     * Сохраняет значение объекта для ManyToManyRelationField.
     * @param ICmsObject $object изменяемый объект
     * @param string $propertyName имя изменяемого объекта
     * @param ManyToManyRelationField $field поле свойств
     * @param array $value значение (список идентификаторов связанных объектов)
     * @throws UnexpectedValueException если значение некорректно
     */
    protected function setManyToManyObjectSetValue(ICmsObject $object, $propertyName, ManyToManyRelationField $field, $value)
    {
        if (!is_array($value)) {
            throw new UnexpectedValueException(
                $this->translate(
                    'Cannot set data for ManyToManyRelation property "{propertyName}". Data should be an array.',
                    ['propertyName' => $propertyName]
                )
            );
        }

        $targetCollection = $field->getTargetCollection();

        /**
         * @var IManyToManyObjectSet $objectSet
         */
        $objectSet = $object->getValue($propertyName);
        $objectSet->detachAll();

        foreach ($value as $id) {
            $objectSet->link($targetCollection->getById($id));
        }
    }

}
 