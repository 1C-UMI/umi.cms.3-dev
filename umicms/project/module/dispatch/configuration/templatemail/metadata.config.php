<?php
/**
 * This file is part of UMI.CMS.
 * @link http://umi-cms.ru
 * @copyright Copyright (c) 2007-2014 Umisoft ltd. (http://umisoft.ru)
 * @license For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use umi\orm\metadata\field\IField;
use umicms\project\module\dispatch\model\object\TemplateMail;

return array_replace_recursive(
    require CMS_PROJECT_DIR . '/configuration/model/metadata/collection.config.php',
    [
        'dataSource' => [
            'sourceName' => 'dispatch_templatemail'
        ],
		'fields'	=> [
            TemplateMail::FIELD_PATHTEMPLATE	=> [
                'type'       => IField::TYPE_STRING,
                'columnName' => 'path_to_template'
            ],
        ],
        'types'  => [
            'base' => [
                'objectClass' => 'umicms\project\module\dispatch\model\object\TemplateMail',
                'fields'      => [
				    TemplateMail::FIELD_PATHTEMPLATE => []
				]
            ]
        ],
    ]
);