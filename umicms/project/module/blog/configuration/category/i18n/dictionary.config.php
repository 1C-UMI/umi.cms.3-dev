<?php
/**
 * This file is part of UMI.CMS.
 *
 * @link http://umi-cms.ru
 * @copyright Copyright (c) 2007-2014 Umisoft ltd. (http://umisoft.ru)
 * @license For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use umicms\project\module\blog\model\object\BlogCategory;

return [
        'en-US' => [
            'collection:blogCategory:displayName' => 'Blog categories',

            BlogCategory::FIELD_POSTS => 'Posts',
            'type:base:displayName' => 'Blog category'
        ],

        'ru-RU' => [
            'collection:blogCategory:displayName' => 'Категории блогов',

            BlogCategory::FIELD_POSTS => 'Посты',
            'type:base:displayName' => 'Категория блога'
        ]
    ];