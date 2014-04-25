<?php
/**
 * UMI.Framework (http://umi-framework.ru/)
 *
 * @link      http://github.com/Umisoft/framework for the canonical source repository
 * @copyright Copyright (c) 2007-2013 Umisoft ltd. (http://umisoft.ru/)
 * @license   http://umi-framework.ru/license/bsd-3 BSD-3 License
 */

namespace umicms\templating\engine\twig;

use Twig_Extension;
use Twig_SimpleFunction;
use umi\hmvc\view\helper\IsAllowedHelper;
use umicms\hmvc\dispatcher\CmsDispatcher;

/**
 * Расширение Twig для подключения помощников вида.
 */
class ViewTwigExtension extends Twig_Extension
{
    /**
     * @var string $widgetFunctionName имя функции для вызова виджета
     */
    public $widgetFunctionName = 'widget';
    /**
     * @var string $isAllowedFunctionName имя функции для проверки прав
     */
    public $isAllowedFunctionName = 'isAllowed';

    /**
     * @var CmsDispatcher $dispatcher диспетчер
     */
    protected $dispatcher;

    /**
     * @var IsAllowedHelper $isAllowedHelper
     */
    private $isAllowedHelper;

    /**
     * Конструктор.
     * @param CmsDispatcher $dispatcher диспетчер
     */
    public function __construct(CmsDispatcher $dispatcher) {
        $this->dispatcher = $dispatcher;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return __CLASS__;
    }

    /**
     * {@inheritdoc}
     */
    public function getFunctions()
    {

        return [
            new Twig_SimpleFunction(
                $this->widgetFunctionName,
                $this->getWidgetHelper(),
                ['is_safe' => ['html']]
            ),
            new Twig_SimpleFunction(
                $this->isAllowedFunctionName,
                $this->getIsAllowedHelper()
            )
        ];
    }

    /**
     * Возвращает помощник вида для проверки прав.
     * @return callable
     */
    protected function getIsAllowedHelper()
    {
        if (!$this->isAllowedHelper) {
            $this->isAllowedHelper = new IsAllowedHelper($this->dispatcher);
        }
        return $this->isAllowedHelper;
    }

    /**
     * Возвращает помощник вида для вызова виджетов
     * @return callable
     */
    protected function getWidgetHelper()
    {
        return function($widgetPath, array $args = []) {
            return $this->dispatcher->executeWidgetByPath($widgetPath, $args);
        };
    }
}
 