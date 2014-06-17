<?php
/**
 * This file is part of UMI.CMS.
 *
 * @link http://umi-cms.ru
 * @copyright Copyright (c) 2007-2014 Umisoft ltd. (http://umisoft.ru)
 * @license For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use umi\filter\IFilterFactory;
use umi\form\element\CSRF;
use umi\form\element\MultiSelect;
use umi\form\element\Select;
use umi\form\element\Submit;
use umi\form\element\Text;
use umi\validation\IValidatorFactory;
use umicms\form\element\Wysiwyg;
use umicms\project\module\blog\model\object\BlogCategory;
use umicms\project\module\blog\model\object\BlogPost;
use umicms\project\module\blog\model\object\BlogTag;

return [
    'options' => [
        'dictionaries' => [
            'collection.blogPost', 'collection', 'form'
        ]
    ],
    'attributes' => [
        'method' => 'post'
    ],
    'elements' => [
        BlogPost::FIELD_CATEGORY => [
            'type' => Select::TYPE_NAME,
            'label' => BlogPost::FIELD_CATEGORY,
            'options' => [
                'dataSource' => BlogPost::FIELD_CATEGORY,
                'choicesSource' => [
                    'value' => BlogCategory::FIELD_IDENTIFY,
                    'label' => BlogCategory::FIELD_DISPLAY_NAME
                ]
            ]
        ],
        BlogPost::FIELD_DISPLAY_NAME => [
            'type' => Text::TYPE_NAME,
            'label' => BlogPost::FIELD_DISPLAY_NAME,
            'options' => [
                'dataSource' => BlogPost::FIELD_DISPLAY_NAME
            ],
        ],
        BlogPost::FIELD_PAGE_H1 => [
            'type' => Text::TYPE_NAME,
            'label' => BlogPost::FIELD_PAGE_H1,
            'options' => [
                'dataSource' => BlogPost::FIELD_PAGE_H1,
                'filters' => [
                    IFilterFactory::TYPE_STRING_TRIM => []
                ],
                'validators' => [
                    IValidatorFactory::TYPE_REQUIRED => []
                ]
            ],
        ],
        BlogPost::FIELD_ANNOUNCEMENT => [
            'type' => Wysiwyg::TYPE_NAME,
            'label' => BlogPost::FIELD_ANNOUNCEMENT,
            'options' => [
                'dataSource' => BlogPost::FIELD_ANNOUNCEMENT
            ]
        ],
        BlogPost::FIELD_PAGE_CONTENTS => [
            'type' => Wysiwyg::TYPE_NAME,
            'label' => BlogPost::FIELD_PAGE_CONTENTS,
            'options' => [
                'dataSource' => BlogPost::FIELD_PAGE_CONTENTS_RAW,
                'filters' => [
                    IFilterFactory::TYPE_STRING_TRIM => []
                ],
                'validators' => [
                    IValidatorFactory::TYPE_REQUIRED => []
                ]
            ]
        ],
        BlogPost::FIELD_TAGS => [
            'type' => MultiSelect::TYPE_NAME,
            'label' => BlogPost::FIELD_TAGS,
            'options' => [
                'dataSource' => BlogPost::FIELD_TAGS,
                'choicesSource' => [
                    'value' => BlogTag::FIELD_IDENTIFY,
                    'label' => BlogTag::FIELD_DISPLAY_NAME
                ]
            ]
        ],
        'csrf' => [
            'type' => CSRF::TYPE_NAME
        ],
        'submit' => [
            'type' => Submit::TYPE_NAME,
            'label' => 'Save'
        ]
    ]
];