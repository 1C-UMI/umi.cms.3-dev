<?php
/**
 * This file is part of UMI.CMS.
 *
 * @link http://umi-cms.ru
 * @copyright Copyright (c) 2007-2014 Umisoft ltd. (http://umisoft.ru)
 * @license For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace umicms\project\module\blog\model\object;

use umicms\orm\object\CmsObject;

/**
 * Статус комментария.
 */
class CommentStatus extends CmsObject
{
    /**
     * GUID для статуса "Опубликован"
     */
    const GUID_PUBLISHED = 'published';
    /**
     * GUID для статуса "Отклонен"
     */
    const GUID_REJECTED = 'rejected';
    /**
     * GUID для статуса "Снят с публикации"
     */
    const GUID_UNPUBLISHED = 'unpublished';
    /**
     * GUID для статуса "Требует модерации"
     */
    const GUID_NEED_MODERATION = 'moderation';

}
 