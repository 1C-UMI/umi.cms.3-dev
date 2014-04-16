<?php
/**
 * UMI.Framework (http://umi-framework.ru/)
 *
 * @link      http://github.com/Umisoft/framework for the canonical source repository
 * @copyright Copyright (c) 2007-2013 Umisoft ltd. (http://umisoft.ru/)
 * @license   http://umi-framework.ru/license/bsd-3 BSD-3 License
 */

namespace umicms\project\module\blog\admin\post\controller;

use umicms\project\admin\api\controller\BaseRestListController;
use umicms\project\module\blog\api\BlogModule;

/**
 * Контроллер действий над списком.
 */
class ListController extends BaseRestListController
{

    /**
     * @var BlogModule $api
     */
    protected $api;

    /**
     * Конструктор.
     * @param BlogModule $api
     */
    public function __construct(BlogModule $api)
    {
        $this->api = $api;
    }

    /**
     * {@inheritdoc}
     */
    protected function getCollectionName()
    {
        return $this->api->post()->getName();
    }

    /**
     * {@inheritdoc}
     */
    protected function getList()
    {
        return  $this->api->post()->select(false);
    }

    /**
     * {@inheritdoc}
     */
    protected function create(array $data)
    {
        $object = $this->api->post()->add();

        // TODO: forms
        if (isset($data['category'])) {
            $rubric = $this->api->category()->getById($data['category']);
            $data['category'] = $rubric;
        }
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
 