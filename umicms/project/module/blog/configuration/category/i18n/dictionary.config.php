<?php
/**
 * UMI.Framework (http://umi-framework.ru/)
 *
 * @link http://github.com/Umisoft/framework for the canonical source repository
 * @copyright Copyright (c) 2007-2013 Umisoft ltd. (http://umisoft.ru/)
 * @license http://umi-framework.ru/license/bsd-3 BSD-3 License
 */

use umicms\project\module\blog\api\object\BlogCategory;

return [
        'en-US' => [
            BlogCategory::FIELD_POSTS => 'Posts',
            'type:base:displayName' => 'Blog category'
        ],

        'ru-RU' => [
            BlogCategory::FIELD_POSTS => 'Посты',
            'type:base:displayName' => 'Категория блога'
        ]
    ];