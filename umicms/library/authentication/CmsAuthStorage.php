<?php
/**
 * UMI.Framework (http://umi-framework.ru/)
 *
 * @link      http://github.com/Umisoft/framework for the canonical source repository
 * @copyright Copyright (c) 2007-2013 Umisoft ltd. (http://umisoft.ru/)
 * @license   http://umi-framework.ru/license/bsd-3 BSD-3 License
 */

namespace umicms\authentication;

use umi\authentication\storage\SessionStorage;
use umicms\project\module\users\api\UsersApi;
use umicms\project\module\users\api\object\Guest;

/**
 * {@inheritdoc}
 */
class CmsAuthStorage extends SessionStorage
{
    /**
     * @var UsersApi $api
     */
    protected $api;

    /**
     * @param UsersApi $api
     */
    public function __construct(UsersApi $api)
    {
        $this->api = $api;
    }

    /**
     * {@inheritdoc}
     */
    public function getIdentity()
    {
        $userId = parent::getIdentity();

        return $this->api->user()->getById($userId);
    }

    /**
     * Возвращает гостя.
     * @return Guest
     */
    public function getGuestIdentity()
    {
        return $this->api->getGuest();
    }
}
 