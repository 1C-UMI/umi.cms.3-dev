<?php
/**
 * UMI.Framework (http://umi-framework.ru/)
 *
 * @link      http://github.com/Umisoft/framework for the canonical source repository
 * @copyright Copyright (c) 2007-2013 Umisoft ltd. (http://umisoft.ru/)
 * @license   http://umi-framework.ru/license/bsd-3 BSD-3 License
 */

namespace umicms\project\module\news\site\item\controller;

use umicms\exception\InvalidArgumentException;
use umicms\orm\object\ICmsPage;
use umicms\project\module\news\api\object\NewsItem;
use umicms\project\site\controller\DefaultPageController;

/**
 * Контроллер для отображения поста
 */
class PageController extends DefaultPageController
{
    /**
     * Возвращает хлебные крошки для текущего элемента.
     * @param ICmsPage $page
     * @throws InvalidArgumentException в случае, если не удалось получить хлебные крошки
     * @return NewsItem[]
     */
    protected function getNavigationAncestry(ICmsPage $page)
    {
        if (!$page instanceof NewsItem) {
            throw new InvalidArgumentException($this->translate(
                'Cannot get navigation ancestry. Page should be instance of NewsItem.'
            ));
        }

        $breadcrumbs = [];
        if (!is_null($page->rubric)) {
            $breadcrumbs = $page->rubric->getAncestry()->result()->fetchAll();
            $breadcrumbs[] = $page->rubric;
        }

        return $breadcrumbs;
    }
}
