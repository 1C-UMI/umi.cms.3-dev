<?php
/**
 * This file is part of UMI.CMS.
 *
 * @link http://umi-cms.ru
 * @copyright Copyright (c) 2007-2014 Umisoft ltd. (http://umisoft.ru)
 * @license For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace umicms\project\module\forum\model\object;

use umi\orm\objectset\IObjectSet;
use umicms\orm\object\CmsObject;
use umicms\orm\object\ICmsPage;
use umicms\orm\object\TCmsPage;

/**
 * Тема форума.
 *
 * @property IObjectSet $messages сообщения темы
 */
class ForumTheme extends CmsObject implements ICmsPage
{
    use TCmsPage;

    /**
     * Имя поля для хранения сообщений темы
     */
    const FIELD_MESSAGES = 'messages';
    /**
     * Имя поля для хранения ссылки на конференцию, к которой относится тема
     */
    const FIELD_CONFERENCE = 'conference';
}
 