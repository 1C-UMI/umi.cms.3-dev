<?php
/**
 * UMI.Framework (http://umi-framework.ru/)
 *
 * @link      http://github.com/Umisoft/framework for the canonical source repository
 * @copyright Copyright (c) 2007-2013 Umisoft ltd. (http://umisoft.ru/)
 * @license   http://umi-framework.ru/license/bsd-3 BSD-3 License
 */

namespace umicms\project\module\news\api;

use umi\orm\selector\ISelector;
use umicms\api\BaseComplexApi;
use umicms\api\IPublicApi;
use umicms\project\module\news\object\NewsItem;
use umicms\project\module\news\object\NewsRubric;
use umicms\project\module\news\object\NewsSubject;

/**
 * Публичное API модуля "Новости"
 */
class NewsPublicApi extends BaseComplexApi implements IPublicApi
{
    /**
     * Возвращает API для работы с новостями.
     * @return NewsItemApi
     */
    public function news()
    {
        return $this->getApi('umicms\project\module\news\api\NewsItemApi');
    }

    /**
     * Возвращает API для работы с новостными рубриками.
     * @return NewsRubricApi
     */
    public function rubric()
    {
        return $this->getApi('umicms\project\module\news\api\NewsRubricApi');
    }

    /**
     * Возвращает API для работы с новостными сюжетами.
     * @return NewsSubjectApi
     */
    public function subject()
    {
        return $this->getApi('umicms\project\module\news\api\NewsSubjectApi');
    }

    /**
     * Возвращает селектор для выборки новостей указанных рубрик.
     * @param array $rubricGuids список GUID рубрик новостей
     * @param int $limit максимальное количество новостей
     * @return ISelector
     */
    public function getRubricNews($rubricGuids = [], $limit = null)
    {
        $news = $this->news()->select()
            ->orderBy(NewsItem::FIELD_DATE, ISelector::ORDER_DESC);

        if (count($rubricGuids)) {
            $news->where(NewsItem::FIELD_RUBRIC . ISelector::FIELD_SEPARATOR . NewsRubric::FIELD_GUID)
                ->in($rubricGuids);
        }

        if ($limit) {
            $news->limit($limit);
        }

        return $news;
    }

    /**
     * Возвращает селектор для выборки новостей указанных сюжетов.
     * @param array $subjectGuids список GUID сюжетов новостей
     * @param int $limit максимальное количество новостей
     * @return ISelector
     */
    public function getSubjectNews($subjectGuids = [], $limit = null)
    {
        $news = $this->news()->select()
            ->orderBy(NewsItem::FIELD_DATE, ISelector::ORDER_DESC);

        if (count($subjectGuids)) {
            $news->where(NewsItem::FIELD_SUBJECTS . ISelector::FIELD_SEPARATOR . NewsSubject::FIELD_GUID)
                ->in($subjectGuids);
        }

        if ($limit) {
            $news->limit($limit);
        }

        return $news;
    }

    /**
     * Возвращает селектор для выборки новостных рубрик в указанной рубрике.
     * @param string|null $parentRubricGuid GUID рубрики
     * @param int $limit максимальное количество рубрик
     * @return ISelector
     */
    public function getRubrics($parentRubricGuid = null, $limit = null)
    {
        $parent = $parentRubricGuid ? $this->rubric()->get($parentRubricGuid) : null;

        $rubrics = $this->rubric()->selectChildren($parent);

        if ($limit) {
            $rubrics->limit($limit);
        }

        return $rubrics;
    }

    /**
     * Возвращает селектор для выборки новостных сюжетов.
     * @param int $limit максимальное количество сюжетов
     * @return ISelector
     */
    public function getSubjects($limit = null)
    {
        $rubrics = $this->subject()->select();

        if ($limit) {
            $rubrics->limit($limit);
        }

        return $rubrics;
    }

}