<?php
/**
 * UMI.Framework (http://umi-framework.ru/)
 *
 * @link      http://github.com/Umisoft/framework for the canonical source repository
 * @copyright Copyright (c) 2007-2013 Umisoft ltd. (http://umisoft.ru/)
 * @license   http://umi-framework.ru/license/bsd-3 BSD-3 License
 */

namespace umicms\hmvc\url;

use umi\i18n\ILocalizable;
use umi\i18n\TLocalizable;
use umicms\exception\RuntimeException;
use umicms\hmvc\dispatcher\CmsDispatcher;
use umicms\orm\collection\ICmsCollection;
use umicms\orm\object\ICmsObject;
use umicms\orm\object\ICmsPage;
use umicms\project\admin\component\AdminComponent;
use umicms\project\admin\settings\component\SettingsComponent;
use umicms\project\module\structure\api\StructureModule;
use umicms\project\module\structure\api\object\StructureElement;
use umicms\project\site\component\BaseDefaultSitePageComponent;

/**
 * URL-менеджер.
 */
class UrlManager implements IUrlManager, ILocalizable
{
    use TLocalizable;

    /**
     * @var CmsDispatcher $dispatcher диспетчер компонентов
     */
    protected $dispatcher;
    /**
     * @var StructureModule $structureApi API структуры сайта
     */
    protected $structureApi;
    /**
     * @var string $schemeAndHttpHost схема и HTTP-хост проекта
     */
    protected $schemeAndHttpHost;
    /**
     * @var string $urlPrefix префикс URL проекта
     */
    protected $urlPrefix;
    /**
     * @var string $adminUrlPrefix префикс URL для административной панели
     */
    protected $adminUrlPrefix;
    /**
     * @var string $restUrlPrefix префикс URL для REST-запросов
     */
    protected $restUrlPrefix;
    /**
     * @var string $settingsUrlPrefix префикс URL для запросов связанных с настройками
     */
    protected $settingsUrlPrefix;
    /**
     * @var array $systemPageUrls url системных страниц, по пути компонентов
     */
    protected $systemPageUrls = [];

    /**
     * Конструктор.
     * @param CmsDispatcher $dispatcher диспетчер компонентов
     * @param StructureModule $structureApi
     */
    public function __construct(CmsDispatcher $dispatcher, StructureModule $structureApi)
    {
        $this->dispatcher = $dispatcher;
        $this->structureApi = $structureApi;
    }

