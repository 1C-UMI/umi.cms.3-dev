<?php
/**
 * UMI.Framework (http://umi-framework.ru/)
 * @link      http://github.com/Umisoft/framework for the canonical source repository
 * @copyright Copyright (c) 2007-2013 Umisoft ltd. (http://umisoft.ru/)
 * @license   http://umi-framework.ru/license/bsd-3 BSD-3 License
 */

namespace umicms\project\module\blog\site\post;

use umi\acl\IAclFactory;
use umi\route\IRouteFactory;
use umicms\project\site\component\DefaultSitePageComponent;

return [

    DefaultSitePageComponent::OPTION_CLASS => 'umicms\project\site\component\DefaultSitePageComponent',
    DefaultSitePageComponent::OPTION_COLLECTION_NAME => 'blogPost',
    DefaultSitePageComponent::OPTION_CONTROLLERS => [
        'add' => __NAMESPACE__ . '\controller\BlogAddPostController',
        'edit' => __NAMESPACE__ . '\controller\BlogEditPostController',
        'unPublish' => __NAMESPACE__ . '\controller\BlogDraftPostController',
        'rss' => __NAMESPACE__ . '\controller\BlogPostRssController'
    ],
    DefaultSitePageComponent::OPTION_WIDGET => [
        'view' => __NAMESPACE__ . '\widget\BlogPostWidget',
        'list' => __NAMESPACE__ . '\widget\BlogPostListWidget',
        'rss' => __NAMESPACE__ . '\widget\BlogPostListRssUrlWidget',
        'addPost' => __NAMESPACE__ . '\widget\BlogAddPostWidget',
        'editPost' => __NAMESPACE__ . '\widget\BlogEditPostWidget',
        'unPublish' => __NAMESPACE__ . '\widget\BlogDraftPostWidget',
        'editPostLink' => __NAMESPACE__ . '\widget\BlogEditPostUrlWidget'
    ],
    DefaultSitePageComponent::OPTION_VIEW => [
        'directories' => __DIR__ . '/template/php'
    ],
    DefaultSitePageComponent::OPTION_ACL => [
        IAclFactory::OPTION_ROLES => [
            'viewer' => [],
            'rssViewer' => []
        ],
        IAclFactory::OPTION_RESOURCES => [
            'controller:rss',
            'widget:view',
            'widget:list',
            'widget:rss'
        ],
        IAclFactory::OPTION_RULES => [
            'viewer' => [
                'widget:view' => [],
                'widget:list' => []
            ],
            'rssViewer' => [
                'controller:rss' => [],
                'widget:rss' => []
            ]
        ]
    ],
    DefaultSitePageComponent::OPTION_ROUTES => [
        'rss' => [
            'type' => IRouteFactory::ROUTE_FIXED,
            'route' => '/rss',
            'defaults' => [
                'controller' => 'rss'
            ]
        ],
        'add' => [
            'type'     => IRouteFactory::ROUTE_FIXED,
            'route' => '/add',
            'defaults' => [
                'controller' => 'add'
            ]
        ],
        'unPublish' => [
            'type'     => IRouteFactory::ROUTE_FIXED,
            'route' => '/unPublish',
            'defaults' => [
                'controller' => 'unPublish'
            ]
        ],
        'edit' => [
            'type'     => IRouteFactory::ROUTE_SIMPLE,
            'route' => '/edit/{id:integer}',
            'defaults' => [
                'controller' => 'edit'
            ]
        ]
    ]
];