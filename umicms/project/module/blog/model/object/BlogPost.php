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

use DateTime;
use umi\hmvc\acl\ComponentRoleProvider;
use umi\orm\metadata\field\relation\HasManyRelationField;
use umi\orm\object\property\calculable\ICalculableProperty;
use umi\orm\collection\ICollection;
use umi\orm\metadata\IObjectType;
use umi\orm\object\property\IPropertyFactory;
use umi\orm\objectset\IManyToManyObjectSet;
use umi\orm\objectset\IObjectSet;
use umicms\orm\collection\ICmsCollection;
use umicms\orm\object\CmsObject;
use umicms\orm\object\ICmsPage;
use umicms\orm\object\TCmsPage;
use umicms\project\module\blog\model\collection\BlogCommentCollection;
use umicms\project\module\blog\model\collection\BlogPostCollection;
use umicms\project\module\users\model\object\RegisteredUser;
use umicms\project\module\users\model\UsersModule;

/**
 * Пост блога.
 *
 * @property string $contentsRaw необработанный контент поста
 * @property BlogAuthor $author автор поста
 * @property string $announcement анонс
 * @property BlogCategory|null $category категория поста
 * @property IManyToManyObjectSet $tags теги, к которым относится пост
 * @property DateTime $publishTime дата публикации поста
 * @property string $publishStatus статус публикации поста
 * @property IObjectSet $comments комментарии
 * @property int $commentsCount количество комментариев к посту
 * @property string $oldUrl старый URL поста
 * @property string $source источник поста
 */
class BlogPost extends CmsObject implements ICmsPage
{
    use TCmsPage;

    /**
     * Имя поля для хранения необработанного контента поста
     */
    const FIELD_PAGE_CONTENTS_RAW = 'contentsRaw';
    /**
     * Имя поля для хранения автора поста
     */
    const FIELD_AUTHOR = 'author';
    /**
     * Имя поля для хранения анонса поста
     */
    const FIELD_ANNOUNCEMENT = 'announcement';
    /**
     * Имя поля для хранения названия категории, к которой относится пост
     */
    const FIELD_CATEGORY = 'category';
    /**
     * Имя поля для хранения тэгов, относящихся к посту
     */
    const FIELD_TAGS = 'tags';
    /**
     * Имя поля для хранения даты и времени публикации поста
     */
    const FIELD_PUBLISH_TIME = 'publishTime';
    /**
     * Имя поля для хранения статуса публикации поста
     */
    const FIELD_PUBLISH_STATUS = 'publishStatus';
    /**
     * Имя поля для хранения количества комментариев к посту
     */
    const FIELD_COMMENTS_COUNT = 'commentsCount';
    /**
     * Имя поля для хранения комментариев к посту
     */
    const FIELD_COMMENTS = 'comments';
    /**
     * Имя поля для хранения источника поста
     */
    const FIELD_SOURCE = 'source';
    /**
     * Форма добавления поста
     */
    const FORM_ADD_POST = 'addPost';
    /**
     * Форма редактирования поста
     */
    const FORM_EDIT_POST = 'editPost';
    /**
     * Форма публикации поста
     */
    const FORM_PUBLISH_POST = 'publish';
    /**
     * Форма отправки поста на модерацию
     */
    const FORM_MODERATE_POST = 'moderate';
    /**
     * Форма отклонения поста для публикации
     */
    const FORM_REJECT_POST = 'reject';
    /**
     * Форма помещения поста в черновики
     */
    const FORM_DRAFT_POST = 'draft';
    /**
     * Статус поста: черновик
     */
    const POST_STATUS_DRAFT = 'draft';
    /**
     * Статус поста: опубликован
     */
    const POST_STATUS_PUBLISHED = 'published';
    /**
     * Статус поста: отклонен
     */
    const POST_STATUS_REJECTED = 'rejected';
    /**
     * Статус поста: требует модерации
     */
    const POST_STATUS_NEED_MODERATE = 'moderate';

    /**
     * @var UsersModule $usersModule модуль "Пользователи"
     */
    private $usersModule;

    /**
     * Конструктор.
     * @param ICollection $collection
     * @param IObjectType $objectType
     * @param IPropertyFactory $propertyFactory
     * @param UsersModule $usersModule
     */
    public function __construct(ICollection $collection, IObjectType $objectType, IPropertyFactory $propertyFactory, UsersModule $usersModule)
    {
        parent::__construct($collection, $objectType, $propertyFactory);

        $this->usersModule = $usersModule;
    }

