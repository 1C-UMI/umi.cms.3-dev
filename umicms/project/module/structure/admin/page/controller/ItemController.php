<?php
/**
 * UMI.Framework (http://umi-framework.ru/)
 *
 * @link      http://github.com/Umisoft/framework for the canonical source repository
 * @copyright Copyright (c) 2007-2013 Umisoft ltd. (http://umisoft.ru/)
 * @license   http://umi-framework.ru/license/bsd-3 BSD-3 License
 */

namespace umicms\project\module\structure\admin\page\controller;

use umicms\orm\object\behaviour\IRecyclableObject;
use umicms\orm\object\ICmsObject;
use umicms\project\admin\api\controller\BaseRestItemController;
use umicms\project\module\structure\api\StructureModule;
use umicms\project\module\structure\api\object\StructureElement;

/**
 * Контроллер Read-Update-Delete операций над объектом.
 */
class ItemController extends BaseRestItemController
{
    /**
     * @var StructureModule $api
     */
    protected $api;

    /**
     * Конструктор.
     * @param StructureModule $api
     */
    public function __construct(StructureModule $api)
    {
        $this->api = $api;
    }


    /**
     * {@inheritdoc}
     */
    protected function get()
    {
        $id = $this->getRouteVar('id');
        return $this->api->element()->getById($id);
    }

    /**
     * {@inheritdoc}
     */
    protected function delete(ICmsObject $object)
    {
        if ($object instanceof StructureElement) {
            $this->api->element()->delete($object);
            $this->getObjectPersister()->commit();
        }
    }

    /**
     * @param IRecyclableObject $object
     */
    public function actionTrash(IRecyclableObject $object)
    {
        $this->api->element()->trash($object);
        $this->getObjectPersister()->commit();
    }

    /**
     * @param IRecyclableObject $object
     */
    public function actionUntrash(IRecyclableObject $object)
    {
        $this->api->element()->untrash($object);
        $this->getObjectPersister()->commit();
    }

    /**
     *
     */
    public function actionEmptyTrash()
    {
        $this->api->element()->emptyTrash();
    }
}
