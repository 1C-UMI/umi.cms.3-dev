<?php
/**
 * UMI.Framework (http://umi-framework.ru/)
 *
 * @link http://github.com/Umisoft/framework for the canonical source repository
 * @copyright Copyright (c) 2007-2013 Umisoft ltd. (http://umisoft.ru/)
 * @license http://umi-framework.ru/license/bsd-3 BSD-3 License
 */

use umicms\orm\object\CmsHierarchicObject;
use umicms\orm\object\ICmsObject;
use umicms\orm\object\ICmsPage;
use umicms\orm\object\IRecyclableObject;

return [

        'project\admin\api' => '{#lazy:~/project/admin/api/i18n/dictionary.config.php}',

        'project\admin\api\news' => '{#lazy:~/project/module/news/admin/i18n/dictionary.config.php}',
        'project\admin\api\news\item' => '{#lazy:~/project/module/news/admin/item/i18n/dictionary.config.php}',
        'project\admin\api\news\rubric' => '{#lazy:~/project/module/news/admin/rubric/i18n/dictionary.config.php}',
        'project\admin\api\news\subject' => '{#lazy:~/project/module/news/admin/subject/i18n/dictionary.config.php}',

        'project\admin\api\files' => '{#lazy:~/project/module/files/admin/i18n/dictionary.config.php}',
        'project\admin\api\files\manager' => '{#lazy:~/project/module/files/admin/manager/i18n/dictionary.config.php}',

        'project\admin\api\users' => '{#lazy:~/project/module/users/admin/i18n/dictionary.config.php}',
        'project\admin\api\users\user' => '{#lazy:~/project/module/users/admin/user/i18n/dictionary.config.php}',

        'project\admin\api\structure' => '{#lazy:~/project/module/structure/admin/i18n/dictionary.config.php}',
        'project\admin\api\structure\page' => '{#lazy:~/project/module/structure/admin/page/i18n/dictionary.config.php}',

        'collection' => [

            'en-US' => [
                ICmsObject::FIELD_ACTIVE => 'Active',
                ICmsObject::FIELD_CREATED => 'Creation date',
                ICmsObject::FIELD_DISPLAY_NAME => 'Display name',
                ICmsObject::FIELD_LOCKED => 'Locked',
                ICmsObject::FIELD_UPDATED => 'Update date',
                ICmsObject::FIELD_GUID => 'GUID',
                ICmsObject::FIELD_IDENTIFY => 'Identifier',
                ICmsObject::FIELD_TYPE => 'Type',
                ICmsObject::FIELD_VERSION => 'Version',

                CmsHierarchicObject::FIELD_CHILDREN => 'Children',
                CmsHierarchicObject::FIELD_CHILD_COUNT => 'Child count',
                CmsHierarchicObject::FIELD_HIERARCHY_LEVEL => 'Hierarchy level',
                CmsHierarchicObject::FIELD_MPATH => 'Materialized path',
                CmsHierarchicObject::FIELD_ORDER => 'Hierarchy order',
                CmsHierarchicObject::FIELD_PARENT => 'Parent',
                CmsHierarchicObject::FIELD_URI => 'URI',

                ICmsPage::FIELD_PAGE_CONTENTS => 'Contents',
                ICmsPage::FIELD_PAGE_H1 => 'H1',
                ICmsPage::FIELD_PAGE_LAYOUT => 'Layout',
                ICmsPage::FIELD_PAGE_META_DESCRIPTION => 'Meta description',
                ICmsPage::FIELD_PAGE_META_KEYWORDS => 'Meta keywords',
                ICmsPage::FIELD_PAGE_META_TITLE => 'Meta title',
                ICmsPage::FIELD_PAGE_SLUG => 'Slug',

                IRecyclableObject::FIELD_TRASHED => 'Trashed'
            ],

            'ru-RU' => [
                ICmsObject::FIELD_ACTIVE => 'Активность',
                ICmsObject::FIELD_CREATED => 'Дата создания',
                ICmsObject::FIELD_DISPLAY_NAME => 'Имя отображения',
                ICmsObject::FIELD_LOCKED => 'Заблокировано',
                ICmsObject::FIELD_UPDATED => 'Дата последнего обновления',
                ICmsObject::FIELD_GUID => 'GUID',
                ICmsObject::FIELD_IDENTIFY => 'Идентификатор',
                ICmsObject::FIELD_TYPE => 'Тип',
                ICmsObject::FIELD_VERSION => 'Версия',

                CmsHierarchicObject::FIELD_CHILDREN => 'Дочерние сущности',
                CmsHierarchicObject::FIELD_CHILD_COUNT => 'Количество дочерних сущностей',
                CmsHierarchicObject::FIELD_HIERARCHY_LEVEL => 'Уровень вложенности в иерархии',
                CmsHierarchicObject::FIELD_MPATH => 'Материализованный путь',
                CmsHierarchicObject::FIELD_ORDER => 'Порядок в иерархии',
                CmsHierarchicObject::FIELD_PARENT => 'Родительская сущность',
                CmsHierarchicObject::FIELD_URI => 'URI',

                ICmsPage::FIELD_PAGE_CONTENTS => 'Контент',
                ICmsPage::FIELD_PAGE_H1 => 'H1',
                ICmsPage::FIELD_PAGE_LAYOUT => 'Шаблон',
                ICmsPage::FIELD_PAGE_META_DESCRIPTION => 'Meta description',
                ICmsPage::FIELD_PAGE_META_KEYWORDS => 'Meta keywords',
                ICmsPage::FIELD_PAGE_META_TITLE => 'Meta title',
                ICmsPage::FIELD_PAGE_SLUG => 'Псевдостатический адрес',

                IRecyclableObject::FIELD_TRASHED => 'В корзине'
            ]
        ],

        'form' => [
            'en-US' => [
                'common' => 'Common',
                'meta' => 'Meta',
                'contents' => 'Contents'
            ],
            'ru-RU' => [
                'common' => 'Общее',
                'meta' => 'Мета-информация',
                'contents' => 'Контент'
            ]
        ],

        'collection\newsItem' => '{#lazy:~/project/module/news/orm/item/i18n/dictionary.config.php}',
        'collection\newsRubric' => '{#lazy:~/project/module/news/orm/rubric/i18n/dictionary.config.php}',
        'collection\newsSubject' => '{#lazy:~/project/module/news/orm/subject/i18n/dictionary.config.php}',
    ];