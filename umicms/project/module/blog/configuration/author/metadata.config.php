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
use umicms\project\module\blog\api\object\BlogAuthor;
use umicms\project\module\blog\api\object\BlogPost;

return [
    'dataSource' => [
        'sourceName' => 'umi_blog_author'
    ],
    'fields' => [
        BlogAuthor::FIELD_IDENTIFY => [
            'type' => IField::TYPE_IDENTIFY,
            'columnName' => 'id',
            'accessor' => 'getId',
            'readOnly' => true
        ],
        BlogAuthor::FIELD_GUID => [
            'type' => IField::TYPE_GUID,
            'columnName' => 'guid',
            'accessor' => 'getGuid',
            'readOnly' => true
        ],
        BlogAuthor::FIELD_TYPE => [
            'type' => IField::TYPE_STRING,
            'columnName' => 'type',
            'accessor' => 'getType',
            'readOnly' => true
        ],
        BlogAuthor::FIELD_VERSION => [
            'type' => IField::TYPE_VERSION,
            'columnName' => 'version',
            'accessor' => 'getVersion',
            'readOnly' => true,
            'defaultValue' => 1
        ],
        BlogAuthor::FIELD_PAGE_SLUG => [
            'type' => IField::TYPE_SLUG,
            'columnName' => 'slug',
        ],
        BlogAuthor::FIELD_DISPLAY_NAME => [
            'type' => IField::TYPE_STRING,
            'columnName' => 'display_name',
            'filters' => [
                IFilterFactory::TYPE_STRING_TRIM => []
            ],
            'validators' => [
                IValidatorFactory::TYPE_REQUIRED => []
            ]
        ],
        BlogAuthor::FIELD_ACTIVE => [
            'type' => IField::TYPE_BOOL,
            'columnName' => 'active',
            'defaultValue' => 1
        ],
        BlogAuthor::FIELD_LOCKED => [
            'type' => IField::TYPE_BOOL,
            'columnName' => 'locked',
            'readOnly' => true,
            'defaultValue' => 0
        ],
        BlogAuthor::FIELD_TRASHED => [
            'type' => IField::TYPE_BOOL,
            'columnName' => 'trashed',
            'defaultValue' => 0,
            'readOnly' => true,
        ],
        BlogAuthor::FIELD_CREATED => [
            'type' => IField::TYPE_DATE_TIME,
            'columnName' => 'created',
            'readOnly' => true
        ],
        BlogAuthor::FIELD_UPDATED => [
            'type' => IField::TYPE_DATE_TIME,
            'columnName' => 'updated',
            'readOnly' => true
        ],
        BlogAuthor::FIELD_OWNER => [
            'type' => IField::TYPE_BELONGS_TO,
            'columnName' => 'owner_id',
            'target' => 'user'
        ],
        BlogAuthor::FIELD_EDITOR => [
            'type' => IField::TYPE_BELONGS_TO,
            'columnName' => 'editor_id',
            'target' => 'user'
        ],
        BlogAuthor::FIELD_PROFILE => [
            'type' => IField::TYPE_BELONGS_TO,
            'columnName' => 'profile_id',
            'target' => 'user'
        ],
        BlogAuthor::FIELD_PAGE_META_TITLE => [
            'type' => IField::TYPE_STRING,
            'columnName' => 'meta_title'
        ],
        BlogAuthor::FIELD_PAGE_META_KEYWORDS => [
            'type' => IField::TYPE_STRING,
            'columnName' => 'meta_keywords'
        ],
        BlogAuthor::FIELD_PAGE_META_DESCRIPTION => [
            'type' => IField::TYPE_STRING,
            'columnName' => 'meta_description'
        ],
        BlogAuthor::FIELD_PAGE_H1 => [
            'type' => IField::TYPE_STRING,
            'columnName' => 'h1'
        ],
        BlogAuthor::FIELD_LAST_ACTIVITY => [
            'type' => IField::TYPE_DATE_TIME,
            'columnName' => 'last_activity'
        ],
        BlogAuthor::FIELD_PAGE_CONTENTS => [
            'type' => IField::TYPE_TEXT,
            'columnName' => 'contents'
        ],
        BlogAuthor::FIELD_PAGE_LAYOUT => [
            'type' => IField::TYPE_BELONGS_TO,
            'columnName' => 'layout_id',
            'target' => 'layout'
        ],
        BlogAuthor::FIELD_POSTS => [
            'type' => IField::TYPE_HAS_MANY,
            'target' => 'blogPost',
            'targetField' => BlogPost::FIELD_AUTHOR,
            'readOnly' => true
        ],
        BlogAuthor::FIELD_COMMENTS_COUNT => [
            'type' => IField::TYPE_COUNTER,
            'columnName' => 'comments_count'
        ],
        BlogAuthor::FIELD_POSTS_COUNT => [
            'type' => IField::TYPE_COUNTER,
            'columnName' => 'posts_count'
        ]
    ],
    'types' => [
        'base' => [
            'objectClass' => 'umicms\project\module\blog\api\object\BlogAuthor',
            'fields' => [
                BlogAuthor::FIELD_IDENTIFY,
                BlogAuthor::FIELD_GUID,
                BlogAuthor::FIELD_TYPE,
                BlogAuthor::FIELD_VERSION,
                BlogAuthor::FIELD_DISPLAY_NAME,
                BlogAuthor::FIELD_ACTIVE,
                BlogAuthor::FIELD_LOCKED,
                BlogAuthor::FIELD_TRASHED,
                BlogAuthor::FIELD_CREATED,
                BlogAuthor::FIELD_UPDATED,
                BlogAuthor::FIELD_OWNER,
                BlogAuthor::FIELD_EDITOR,
                BlogAuthor::FIELD_PAGE_H1,
                BlogAuthor::FIELD_PAGE_META_TITLE,
                BlogAuthor::FIELD_PAGE_META_KEYWORDS,
                BlogAuthor::FIELD_PAGE_META_DESCRIPTION,
                BlogAuthor::FIELD_PAGE_LAYOUT,
                BlogAuthor::FIELD_PAGE_SLUG,
                BlogAuthor::FIELD_PAGE_CONTENTS,
                BlogAuthor::FIELD_PROFILE,
                BlogAuthor::FIELD_POSTS_COUNT,
                BlogAuthor::FIELD_COMMENTS_COUNT,
                BlogAuthor::FIELD_LAST_ACTIVITY,
                BlogAuthor::FIELD_POSTS
            ]
        ]
    ]
];