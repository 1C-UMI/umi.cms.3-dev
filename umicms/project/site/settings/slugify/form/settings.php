<?php
/**
 * This file is part of UMI.CMS.
 *
 * @link http://umi-cms.ru
 * @copyright Copyright (c) 2007-2014 Umisoft ltd. (http://umisoft.ru)
 * @license For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use umi\form\element\Checkbox;
use umi\form\element\Select;
use umi\form\element\Text;
use umi\form\fieldset\FieldSet;

return [
    'options' => [
        'dictionaries' => [
            'project.admin.settings.site.slugify'
        ]
    ],

    'elements' => [
        'slugify' => [
            'type' => FieldSet::TYPE_NAME,
            'label' => 'slugify',
            'elements' => [
                'slugGeneratorActive' => [
                    'type' => Checkbox::TYPE_NAME,
                    'label' => 'slugGeneratorActive',
                    'options' => [
                        'dataSource' => 'slugGeneratorActive'
                    ]
                ],
                'slugGeneratorType' => [
                    'type' => Select::TYPE_NAME,
                    'label' => 'slugGeneratorType',
                    'options' => [
                        'dataSource' => 'generatorClassName',
                        'choices' => [
                            'umicms\slugify\filtration\FiltrationGenerator' => 'Фильтрация',
                            'umicms\slugify\transliteration\TransliterationGenerator' => 'Транслитерация'
                        ]
                    ]
                ],
                'slugLength' => [
                    'type' => Text::TYPE_NAME,
                    'label' => 'slugLength',
                    'options' => [
                        'dataSource' => 'slugLength'
                    ]

                ]
            ]
        ]
    ]
];