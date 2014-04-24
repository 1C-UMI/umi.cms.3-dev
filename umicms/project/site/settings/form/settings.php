<?php
/**
 * UMI.Framework (http://umi-framework.ru/)
 *
 * @link http://github.com/Umisoft/framework for the canonical source repository
 * @copyright Copyright (c) 2007-2013 Umisoft ltd. (http://umisoft.ru/)
 * @license http://umi-framework.ru/license/bsd-3 BSD-3 License
 */

use umi\form\element\Select;
use umi\form\element\Text;
use umicms\project\site\SiteApplication;

return [
    'options' => [
        'dictionaries' => [
            'project.admin.settings.site'
        ]
    ],

    'elements' => [
        SiteApplication::SETTING_URL_POSTFIX => [
            'type' => Text::TYPE_NAME,
            'label' => SiteApplication::SETTING_URL_POSTFIX,
            'options' => [
                'dataSource' => SiteApplication::SETTING_URL_POSTFIX
            ]
        ],
        SiteApplication::SETTING_DEFAULT_DESCRIPTION => [
            'type' => Text::TYPE_NAME,
            'label' => SiteApplication::SETTING_DEFAULT_DESCRIPTION,
            'options' => [
                'dataSource' => SiteApplication::SETTING_DEFAULT_DESCRIPTION
            ]
        ],
        SiteApplication::SETTING_DEFAULT_KEYWORDS => [
            'type' => Text::TYPE_NAME,
            'label' => SiteApplication::SETTING_DEFAULT_KEYWORDS,
            'options' => [
                'dataSource' => SiteApplication::SETTING_DEFAULT_KEYWORDS
            ]
        ],
        SiteApplication::SETTING_DEFAULT_TITLE => [
            'type' => Text::TYPE_NAME,
            'label' => SiteApplication::SETTING_DEFAULT_TITLE,
            'options' => [
                'dataSource' => SiteApplication::SETTING_DEFAULT_TITLE
            ]
        ],
        SiteApplication::SETTING_TITLE_PREFIX => [
            'type' => Text::TYPE_NAME,
            'label' => SiteApplication::SETTING_TITLE_PREFIX,
            'options' => [
                'dataSource' => SiteApplication::SETTING_TITLE_PREFIX
            ]
        ],
        SiteApplication::SETTING_DEFAULT_PAGE_GUID => [
            'type' => Text::TYPE_NAME,
            'label' => SiteApplication::SETTING_DEFAULT_PAGE_GUID,
            'options' => [
                'dataSource' => SiteApplication::SETTING_DEFAULT_PAGE_GUID
            ]
        ],
        SiteApplication::SETTING_DEFAULT_LAYOUT_GUID => [
            'type' => Text::TYPE_NAME,
            'label' => SiteApplication::SETTING_DEFAULT_LAYOUT_GUID,
            'options' => [
                'dataSource' => SiteApplication::SETTING_DEFAULT_LAYOUT_GUID
            ]
        ],
        SiteApplication::SETTING_DEFAULT_TEMPLATING_ENGINE_TYPE => [
            'type' => Select::TYPE_NAME,
            'label' => SiteApplication::SETTING_DEFAULT_TEMPLATING_ENGINE_TYPE,
            'options' => [
                'dataSource' => SiteApplication::SETTING_DEFAULT_TEMPLATING_ENGINE_TYPE,
                'choices' => [
                    'php' => 'php',
                    'twig' => 'twig'
                ]
            ]
        ],
        SiteApplication::SETTING_DEFAULT_TEMPLATE_EXTENSION => [
            'type' => Text::TYPE_NAME,
            'label' => SiteApplication::SETTING_DEFAULT_TEMPLATE_EXTENSION,
            'options' => [
                'dataSource' => SiteApplication::SETTING_DEFAULT_TEMPLATE_EXTENSION
            ]
        ],
        SiteApplication::SETTING_COMMON_TEMPLATE_DIRECTORY => [
            'type' => Text::TYPE_NAME,
            'label' => SiteApplication::SETTING_COMMON_TEMPLATE_DIRECTORY,
            'options' => [
                'dataSource' => SiteApplication::SETTING_COMMON_TEMPLATE_DIRECTORY
            ]
        ],
    ]
];