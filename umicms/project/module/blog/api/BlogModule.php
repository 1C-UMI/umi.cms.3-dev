<?php
/**
 * UMI.Framework (http://umi-framework.ru/)
 *
 * @link      http://github.com/Umisoft/framework for the canonical source repository
 * @copyright Copyright (c) 2007-2013 Umisoft ltd. (http://umisoft.ru/)
 * @license   http://umi-framework.ru/license/bsd-3 BSD-3 License
 */

namespace umicms\project\module\blog\api;

use umi\orm\selector\condition\IFieldConditionGroup;
use umi\rss\IRssFeed;
use umi\rss\IRssFeedAware;
use umi\rss\RssItem;
use umi\rss\TRssFeedAware;
use umicms\exception\NonexistentEntityException;
use umicms\exception\RuntimeException;
use umicms\hmvc\url\IUrlManagerAware;
use umicms\hmvc\url\TUrlManagerAware;
use umicms\module\BaseModule;
use umicms\orm\selector\CmsSelector;
use umicms\project\module\blog\api\collection\BlogAuthorCollection;
use umicms\project\module\blog\api\collection\BlogCategoryCollection;
use umicms\project\module\blog\api\collection\BlogCommentCollection;
use umicms\project\module\blog\api\collection\BlogPostCollection;
use umicms\project\module\blog\api\collection\BlogRssImportScenarioCollection;
use umicms\project\module\blog\api\collection\BlogTagCollection;
use umicms\project\module\blog\api\object\BlogAuthor;
use umicms\project\module\blog\api\object\BlogCategory;
use umicms\project\module\blog\api\object\BlogComment;
use umicms\project\module\blog\api\object\BlogPost;
use umicms\project\module\blog\api\object\BlogRssImportScenario;
use umicms\project\module\blog\api\object\BlogTag;

/**
 * Публичное API модуля "Блоги"
 */
class BlogModule extends BaseModule implements IRssFeedAware, IUrlManagerAware
{
    use TRssFeedAware;
    use TUrlManagerAware;

    /**
     * Возвращает коллекцию постов.
     * @return BlogPostCollection
     */
    public function post()
    {
        return $this->getCollection('blogPost');
    }

    /**
     * Возвращает коллекцию авторов.
     * @return BlogAuthorCollection
     */
    public function author()
    {
        return $this->getCollection('blogAuthor');
    }

    /**
     * Возвращает коллекцию категорий.
     * @return BlogCategoryCollection
     */
    public function category()
    {
        return $this->getCollection('blogCategory');
    }

    /**
     * Возвращает коллекцию тэгов.
     * @return BlogTagCollection
     */
    public function tag()
    {
        return $this->getCollection('blogTag');
    }

    /**
     * Возвращает коллекцию импортируемых RSS-лент.
     * @return BlogRssImportScenarioCollection
     */
    public function rssImport()
    {
        return $this->getCollection('blogRssImportScenario');
    }

    /**
     * Возвращает коллекцию комментариев.
     * @return BlogCommentCollection
     */
    public function comment()
    {
        return $this->getCollection('blogComment');
    }

    /**
     * Возвращает селектор для выборки постов.
     * @param int $limit максимальное количество постов
     * @return CmsSelector|BlogPost[]
     */
    public function getPosts($limit = null)
    {
        $posts = $this->post()->select()
            ->orderBy(BlogPost::FIELD_PUBLISH_TIME, CmsSelector::ORDER_DESC);

        if ($limit) {
            $posts->limit($limit);
        }

        return $posts;
    }

    /**
     * Строит RSS-ленту.
     * @param string $title заголовок RSS-ленты
     * @param string $description описание RSS-ленты
     * @param CmsSelector|BlogPost[] $postSelector список постов
     * @return IRssFeed
     */
    public function getPostRssFeed($title, $description, CmsSelector $postSelector)
    {
        $rssFeed = $this->createRssFeed(
            $this->getUrlManager()->getProjectUrl(true),
            $title,
            $description
        );

        foreach ($postSelector as $blogPost) {
            $rssFeed->addItem()
                ->setTitle($blogPost->h1)
                ->setContent($blogPost->announcement)
                ->setUrl($blogPost->getPageUrl(true))
                ->setDate($blogPost->publishTime);
        }

        return $rssFeed;
    }

    /**
     * Возвращает селектор для выборки постов указанных категорий.
     * @param BlogCategory[] $categories список GUID категорий блога
     * @param int $limit максимальное количество постов
     * @return CmsSelector|BlogCategory[]
     */
    public function getCategoryPost(array $categories = [], $limit = null)
    {
        $posts = $this->getPosts($limit);

        $posts->begin(IFieldConditionGroup::MODE_OR);
        foreach ($categories as $category) {
            $posts->where(BlogPost::FIELD_CATEGORY)->equals($category);
        }
        $posts->end();

        return $posts;
    }

    /**
     * Возвращает селектор для выборки постов указанных тэгов.
     * @param BlogTag[] $tags список GUID тэгов постов
     * @param int $limit максимальное количество постов
     * @return CmsSelector|BlogPost[]
     */
    public function getTagPost(array $tags = [], $limit = null)
    {
        $posts = $this->getPosts($limit);

        $posts->begin(IFieldConditionGroup::MODE_OR);
        foreach ($tags as $tag) {
            $posts->where(BlogPost::FIELD_TAGS)->equals($tag);
        }
        $posts->end();

        return $posts;
    }

