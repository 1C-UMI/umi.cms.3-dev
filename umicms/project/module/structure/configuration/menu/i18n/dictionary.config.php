<?php
/**
 * UMI.Framework (http://umi-framework.ru/)
 *
 * @link http://github.com/Umisoft/framework for the canonical source repository
 * @copyright Copyright (c) 2007-2013 Umisoft ltd. (http://umisoft.ru/)
 * @license http://umi-framework.ru/license/bsd-3 BSD-3 License
 */

use umicms\project\module\structure\model\object\MenuExternalItem;
use umicms\project\module\structure\model\object\MenuInternalItem;

return [
    'en-US' => [

        MenuInternalItem::FIELD_PAGE_RELATION => 'Page link',

        'type:menu:displayName' => 'Menu',
        'type:internalItem:displayName' => 'Internal link',
        'type:externalItem:displayName' => 'External link',
        MenuInternalItem::FIELD_NAME => 'Name menu',
        'settings' => 'Settings',
        MenuExternalItem::FIELD_RESOURCE_URL => 'Resource URL'
    ],

    'ru-RU' => [

        MenuInternalItem::FIELD_PAGE_RELATION => 'Ссылка на страницу',

        'type:menu:displayName' => 'Меню',
        'type:internalItem:displayName' => 'Внутренняя ссылка',
        'type:externalItem:displayName' => 'Внешняя ссылка',
        MenuInternalItem::FIELD_NAME => 'Имя меню',
        'settings' => 'Настройки',
        MenuExternalItem::FIELD_RESOURCE_URL => 'Внешняя ссылка'
    ]
];
 