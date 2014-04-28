<?php

return [

    'default-xslt' => [
        'locales' => [
            'site' => [
                'ru-RU' => [
                    'route' => 'default'
                ],
                'en-US' => [
                    'route' => 'en'
                ]
            ],
            'admin' => [
                'ru-RU' => [],
                'en-US' => []
            ]
        ],

        'routes' => [
            'en-US' => [
                'type' => 'ProjectHostRoute',
                'defaults' => [
                    'prefix' => '/xslt/en',
                    'locale' => 'en-US'
                ]
            ],

            'default' => [
                'type' => 'ProjectHostRoute',
                'defaults' => [
                    'prefix' => '/xslt',
                    'locale' => 'ru-RU'
                ]
            ]
        ],

        'destination' => '~/lite-xslt',
        'config' => '~/project/project.config.php',
        'defaultLocale' => 'ru-RU'
    ],

    'default-twig' => [
        'locales' => [
            'site' => [
                'ru-RU' => [
                    'route' => 'default'
                ],
                'en-US' => [
                    'route' => 'en'
                ]
            ],
            'admin' => [
                'ru-RU' => [],
                'en-US' => []
            ]
        ],

        'routes' => [
            'en-US' => [
                'type' => 'ProjectHostRoute',
                'defaults' => [
                    'prefix' => '/twig/en',
                    'locale' => 'en-US'
                ]
            ],

            'default' => [
                'type' => 'ProjectHostRoute',
                'defaults' => [
                    'prefix' => '/twig',
                    'locale' => 'ru-RU'
                ]
            ]
        ],

        'destination' => '~/lite-twig',
        'config' => '~/project/project.config.php',
        'defaultLocale' => 'ru-RU'
    ],

    'default' => [

        'locales' => [
            'site' => [
                'ru-RU' => [
                    'route' => 'default'
                ],
                'en-US' => [
                    'route' => 'en'
                ]
            ],
            'admin' => [
                'ru-RU' => [],
                'en-US' => []
            ]
        ],

        'routes' => [
            'en-US' => [
                'type' => 'ProjectHostRoute',
                'defaults' => [
                    'prefix' => '/en',
                    'locale' => 'en-US'
                ]
            ],

            'default' => [
                'type' => 'ProjectHostRoute',
                'defaults' => [
                    'locale' => 'ru-RU'
                ]
            ]
        ],

        'destination' => '~/lite-php',
        'config' => '~/project/project.config.php',
        'defaultLocale' => 'ru-RU'
    ]

];