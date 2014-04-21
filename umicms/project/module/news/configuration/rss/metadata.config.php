<?php
/**
 * UMI.Framework (http://umi-framework.ru/)
 * @link      http://github.com/Umisoft/framework for the canonical source repository
 * @copyright Copyright (c) 2007-2013 Umisoft ltd. (http://umisoft.ru/)
 * @license   http://umi-framework.ru/license/bsd-3 BSD-3 License
 */

use umi\filter\IFilterFactory;
use umi\orm\metadata\field\IField;
use umi\validation\IValidatorFactory;
use umicms\project\module\news\api\object\NewsRssImportScenario;

return [
    'dataSource' => [
        'sourceName' => 'umi_news_rss_import_scenario'
    ],
    'fields'     => [

        NewsRssImportScenario::FIELD_IDENTIFY              => [
            'type'       => IField::TYPE_IDENTIFY,
            'columnName' => 'id',
            'accessor'   => 'getId',
            'readOnly'   => true
        ],
        NewsRssImportScenario::FIELD_GUID                  => [
            'type'       => IField::TYPE_GUID,
            'columnName' => 'guid',
            'accessor'   => 'getGuid',
            'readOnly'   => true
        ],
        NewsRssImportScenario::FIELD_TYPE                  => [
            'type'       => IField::TYPE_STRING,
            'columnName' => 'type',
            'accessor'   => 'getType',
            'readOnly'   => true
        ],
        NewsRssImportScenario::FIELD_VERSION               => [
            'type'         => IField::TYPE_VERSION,
            'columnName'   => 'version',
            'accessor'     => 'getVersion',
            'readOnly'     => true,
            'defaultValue' => 1
        ],
        NewsRssImportScenario::FIELD_DISPLAY_NAME          => [
            'type' => IField::TYPE_STRING,
            'columnName' => 'display_name',
            'filters' => [
                IFilterFactory::TYPE_STRING_TRIM => []
            ],
            'validators' => [
                IValidatorFactory::TYPE_REQUIRED => []
            ]
        ],
        NewsRssImportScenario::FIELD_LOCKED                => [
            'type'         => IField::TYPE_BOOL,
            'columnName'   => 'locked',
            'readOnly'     => true,
            'defaultValue' => 0
        ],
        NewsRssImportScenario::FIELD_CREATED               => [
            'type'       => IField::TYPE_DATE_TIME,
            'columnName' => 'created',
            'readOnly'   => true
        ],
        NewsRssImportScenario::FIELD_UPDATED               => [
            'type'       => IField::TYPE_DATE_TIME,
            'columnName' => 'updated',
            'readOnly'   => true
        ],
        NewsRssImportScenario::FIELD_OWNER => [
            'type' => IField::TYPE_BELONGS_TO,
            'columnName' => 'owner_id',
            'target' => 'user'
        ],
        NewsRssImportScenario::FIELD_EDITOR => [
            'type' => IField::TYPE_BELONGS_TO,
            'columnName' => 'editor_id',
            'target' => 'user'
        ],
        NewsRssImportScenario::FIELD_RSS_URL => [
            'type'       => IField::TYPE_STRING,
            'columnName' => 'rss_url',
            'accessor'   => 'getRssUrl'
        ],
        NewsRssImportScenario::FIELD_RUBRIC => [
            'type' => IField::TYPE_BELONGS_TO,
            'columnName' => 'rubric_id',
            'target' => 'newsRubric'
        ],
        NewsRssImportScenario::FIELD_SUBJECTS => [
            'type'         => IField::TYPE_MANY_TO_MANY,
            'target'       => 'newsSubject',
            'bridge'       => 'rssScenarioSubject',
            'relatedField' => 'newsRssImportScenario',
            'targetField'  => 'subject'
        ],
    ],
    'types'      => [
        'base' => [
            'objectClass' => 'umicms\project\module\news\api\object\newsRssImportScenario',
            'fields'      => [
                NewsRssImportScenario::FIELD_IDENTIFY,
                NewsRssImportScenario::FIELD_GUID,
                NewsRssImportScenario::FIELD_TYPE,
                NewsRssImportScenario::FIELD_VERSION,
                NewsRssImportScenario::FIELD_LOCKED,
                NewsRssImportScenario::FIELD_CREATED,
                NewsRssImportScenario::FIELD_UPDATED,
                NewsRssImportScenario::FIELD_DISPLAY_NAME,
                NewsRssImportScenario::FIELD_OWNER,
                NewsRssImportScenario::FIELD_EDITOR,
                NewsRssImportScenario::FIELD_RSS_URL,
                NewsRssImportScenario::FIELD_RUBRIC,
                NewsRssImportScenario::FIELD_SUBJECTS
            ]
        ]
    ]
];