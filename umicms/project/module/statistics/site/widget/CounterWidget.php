<?php
/**
 * UMI.Framework (http://umi-framework.ru/)
 *
 * @link      http://github.com/Umisoft/framework for the canonical source repository
 * @copyright Copyright (c) 2007-2013 Umisoft ltd. (http://umisoft.ru/)
 * @license   http://umi-framework.ru/license/bsd-3 BSD-3 License
 */
namespace umicms\project\module\statistics\site\widget;

use InvalidArgumentException;
use umicms\hmvc\widget\BaseWidget;
use umicms\project\module\statistics\api\MetrikaApi;

/**
 * Получает от Яндекс.Метрики и выводит HTML-код счетчика,
 * в точном соответствии с его настройками на сайте Метрики.
 */
class CounterWidget extends BaseWidget
{
    /**
     * Идентификатор счетчика Метрики
     * @var int $counterId
     */
    public $counterId;
    /**
     * API Яндекс.Метрики
     * @var MetrikaApi $api
     */
    private $api;

    /**
     * Внедряет {@see $api API Метрики}
     * @param MetrikaApi $api
     */
    public function __construct(MetrikaApi $api)
    {
        $this->api = $api;
    }

    /**
     * Выводит код счетчика
     * @throws InvalidArgumentException
     * @return string
     */
    public function __invoke()
    {
        if (!is_int($this->counterId)) {
            throw new InvalidArgumentException($this->translate("Counter id is required"));
        }
        return $this->api->counterData($this->counterId)['code'];
    }
}
