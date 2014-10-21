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

return array_replace_recursive(
    require CMS_PROJECT_DIR . '/configuration/model/scheme/collection.config.php',
    [
        'name' => 'dispatches_unsubscription',
        'columns' => [
            'dispatch_id' => [
                'type' => Type::BIGINT,
                'options' => [
                    'unsigned' => true
                ]
            ],
            'subscriber_id' => [
                'type' => Type::BIGINT,
                'options' => [
                    'unsigned' => true
                ]
            ],
            'release_id' => [
                'type' => Type::BIGINT,
                'options' => [
                    'unsigned' => true
                ]
            ],
            'date_reason' => [
                'type' => Type::DATETIME,
                'options' => [
                    'unsigned' => true
                ]
            ],
            'reason_unsubscribe' => [
                'type' => Type::TEXT
            ]
        ],
        'indexes' => [
            'dispatch' => [
                'columns' => [
                    'dispatch_id' => []
                ]
            ],
            'subscriber' => [
                'columns' => [
                    'subscriber_id' => []
                ]
            ]
        ],
        'constraints' => [
            'unsubscription_to_dispatch' => [
                'foreignTable' => 'dispatch',
                'columns' => [
                    'dispatch_id' => []
                ],
                'options' => [
                    'onUpdate' => 'CASCADE',
                    'onDelete' => 'CASCADE'
                ]
            ],
            'unsubscription_to_subscriber' => [
                'foreignTable' => 'dispatches_subscriber',
                'columns' => [
                    'subscriber_id' => []
                ],
                'options' => [
                    'onUpdate' => 'CASCADE',
                    'onDelete' => 'CASCADE'
                ]
            ],
            'unsubscription_to_release' => [
                'foreignTable' => 'dispatches_release',
                'columns' => [
                    'release_id' => []
                ],
                'options' => [
                    'onUpdate' => 'CASCADE',
                    'onDelete' => 'SET NULL'
                ]
            ],
        ]
    ]
);