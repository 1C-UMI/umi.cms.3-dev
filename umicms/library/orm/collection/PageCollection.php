<?php
/**
 * UMI.Framework (http://umi-framework.ru/)
 *
 * @link      http://github.com/Umisoft/framework for the canonical source repository
 * @copyright Copyright (c) 2007-2013 Umisoft ltd. (http://umisoft.ru/)
 * @license   http://umi-framework.ru/license/bsd-3 BSD-3 License
 */

namespace umicms\orm\collection;

use umi\dbal\builder\SelectBuilder;
use umi\i18n\ILocalesService;
use umi\orm\metadata\field\IField;
use umicms\exception\NonexistentEntityException;
use umicms\exception\RuntimeException;
use umicms\orm\collection\behaviour\TActiveAccessibleCollection;
use umicms\orm\collection\behaviour\TRecoverableCollection;
use umicms\orm\collection\behaviour\TRecyclableCollection;
use umicms\orm\object\ICmsPage;

/**
 * Коллекция объектов, которые имеют страницу на сайте.
 */
class PageCollection extends SimpleCollection implements ICmsPageCollection
{
    use TRecoverableCollection;
    use TRecyclableCollection;
    use TActiveAccessibleCollection;

    /**
     * {@inheritdoc}
     */
    public function getByUri($uri, $localization = ILocalesService::LOCALE_CURRENT)
    {
        $selector = $this->select()
            ->localization($localization)
            ->where(ICmsPage::FIELD_PAGE_SLUG)
            ->equals($uri);

        $page = $selector->getResult()->fetch();

        if (!$page instanceof ICmsPage) {
            throw new NonexistentEntityException($this->translate(
                'Cannot get page by slug "{slug}" from collection "{collection}".',
                ['slug' => $uri, 'collection' => $this->getName()]
            ));
        }

        return $page;
    }

    /**
     * Возвращает поле, которое используется у базового типа коллекции для хранения последней части ЧПУ
     * @return IField
     */
    public function getSlugField()
    {
        return $this->getRequiredField(ICmsPage::FIELD_PAGE_SLUG);
    }

    /**
     * Изменяет последнюю часть ЧПУ у объекта.
     * @param ICmsPage $object изменяемый объект
     * @param string $slug последняя часть ЧПУ
     * @return self
     */
    public function changeSlug(ICmsPage $object, $slug)
    {
        $this->checkIfChangeSlugPossible($object, $this, $slug);
        $object->getProperty(ICmsPage::FIELD_PAGE_SLUG)->setValue($slug);
        $this->getObjectPersister()->commit();

        return $this;
    }

    /**
     * Проверяет, возможно ли изменение последней части ЧПУ у объекта
     * @param ICmsPage $object изменяемый объект
     * @param string $newSlug новая последняя часть ЧПУ
     * @throws RuntimeException если при изменении возможны конфликты
     * @return $this
     */
    protected function checkIfChangeSlugPossible(ICmsPage $object, $newSlug)
    {
        $idField = $this->getIdentifyField();
        $slugField = $this->getSlugField();

        /** @var $selectBuilder SelectBuilder */
        $selectBuilder = $this
            ->getMetadata()
            ->getCollectionDataSource()
            ->select($idField->getColumnName())
            ->where()
            ->expr($slugField->getColumnName(), '=', ':' . $slugField->getName())
            ->expr($idField->getColumnName(), '!=', ':' . $idField->getName())
            ->bindValue(':' . $idField->getName(), $object->getId(), $idField->getDataType())
            ->bindValue(':' . $slugField->getName(), $newSlug, $slugField->getDataType());

        $selectBuilder->execute();
        $slugConflict = $selectBuilder->getTotal();

        if ($slugConflict) {
            throw new RuntimeException($this->translate(
                'Cannot change slug for object with id "{id}". Slug {slug} is not unique.',
                ['id' => $object->getId(), 'slug' => $newSlug]
            ));
        }
        return $this;
    }
}
 