    /**
     * Возвращает селектор для выборки постов в указанной категории.
     * @param BlogCategory|null $parentCategory GUID категории
     * @param int $limit максимальное количество категорий
     * @return CmsSelector|BlogPost[]
     */
    public function getCategories(BlogCategory $parentCategory = null, $limit = null)
    {
        $categories = $this->category()->selectChildren($parentCategory);

        if ($limit) {
            $categories->limit($limit);
        }

        return $categories;
    }

    /**
     * Возвращает селектор для выборки тэгов.
     * @param int $limit максимальное количество тэгов
     * @return CmsSelector|BlogTag[]
     */
    public function getTags($limit = null)
    {
        $tags = $this->tag()->select();

        if ($limit) {
            $tags->limit($limit);
        }

        return $tags;
    }

    /**
     * Возвращает селектор для выборки авторов.
     * @param int $limit максимальное количество авторов
     * @return CmsSelector|BlogTag[]
     */
    public function getAuthors($limit = null)
    {
        $authors = $this->author()->select();

        if ($limit) {
            $authors->limit($limit);
        }

        return $authors;
    }

    /**
     * Возвращает селектор для выбора постов автора.
     * @param BlogAuthor[] $authors категория
     * @return CmsSelector|BlogPost[]
     */
    public function getPostsByAuthor(array $authors = [])
    {
        $posts = $this->getPosts();

        $posts->begin(IFieldConditionGroup::MODE_OR);
        foreach ($authors as $author) {
            $posts->where(BlogPost::FIELD_AUTHOR)->equals($author);
        }
        $posts->end();

        return $posts;
    }

    /**
     * Возвращает селектор для выбора постов категорий.
     * @param BlogCategory[] $categories категории блога
     * @return CmsSelector|BlogPost[]
     */
    public function getPostByCategory(array $categories = [])
    {
        $posts = $this->getPosts();

        $posts->begin(IFieldConditionGroup::MODE_OR);
        foreach ($categories as $category) {
            $posts->where(BlogPost::FIELD_CATEGORY)->equals($category);
        }
        $posts->end();

        return $posts;
    }

    /**
     * Возвращает селектор для выборки комментариев.
     * @return CmsSelector|BlogComment[]
     */
    public function getComment()
    {
        $comments = $this->comment()->select()
            ->orderBy(BlogComment::FIELD_PUBLISH_TIME, CmsSelector::ORDER_DESC);

        return $comments;
    }

    /**
     * Возвращает селектор для выборки комментариев к посту.
     * @param BlogPost $blogPost
     * @return CmsSelector|BlogComment[]
     */
    public function getCommentByPost(BlogPost $blogPost)
    {
        $comments = $this->getComment()
            ->where(BlogComment::FIELD_POST)->equals($blogPost);

        return $comments;
    }


    /**
     * Возвращает селектор для выбора постов по тэгу.
     * @param BlogTag[] $tags
     * @return CmsSelector|BlogPost[]
     */
    public function getPostByTag(array $tags = [])
    {
        $posts = $this->getPosts();

        $posts->begin(IFieldConditionGroup::MODE_OR);
        foreach ($tags as $tag) {
            $posts->where(BlogPost::FIELD_TAGS)->equals($tag);
        }
        $posts->end();

        return $posts;
    }

    /**
     * Выполнение импорта постов из RSS-ленты.
     * @param BlogRssImportScenario $blogRssImportScenario импортируемая RSS-лента
     * @throws RuntimeException когда не удалось загрузить RSS-ленту
     * @return $this
     */
    public function importRss(BlogRssImportScenario $blogRssImportScenario)
    {
        try {
            $xml = \GuzzleHttp\get($blogRssImportScenario->rssUrl)
                ->xml(['object' => false]);
        } catch (\Exception $e) {
            throw new RuntimeException(
                $this->translate(
                    'Cannot load RSS feed from url {url}.',
                    ['url' => $blogRssImportScenario->rssUrl]
                ),
                0,
                $e
            );
        }

        $rssFeed = $this->createRssFeedFromSimpleXml($xml);

        foreach ($rssFeed->getRssItems() as $item) {
            $this->importRssItem($item, $blogRssImportScenario);
        }

        return $this;
    }

    /**
     * Импортирует пост из RSS-ленты.
     * @param RssItem $item
     * @param BlogRssImportScenario $blogRssImportScenario
     */
    protected function importRssItem(RssItem $item, BlogRssImportScenario $blogRssImportScenario)
    {
        try {
            $this->post()->getPostBySource($item->getUrl());
        } catch (NonexistentEntityException $e) {
            $blogPost = $this->post()->add();
            if ($item->getTitle()) {
                $blogPost->displayName = $item->getTitle();
                $blogPost->h1 = $item->getTitle();
            }
            if ($item->getContent()) {
                $blogPost->contents = $item->getContent();
            }
            if ($item->getDate()) {
                $blogPost->publishTime->setTimestamp($item->getDate()->getTimestamp());
                $blogPost->publishTime->setTimezone($item->getDate()->getTimezone());
            }
            if ($item->getUrl()) {
                $blogPost->source = $item->getUrl();
            }
            $blogPost->slug = $blogPost->guid;
            $blogPost->category = $blogRssImportScenario->category;

            foreach ($blogRssImportScenario->tags as $subject) {
                $blogPost->tags->attach($subject);
            }
        }
    }

}
