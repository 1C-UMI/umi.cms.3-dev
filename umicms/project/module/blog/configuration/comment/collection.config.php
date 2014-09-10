<?php
/**
 * This file is part of UMI.CMS.
 *
 * @link http://umi-cms.ru
 * @copyright Copyright (c) 2007-2014 Umisoft ltd. (http://umisoft.ru)
 * @license For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use umi\orm\collection\ICollectionFactory;
use umicms\project\module\blog\model\collection\BlogCommentCollection;
use umicms\project\module\blog\model\object\BaseBlogComment;
use umicms\project\module\blog\model\object\BlogBranchComment;
use umicms\project\module\blog\model\object\BlogComment;
use umicms\project\module\blog\model\object\GuestBlogComment;

return [
    'type' => ICollectionFactory::TYPE_SIMPLE_HIERARCHIC,
    'class' => 'umicms\project\module\blog\model\collection\BlogCommentCollection',
    'handlers' => [
        'admin' => 'blog.comment',
        'site' => 'blog.comment'
    ],
    'forms' => [
        BlogComment::TYPE => [
            BlogCommentCollection::FORM_EDIT => '{#lazy:~/project/module/blog/configuration/comment/form/comment.edit.config.php}',
            BlogCommentCollection::FORM_CREATE => '{#lazy:~/project/module/blog/configuration/comment/form/comment.create.config.php}',
            BlogComment::FORM_ADD_COMMENT => '{#lazy:~/project/module/blog/site/comment/add/form/comment.addComment.config.php}',
            BlogComment::FORM_PUBLISH_COMMENT => '{#lazy:~/project/module/blog/site/comment/form/base.publish.config.php}',
            BlogComment::FORM_REJECT_COMMENT => '{#lazy:~/project/module/blog/site/comment/form/base.reject.config.php}',
            BlogComment::FORM_UNPUBLISH_COMMENT => '{#lazy:~/project/module/blog/site/comment/form/base.unpublish.config.php}',
        ],
        GuestBlogComment::TYPE => [
            BlogCommentCollection::FORM_EDIT => '{#lazy:~/project/module/blog/configuration/comment/form/guest.edit.config.php}',
            BlogCommentCollection::FORM_CREATE => '{#lazy:~/project/module/blog/configuration/comment/form/guest.create.config.php}',
            GuestBlogComment::FORM_ADD_COMMENT => '{#lazy:~/project/module/blog/site/comment/add/form/guest.addComment.config.php}',
            GuestBlogComment::FORM_PUBLISH_COMMENT => '{#lazy:~/project/module/blog/site/comment/form/base.publish.config.php}',
            GuestBlogComment::FORM_REJECT_COMMENT => '{#lazy:~/project/module/blog/site/comment/form/base.reject.config.php}',
            GuestBlogComment::FORM_UNPUBLISH_COMMENT => '{#lazy:~/project/module/blog/site/comment/form/base.unpublish.config.php}',
        ],
        BlogBranchComment::TYPE => [
            BlogCommentCollection::FORM_EDIT => '{#lazy:~/project/module/blog/configuration/comment/form/branchComment.edit.config.php}'
        ]
    ],
    'dictionaries' => [
        'collection.blogComment' => 'collection.blogComment', 'collection' => 'collection'
    ]
];