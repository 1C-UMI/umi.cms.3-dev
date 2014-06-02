<?php
/**
 * This file is part of UMI.CMS.
 *
 * @link http://umi-cms.ru
 * @copyright Copyright (c) 2007-2014 Umisoft ltd. (http://umisoft.ru)
 * @license For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace umicms\project\module\blog\admin;

use umi\acl\IAclFactory;
use umi\route\IRouteFactory;
use umicms\project\admin\component\AdminComponent;

return [

    AdminComponent::OPTION_CLASS => 'umicms\project\admin\component\AdminComponent',

    AdminComponent::OPTION_COMPONENTS => [
        'category' => '{#lazy:~/project/module/blog/admin/category/component.config.php}',
        'post' => '{#lazy:~/project/module/blog/admin/post/component.config.php}',
        'author' => '{#lazy:~/project/module/blog/admin/author/component.config.php}',
        'comment' => '{#lazy:~/project/module/blog/admin/comment/component.config.php}',
        'tag' => '{#lazy:~/project/module/blog/admin/tag/component.config.php}',
        'rss' => '{#lazy:~/project/module/blog/admin/rss/component.config.php}'
    ],

    AdminComponent::OPTION_ACL => [
        AdminComponent::OPTION_ACL => [

            IAclFactory::OPTION_ROLES => [
                'categoryEditor' => [],
                'postEditor' => [],
                'commentEditor' => [],
                'authorEditor' => [],
                'tagEditor' => [],
                'rssEditor' => []
            ],
            IAclFactory::OPTION_RESOURCES => [
                'component:category',
                'component:post',
                'component:comment',
                'component:author',
                'component:tag',
                'component:rss'
            ],
            IAclFactory::OPTION_RULES => [
                'categoryEditor' => ['component:category' => []],
                'postEditor' => ['component:post' => []],
                'commentEditor' => ['component:comment' => []],
                'authorEditor' => ['component:author' => []],
                'tagEditor' => ['component:tag' => []],
                'rssEditor' => ['component:rss' => []]
            ]
        ],
    ],

    AdminComponent::OPTION_ROUTES      => [
        'component' => [
            'type' => IRouteFactory::ROUTE_SIMPLE,
            'route' => '/{component}'
        ]
    ]
];