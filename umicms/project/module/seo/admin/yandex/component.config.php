<?php
/**
 * This file is part of UMI.CMS.
 *
 * @link http://umi-cms.ru
 * @copyright Copyright (c) 2007-2014 Umisoft ltd. (http://umisoft.ru)
 * @license For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace umicms\project\module\seo\admin\yandex;

use umi\route\IRouteFactory;
use umicms\hmvc\component\admin\AdminComponent;

return [

    AdminComponent::OPTION_CLASS => 'umicms\hmvc\component\admin\AdminComponent',

    AdminComponent::OPTION_MODELS => [
        'umicms\project\module\seo\model\YandexModel'
    ],
    AdminComponent::OPTION_SETTINGS => '{#lazy:~/project/module/seo/configuration/yandex/model.settings.config.php}',

    AdminComponent::OPTION_CONTROLLERS => [
        AdminComponent::INTERFACE_LAYOUT_CONTROLLER => __NAMESPACE__ . '\controller\LayoutController',
        AdminComponent::ACTION_CONTROLLER => __NAMESPACE__ . '\controller\ActionController'
    ],

    AdminComponent::OPTION_QUERY_ACTIONS => [
        'hosts', 'host', 'indexed', 'links', 'tops'
    ],

    AdminComponent::OPTION_ROUTES => [
        'action' => [
            'type' => IRouteFactory::ROUTE_SIMPLE,
            'route' => '/action/{action}',
            'defaults' => [
                'controller' => 'action',
            ],
        ],
        'layout' => [
            'type' => IRouteFactory::ROUTE_FIXED,
            'defaults' => [
                'controller' => AdminComponent::INTERFACE_LAYOUT_CONTROLLER
            ]
        ]
    ]
];
