<?php
/**
 * UMI.Framework (http://umi-framework.ru/)
 *
 * @link      http://github.com/Umisoft/framework for the canonical source repository
 * @copyright Copyright (c) 2007-2013 Umisoft ltd. (http://umisoft.ru/)
 * @license   http://umi-framework.ru/license/bsd-3 BSD-3 License
 */

namespace umicms\project\module\news\site\subject\widget;

use umicms\project\module\news\api\NewsApi;
use umicms\hmvc\widget\BaseWidget;

/**
 * Виджет для вывода URL на RSS-ленту по сюжету.
 */
class SubjectNewsRssUrlWidget extends BaseWidget
{
    /**
     * @var array $rubricGuid GUID новостного сюжета, по которым формируется RSS-лента.
     */
    public $subjectGuid;

    /**
     * @var NewsApi $api API модуля "Новости"
     */
    protected $api;

    /**
     * Конструктор.
     * @param NewsApi $newsApi API модуля "Новости"
     */
    public function __construct(NewsApi $newsApi)
    {
        $this->api = $newsApi;
    }

    /**
     * {@inheritdoc}
     */
    public function __invoke()
    {
        $slug = $this->api->subject()->get($this->subjectGuid)->slug;
        return $this->getUrl('rss', ['slug' => $slug]);
    }
}
 