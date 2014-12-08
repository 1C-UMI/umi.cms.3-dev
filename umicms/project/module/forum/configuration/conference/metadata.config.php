<?php
/**
 * This file is part of UMI.CMS.
 *
 * @link http://umi-cms.ru
 * @copyright Copyright (c) 2007-2014 Umisoft ltd. (http://umisoft.ru)
 * @license For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use umi\orm\metadata\field\IField;
use umi\orm\metadata\IObjectType;
use umicms\project\module\forum\model\object\ForumConference;
use umicms\project\module\forum\model\object\ForumTheme;

return array_replace_recursive(
    require CMS_PROJECT_DIR . '/configuration/model/metadata/pageCollection.config.php',
    [
        'dataSource' => [
            'sourceName' => 'forum_conference',
        ],
        'fields' => [
            ForumConference::FIELD_THEMES => [
                'type' => IField::TYPE_HAS_MANY,
                'target' => 'forumTheme',
                'targetField' => ForumTheme::FIELD_CONFERENCE
            ]
        ],
        'types' => [
            IObjectType::BASE => [
                'objectClass' => 'umicms\project\module\forum\model\object\ForumConference',
                'fields' => [
                    ForumConference::FIELD_THEMES => []
                ]
            ]
        ]
    ]
);