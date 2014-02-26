<?php
/**
 * UMI.Framework (http://umi-framework.ru/)
 * @link      http://github.com/Umisoft/framework for the canonical source repository
 * @copyright Copyright (c) 2007-2013 Umisoft ltd. (http://umisoft.ru/)
 * @license   http://umi-framework.ru/license/bsd-3 BSD-3 License
 */

namespace umicms\project\module\structure\metadata;

use umi\orm\metadata\field\IField;
use umicms\project\module\structure\object\StaticPage;
use umicms\project\module\structure\object\StructureElement;
use umicms\project\module\structure\object\SystemPage;

return [
    'dataSource' => [
        'sourceName' => 'umi_structure'
    ],
    'fields'     => [

        StructureElement::FIELD_IDENTIFY        => [
            'type'       => IField::TYPE_IDENTIFY,
            'columnName' => 'id',
            'accessor'   => 'getId'
        ],
        StructureElement::FIELD_GUID            => [
            'type'       => IField::TYPE_GUID,
            'columnName' => 'guid',
            'accessor'   => 'getGuid',
            'mutator'    => 'setGuid'
        ],
        StructureElement::FIELD_TYPE            => [
            'type'       => IField::TYPE_STRING,
            'columnName' => 'type',
            'accessor'   => 'getType',
            'readOnly'   => true
        ],
        StructureElement::FIELD_VERSION         => [
            'type'         => IField::TYPE_VERSION,
            'columnName'   => 'version',
            'accessor'     => 'getVersion',
            'mutator'      => 'setVersion',
            'defaultValue' => 1
        ],
        StructureElement::FIELD_PARENT          => [
            'type'       => IField::TYPE_BELONGS_TO,
            'columnName' => 'pid',
            'accessor'   => 'getParent',
            'target'     => 'Structure',
            'readOnly'   => true
        ],
        StructureElement::FIELD_MPATH           => [
            'type'       => IField::TYPE_MPATH,
            'columnName' => 'mpath',
            'accessor'   => 'getMaterializedPath',
            'readOnly'   => true
        ],
        StructureElement::FIELD_SLUG            => [
            'type'       => IField::TYPE_SLUG,
            'columnName' => 'slug',
            'accessor'   => 'getSlug',
            'readOnly'   => true
        ],
        StructureElement::FIELD_URI             => [
            'type'       => IField::TYPE_URI,
            'columnName' => 'uri',
            'accessor'   => 'getURI',
            'readOnly'   => true
        ],
        StructureElement::FIELD_CHILD_COUNT     => [
            'type'         => IField::TYPE_COUNTER,
            'columnName'   => 'child_count',
            'accessor'     => 'getChildCount',
            'readOnly'     => true,
            'defaultValue' => 0
        ],
        StructureElement::FIELD_ORDER           => [
            'type'       => IField::TYPE_ORDER,
            'columnName' => 'order',
            'accessor'   => 'getOrder',
            'readOnly'   => true
        ],
        StructureElement::FIELD_HIERARCHY_LEVEL => [
            'type'       => IField::TYPE_LEVEL,
            'columnName' => 'level',
            'accessor'   => 'getLevel',
            'readOnly'   => true
        ],
        StructureElement::FIELD_DISPLAY_NAME    => ['type' => IField::TYPE_STRING, 'columnName' => 'display_name'],
        StructureElement::FIELD_COMPONENT_PATH  => [
            'type'       => IField::TYPE_STRING,
            'columnName' => 'component_path',
            'readOnly'   => true
        ],
        StructureElement::FIELD_ACTIVE          => [
            'type'         => IField::TYPE_BOOL,
            'columnName'   => 'active',
            'defaultValue' => 1
        ],
        StructureElement::FIELD_LOCKED          => [
            'type'         => IField::TYPE_BOOL,
            'columnName'   => 'locked',
            'defaultValue' => 0
        ],
        StructureElement::FIELD_CREATED         => ['type' => IField::TYPE_DATE_TIME, 'columnName' => 'created'],
        StructureElement::FIELD_UPDATED         => ['type' => IField::TYPE_DATE_TIME, 'columnName' => 'updated'],
        StructureElement::FIELD_LAYOUT          => [
            'type'       => IField::TYPE_BELONGS_TO,
            'columnName' => 'layout_id',
            'target'     => 'Layout'
        ],
        'h1'                                    => ['type' => IField::TYPE_STRING, 'columnName' => 'h1'],
        'metaTitle'                             => ['type' => IField::TYPE_STRING, 'columnName' => 'meta_title'],
        'metaKeywords'                          => ['type' => IField::TYPE_STRING, 'columnName' => 'meta_keywords'],
        'metaDescription'                       => ['type' => IField::TYPE_STRING, 'columnName' => 'meta_description'],
        'content'                               => ['type' => IField::TYPE_TEXT, 'columnName' => 'content']
    ],
    'types'      => [
        'base'   => [
            'objectClass' => 'umicms\project\module\structure\object\StructureElement',
            'fields'      => [
                StructureElement::FIELD_IDENTIFY,
                StructureElement::FIELD_GUID,
                StructureElement::FIELD_TYPE,
                StructureElement::FIELD_VERSION,
                StructureElement::FIELD_DISPLAY_NAME,
                StructureElement::FIELD_PARENT,
                StructureElement::FIELD_MPATH,
                StructureElement::FIELD_SLUG,
                StructureElement::FIELD_URI,
                StructureElement::FIELD_HIERARCHY_LEVEL,
                StructureElement::FIELD_ORDER,
                StructureElement::FIELD_CHILD_COUNT,
                StructureElement::FIELD_ACTIVE,
                StructureElement::FIELD_LOCKED,
                StructureElement::FIELD_CREATED,
                StructureElement::FIELD_UPDATED,
                StructureElement::FIELD_COMPONENT_PATH,
                StructureElement::FIELD_LAYOUT,
            ]
        ],
        'system' => [
            'objectClass' => 'umicms\project\module\structure\object\SystemPage',
            'fields'      => [
                SystemPage::FIELD_IDENTIFY,
                SystemPage::FIELD_GUID,
                SystemPage::FIELD_TYPE,
                SystemPage::FIELD_VERSION,
                SystemPage::FIELD_DISPLAY_NAME,
                SystemPage::FIELD_PARENT,
                SystemPage::FIELD_MPATH,
                SystemPage::FIELD_SLUG,
                SystemPage::FIELD_URI,
                SystemPage::FIELD_HIERARCHY_LEVEL,
                SystemPage::FIELD_ORDER,
                SystemPage::FIELD_CHILD_COUNT,
                SystemPage::FIELD_ACTIVE,
                SystemPage::FIELD_LOCKED,
                SystemPage::FIELD_CREATED,
                SystemPage::FIELD_UPDATED,
                SystemPage::FIELD_COMPONENT_PATH,
                SystemPage::FIELD_LAYOUT
            ]
        ],
        'static' => [
            'objectClass' => 'umicms\project\module\structure\object\StaticPage',
            'fields'      => [
                StaticPage::FIELD_IDENTIFY,
                StaticPage::FIELD_GUID,
                StaticPage::FIELD_TYPE,
                StaticPage::FIELD_VERSION,
                StaticPage::FIELD_DISPLAY_NAME,
                StaticPage::FIELD_PARENT,
                StaticPage::FIELD_MPATH,
                StaticPage::FIELD_SLUG,
                StaticPage::FIELD_URI,
                StaticPage::FIELD_HIERARCHY_LEVEL,
                StaticPage::FIELD_ORDER,
                StaticPage::FIELD_CHILD_COUNT,
                StaticPage::FIELD_ACTIVE,
                StaticPage::FIELD_LOCKED,
                StaticPage::FIELD_CREATED,
                StaticPage::FIELD_UPDATED,
                StaticPage::FIELD_COMPONENT_PATH,
                StaticPage::FIELD_LAYOUT,
                'metaTitle',
                'metaKeywords',
                'metaDescription',
                'h1',
                'content'
            ]
        ]
    ]
];