    /**
     * {@inheritdoc}
     */
    public function setUrlPrefix($urlPrefix)
    {
        $this->urlPrefix = $urlPrefix;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setSchemeAndHttpHost($schemeAndHttpHost)
    {
        $this->schemeAndHttpHost = $schemeAndHttpHost;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setRestUrlPrefix($restUrlPrefix)
    {
        $this->restUrlPrefix = $restUrlPrefix;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setSettingsUrlPrefix($settingsUrlPrefix)
    {
        $this->settingsUrlPrefix = $settingsUrlPrefix;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setAdminUrlPrefix($adminUrlPrefix)
    {
        $this->adminUrlPrefix = $adminUrlPrefix;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getProjectUrl($isAbsolute = false)
    {
        if ($isAbsolute) {
            return $this->getSchemeAndHttpHost() . $this->urlPrefix;
        }

        return $this->urlPrefix ?: '/';
    }

    /**
     * {@inheritdoc}
     */
    public function getSchemeAndHttpHost()
    {
        return $this->schemeAndHttpHost;
    }

    /**
     * {@inheritdoc}
     */
    public function getBaseRestUrl()
    {
        return $this->getBaseAdminUrl() . $this->restUrlPrefix;
    }

    /**
     * {@inheritdoc}
     */
    public function getBaseSettingsUrl()
    {
        return $this->getBaseAdminUrl() . $this->settingsUrlPrefix;
    }

    /**
     * {@inheritdoc}
     */
    public function getBaseAdminUrl()
    {
        return $this->urlPrefix . $this->adminUrlPrefix;
    }

    public function getRawPageUrl(ICmsPage $page, $handler = ICmsCollection::HANDLER_SITE)
    {
        if ($page instanceof StructureElement) {
            return $page->getURL();
        }

        /**
         * @var ICmsCollection $collection
         */
        $collection = $page->getCollection();
        $handlerPath = $collection->getHandlerPath($handler);

        $component = $this->dispatcher->getSiteComponentByPath($handlerPath);
        if (!$component instanceof BaseDefaultSitePageComponent) {
            throw new RuntimeException(
                $this->translate(
                    'Cannot get url for page with GUID "{guid}". Component "{path}" should be instance of "{class}".',
                    [
                        'guid' => $page->getGUID(),
                        'path' => $component->getPath(),
                        'class' => 'umicms\project\site\component\BaseDefaultSitePageComponent'
                    ]
                )
            );
        }

        return $this->getRawSystemPageUrl($handlerPath) . $component->getPageUri($page);
    }

    /**
     * {@inheritdoc}
     */
    public function getRawSystemPageUrl($componentPath)
    {
        if (!isset($this->systemPageUrls[$componentPath])) {
            $this->systemPageUrls[$componentPath] = $this->structureApi
                ->element()
                ->getSystemPageByComponentPath($componentPath)
                ->getURL();
        }

        return $this->systemPageUrls[$componentPath];
    }

    /**
     * {@inheritdoc}
     */
    public function getSitePageUrl(ICmsPage $page, $isAbsolute = false, $handler = ICmsCollection::HANDLER_SITE)
    {
        $pageUrl = $isAbsolute ? $this->schemeAndHttpHost : '';
        $pageUrl .= $this->urlPrefix . '/';
        $pageUrl .= $this->getRawPageUrl($page, $handler);

        return $pageUrl;
    }

    /**
     * {@inheritdoc}
     */
    public function getSystemPageUrl($componentPath, $isAbsolute = false)
    {
        $pageUrl = $isAbsolute ? $this->schemeAndHttpHost : '';
        $pageUrl .= $this->urlPrefix . '/';
        $pageUrl .= $this->getRawSystemPageUrl($componentPath);

        return $pageUrl;
    }

    /**
     * {@inheritdoc}
     */
    public function getObjectEditLinkUrl(ICmsObject $object, $isAbsolute = false)
    {
        /**
         * @var ICmsCollection $collection
         */
        $collection = $object->getCollection();

        $editLink = $isAbsolute ? $this->schemeAndHttpHost : '';
        $editLink .= $this->getBaseAdminUrl();
        $editLink .= '/' . str_replace('.', '/', $collection->getHandlerPath('admin'));
        $editLink .= '/form/' . $object->getId();

        return $editLink;
    }

    /**
     * {@inheritdoc}
     */
    public function getCollectionResourceUrl(ICmsCollection $collection, ICmsObject $object = null)
    {
        $collectionResourceUrl = $this->getBaseRestUrl();
        $collectionResourceUrl .= '/' . str_replace('.', '/', $collection->getHandlerPath('admin'));
        $collectionResourceUrl .= '/collection';

        if ($object) {
            $collectionResourceUrl .= '/' . $object->getId();
        }

        return $collectionResourceUrl;
    }

    /**
     * {@inheritdoc}
     */
    public function getAdminComponentUrl(AdminComponent $component, $isAbsolute = false)
    {
        $domainUrl = $isAbsolute ? $this->schemeAndHttpHost : '';

        return $domainUrl . $this->getBaseAdminUrl() . $this->getAdminRelativeComponentUrl($component);
    }

    /**
     * {@inheritdoc}
     */
    public function getAdminComponentResourceUrl(AdminComponent $component)
    {
        return $this->getBaseRestUrl() . $this->getAdminRelativeComponentUrl($component);
    }

    /**
     * {@inheritdoc}
     */
    public function getAdminComponentActionResourceUrl(AdminComponent $component, $actionName, array $params = [])
    {
        $actionUrl = $this->getAdminComponentResourceUrl($component);
        $actionUrl .= $component->getRouter()->assemble('action', ['action' => $actionName]);

        if ($params) {
            $actionUrl .= '?' . http_build_query($params);
        }

        return $actionUrl;
    }

    /**
     * {@inheritdoc}
     */
    public function getSettingsComponentResourceUrl(SettingsComponent $component)
    {
        $url = $this->getBaseSettingsUrl();
        $url .= str_replace(SettingsComponent::PATH_SEPARATOR, '/', substr($component->getPath(), 22));

        return $url;
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrentUrl($isAbsolute = false)
    {
        if (null !== $qs = $this->getQueryString()) {
            $qs = '?'.$qs;
        }

        return $this->getRequestedUrl($isAbsolute) . $qs;
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrentUrlWithParam($paramName, $paramValue, $isAbsolute = false)
    {

        $url = $this->getRequestedUrl($isAbsolute);

        $request = $this->dispatcher->getCurrentRequest();
        $queryString = $request->getQueryString();

        parse_str($queryString, $query);

        if (is_null($paramValue)) {
            unset($query[$paramName]);
        } else {
            $query[$paramName] = $paramValue;
        }

        return $query ? $url . '?' . http_build_query($query) : $url;
    }

    /**
     * Возвращает текущий URL без GET-параметров
     * @param bool $isAbsolute генерировать ли абсолютный URL
     * @return string
     */
    protected function getRequestedUrl($isAbsolute = false)
    {
        $request = $this->dispatcher->getCurrentRequest();

        $url = $request->getBaseUrl() . $request->getPathInfo();
        if ($isAbsolute) {
            $url = $request->getSchemeAndHttpHost() . $url;
        }

        return $url;
    }

    /**
     * Возвращает строку GET-параметров запроса
     * @return null|string
     */
    protected function getQueryString()
    {
        return $this->dispatcher->getCurrentRequest()->getQueryString();
    }

    /**
     * Возвращает URL админ-компонента относительно API-компонента.
     * @param AdminComponent $component
     * @return string
     */
    protected function getAdminRelativeComponentUrl(AdminComponent $component)
    {
        return str_replace(AdminComponent::PATH_SEPARATOR, '/', substr($component->getPath(), 17));
    }

}
 