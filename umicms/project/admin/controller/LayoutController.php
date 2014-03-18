<?php
/**
 * UMI.Framework (http://umi-framework.ru/)
 * @link      http://github.com/Umisoft/framework for the canonical source repository
 * @copyright Copyright (c) 2007-2013 Umisoft ltd. (http://umisoft.ru/)
 * @license   http://umi-framework.ru/license/bsd-3 BSD-3 License
 */

namespace umicms\project\admin\controller;

use umi\http\Response;
use umicms\base\controller\BaseController;
use umicms\project\module\users\api\UsersApi;

/**
 * Контроллер сетки административной панели.
 */
class LayoutController extends BaseController
{

    /**
     * @var Response $response содержимое страницы
     */
    protected $response;

    /**
     * @var UsersApi $api
     */
    protected $api;

    /**
     * Конструктор.
     * @param Response $response
     * @param UsersApi $api
     */
    public function __construct(Response $response, UsersApi $api)
    {
        $this->response = $response;
        $this->api = $api;
    }

    /**
     * {@inheritdoc}
     */
    public function __invoke()
    {

        $response = $this->createViewResponse(
            'layout',
            [
                'content' => $this->response->getContent(),
                'baseUrl' => $this->getContext()->getBaseUrl(),
                'authenticated' => $this->api->isAuthenticated()
            ]
        );

        $response->setStatusCode($this->response->getStatusCode());
        $response->headers->replace($this->response->headers->all());

        return $response;
    }

}


