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

return array_replace_recursive(
    require CMS_PROJECT_DIR . '/configuration/model/scheme/collection.config.php',
    [
        'options' => [
            'engine' => 'MyISAM'
        ],
        'name' => 'search_index',
        'columns' => [
            'ref_guid' => [
                'type' => Type::STRING
            ],
            'contents' => [
                'type' => Type::TEXT,
                'options' => [
                    'length' => MySqlPlatform::LENGTH_LIMIT_MEDIUMTEXT
                ]
            ],
            'contents_en' => [
                'type' => Type::TEXT,
                'options' => [
                    'length' => MySqlPlatform::LENGTH_LIMIT_MEDIUMTEXT
                ]
            ],
            'collection_name' => [
                'type' => Type::STRING
            ]
        ],
        'indexes' => [
            'contents' => [
                'flags' => ['fulltext'],
                'columns' => [
                    'contents' => []
                ]
            ],
            'contents_en' => [
                'flags' => ['fulltext'],
                'columns' => [
                    'contents_en' => []
                ]
            ]
        ]
    ]
);