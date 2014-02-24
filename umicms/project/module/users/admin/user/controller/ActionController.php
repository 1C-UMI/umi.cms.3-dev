<?php
/**
 * UMI.Framework (http://umi-framework.ru/)
 *
 * @link      http://github.com/Umisoft/framework for the canonical source repository
 * @copyright Copyright (c) 2007-2013 Umisoft ltd. (http://umisoft.ru/)
 * @license   http://umi-framework.ru/license/bsd-3 BSD-3 License
 */

namespace umicms\project\module\users\admin\user\controller;

use umi\hmvc\exception\http\HttpForbidden;
use umicms\base\controller\BaseRestActionController;
use umicms\project\module\users\api\UsersApi;

/**
 * Контроллер Read-Update-Delete операций над объектом.
 */
class ActionController extends BaseRestActionController
{

    /**
     * @var UsersApi $api
     */
    protected $api;

    /**
     * Конструктор.
     * @param UsersApi $api
     */
    public function __construct(UsersApi $api)
    {
        $this->api = $api;
    }

    /**
     * {@inheritdoc}
     */
    protected function getQueryActions()
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    protected function getModifyActions()
    {
        return ['login', 'logout'];
    }

    protected function actionLogin()
    {
        if (!$this->api->isAuthenticated()) {
            if (!$this->api->login($this->getPostVar('login'), $this->getPostVar('password'))) {
                throw new HttpForbidden(
                    $this->translate('Incorrect login or password.')
                );
            }
        }

        return $this->api->getCurrentUser();
    }

    protected function actionLogout()
    {
        $this->api->logout();

        return '';
    }
}
 