<?php
/**
 * This file is part of UMI.CMS.
 *
 * @link http://umi-cms.ru
 * @copyright Copyright (c) 2007-2014 Umisoft ltd. (http://umisoft.ru)
 * @license For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace umicms\project\module\statistics\site\widget;

use umicms\hmvc\widget\BaseCmsWidget;
use umicms\project\module\statistics\admin\metrika\model\MetrikaModel;

/**
 * Получает от Яндекс.Метрики и выводит HTML-код счетчика,
 * в точном соответствии с его настройками на сайте Метрики.
 */
class CounterWidget extends BaseCmsWidget
{
    /**
     * @var int $counterId идентификатор счетчика Метрики
     */
    public $counterId;
    /**
     * @var MetrikaModel $model API Яндекс.Метрики
     */
    private $model;

    /**
     * Конструктор.
     * @param MetrikaModel $model API Яндекс.Метрики
     */
    public function __construct(MetrikaModel $model)
    {
        $this->model = $model;
    }

    /**
     * Выводит код счетчика.
     * @return string
     */
    public function __invoke()
    {
        if (!is_int($this->counterId)) {
            if (is_int($this->model->defaultCounterId)) {
                $this->counterId = $this->model->defaultCounterId;
            } else {
                return '';
            }
        }

        return $this->model->counterData($this->counterId)['code'];
    }
}
