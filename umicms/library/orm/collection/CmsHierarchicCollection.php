<?php
/**
 * This file is part of UMI.CMS.
 *
 * @link http://umi-cms.ru
 * @copyright Copyright (c) 2007-2014 Umisoft ltd. (http://umisoft.ru)
 * @license For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace umicms\orm\collection;

use umi\dbal\builder\ISelectBuilder;
use umi\orm\collection\SimpleHierarchicCollection;
use umi\orm\metadata\field\special\MaterializedPathField;
use umicms\exception\InvalidArgumentException;
use umicms\orm\object\CmsHierarchicObject;
use umicms\orm\selector\CmsSelector;

/**
 * {@inheritdoc}
 */
class CmsHierarchicCollection extends SimpleHierarchicCollection implements ICmsCollection
{
    use TCmsCollection;

    /**
     * Возвращает селектор для выбора дочерних объектов для указанного.
     * @param CmsHierarchicObject|null $object объект, либо null, если нужна выборка от корня
     * @return CmsSelector
     */
    public function selectChildren(CmsHierarchicObject $object = null)
    {
        return $this->select()
            ->where(CmsHierarchicObject::FIELD_PARENT)->equals($object)
            ->orderBy(CmsHierarchicObject::FIELD_HIERARCHY_LEVEL, CmsSelector::ORDER_ASC)
            ->orderBy(CmsHierarchicObject::FIELD_ORDER);
    }

    /**
     * Возвращает селектор для выбора потомков указанного объекта, либо от корня.
     * @param CmsHierarchicObject|null $object объект, либо null, если нужна выборка от корня
     * @param int|null $depth глубина выбора потомков, по умолчанию выбираются на всю глубину
     * @throws InvalidArgumentException если глубина указана не верно
     * @return CmsSelector|CmsHierarchicObject[]
     */
    public function selectDescendants(CmsHierarchicObject $object = null, $depth = null)
    {
        if (!is_null($depth) && !is_int($depth) && $depth < 0) {
            throw new InvalidArgumentException($this->translate(
                'Cannot select descendants. Invalid argument "depth" value.'
            ));
        }

        if (!is_null($object) && $depth === 1) {
            return $this->selectChildren($object);
        }

        $selector = $this->select();

        if ($object) {
            $selector
                ->where(CmsHierarchicObject::FIELD_MPATH)
                ->like($object->getMaterializedPath() . MaterializedPathField::MPATH_SEPARATOR . '%');
        }

        if ($depth) {
            if ($object) {
                $selector
                    ->where(CmsHierarchicObject::FIELD_HIERARCHY_LEVEL)
                    ->equalsOrLess($object->getLevel() + $depth);
            } else {
                $selector
                    ->where(CmsHierarchicObject::FIELD_HIERARCHY_LEVEL)
                    ->equalsOrLess($depth);
            }
        }

        $selector->orderBy(CmsHierarchicObject::FIELD_ORDER);

        return $selector;
    }

    /**
     * Разрешено ли использование slug.
     * @param CmsHierarchicObject $object объект, слаг которого необходимо проверить
     * @return bool
     */
    public function isAllowedSlug(CmsHierarchicObject $object)
    {
        if ($object->getIsNew() && $this->hasSlug($object)) {
            return false;
        } else {
            return true;
        }
    }

    /**
     * Проверяет используется ли slug, учитывая родителя объекта.
     * @param CmsHierarchicObject $object объект, для которого необходимо проверить уникальность slug'а
     * @return bool
     */
    protected function hasSlug(CmsHierarchicObject $object)
    {
        $pidColumn = $this->getMetadata()->getField(CmsHierarchicObject::FIELD_PARENT)->getColumnName();
        $slugColumn = $this->getMetadata()->getField(CmsHierarchicObject::FIELD_SLUG)->getColumnName();

        /** @var ISelectBuilder $select */
        $select = $this->getMetadata()->getCollectionDataSource()
            ->select($pidColumn, $slugColumn)
            ->where()
            ->expr($slugColumn, '=', ':slug')
            ->bindString(':slug', $object->getProperty(CmsHierarchicObject::FIELD_SLUG)->getValue());

        $parent = $object->getProperty(CmsHierarchicObject::FIELD_PARENT)->getValue();
        if ($parent instanceof CmsHierarchicObject) {
            $select
                ->expr($pidColumn, '=', ':pid')
                ->bindString(
                    ':pid',
                    $parent->getId()
                );
        } else {
            $select
                ->expr($pidColumn, 'IS', ':pid')
                ->bindNull(':pid');
        }

        return (bool) $select->getTotal();
    }
}
