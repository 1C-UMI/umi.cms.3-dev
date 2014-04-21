<?php
/**
 * UMI.Framework (http://umi-framework.ru/)
 *
 * @link http://github.com/Umisoft/framework for the canonical source repository
 * @copyright Copyright (c) 2007-2013 Umisoft ltd. (http://umisoft.ru/)
 * @license http://umi-framework.ru/license/bsd-3 BSD-3 License
 */

use umi\form\element\Checkbox;
use umi\form\element\Select;
use umi\form\element\Text;
use umi\form\fieldset\FieldSet;
use umicms\form\element\Wysiwyg;
use umicms\project\module\blog\api\object\BlogAuthor;

return [

    'options' => [
        'dictionaries' => [
            'collection.blogAuthor', 'collection', 'form'
        ]
    ],
    'elements' => [

        'common' => [
            'type' => FieldSet::TYPE_NAME,
            'label' => 'common',
            'elements' => [
                BlogAuthor::FIELD_DISPLAY_NAME => [
                    'type' => Text::TYPE_NAME,
                    'label' => BlogAuthor::FIELD_DISPLAY_NAME,
                    'options' => [
                        'dataSource' => BlogAuthor::FIELD_DISPLAY_NAME
                    ],
                ],
                BlogAuthor::FIELD_PAGE_SLUG => [
                    'type' => Text::TYPE_NAME,
                    'label' => BlogAuthor::FIELD_PAGE_SLUG,
                    'options' => [
                        'dataSource' => BlogAuthor::FIELD_PAGE_SLUG
                    ],
                ],
                BlogAuthor::FIELD_ACTIVE => [
                    'type' => Checkbox::TYPE_NAME,
                    'label' => BlogAuthor::FIELD_ACTIVE,
                    'options' => [
                        'dataSource' => BlogAuthor::FIELD_ACTIVE
                    ],
                ]
            ]
        ],
        'contents' => [
            'type' => FieldSet::TYPE_NAME,
            'label' => 'contents',
            'elements' => [
                BlogAuthor::FIELD_PROFILE => [
                    'type' => Select::TYPE_NAME,
                    'label' => BlogAuthor::FIELD_PROFILE,
                    'options' => [
                        'dataSource' => BlogAuthor::FIELD_PROFILE
                    ],
                ],
                BlogAuthor::FIELD_PAGE_CONTENTS => [
                    'type' => Wysiwyg::TYPE_NAME,
                    'label' => BlogAuthor::FIELD_PAGE_CONTENTS,
                    'options' => [
                        'dataSource' => BlogAuthor::FIELD_PAGE_CONTENTS
                    ]
                ]
            ],

        ]
    ]
];