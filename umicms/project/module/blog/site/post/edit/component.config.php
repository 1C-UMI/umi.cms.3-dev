<?php
/**
 * This file is part of UMI.CMS.
 *
 * @link http://umi-cms.ru
 * @copyright Copyright (c) 2007-2014 Umisoft ltd. (http://umisoft.ru)
 * @license For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace umicms\project\module\blog\site\post\edit;

use umi\acl\IAclFactory;
use umi\route\IRouteFactory;
use umicms\hmvc\component\site\SiteComponent;

return [

    SiteComponent::OPTION_CLASS => 'umicms\hmvc\component\site\SiteComponent',
    SiteComponent::OPTION_CONTROLLERS => [
        'index' => __NAMESPACE__ . '\controller\EditController'
    ],
    SiteComponent::OPTION_WIDGET => [
        'editLink' => __NAMESPACE__ . '\widget\EditLinkWidget'
    ],
    SiteComponent::OPTION_VIEW => [
        'directories' => ['module/blog/post/edit']
    ],
    SiteComponent::OPTION_ACL => [
        IAclFactory::OPTION_ROLES => [
            'moderator' => []
        ],
        IAclFactory::OPTION_RESOURCES => [
            'model:blogPost'
        ],
        IAclFactory::OPTION_RULES => [
            'moderator' => [
                'controller:index' => [],
                'widget:editLink' => [],
                'model:blogPost' => []
            ]
        ]
    ],
    SiteComponent::OPTION_ROUTES => [
        'index' => [
            'type' => IRouteFactory::ROUTE_SIMPLE,
            'route'    => '/{id:integer}',
            'defaults' => [
                'controller' => 'index'
            ]
        ]
    ]
];