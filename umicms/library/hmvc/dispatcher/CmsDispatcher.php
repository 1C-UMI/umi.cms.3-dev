<?php
/**
 * UMI.Framework (http://umi-framework.ru/)
 *
 * @link      http://github.com/Umisoft/framework for the canonical source repository
 * @copyright Copyright (c) 2007-2013 Umisoft ltd. (http://umisoft.ru/)
 * @license   http://umi-framework.ru/license/bsd-3 BSD-3 License
 */

namespace umicms\hmvc\dispatcher;

use umi\acl\IAclManager;
use umi\hmvc\acl\ComponentRoleProvider;
use umi\hmvc\acl\IComponentRoleResolver;
use umi\hmvc\component\IComponent;
use umi\hmvc\dispatcher\Dispatcher;
use umi\hmvc\exception\acl\ResourceAccessForbiddenException;
use umi\hmvc\view\IView;
use umicms\authentication\CmsAuthStorage;
use umicms\exception\InvalidArgumentException;
use umicms\exception\RuntimeException;
use umicms\exception\UnexpectedValueException;
use umicms\hmvc\url\IUrlManagerAware;
use umicms\hmvc\url\TUrlManagerAware;
use umicms\hmvc\widget\BaseSecureWidget;
use umicms\project\module\users\api\object\Supervisor;

/**
 * {@inheritdoc}
 */
class CmsDispatcher extends Dispatcher implements IUrlManagerAware
{
    use TUrlManagerAware;

    /**
     * Начальный путь компонентов сайта
     */
    const SITE_COMPONENT_PATH = 'project.site';

    /**
     * Возвращает компонент по его пути.
     * @param string $componentPath путь до компонента
     * @throws RuntimeException если не удалось определить компонент
     * @return IComponent
     */
    public function getSiteComponentByPath($componentPath)
    {
        $componentPath = self::SITE_COMPONENT_PATH . IComponent::PATH_SEPARATOR . $componentPath;

        $componentPathParts = explode(IComponent::PATH_SEPARATOR, $componentPath);
        $component = $this->getInitialComponent();

        if ($component->getName() != array_shift($componentPathParts)) {
            throw new RuntimeException(
                $this->translate(
                    'Cannot resolve component path "{path}".',
                    ['path' => $componentPath]
                )
            );
        }

        while ($componentName = array_shift($componentPathParts)) {
            $component = $component->getChildComponent($componentName);
        }

        return $component;
    }

    /**
     * Обрабатывает вызов виджета.
     * @param string $widgetPath путь виджета
     * @param array $params параметры вызова виджета
     * @throws InvalidArgumentException при неверном вызове виджета
     * @return string|IView
     */
    public function executeWidgetByPath($widgetPath, array $params = [])
    {
        $widgetPathParts = explode(IComponent::PATH_SEPARATOR, $widgetPath);
        if (count($widgetPathParts) < 2) {
            throw new InvalidArgumentException(
                $this->translate(
                    'Cannot resolve widget path "{path}".',
                    ['path' => $widgetPath]
                )
            );
        }

        $widgetName = array_pop($widgetPathParts);
        $componentPageUrl = $this->getUrlManager()->getSystemPageUrl(implode(IComponent::PATH_SEPARATOR, $widgetPathParts));

        $projectUrl = $this->getUrlManager()->getProjectUrl();
        if ($projectUrl != '/') {
            $componentPageUrl = substr($componentPageUrl, strlen($projectUrl));
        }

        return $this->executeWidget($componentPageUrl . '/' . $widgetName, $params);
    }

    /**
     * {@inheritdoc}
     */
    public function executeWidget($widgetUri, array $params = [])
    {
        list ($component, $callStack, $componentURI) = $this->resolveWidgetContext($widgetUri);

        try {

            try {
                $widget = $this->dispatchWidget($component, $widgetUri, $params, $callStack, $componentURI);

                return $this->invokeWidget($widget);
            } catch (ResourceAccessForbiddenException $e) {

                $resource = $e->getResource();
                if ($resource instanceof BaseSecureWidget) {
                    return $this->invokeWidgetForbidden($resource, $e);
                }

                throw $e;
            }

        } catch (\Exception $e) {

            $context = $this->createDispatchContext($component);
            $context->setCallStack(clone $callStack);

            return $this->processWidgetError($e, $context);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function checkPermissions(IComponent $component, $resource, $operationName = IAclManager::OPERATION_ALL)
    {
        $authManager = $this->getDefaultAuthManager();
        /**
         * @var CmsAuthStorage $storage
         */
        $storage = $authManager->getStorage();

        if ($authManager->isAuthenticated()) {
            $identity = $storage->getIdentity();

            if ($identity instanceof Supervisor) {
                return true;
            }

        } else {
            $identity = $storage->getGuestIdentity();
        }

        if (!$identity instanceof IComponentRoleResolver) {
            return false;
        }
        $roleProvider = new ComponentRoleProvider($component, $identity);

        $aclManager = $component->getAclManager();

        return $aclManager->isAllowed($roleProvider, $resource, $operationName);
    }

    /**
     * Вызывает обработку результата в случае отсутствия доступа к виджету.
     * @param BaseSecureWidget $widget
     * @param ResourceAccessForbiddenException $e
     * @throws UnexpectedValueException если виджет вернул неверный результат
     * @return IView|string
     */
    protected function invokeWidgetForbidden(BaseSecureWidget $widget, ResourceAccessForbiddenException $e)
    {
        $widgetResult = $widget->invokeForbidden($e);

        if (!$widgetResult instanceof IView && !is_string($widgetResult)) {
            throw new UnexpectedValueException($this->translate(
                'Widget "{widget}" returns unexpected value. String or instance of IView expected.',
                ['widget' => get_class($widget)]
            ));
        }

        return $widgetResult;
    }

}
 