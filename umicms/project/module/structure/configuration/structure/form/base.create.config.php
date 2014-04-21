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
use umicms\project\module\structure\api\object\StructureElement;

return [

    'options' => [
        'dictionaries' => [
            'collection.structure', 'collection', 'form'
        ]
    ],

    'elements' => [

        'common' => [
            'type' => FieldSet::TYPE_NAME,
            'label' => 'common',
            'elements' => [
                StructureElement::FIELD_DISPLAY_NAME => [
                    'type' => Text::TYPE_NAME,
                    'label' => StructureElement::FIELD_DISPLAY_NAME,
                    'options' => [
                        'dataSource' => StructureElement::FIELD_DISPLAY_NAME
                    ],
                ],
                StructureElement::FIELD_PAGE_LAYOUT => [
                    'type' => Select::TYPE_NAME,
                    'label' => StructureElement::FIELD_PAGE_LAYOUT,
                    'options' => [
                        'dataSource' => StructureElement::FIELD_PAGE_LAYOUT
                    ],
                ],
                StructureElement::FIELD_PAGE_SLUG => [
                    'type' => Text::TYPE_NAME,
                    'label' => StructureElement::FIELD_PAGE_SLUG,
                    'options' => [
                        'dataSource' => StructureElement::FIELD_PAGE_SLUG
                    ],
                ],
                StructureElement::FIELD_ACTIVE => [
                    'type' => Checkbox::TYPE_NAME,
                    'label' => StructureElement::FIELD_ACTIVE,
                    'options' => [
                        'dataSource' => StructureElement::FIELD_ACTIVE
                    ],
                ]
            ]
        ],

        'meta' => [
            'type' => FieldSet::TYPE_NAME,
            'label' => 'meta',
            'elements' => [
                StructureElement::FIELD_PAGE_H1 => [
                    'type' => Text::TYPE_NAME,
                    'label' => StructureElement::FIELD_PAGE_H1,
                    'options' => [
                        'dataSource' => StructureElement::FIELD_PAGE_H1
                    ],
                ],
                StructureElement::FIELD_PAGE_META_TITLE => [
                    'type' => Text::TYPE_NAME,
                    'label' => StructureElement::FIELD_PAGE_META_TITLE,
                    'options' => [
                        'dataSource' => StructureElement::FIELD_PAGE_META_TITLE
                    ],
                ],
                StructureElement::FIELD_PAGE_META_KEYWORDS => [
                    'type' => Text::TYPE_NAME,
                    'label' => StructureElement::FIELD_PAGE_META_KEYWORDS,
                    'options' => [
                        'dataSource' => StructureElement::FIELD_PAGE_META_KEYWORDS
                    ]
                ],
                StructureElement::FIELD_PAGE_META_DESCRIPTION => [
                    'type' => Text::TYPE_NAME,
                    'label' => StructureElement::FIELD_PAGE_META_DESCRIPTION,
                    'options' => [
                        'dataSource' => StructureElement::FIELD_PAGE_META_DESCRIPTION
                    ]
                ]
            ]
        ],

        'contents' => [
            'type' => FieldSet::TYPE_NAME,
            'label' => 'contents',
            'elements' => [

                StructureElement::FIELD_PAGE_CONTENTS => [
                    'type' => Wysiwyg::TYPE_NAME,
                    'label' => StructureElement::FIELD_PAGE_CONTENTS,
                    'options' => [
                        'dataSource' => StructureElement::FIELD_PAGE_CONTENTS
                    ]
                ]
            ]
        ]
    ]
];