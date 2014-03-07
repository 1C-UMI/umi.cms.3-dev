<?php
/**
 * UMI.Framework (http://umi-framework.ru/)
 *
 * @link      http://github.com/Umisoft/framework for the canonical source repository
 * @copyright Copyright (c) 2007-2013 Umisoft ltd. (http://umisoft.ru/)
 * @license   http://umi-framework.ru/license/bsd-3 BSD-3 License
 */

namespace umicms\serialization\json\orm;

use umi\orm\selector\Selector;
use umicms\orm\object\ICmsObject;
use umicms\serialization\json\BaseSerializer;

/**
 * JSON-сериализатор для селектора.
 */
class SelectorSerializer extends BaseSerializer
{

    /**
     * @var array $collections список коллекций затронутых селектором
     */
    private $collections = [];

    /**
     * Сериализует Selector в JSON.
     * @param Selector $selector
     * @param array $options опции сериализации
     */
    public function __invoke(Selector $selector, array $options = [])
    {
        $fields = $selector->getFields();

        $this->collections = [];

        $mainCollectionName = $selector->getCollection()->getName();
        $this->collections[$mainCollectionName] = [];

        foreach($selector->getResult()->fetchAll() as $object) {
            $this->collections[$mainCollectionName][$object->getId()] = [$object, $fields];

            foreach ($selector->getWithInfo() as $fieldPath => $fieldInfo) {

                $fieldParts = explode(Selector::FIELD_SEPARATOR, $fieldPath);

                /**
                 * @var ICmsObject $withObject
                 */
                $withObject = $object;
                for ($i = 0; $i < count($fieldParts); $i++) {
                    $withObject = $withObject->getValue($fieldParts[$i]);
                    if (is_null($withObject)) break;

                    if ($withObject && $i < count($fieldParts)- 1) {
                        $this->storeRelatedObject($withObject, $withObject->getCollection()->getForcedFieldsToLoad());
                    }
                }

                list(, $selectiveFields) = $fieldInfo;

                if ($withObject) {
                    $this->storeRelatedObject($withObject, $selectiveFields);
                }
            }
        }

        foreach($this->collections as $collectionName => $objects) {

            $this->getJsonWriter()->startElement($collectionName);

            foreach(array_values($objects) as $key => $objectInfo) {
                list($object, $fields) = $objectInfo;

                $this->getJsonWriter()->startElement($key);
                $this->delegate($object, ['fields' => $fields]);
                $this->getJsonWriter()->endElement();
            }

            $this->getJsonWriter()->endElement();
        }

    }

    /**
     * Сохраняет информацию о том, как сериализовать связанный объект
     * @param ICmsObject $withObject
     * @param array $selectiveFields список имен полей, с которыми сериализуется объект
     */
    private function storeRelatedObject(ICmsObject $withObject, array $selectiveFields = [])
    {
        if (!isset($this->collections[$withObject->getCollectionName()])) {
            $this->collections[$withObject->getCollectionName()] = [];
        }
        if (isset($this->collections[$withObject->getCollectionName()][$withObject->getId()])) {
            list(, $viewFields) = $this->collections[$withObject->getCollectionName()][$withObject->getId()];

            if (!count($viewFields) || !count($selectiveFields)) {
                $selectiveFields = [];
            } else {
                $selectiveFields = array_merge($selectiveFields, $viewFields);
            }
        }

        $this->collections[$withObject->getCollectionName()][$withObject->getId()] = [
            $withObject,
            $selectiveFields
        ];

    }

}
 