    /**
     * Мутатор для контентного поля.
     * @param string $contents контент поста
     * @param string $locale локаль
     * @return $this
     */
    public function setContents($contents, $locale)
    {
        $this->getProperty(self::FIELD_PAGE_CONTENTS, $locale)
            ->setValue($contents);

        $this->getProperty(self::FIELD_PAGE_CONTENTS_RAW, $locale)
            ->setValue($contents);

        return $this;
    }

    /**
     * Возвращает URL поста.
     * @param bool $isAbsolute абсолютный ли URL
     * @return string
     */
    public function getPageUrl($isAbsolute = false)
    {
        switch ($this->publishStatus) {
            case self::POST_STATUS_DRAFT : {
                $handler = BlogPostCollection::HANDLER_DRAFT;
                break;
            }
            case self::POST_STATUS_REJECTED : {
                $handler = BlogPostCollection::HANDLER_REJECT;
                break;
            }
            case self::POST_STATUS_NEED_MODERATE : {
                if ($this->usersModule->getCurrentUser() === $this->author->profile) {
                    $handler = BlogPostCollection::HANDLER_MODERATE_OWN;
                } else {
                    $handler = BlogPostCollection::HANDLER_MODERATE_ALL;
                }
                break;
            }
            default : {
                $handler = ICmsCollection::HANDLER_SITE;
            }
        }

        return $this->getUrlManager()->getSitePageUrl($this, $isAbsolute, $handler);
    }

    /**
     * {@inheritdoc}
     */
    public function getAclResourceName()
    {
        return 'model:blogPost';
    }

    /**
     * {@inheritdoc}
     */
    public function isAllowed($role, $operationName, array $assertions)
    {
        if (!$role instanceof ComponentRoleProvider || !$role->getIdentity() instanceof RegisteredUser) {
            return false;
        }

        /**
         * @var RegisteredUser $user
         */
        $user = $role->getIdentity();
        $result = true;

        foreach ($assertions as $assertion) {
            switch($assertion) {
                case 'own': {
                    $result = $result && ($this->author->profile === $user);
                    break;
                }
                default: {
                return false;
                }
            }
        }

        return $result;
    }

    /**
     * {@inheritdoc}
     */
    public function isInIndex()
    {
        return ($this->publishStatus === self::POST_STATUS_PUBLISHED) && $this->active && !$this->trashed;
    }

    /**
     * Изменяет статус публикации.
     * @param string|null $value статус публикации
     * @return $this
     */
    public function setPublishStatus($value)
    {
        $publishStatusProperty = $this->getProperty(self::FIELD_PUBLISH_STATUS);
        $publishStatusProperty->setValue($value);

        if ($publishStatusProperty->getIsModified()) {
            if ($this->author instanceof BlogAuthor) {
                $this->author->recalculateCommentsCount();
            }
        }

        return $this;
    }

    /**
     * Возвращает локализованное значение статуса публикации.
     * @return string
     */
    public function getPublishStatus()
    {
        return $this->translate(
            $this->getProperty(self::FIELD_PUBLISH_STATUS)->getValue()
        );
    }

    /**
     * Изменяет автора комментария.
     * @param BlogAuthor|null $value автор
     * @return $this
     */
    public function setAuthor($value)
    {
        if ($this->author instanceof BlogAuthor) {
            $this->author->recalculateCommentsCount();
        }

        $this->getProperty(self::FIELD_AUTHOR)->setValue($value);

        if ($value instanceof BlogAuthor) {
            $value->recalculateCommentsCount();
        }

        return $this;
    }

    /**
     * Помечает количество комментариев для пересчета.
     * @return $this
     */
    public function recalculateCommentsCount()
    {
        /**
         * @var ICalculableProperty $commentsCountProperty
         */
        $commentsCountProperty = $this->getProperty(self::FIELD_COMMENTS_COUNT);
        $commentsCountProperty->recalculate();

        return $this;
    }

    /**
     * Вычисляет количество опубликованных комментариев автора.
     * @return int
     */
    public function calculateCommentsCount()
    {
        /**
         * @var HasManyRelationField $commentsField
         */
        $commentsField = $this->getProperty(self::FIELD_COMMENTS)->getField();
        /**
         * @var BlogCommentCollection $commentCollection
         */
        $commentCollection = $commentsField->getTargetCollection();

        return $commentCollection->getInternalSelector()
            ->fields([BlogComment::FIELD_IDENTIFY])
            ->types([BlogComment::TYPE . '*'])
            ->where(BlogComment::FIELD_POST)->equals($this)
            ->where(BlogComment::FIELD_PUBLISH_STATUS)->equals(BlogComment::COMMENT_STATUS_PUBLISHED)
            ->where(BlogComment::FIELD_TRASHED)->equals(false)
            ->getTotal();
    }
}
