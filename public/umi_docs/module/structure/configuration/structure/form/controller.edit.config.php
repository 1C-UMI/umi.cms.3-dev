<?php
/**
 * This file is part of UMI.CMS.
 *
 * @link http://umi-cms.ru
 * @copyright Copyright (c) 2007-2014 Umisoft ltd. (http://umisoft.ru)
 * @license For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use project\umi_docs\module\structure\model\object\ControllerPage;
use umi\form\element\Select;
use umi\form\element\Text;
use umi\form\fieldset\FieldSet;
use umicms\form\element\Wysiwyg;

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
                ControllerPage::FIELD_DISPLAY_NAME => [
                    'type' => Text::TYPE_NAME,
                    'label' => ControllerPage::FIELD_DISPLAY_NAME,
                    'options' => [
                        'dataSource' => ControllerPage::FIELD_DISPLAY_NAME
                    ],
                ],
                ControllerPage::FIELD_PAGE_LAYOUT => [
                    'type' => Select::TYPE_NAME,
                    'label' => ControllerPage::FIELD_PAGE_LAYOUT,
                    'options' => [
                        'choices' => [
                            null => 'Default or inherited layout'
                        ],
                        'lazy' => true,
                        'dataSource' => ControllerPage::FIELD_PAGE_LAYOUT
                    ],
                ]
            ]
        ],

        'meta' => [
            'type' => FieldSet::TYPE_NAME,
            'label' => 'meta',
            'elements' => [
                ControllerPage::FIELD_PAGE_H1 => [
                    'type' => Text::TYPE_NAME,
                    'label' => ControllerPage::FIELD_PAGE_H1,
                    'options' => [
                        'dataSource' => ControllerPage::FIELD_PAGE_H1
                    ],
                ],
                ControllerPage::FIELD_PAGE_META_TITLE => [
                    'type' => Text::TYPE_NAME,
                    'label' => ControllerPage::FIELD_PAGE_META_TITLE,
                    'options' => [
                        'dataSource' => ControllerPage::FIELD_PAGE_META_TITLE
                    ],
                ],
                ControllerPage::FIELD_PAGE_META_KEYWORDS => [
                    'type' => Text::TYPE_NAME,
                    'label' => ControllerPage::FIELD_PAGE_META_KEYWORDS,
                    'options' => [
                        'dataSource' => ControllerPage::FIELD_PAGE_META_KEYWORDS
                    ]
                ],
                ControllerPage::FIELD_PAGE_META_DESCRIPTION => [
                    'type' => Text::TYPE_NAME,
                    'label' => ControllerPage::FIELD_PAGE_META_DESCRIPTION,
                    'options' => [
                        'dataSource' => ControllerPage::FIELD_PAGE_META_DESCRIPTION
                    ]
                ]
            ]
        ],

        'contents' => [
            'type' => FieldSet::TYPE_NAME,
            'label' => 'contents',
            'elements' => [

                ControllerPage::FIELD_PAGE_CONTENTS => [
                    'type' => Wysiwyg::TYPE_NAME,
                    'label' => ControllerPage::FIELD_PAGE_CONTENTS,
                    'options' => [
                        'dataSource' => ControllerPage::FIELD_PAGE_CONTENTS
                    ]
                ],

                'secondContent' => [
                    'type' => Wysiwyg::TYPE_NAME,
                    'label' => 'secondContent',
                    'options' => [
                        'dataSource' => 'secondContent'
                    ]
                ],

                ControllerPage::FIELD_DESCRIPTION => [
                    'type' => Wysiwyg::TYPE_NAME,
                    'label' => ControllerPage::FIELD_DESCRIPTION,
                    'options' => [
                        'dataSource' => ControllerPage::FIELD_DESCRIPTION
                    ]
                ],

                ControllerPage::FIELD_RETURN_VALUE => [
                    'type' => Wysiwyg::TYPE_NAME,
                    'label' => ControllerPage::FIELD_RETURN_VALUE,
                    'options' => [
                        'dataSource' => ControllerPage::FIELD_RETURN_VALUE
                    ]
                ],

                ControllerPage::FIELD_TEMPLATE_NAME => [
                    'type' => Text::TYPE_NAME,
                    'label' => ControllerPage::FIELD_TEMPLATE_NAME,
                    'options' => [
                        'dataSource' => ControllerPage::FIELD_TEMPLATE_NAME
                    ]
                ],

            ]
        ]
    ]
];