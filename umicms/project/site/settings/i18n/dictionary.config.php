<?php

use umicms\project\site\SiteApplication;

return [
    'en-US' => [
        'component:site:displayName' => 'Site settings',

        SiteApplication::SETTING_DEFAULT_DESCRIPTION => 'Default meta description tag',
        SiteApplication::SETTING_DEFAULT_KEYWORDS => 'Default meta keywords tag',
        SiteApplication::SETTING_DEFAULT_TITLE => 'Default title tag',
        SiteApplication::SETTING_TITLE_PREFIX => 'Default title prefix',

        SiteApplication::SETTING_DEFAULT_PAGE_GUID => 'Index page',
        SiteApplication::SETTING_DEFAULT_LAYOUT_GUID => 'Default layout',

        SiteApplication::SETTING_TEMPLATE_DIRECTORY => 'Template directory',
        SiteApplication::SETTING_COMMON_TEMPLATE_DIRECTORY => 'Common template directory',
        SiteApplication::SETTING_DEFAULT_TEMPLATE_EXTENSION => 'Default template extension',
        SiteApplication::SETTING_DEFAULT_TEMPLATING_ENGINE_TYPE => 'Default templating engine type',

        'role:commonExecutor:displayName' => 'Common',
        'role:templatingExecutor:displayName' => 'Templating',
        'role:slugifyExecutor:displayName' => 'Slug formation',
        'role:licenseExecutor:displayName' => 'License',
        'role:mailExecutor:displayName' => 'Mail',
    ],

    'ru-RU' => [

        'component:site:displayName' => 'Настройки сайта',

        SiteApplication::SETTING_DEFAULT_DESCRIPTION => 'Метатег description по умолчанию',
        SiteApplication::SETTING_DEFAULT_KEYWORDS => 'Метатег keywords по умолчанию',
        SiteApplication::SETTING_DEFAULT_TITLE => 'Метатег title по умолчанию',
        SiteApplication::SETTING_TITLE_PREFIX => 'Префикс для метатега title',

        SiteApplication::SETTING_DEFAULT_PAGE_GUID => 'Главная страница',
        SiteApplication::SETTING_DEFAULT_LAYOUT_GUID => 'Шаблон страниц по умолчанию',

        SiteApplication::SETTING_TEMPLATE_DIRECTORY => 'Директория с шаблонами',
        SiteApplication::SETTING_COMMON_TEMPLATE_DIRECTORY => 'Директория с общими шаблонами',
        SiteApplication::SETTING_DEFAULT_TEMPLATE_EXTENSION => 'Расширение файлов шаблонов по умолчанию',
        SiteApplication::SETTING_DEFAULT_TEMPLATING_ENGINE_TYPE => 'Тип шаблонизатора по умолчанию',

        'role:commonExecutor:displayName' => 'Общие',
        'role:templatingExecutor:displayName' => 'Шаблонизация',
        'role:slugifyExecutor:displayName' => 'Формирование псевдостатического адреса',
        'role:licenseExecutor:displayName' => 'Лицензирование',
        'role:mailExecutor:displayName' => 'Почта',
    ]
];
 