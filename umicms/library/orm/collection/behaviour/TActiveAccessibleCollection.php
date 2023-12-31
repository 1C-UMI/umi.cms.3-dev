<?php
/**
 * This file is part of UMI.CMS.
 *
 * @link http://umi-cms.ru
 * @copyright Copyright (c) 2007-2014 Umisoft ltd. (http://umisoft.ru)
 * @license For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace umicms\orm\collection\behaviour;

use umi\orm\object\property\calculable\ICalculableProperty;
use umicms\orm\collection\CmsHierarchicCollection;
use umicms\orm\object\behaviour\IActiveAccessibleObject;
use umicms\orm\object\CmsHierarchicObject;
use umicms\orm\object\ICmsObject;
use umicms\orm\selector\CmsSelector;

/**
 * Трейт для коллекций, поддерживающих управлению активностью объекта на сайте.
 */
trait TActiveAccessibleCollection
{
    /**
     * @see ICmsCollection::getInternalSelector()
     * @return CmsSelector|ICmsObject[]
     */
    abstract public function getInternalSelector();

    /**
     * @see IActiveAccessibleCollection::selectActive()
     */
    public function selectActive()
    {
        return $this->getInternalSelector()
            ->where(IActiveAccessibleObject::FIELD_ACTIVE)->equals(true);
    }

    /**
     * @see IActiveAccessibleCollection::selectInactive()
     */
    public function selectInactive()
    {
        return $this->getInternalSelector()
            ->where(IActiveAccessibleObject::FIELD_ACTIVE)->equals(false);
    }

    /**
     * @see IActiveAccessibleCollection::activate()
     */
    public function activate(IActiveAccessibleObject $object)
    {
        if ($object->active) {
            return $this;
        }

        if ($object instanceof CmsHierarchicObject && $this instanceof CmsHierarchicCollection) {
            $ancestry = $this->selectAncestry($object);
            /**
             * @var CmsHierarchicObject $parent
             */
            foreach($ancestry as $parent) {

                /**
                 * @var ICalculableProperty $siteChildCount
                 */
                $siteChildCount = $parent->getProperty(CmsHierarchicObject::FIELD_SITE_CHILD_COUNT);
                $siteChildCount->recalculate();

                $parent->getProperty(IActiveAccessibleObject::FIELD_ACTIVE)->setValue(true);
            }
        }

        $object->getProperty(IActiveAccessibleObject::FIELD_ACTIVE)->setValue(true);

        return $this;
    }

    /**
     * @see IActiveAccessibleCollection::deactivate()
     */
    public function deactivate(IActiveAccessibleObject $object)
    {
        if (!$object->active) {
            return $this;
        }

        if ($object instanceof CmsHierarchicObject && $this instanceof CmsHierarchicCollection) {
            if ($parent = $object->getParent()) {
                /**
                 * @var ICalculableProperty $siteChildCount
                 */
                $siteChildCount = $parent->getProperty(CmsHierarchicObject::FIELD_SITE_CHILD_COUNT);
                $siteChildCount->recalculate();
            }

            $descendants = $this->selectDescendants($object);
            /**
             * @var CmsHierarchicObject $descendant
             */
            foreach($descendants as $descendant) {
                $siteChildCount = $descendant->getParent()->getProperty(CmsHierarchicObject::FIELD_SITE_CHILD_COUNT);
                $siteChildCount->recalculate();

                $descendant->getProperty(IActiveAccessibleObject::FIELD_ACTIVE)->setValue(false);
            }
        }

        $object->getProperty(IActiveAccessibleObject::FIELD_ACTIVE)->setValue(false);

        return $this;
    }
}
 