<?php
/**
 * This file is part of UMI.CMS.
 *
 * @link http://umi-cms.ru
 * @copyright Copyright (c) 2007-2014 Umisoft ltd. (http://umisoft.ru)
 * @license For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace umicms\project\module\search\site;

use umi\acl\IAclFactory;
use umi\route\IRouteFactory;
use umicms\hmvc\component\site\SiteComponent;

return [

    SiteComponent::OPTION_CLASS => 'umicms\hmvc\component\site\SiteComponent',

    SiteComponent::OPTION_CONTROLLERS => [
        'search' => 'umicms\project\module\search\site\controller\SearchController'
    ],
    SiteComponent::OPTION_WIDGET => [
        'form' => __NAMESPACE__ . '\widget\FormWidget',
        'results' => __NAMESPACE__ . '\widget\ResultsWidget',
        'fragments' => __NAMESPACE__ . '\widget\FragmentsWidget',
        'highlight' => __NAMESPACE__ . '\widget\HighlightWidget',
    ],

    SiteComponent::OPTION_FORMS => [
        'search' => '{#lazy:~/project/module/search/site/form/search.config.php}'
    ],

    SiteComponent::OPTION_ACL => [
        IAclFactory::OPTION_ROLES => [
            'viewer' => [],
        ],
        IAclFactory::OPTION_RULES => [
            'viewer' => [
                'controller:search' => [],
                'widget:form' => [],
                'widget:results' => [],
                'widget:fragments' => [],
                'widget:highlight' => []
            ]
        ]
    ],

    SiteComponent::OPTION_VIEW        => [
        'directories' => ['module/search'],
    ],

    SiteComponent::OPTION_ROUTES      => [
        'search' => [
            'type' => IRouteFactory::ROUTE_FIXED,
            'defaults' => [
                'controller' => 'search'
            ]
        ]
    ]
];
