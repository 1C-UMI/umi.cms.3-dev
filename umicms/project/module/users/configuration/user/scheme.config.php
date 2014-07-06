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

return array_replace_recursive(
    require Environment::$directoryCmsProject . '/configuration/model/scheme/collection.config.php',
    require Environment::$directoryCmsProject . '/configuration/model/scheme/active.config.php',
    require Environment::$directoryCmsProject . '/configuration/model/scheme/locked.config.php',
    [
        'name' => 'users_user',
        'columns'     =>  [
            'login' => [
                'type' => Type::STRING
            ],
            'email' => [
                'type' => Type::STRING
            ],
            'password' => [
                'type' => Type::STRING
            ],
            'password_salt' => [
                'type' => Type::STRING
            ],
            'activation_code' => [
                'type' => Type::STRING
            ],
            'first_name' => [
                'type' => Type::STRING
            ],
            'middle_name' => [
                'type' => Type::STRING
            ],
            'last_name' => [
                'type' => Type::STRING
            ],
            'registration_date' => [
                'type' => Type::DATETIME
            ]
        ],
        'indexes' => [
            'login' => [
                'type' => 'unique',
                'columns' => [
                    'login' => []
                ]
            ],
            'email' => [
                'type' => 'unique',
                'columns' => [
                    'email' => []
                ]
            ]
        ]
    ]
);
