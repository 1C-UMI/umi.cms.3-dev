<?php
/**
 * This file is part of UMI.CMS.
 *
 * @link http://umi-cms.ru
 * @copyright Copyright (c) 2007-2014 Umisoft ltd. (http://umisoft.ru)
 * @license For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Doctrine\DBAL\Types\Type;
use umicms\project\Environment;

return array_merge_recursive(
    require Environment::$directoryCmsProject . '/configuration/model/scheme/collection.config.php',
    [
        'name' => 'news_rss_import_scenario_subject',
        'columns'     =>  [
            'scenario_id' => [
                'type' => Type::BIGINT,
                'options' => [
                    'unsigned' => true,
                    'notnull' => false
                ]
            ],
            'subject_id' => [
                'type' => Type::BIGINT,
                'options' => [
                    'unsigned' => true,
                    'notnull' => false
                ]
            ]
        ],
        'indexes'     => [
            'scenario' => [
                'columns' => [
                    'scenario_id' => []
                ]
            ],
            'subject' => [
                'columns' => [
                    'subject_id' => []
                ]
            ]
        ],
        'constraints' => [
            'to_scenario' => [
                'foreignTable' => 'news_rss_import_scenario',
                'columns' => [
                    'scenario_id' => []
                ],
                'foreignColumns' => [
                    'id' => []
                ],
                'options' => [
                    'onUpdate' => 'CASCADE',
                    'onDelete' => 'SET NULL'
                ]
            ],
            'to_subject' => [
                'foreignTable' => 'news_subject',
                'columns' => [
                    'subject_id' => []
                ],
                'foreignColumns' => [
                    'id' => []
                ],
                'options' => [
                    'onUpdate' => 'CASCADE',
                    'onDelete' => 'SET NULL'
                ]
            ]
        ]
    ]
);
