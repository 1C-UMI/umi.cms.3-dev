<?php
/**
 * UMI.Framework (http://umi-framework.ru/)
 *
 * @link      http://github.com/Umisoft/framework for the canonical source repository
 * @copyright Copyright (c) 2007-2013 Umisoft ltd. (http://umisoft.ru/)
 * @license   http://umi-framework.ru/license/bsd-3 BSD-3 License
 */

namespace umicms\project\module\blog\site\post\widget;

use umicms\hmvc\widget\BaseSecureWidget;
use umicms\project\module\blog\api\BlogModule;

/**
 * Виджет для вывода URL на RSS-ленту по рубрике.
 */
class BlogPostListRssUrlWidget extends BaseSecureWidget
{
    /**
     * @var string $template имя шаблона, по которому выводится виджет
     */
    public $template = 'rssLink';

    /**
     * @var BlogModule $api API модуля "Новости"
     */
    protected $api;

    /**
     * Конструктор.
     * @param BlogModule $newsApi API модуля "Новости"
     */
    public function __construct(BlogModule $newsApi)
    {
        $this->api = $newsApi;
    }

    /**
     * {@inheritdoc}
     */
    public function __invoke()
    {
        return $this->createResult(
            $this->template,
            [
                'url' => $this->getUrl('rss')
            ]
        );
    }
}
 