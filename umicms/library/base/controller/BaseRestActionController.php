<?php
/**
 * UMI.Framework (http://umi-framework.ru/)
 *
 * @link      http://github.com/Umisoft/framework for the canonical source repository
 * @copyright Copyright (c) 2007-2013 Umisoft ltd. (http://umisoft.ru/)
 * @license   http://umi-framework.ru/license/bsd-3 BSD-3 License
 */

namespace umicms\base\controller;

use umi\hmvc\exception\http\HttpException;
use umi\hmvc\exception\http\HttpMethodNotAllowed;
use umi\hmvc\exception\http\HttpNotFound;
use umi\http\Response;

/**
 * Базовый контроллер действий над объектом.
 */
abstract class BaseRestActionController extends BaseController
{
    /**
     * Возвращает список доступных действий на запрос данных.
     * @return array
     */
    abstract protected function getQueryActions();

    /**
     * Возвращает список доступных действий на изменение данных.
     * @return array
     */
    abstract protected function getModifyActions();

    /**
     * {@inheritdoc}
     */
    public function __invoke()
    {
        $action = $this->getRouteVar('action');

        switch($this->getRequest()->getMethod()) {
            case 'GET': {
                $this->checkSupportedAction($action, $this->getQueryActions());
                return $this->callAction($action);
            }
            case 'PUT': {

            }
            case 'POST': {
                $this->checkSupportedAction($action, $this->getModifyActions());
                return $this->callAction($action);
            }
            case 'DELETE': {
                throw new HttpMethodNotAllowed(
                    'HTTP method is not implemented.',
                    ['GET', 'PUT', 'DELETE']
                );
            }
            default: {
                throw new HttpException(
                    Response::HTTP_NOT_IMPLEMENTED,
                    'HTTP method is not implemented.'
                );
            }
        }
    }

    /**
     * Вызывает действие.
     * @param string $action имя действия
     * @return Response
     */
    protected function callAction($action)
    {
        $methodName = 'action' . ucfirst($action);
        return $this->createViewResponse(
            $action,
            [$action => $this->{$methodName}()]
        );
    }

    /**
     * Проверяет, поддерживается ли действие над объектом.
     * @param string $action имя действия
     * @param array $supportedActions список поддерживаемых действий
     * @throws HttpNotFound если действие не поддерживается
     */
    private function checkSupportedAction($action, array $supportedActions)
    {
        if (!in_array($action, $supportedActions)) {
            throw new HttpNotFound('Action not found.');
        }
    }

}
 