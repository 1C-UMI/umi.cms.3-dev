<?php
/**
 * UMI.Framework (http://umi-framework.ru/)
 *
 * @link      http://github.com/Umisoft/framework for the canonical source repository
 * @copyright Copyright (c) 2007-2013 Umisoft ltd. (http://umisoft.ru/)
 * @license   http://umi-framework.ru/license/bsd-3 BSD-3 License
 */

namespace umicms\project\admin\settings;

use umi\hmvc\dispatcher\IDispatchContext;
use umi\hmvc\exception\http\HttpException;
use umi\http\Request;
use umi\http\Response;
use umi\toolkit\IToolkitAware;
use umi\toolkit\TToolkitAware;
use umicms\project\admin\settings\component\DefaultSettingsComponent;
use umicms\serialization\ISerializationAware;
use umicms\serialization\ISerializerFactory;
use umicms\serialization\TSerializationAware;

/**
 * Приложение управления настройками.
 */
class SettingsApplication extends DefaultSettingsComponent implements ISerializationAware, IToolkitAware
{
    use TSerializationAware;
    use TToolkitAware;

    /**
     * Опция для задания сериализаторов приложения
     */
    const OPTION_SERIALIZERS = 'serializers';
    /**
     * Формат запроса по умолчанию.
     */
    const DEFAULT_REQUEST_FORMAT = 'json';

    /**
     * @var string $currentRequestFormat формат запроса к приложению
     */
    protected $currentRequestFormat = self::DEFAULT_REQUEST_FORMAT;
    /**
     * @var array $supportedRequestPostfixes список поддерживаемых постфиксов запроса
     */
    protected $supportedRequestPostfixes = ['json', 'xml'];

    /**
     * {@inheritdoc}
     */
    public function onDispatchRequest(IDispatchContext $context, Request $request)
    {
        $this->registerSerializers();

        $requestFormat = $request->getRequestFormat(self::DEFAULT_REQUEST_FORMAT);

        if (!$this->isRequestFormatSupported($requestFormat)) {
            $request->setRequestFormat(self::DEFAULT_REQUEST_FORMAT);

            throw new HttpException(Response::HTTP_BAD_REQUEST, $this->translate(
                'Request format "{format}" is not supported.',
                ['format' => $requestFormat]
            ));
        }

        $request->setRequestFormat($requestFormat);

        $this->currentRequestFormat = $requestFormat;

        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function onDispatchResponse(IDispatchContext $context, Response $response)
    {
        $result = [
            'result' => $response->getContent()
        ];

        $serializer = $this->getSerializer($this->currentRequestFormat, $result);
        $serializer->init();
        $serializer($result);
        $response->setContent($serializer->output());

        return $response;
    }

    /**
     * Проверяет, поддерживается ли указанный формат запроса
     * @param string $format
     * @return bool
     */
    protected function isRequestFormatSupported($format)
    {
        return in_array($format, $this->supportedRequestPostfixes);
    }

    /**
     * Регистрирует сериализаторы, необходимые для приложения.
     */
    protected function registerSerializers()
    {
        if (isset($this->options[self::OPTION_SERIALIZERS])) {
            $serializersConfig = $this->configToArray($this->options[self::OPTION_SERIALIZERS], true);
            /**
             * @var ISerializerFactory $serializerFactory
             */
            $serializerFactory = $this->getToolkit()->getService('umicms\serialization\ISerializerFactory');

            $serializerFactory->registerSerializers($serializersConfig);
        }
    }
}
 