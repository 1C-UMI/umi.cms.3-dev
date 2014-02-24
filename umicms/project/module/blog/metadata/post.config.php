<?php
/**
 * UMI.Framework (http://umi-framework.ru/)
 * @link      http://github.com/Umisoft/framework for the canonical source repository
 * @copyright Copyright (c) 2007-2013 Umisoft ltd. (http://umisoft.ru/)
 * @license   http://umi-framework.ru/license/bsd-3 BSD-3 License
 */

namespace umicms\project\module\news\metadata;

use umi\orm\metadata\field\IField;
use umi\orm\object\IObject;

return [
    'dataSource' => [
        'sourceName' => 'umi_blog_post'
    ],
    'fields'     => [

        IObject::FIELD_IDENTIFY => [
            'type'       => IField::TYPE_IDENTIFY,
            'columnName' => 'id',
            'accessor'   => 'getId'
        ],
        IObject::FIELD_GUID     => [
            'type'       => IField::TYPE_GUID,
            'columnName' => 'guid',
            'accessor'   => 'getGuid',
            'mutator'    => 'setGuid'
        ],
        IObject::FIELD_TYPE     => [
            'type'       => IField::TYPE_STRING,
            'columnName' => 'type',
            'accessor'   => 'getType',
            'readOnly'   => true
        ],
        IObject::FIELD_VERSION  => [
            'type'         => IField::TYPE_VERSION,
            'columnName'   => 'version',
            'accessor'     => 'getVersion',
            'mutator'      => 'setVersion',
            'defaultValue' => 1
        ],
        'displayName'           => ['type' => IField::TYPE_STRING, 'columnName' => 'display_name'],
        'active'                => [
            'type'         => IField::TYPE_BOOL,
            'columnName'   => 'active',
            'defaultValue' => 1
        ],
        'locked'                => [
            'type'         => IField::TYPE_BOOL,
            'columnName'   => 'locked',
            'defaultValue' => 0
        ],
        'created'               => ['type' => IField::TYPE_DATE_TIME, 'columnName' => 'created'],
        'updated'               => ['type' => IField::TYPE_DATE_TIME, 'columnName' => 'updated'],
        'h1'                    => ['type' => IField::TYPE_STRING, 'columnName' => 'h1'],
        'metaTitle'             => ['type' => IField::TYPE_STRING, 'columnName' => 'meta_title'],
        'metaKeywords'          => ['type' => IField::TYPE_STRING, 'columnName' => 'meta_keywords'],
        'metaDescription'       => ['type' => IField::TYPE_STRING, 'columnName' => 'meta_description'],
        'content'               => ['type' => IField::TYPE_TEXT, 'columnName' => 'content'],
        'announcement'          => ['type' => IField::TYPE_TEXT, 'columnName' => 'announcement'],
        'category'              => [
            'type'       => IField::TYPE_BELONGS_TO,
            'columnName' => 'category_id',
            'target'     => 'blog_category'
        ],
        'slug'                  => [
            'type'       => IField::TYPE_SLUG,
            'columnName' => 'slug',
            'accessor'   => 'getSlug',
            'mutator'    => 'setSlug'
        ],
        'tags'                  => [
            'type'         => IField::TYPE_MANY_TO_MANY,
            'target'       => 'blog_tag',
            'bridge'       => 'post_tag',
            'relatedField' => 'post',
            'targetField'  => 'tag'
        ],
        'date'                  => ['type' => IField::TYPE_DATE_TIME, 'columnName' => 'date']

    ],
    'types'      => [
        'base' => [
            'fields' => [
                'id',
                'guid',
                'type',
                'version',
                'active',
                'locked',
                'created',
                'updated',
                'displayName',
                'category',
                'slug',
                'h1',
                'metaTitle',
                'metaKeywords',
                'metaDescription',
                'announcement',
                'content',
                'tags',
                'date'
            ]
        ]
    ]
];