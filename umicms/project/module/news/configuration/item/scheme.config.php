<?php
/**
 * This file is part of UMI.CMS.
 *
 * @link http://umi-cms.ru
 * @copyright Copyright (c) 2007-2014 Umisoft ltd. (http://umisoft.ru)
 * @license For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Doctrine\DBAL\Platforms\MySqlPlatform;
use Doctrine\DBAL\Types\Type;
use umicms\project\Environment;

return array_replace_recursive(
    require Environment::$directoryCmsProject . '/configuration/model/scheme/pageCollection.config.php',
    [
        'name' => 'news_item',
        'columns'     =>  [
            'display_name_en' => [
                'type'    => Type::STRING,
                'options' => [
                    'notnull' => false
                ]
            ],
            'contents_en'     => [
                'type' => Type::TEXT
            ],
            'date'            => [
                'type' => Type::DATETIME
            ],
            'announcement'    => [
                'type' => Type::TEXT,
                'options' => [
                    'length' => MySqlPlatform::LENGTH_LIMIT_MEDIUMTEXT
                ]
            ],
            'announcement_en' => [
                'type' => Type::TEXT,
                'options' => [
                    'length' => MySqlPlatform::LENGTH_LIMIT_MEDIUMTEXT
                ]
            ],
            'source' => [
                'type' => Type::STRING
            ],
            'rubric_id' => [
                'type' => Type::BIGINT,
                'options' => [
                    'unsigned' => true
                ]
            ]
        ],
        'indexes'     => [
            'rubric' => [
                'columns' => [
                    'rubric_id' => []
                ]
            ]
        ],
        'constraints' => [
            'item_to_rubric' => [
                'foreignTable' => 'news_rubric',
                'columns' => [
                    'rubric_id' => []
                ],
                'options' => [
                    'onUpdate' => 'CASCADE',
                    'onDelete' => 'SET NULL'
                ]
            ]
        ]
    ]
);
