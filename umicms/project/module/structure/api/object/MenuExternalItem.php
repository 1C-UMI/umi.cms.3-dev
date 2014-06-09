<?php
/**
 * UMI.Framework (http://umi-framework.ru/)
 *
 * @link      http://github.com/Umisoft/framework for the canonical source repository
 * @copyright Copyright (c) 2007-2013 Umisoft ltd. (http://umisoft.ru/)
 * @license   http://umi-framework.ru/license/bsd-3 BSD-3 License
 */

namespace umicms\project\module\structure\api\object;

use umicms\orm\object\TCmsObject;

/**
 * Класс описывающий пункт меню на сторонний ресурс.
 *
 * @property string $urlResource ссылка на сторонний ресурс
 */
class MenuExternalItem extends MenuItem
{
    /**
     * Тип объекта
     */
    const TYPE = 'externalItem';
    /**
     * Тип объекта
     * @var string $itemType
     */
    protected $itemType = 'externalItem';
    /**
     * Имя поля для хранения ссылки на сторонний ресурс
     */
    const FIELD_URL_RESOURCE = 'urlResource';

    /**
     * Возвращает ссылку на сторонний ресурс.
     * @return string
     */
    public function getItemUrl()
    {
        return $this->urlResource;
    }
}
 