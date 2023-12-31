<?php
/**
 * This file is part of UMI.CMS.
 *
 * @link http://umi-cms.ru
 * @copyright Copyright (c) 2007-2014 Umisoft ltd. (http://umisoft.ru)
 * @license For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace umicms\project\module\news\site\rubric\widget;

use umicms\exception\InvalidArgumentException;
use umicms\hmvc\widget\BaseLinkWidget;
use umicms\project\module\news\model\NewsModule;
use umicms\project\module\news\model\object\NewsRubric;

/**
 * Виджет для вывода URL на RSS-ленту по рубрике.
 */
class RubricNewsRssLinkWidget extends BaseLinkWidget
{
    /**
     * {@inheritdoc}
     */
    public $template = 'rssLink';

    /**
     * @var NewsRubric|string|null $rubric рубрика или GUID рубрики, URL на RSS которой генерировать.
     * Если не указана, генерируется URL на все новости.
     */
    public $rubric;

    /**
     * @var NewsModule $module модуль "Новости"
     */
    protected $module;

    /**
     * Конструктор.
     * @param NewsModule $newsApi модуль "Новости"
     */
    public function __construct(NewsModule $newsApi)
    {
        $this->module = $newsApi;
    }

    /**
     * {@inheritdoc}
     */
    protected function getLinkUrl()
    {
        if (is_string($this->rubric)) {
            $this->rubric = $this->module->rubric()->get($this->rubric);
        }

        if (isset($this->rubric) && !$this->rubric instanceof NewsRubric) {
            throw new InvalidArgumentException(
                $this->translate(
                    'Widget parameter "{param}" should be instance of "{class}".',
                    [
                        'param' => 'rubric',
                        'class' => NewsRubric::className()
                    ]
                )
            );
        }

        return $this->getUrl('rss', ['url' => $this->rubric->getURL()]);
    }
}
 