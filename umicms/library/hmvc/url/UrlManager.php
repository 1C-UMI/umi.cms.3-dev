<?php
/**
 * UMI.Framework (http://umi-framework.ru/)
 *
 * @link      http://github.com/Umisoft/framework for the canonical source repository
 * @copyright Copyright (c) 2007-2013 Umisoft ltd. (http://umisoft.ru/)
 * @license   http://umi-framework.ru/license/bsd-3 BSD-3 License
 */

namespace umicms\hmvc\url;

use umicms\hmvc\dispatcher\Dispatcher;
use umicms\orm\collection\ICmsCollection;
use umicms\orm\object\ICmsObject;
use umicms\orm\object\ICmsPage;
use umicms\project\module\structure\api\StructureApi;
use umicms\project\module\structure\object\StructureElement;
use umicms\project\site\component\SiteComponent;

/**
 * URL-менеджер.
 */
class UrlManager implements IUrlManager
{
    /**
     * @var Dispatcher $dispatcher диспетчер компонентов
     */
    protected $dispatcher;
    /**
     * @var StructureApi $structureApi API структуры сайта
     */
    protected $structureApi;
    /**
     * @var string $baseUrl базовый URL проекта
     */
    protected $baseUrl = '/';
    /**
     * @var string $baseRestUrl базовый URL для REST-запросов
     */
    protected $baseRestUrl = '/';
    /**
     * @var string $baseAdminUrl базовый URL для административной панели
     */
    protected $baseAdminUrl;

    /**
     * Конструктор.
     * @param Dispatcher $dispatcher диспетчер компонентов
     * @param StructureApi $structureApi
     */
    public function __construct(Dispatcher $dispatcher, StructureApi $structureApi)
    {
        $this->dispatcher = $dispatcher;
        $this->structureApi = $structureApi;
    }

    /**
     * {@inheritdoc}
     */
    public function setBaseUrl($baseUrl)
    {
        $this->baseUrl = $baseUrl;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setBaseRestUrl($baseRestUrl)
    {
        $this->baseRestUrl = $baseRestUrl;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setBaseAdminUrl($baseAdminUrl)
    {
        $this->baseAdminUrl = $baseAdminUrl;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getProjectUrl()
    {
        return $this->baseUrl ?: '/';
    }

    /**
     * {@inheritdoc}
     */
    public function getBaseRestUrl()
    {
        return $this->baseRestUrl;
    }

    /**
     * {@inheritdoc}
     */
    public function getBaseAdminUrl()
    {
        return $this->baseAdminUrl;
    }


    /**
     * {@inheritdoc}
     */
    public function getSitePageUrl(ICmsPage $page)
    {

        if ($page instanceof StructureElement) {
            return $this->baseUrl . '/' . $page->getURL();
        }

        /**
         * @var ICmsCollection $collection
         */
        $collection = $page->getCollection();
        $handler = $collection->getHandlerPath('site');

        /**
         * @var SiteComponent $component
         */
        $component = $this->dispatcher->getComponentByPath('project.site.' . $handler);

        $systemPage = $this->structureApi->element()->getSystemPageByComponentPath($handler);

        return $this->baseUrl . '/' . $systemPage->getURL() . $component->getPageUri($page);

    }

    /**
     * {@inheritdoc}
     */
    public function getRestResourceUrl(ICmsCollection $collection, ICmsObject $object = null)
    {
        $restResourceUrl = $this->baseRestUrl;
        $restResourceUrl .= '/' . implode('/', explode('.', $collection->getHandlerPath('admin')));
        $restResourceUrl .= '/collection/' . $collection->getName();

        if ($object) {
            $restResourceUrl .= '/' . $object->getId();
        }

        return  $restResourceUrl;
    }
}
 