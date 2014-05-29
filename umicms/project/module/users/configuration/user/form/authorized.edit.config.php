<?php
/**
 * UMI.Framework (http://umi-framework.ru/)
 *
 * @link http://github.com/Umisoft/framework for the canonical source repository
 * @copyright Copyright (c) 2007-2013 Umisoft ltd. (http://umisoft.ru/)
 * @license http://umi-framework.ru/license/bsd-3 BSD-3 License
 */

use umi\form\element\html5\DateTime;
use umi\form\element\MultiSelect;
use umi\form\element\Password;
use umi\form\element\Text;
use umi\form\fieldset\FieldSet;
use umicms\project\module\users\api\object\AuthorizedUser;

return [

    'options' => [
        'dictionaries' => [
            'collection.user', 'collection', 'form'
        ]
    ],

    'elements' => [

        'common' => [
            'type' => FieldSet::TYPE_NAME,
            'label' => 'common',
            'elements' => [
                AuthorizedUser::FIELD_DISPLAY_NAME => [
                    'type' => Text::TYPE_NAME,
                    'label' => AuthorizedUser::FIELD_DISPLAY_NAME,
                    'options' => [
                        'dataSource' => AuthorizedUser::FIELD_DISPLAY_NAME
                    ],
                ],
                AuthorizedUser::FIELD_LOGIN => [
                    'type' => Text::TYPE_NAME,
                    'label' => AuthorizedUser::FIELD_LOGIN,
                    'options' => [
                        'dataSource' => AuthorizedUser::FIELD_LOGIN
                    ],
                ],
                AuthorizedUser::FIELD_PASSWORD => [
                    'type' => Password::TYPE_NAME,
                    'label' => AuthorizedUser::FIELD_PASSWORD,
                    'options' => [
                        'dataSource' => AuthorizedUser::FIELD_PASSWORD
                    ],
                ],
                AuthorizedUser::FIELD_EMAIL => [
                    'type' => Text::TYPE_NAME,
                    'label' => AuthorizedUser::FIELD_EMAIL,
                    'options' => [
                        'dataSource' => AuthorizedUser::FIELD_EMAIL
                    ],
                ],
                AuthorizedUser::FIELD_REGISTRATION_DATE => [
                    'type' => DateTime::TYPE_NAME,
                    'label' => AuthorizedUser::FIELD_REGISTRATION_DATE,
                    'options' => [
                        'dataSource' => AuthorizedUser::FIELD_REGISTRATION_DATE
                    ]
                ],
                AuthorizedUser::FIELD_GROUPS => [
                    'type' => MultiSelect::TYPE_NAME,
                    'label' => AuthorizedUser::FIELD_GROUPS,
                    'options' => [
                        'lazy' => true,
                        'dataSource' => AuthorizedUser::FIELD_GROUPS
                    ]
                ],
            ]
        ],
        'personal' => [
            'type' => FieldSet::TYPE_NAME,
            'label' => 'personal',
            'elements' => [
                AuthorizedUser::FIELD_FIRST_NAME => [
                    'type' => Text::TYPE_NAME,
                    'label' => AuthorizedUser::FIELD_FIRST_NAME,
                    'options' => [
                        'dataSource' => AuthorizedUser::FIELD_FIRST_NAME
                    ],
                ],
                AuthorizedUser::FIELD_MIDDLE_NAME => [
                    'type' => Text::TYPE_NAME,
                    'label' => AuthorizedUser::FIELD_MIDDLE_NAME,
                    'options' => [
                        'dataSource' => AuthorizedUser::FIELD_MIDDLE_NAME
                    ],
                ],
                AuthorizedUser::FIELD_LAST_NAME => [
                    'type' => Text::TYPE_NAME,
                    'label' => AuthorizedUser::FIELD_LAST_NAME,
                    'options' => [
                        'dataSource' => AuthorizedUser::FIELD_LAST_NAME
                    ],
                ],
            ]
        ]
    ]
];