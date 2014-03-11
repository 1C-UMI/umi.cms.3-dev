<?php
/**
 * UMI.Framework (http://umi-framework.ru/)
 * @link      http://github.com/Umisoft/framework for the canonical source repository
 * @copyright Copyright (c) 2007-2013 Umisoft ltd. (http://umisoft.ru/)
 * @license   http://umi-framework.ru/license/bsd-3 BSD-3 License
 */

namespace umicms\project\module\structure\admin\page;

use umi\route\IRouteFactory;
use umicms\project\admin\component\AdminComponent;

return [

    AdminComponent::OPTION_CLASS => 'umicms\project\admin\component\AdminComponent',

    AdminComponent::OPTION_SETTINGS => [
        'controls' => [
            [
                'name' => 'tree',
                'displayName' => 'Структура сайта',
            ],
            [
                'name' => 'filter',
                'displayName' => 'Фильтр'
            ],
            [
                'name' => 'children',
                'displayName' => 'Дочерние страницы'
            ],
            [
                'name' => 'form',
                'displayName' => 'Редактирование'
            ]
        ],
        'layout' => [
            'emptyContext' => [
                'tree' => [
                    'controls' => ['tree']
                ],
                'contents' => [
                    'controls' => ['filter', 'children']
                ]
            ],
            'selectedContext' => [
                'tree' => [
                    'controls' => ['tree']
                ],
                'contents' => [
                    'controls' => ['form', 'children']
                ]
            ]
        ]
     ],

    AdminComponent::OPTION_CONTROLLERS => [
        'list' => __NAMESPACE__ . '\controller\ListController',
        'item' => __NAMESPACE__ . '\controller\ItemController',
        'action' => __NAMESPACE__ . '\controller\ActionController'
    ],

    AdminComponent::OPTION_ROUTES      => [

        'settings' => [
            'type'     => IRouteFactory::ROUTE_FIXED,
            'route'    => '/settings',
            'defaults' => [
                'action' => 'settings',
                'controller' => 'action'
            ],
        ],

        'item' => [
            'type'     => IRouteFactory::ROUTE_SIMPLE,
            'route'    => '/{collection}/{id:integer}',
            'defaults' => [
                'collection' => 'structure',
                'controller' => 'item'
            ],
            'subroutes' => [
                'action' => [
                    'type'     => IRouteFactory::ROUTE_SIMPLE,
                    'route'    => '/{action}',
                    'defaults' => [
                        'controller' => 'action'
                    ]
                ]
            ]
        ],
        'list' => [
            'type'     => IRouteFactory::ROUTE_SIMPLE,
            'route' => '/{collection}',
            'defaults' => [
                'collection' => 'structure',
                'controller' => 'list'
            ],
            'subroutes' => [
                'action' => [
                    'type'     => IRouteFactory::ROUTE_SIMPLE,
                    'route'    => '/{action}',
                    'defaults' => [
                        'controller' => 'action'
                    ]
                ]
            ]
        ]
    ]
];