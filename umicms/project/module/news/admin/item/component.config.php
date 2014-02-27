<?php
/**
 * UMI.Framework (http://umi-framework.ru/)
 * @link      http://github.com/Umisoft/framework for the canonical source repository
 * @copyright Copyright (c) 2007-2013 Umisoft ltd. (http://umisoft.ru/)
 * @license   http://umi-framework.ru/license/bsd-3 BSD-3 License
 */

namespace umicms\project\module\news\admin\item;

use umi\route\IRouteFactory;
use umicms\base\component\AdminComponent;

return [

    AdminComponent::OPTION_CLASS => 'umicms\base\component\AdminComponent',

    AdminComponent::OPTION_SETTINGS => [

    ],

    AdminComponent::OPTION_CONTROLLERS => [
        'list' => __NAMESPACE__ . '\controller\ListController',
        'item' => __NAMESPACE__ . '\controller\ItemController',
        'action' => __NAMESPACE__ . '\controller\ActionController',
    ],

    AdminComponent::OPTION_ROUTES      => [

        'list' => [
            'type'     => IRouteFactory::ROUTE_SIMPLE,
            'route'    => '/list',
            'defaults' => [
                'controller' => 'list'
            ]
        ],

        'item' => [
            'type'     => IRouteFactory::ROUTE_SIMPLE,
            'route'    => '/{guid:guid}',
            'defaults' => [
                'controller' => 'item'
            ]
        ],

        'itemAction' => [
            'type'     => IRouteFactory::ROUTE_SIMPLE,
            'route'    => '/{guid:guid}/{action}',
            'defaults' => [
                'controller' => 'action'
            ]
        ],

        'action' => [
            'type'     => IRouteFactory::ROUTE_SIMPLE,
            'route'    => '/{action}',
            'defaults' => [
                'controller' => 'action'
            ]
        ]
    ]
];