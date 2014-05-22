<?php
/**
 * UMI.Framework (http://umi-framework.ru/)
 * @link      http://github.com/Umisoft/framework for the canonical source repository
 * @copyright Copyright (c) 2007-2013 Umisoft ltd. (http://umisoft.ru/)
 * @license   http://umi-framework.ru/license/bsd-3 BSD-3 License
 */

namespace umicms\project\admin\controller;

use umi\http\Response;
use umicms\hmvc\controller\BaseController;
use umicms\project\admin\component\AdminComponent;
use umicms\project\module\users\api\UsersModule;

/**
 * Контроллер интерфейса административной панели.
 */
class DefaultController extends BaseController
{

    /**
     * @var Response $response содержимое страницы
     */
    protected $response;

    /**
     * @var UsersModule $api
     */
    protected $api;

    /**
     * Конструктор.
     * @param Response $response
     * @param UsersModule $api
     */
    public function __construct(Response $response, UsersModule $api)
    {
        $this->response = $response;
        $this->api = $api;
    }

    /**
     * {@inheritdoc}
     */
    public function __invoke()
    {
        /**
         * @var AdminComponent $apiComponent
         */
        $apiComponent = $this->getComponent()->getChildComponent('api');

        $response = $this->createViewResponse('layout', [
            'contents' => $this->response->getContent(),
            'baseUrl' => $this->getUrlManager()->getBaseAdminUrl(),
            'baseApiUrl' => $this->getUrlManager()->getBaseRestUrl(),
            'baseSettingsUrl' => $this->getUrlManager()->getBaseSettingsUrl(),
            'baseSiteUrl' => $this->getUrlManager()->getProjectUrl(),
            'authUrl' => $this->getUrlManager()->getAdminComponentActionResourceUrl($apiComponent, 'auth')
        ]);

        $response->setStatusCode($this->response->getStatusCode());
        $response->headers->replace($this->response->headers->all());

        return $response;
    }



}