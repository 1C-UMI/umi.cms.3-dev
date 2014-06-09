<?php
/**
 * This file is part of UMI.CMS.
 *
 * @link http://umi-cms.ru
 * @copyright Copyright (c) 2007-2014 Umisoft ltd. (http://umisoft.ru)
 * @license For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace umicms\project\module\blog\site\post\widget;

use umi\acl\IAclResource;
use umicms\hmvc\widget\BaseLinkWidget;

/**
 * Виджет для вывода URL на RSS-ленту по категории.
 */
class ListRssLinkWidget extends BaseLinkWidget implements IAclResource
{
    /**
     * {@inheritdoc}
     */
    public $template = 'rssLink';

    /**
     * {@inheritdoc}
     */
    protected function getLinkUrl()
    {
        return $this->getUrl('rss');
    }
}
 