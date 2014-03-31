<?php
/**
 * UMI.Framework (http://umi-framework.ru/)
 *
 * @link      http://github.com/Umisoft/framework for the canonical source repository
 * @copyright Copyright (c) 2007-2013 Umisoft ltd. (http://umisoft.ru/)
 * @license   http://umi-framework.ru/license/bsd-3 BSD-3 License
 */

namespace umicms\project\module\users\api\object;

use umi\acl\IAclResource;
use umi\hmvc\acl\IComponentRoleResolver;
use umi\hmvc\component\IComponent;
use umi\orm\objectset\IManyToManyObjectSet;
use umicms\orm\object\CmsObject;

/**
 * Базовый класс пользователя.
 *
 * @property IManyToManyObjectSet $groups группы, в которые входит пользователь
 */
abstract class BaseUser extends CmsObject implements IComponentRoleResolver
{

    /**
     * @var array $roles список ролей пользователя по компонентам.
     */
    private $roles;

    /**
     * Имя поля для хранения групп, в которые входит пользователь
     */
    const FIELD_GROUPS = 'groups';

    /**
     * {@inheritdoc}
     */
    public function getRoleNames(IComponent $component)
    {
        $roles = $this->getAllRoles();

        return isset($roles[$component->getPath()]) ? $roles[$component->getPath()] : [];
    }

    /**
     * Проверяет наличие роли для компонента.
     * @param IComponent $component компонент
     * @param string $roleName имя роли
     * @return bool
     */
    public function hasRole(IComponent $component, $roleName)
    {
        /**
         * @var IAclResource|IComponent $component
         */
        if ($component instanceof IAclResource) {
            return $component->getAclManager()->isAllowed($roleName, $component);
        }

        return true;
    }

    /**
     * Возвращает список всех ролей пользователя по компонентам.
     * @return array
     */
    protected function getAllRoles()
    {
        if (is_null($this->roles)) {
            $roles = [];
            /**
             * @var UserGroup $group
             */
            foreach ($this->groups as $group) {
                $roles = array_merge_recursive($roles, $group->roles);
            }

            $this->roles = $roles;
        }

        return $this->roles;
    }
}
 