<?php
/**
 * This file is part of UMI.CMS.
 *
 * @link http://umi-cms.ru
 * @copyright Copyright (c) 2007-2014 Umisoft ltd. (http://umisoft.ru)
 * @license For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace umicms\form\element;

use umi\form\element\BaseFormElement;
use umi\form\FormEntityView;
use umi\hmvc\dispatcher\IDispatcher;
use umi\i18n\translator\ITranslator;
use umicms\hmvc\component\BaseCmsComponent;
use umicms\hmvc\dispatcher\CmsDispatcher;
use umicms\project\admin\AdminApplication;
use umicms\project\site\SiteApplication;

/**
 * Класс группы сущностей для редактирования прав.
 */
class Permissions extends BaseFormElement
{
    /**
     * Тип элемента формы.
     */
    const TYPE_NAME = 'permissions';
    /**
     * {@inheritdoc}
     */
    protected $type = 'permissions';
    /**
     * @var CmsDispatcher $dispatcher
     */
    private $dispatcher;
    /**
     * @var ITranslator $translator
     */
    private $translator;

    /**
     * {@inheritdoc}
     */
    public function __construct($name, array $attributes = [], array $options = [], IDispatcher $dispatcher, ITranslator $translator)
    {
        parent::__construct($name, $attributes, $options);
        $this->dispatcher = $dispatcher;
        $this->translator = $translator;
    }

    /**
     * {@inheritdoc}
     */
    protected function extendView(FormEntityView $view)
    {
        parent::extendView($view);

        $view->resources = $this->buildResources();
    }

    /**
     * Возвращает список возможных ресурсов и ролей для них
     * @return array
     */
    private function buildResources()
    {
        $project = $this->dispatcher->getInitialComponent();
        /**
         * @var SiteApplication $siteApplication
         */
        $siteApplication = $project->getChildComponent('site');
        /**
         * @var AdminApplication $adminApplication
         */
        $adminApplication = $project->getChildComponent('admin');

        $resources = [
            $this->buildResourcesForComponent($siteApplication),
            $this->buildResourcesForComponent($adminApplication)
        ];

        return $resources;

    }

    /**
     * Формирует список ресурсов и ролей для них у компонента
     * @param BaseCmsComponent $component
     * @return array
     */
    private function buildResourcesForComponent(BaseCmsComponent $component)
    {
        $aclManager = $component->getAclManager();
        $roles = $aclManager->getRoleList();

        $childComponentNames = $component->getChildComponentNames();

        $resourceInfo = [
            'label' =>
                $this->translator->translate(
                    $component->getDictionariesNames(), 'component:' . $component->getName() . ':displayName'
                ),
            'path' => $component->getPath(),
            'roles' => [],
        ];
        foreach ($roles as $roleName => $parentRoles) {

            $roleInfo = [
                'label' =>
                    $this->translator->translate(
                        $component->getDictionariesNames(), 'role:' . $roleName . ':displayName'
                    ),
                'value' => $roleName
            ];

            foreach ($childComponentNames as $componentName) {
                if ($aclManager->isAllowed($roleName, BaseCmsComponent::ACL_RESOURCE_PREFIX . $componentName)) {
                    $roleInfo['component'] = $this->buildResourcesForComponent(
                        $component->getChildComponent($componentName)
                    );
                }
            }

            $resourceInfo['roles'][] = $roleInfo;
        }

        return $resourceInfo;
    }
}
 