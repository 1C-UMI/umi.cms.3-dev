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
use umi\hmvc\exception\http\HttpMethodNotAllowed;
use umi\http\Response;
use umi\orm\persister\IObjectPersisterAware;
use umi\orm\persister\TObjectPersisterAware;
use umicms\api\IApiAware;
use umicms\api\toolbox\TApiAware;
use umicms\exception\RuntimeException;
use umicms\orm\object\ICmsObject;
use umicms\orm\object\IRecoverableObject;
use umicms\project\module\service\api\BackupRepository;

/**
 * Базовый контроллер Read-Update-Delete операций над объектом.
 */
abstract class BaseRestItemController extends BaseRestController implements IObjectPersisterAware, IApiAware
{
    use TObjectPersisterAware;
    use TApiAware;

    /**
     * Возвращает объект.
     * @return ICmsObject
     */
    abstract protected function get();

    /**
     * Удаляет объект.
     * @param ICmsObject $object
     */
    abstract protected function delete(ICmsObject $object);

    /**
     * {@inheritdoc}
     */
    public function __invoke()
    {
        switch($this->getRequest()->getMethod()) {
            case 'GET': {
                $object = $this->get();
                return $this->createViewResponse(
                    'item', [$object->getCollectionName() => $object]
                );
            }
            case 'PUT': {
                $object = $this->get();

                if ($object instanceof IRecoverableObject) {
                    /**
                     * @var BackupRepository $backupApi
                     */
                    $backupApi = $this->getApi('umicms\project\module\service\api\BackupRepository');
                    $backupApi->createBackup($object);
                }

                return $this->createViewResponse(
                    'update',
                    [
                        $object->getCollectionName() => $this->update($object, $this->getIncomingDataForObject($object))
                    ]
                );
            }
            case 'DELETE': {
                $this->delete($this->get());
                return $this->createResponse('', Response::HTTP_NO_CONTENT);
            }
            case 'POST': {
                throw new HttpMethodNotAllowed(
                    'HTTP method is not implemented.',
                    ['GET', 'PUT', 'DELETE']
                );
            }
            default: {
                throw new HttpException(
                    Response::HTTP_NOT_IMPLEMENTED,
                    'HTTP method is not implemented.'
                );
            }
        }
    }

    /**
     * Возвращает данные для изменения объекта.
     * @param ICmsObject $object объект для изменения
     * @throws HttpException если не удалось получить данные
     * @return array
     */
    private function getIncomingDataForObject(ICmsObject $object)
    {
        $data = $this->getIncomingData();

        $collectionName = $object->getCollectionName();
        if (!isset($data[$collectionName]) || !is_array($data[$collectionName])) {
            throw new HttpException(Response::HTTP_BAD_REQUEST, 'Object data not found.');
        }

        return $data[$collectionName];
    }

    /**
     * Обновляет и возвращает объект.
     * @param ICmsObject $object
     * @param array $data
     * @throws RuntimeException если невозможно сохранить объект
     * @return ICmsObject
     */
    protected function update(ICmsObject $object, array $data)
    {
        if (!isset($data[ICmsObject::FIELD_VERSION])) {
            throw new RuntimeException('Cannot save object. Object version is unknown');
        }

        $object->setVersion($data[ICmsObject::FIELD_VERSION]);

        foreach ($data as $propertyName => $value) {
            if ($object->hasProperty($propertyName)
                && !$object->getProperty($propertyName)->getIsReadOnly()
                && !is_array($value)

            ) {
                $object->setValue($propertyName, $value);
            }
        }

        $this->getObjectPersister()->commit();

        return $object;
    }

}
 