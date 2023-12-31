<?php

use umi\hmvc\component\IComponent;
use umi\route\IRouteFactory;

return [

    IComponent::OPTION_CONTROLLERS => [
        'install' =>   'project\install\controller\InstallController'
    ],

    IComponent::OPTION_ROUTES => [
        'install' => [
            'type' => IRouteFactory::ROUTE_FIXED,
            'priority' => 0,
            'route' => '/installProject',
            'defaults' => [
                'controller' => 'install'
            ]
        ]
    ]

];