<?php
/**
 * This file is part of UMI.CMS.
 *
 * @link http://umi-cms.ru
 * @copyright Copyright (c) 2007-2014 Umisoft ltd. (http://umisoft.ru)
 * @license For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace umicms\project\site\controller;

use umi\hmvc\exception\acl\ResourceAccessForbiddenException;
use umi\hmvc\exception\http\HttpException;
use umi\http\Response;
use umicms\exception\InvalidLicenseException;
use umicms\exception\InvalidObjectsException;
use umicms\exception\NonexistentEntityException;
use umicms\hmvc\component\BaseCmsController;
use umicms\project\Environment;
use umicms\serialization\ISerializer;

/**
 * Контроллер ошибок для сайта.
 */
class ErrorController extends BaseCmsController
{

    /**
     * @var \Exception $exception
     */
    protected $exception;

    /**
     * Конструктор.
     * @param \Exception $e
     * @throws \Exception
     */
    public function __construct(\Exception $e)
    {
        if ($e instanceof InvalidLicenseException) {
            throw $e;
        }

        $this->exception = $e;
    }

    /**
     * {@inheritdoc}
     */
    public function __invoke()
    {
        $e = $this->exception;
        $stack = [];

        if (Environment::$showExceptionStack) {
            while ($e = $e->getPrevious()) {
                $stack[] = $e;
            }
        }
        $code = $this->getHttpStatusCode();

        $templateName = ($this->exception instanceof InvalidObjectsException) ? 'error/validation' : 'error/controller';

        return $this->createViewResponse(
            $templateName,
            [
                'error' => $this->exception,
                'code' => $code,
                'stack' => $stack
            ]
        )->setStatusCode($code);
    }

    /**
     * {@inheritdoc}
     */
    protected function createView($templateName, array $variables = []) {
        $variables['showStack'] = Environment::$showExceptionStack;
        $variables['showTrace'] = Environment::$showExceptionTrace;

        $view = parent::createView($templateName, $variables);

        $view->addSerializerConfigurator(
            function(ISerializer $serializer)
            {
                $excludes = [
                    'showStack',
                    'showTrace'
                ];
                if (!Environment::$showExceptionStack) {
                    $excludes[] = 'stack';
                }
                $serializer->setExcludes($excludes);
            }
        );

        return $view;
    }

    /**
     * Определяет код статуса ответа по произошедшему исключению.
     * @return int
     */
    protected function getHttpStatusCode()
    {
        switch(true) {
            case $this->exception instanceof NonexistentEntityException:
                return Response::HTTP_NOT_FOUND;
            case $this->exception instanceof ResourceAccessForbiddenException:
                return Response::HTTP_FORBIDDEN;
            case $this->exception instanceof HttpException:
                return $this->exception->getCode();
            default:
                return Response::HTTP_INTERNAL_SERVER_ERROR;
        }
    }
}