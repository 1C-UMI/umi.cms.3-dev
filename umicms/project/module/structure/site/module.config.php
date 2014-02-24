<?php
/**
 * UMI.Framework (http://umi-framework.ru/)
 * @link      http://github.com/Umisoft/framework for the canonical source repository
 * @copyright Copyright (c) 2007-2013 Umisoft ltd. (http://umisoft.ru/)
 * @license   http://umi-framework.ru/license/bsd-3 BSD-3 License
 */

namespace umicms\project\module\structure\site;

use umi\hmvc\component\IComponent;
use umi\route\IRouteFactory;

return [
    IComponent::OPTION_CONTROLLERS => [
        'static' => 'umicms\project\module\structure\site\controller\StaticPageController',
    ],
    IComponent::OPTION_VIEW        => [
        'type'      => 'php',
        'extension' => 'phtml',
        'directory' => __DIR__ . '/template/php',
    ],
    IComponent::OPTION_ROUTES      => [
        'static' => [
            'type'     => IRouteFactory::ROUTE_FIXED,
            'defaults' => [
                'controller' => 'static'
            ]
        ]
    ]
];