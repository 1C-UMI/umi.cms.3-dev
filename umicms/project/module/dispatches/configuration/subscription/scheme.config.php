<?php
/**
 * This file is part of UMI.CMS.
 * @link http://umi-cms.ru
 * @copyright Copyright (c) 2007-2014 Umisoft ltd. (http://umisoft.ru)
 * @license For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Doctrine\DBAL\Types\Type;

return array_replace_recursive(
    require CMS_PROJECT_DIR . '/configuration/model/scheme/collection.config.php',
    [
        'name'        => 'dispatches_subscription',
        'columns'     => [
            'dispatch_id'   => [
                'type'    => Type::BIGINT,
                'options' => [
                    'unsigned' => true
                ]
            ],
            'subscriber_id' => [
                'type'    => Type::BIGINT,
                'options' => [
                    'unsigned' => true
                ]
            ],
            'token' => [
                'type'    => Type::STRING
            ]
        ],
        'indexes'     => [
            'dispatch'   => [
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
            'subscription_to_dispatch'   => [
                'foreignTable' => 'dispatch',
                'columns'      => [
                    'dispatch_id' => []
                ],
                'options'      => [
                    'onUpdate' => 'CASCADE',
                    'onDelete' => 'CASCADE'
                ]
            ],
            'subscription_to_subscriber' => [
                'foreignTable' => 'dispatches_subscriber',
                'columns'      => [
                    'subscriber_id' => []
                ],
                'options'      => [
                    'onUpdate' => 'CASCADE',
                    'onDelete' => 'CASCADE'
                ]
            ]
        ]
    ]
);