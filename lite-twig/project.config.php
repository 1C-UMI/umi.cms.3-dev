<?php

use umi\dbal\toolbox\DbalTools;
use umi\hmvc\component\IComponent;
use umi\i18n\toolbox\I18nTools;
use umi\route\IRouteFactory;
use umicms\Bootstrap;

return [
    Bootstrap::OPTION_TOOLS_SETTINGS => [
        DbalTools::NAME => [
            'servers' => [
                [
                    'id'     => 'master',
                    'type'   => 'master',
                    'connection' => [
                        'type' => DbalTools::CONNECTION_TYPE_PDOMYSQL,
                        'options' => [
                            'dbname' => 'umicms3',
                            'user' => 'pma',
                            'password' => 'pma',
                            'host' => 'localhost',
                            'charset' => 'utf8'
                        ]
                    ]
                ]
            ]
        ],
        I18nTools::NAME => [
            'defaultLocale' => 'ru-RU'
        ]
    ],

    IComponent::OPTION_CONTROLLERS => [
        'install' =>   'demohunt\controller\InstallController'
    ],

    IComponent::OPTION_ROUTES => [
        'install' => [
            'type' => IRouteFactory::ROUTE_FIXED,
            'priority' => 0,
            'route' => '/install',
            'defaults' => [
                'controller' => 'install'
            ]
        ]
    ]

];