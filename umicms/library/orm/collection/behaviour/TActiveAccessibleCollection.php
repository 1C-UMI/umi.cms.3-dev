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
        if ($object instanceof CmsHierarchicObject && $this instanceof CmsHierarchicCollection) {
            $ancestry = $this->selectAncestry($object);
            /**
             * @var CmsHierarchicObject $parent
             */
            foreach($ancestry as $parent) {
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
        if ($object instanceof CmsHierarchicObject && $this instanceof CmsHierarchicCollection) {
            $descendants = $this->selectDescendants($object);
            foreach($descendants as $descendant) {
                $descendant->getProperty(IActiveAccessibleObject::FIELD_ACTIVE)->setValue(false);
            }
        }

        $object->getProperty(IActiveAccessibleObject::FIELD_ACTIVE)->setValue(false);

        return $this;
    }
}
 