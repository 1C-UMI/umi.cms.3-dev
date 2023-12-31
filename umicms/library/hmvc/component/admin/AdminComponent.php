<?php
/**
 * This file is part of UMI.CMS.
 *
 * @link http://umi-cms.ru
 * @copyright Copyright (c) 2007-2014 Umisoft ltd. (http://umisoft.ru)
 * @license For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace umicms\hmvc\component\admin;

use umicms\hmvc\component\BaseCmsComponent;
use umicms\hmvc\url\IUrlManagerAware;
use umicms\hmvc\url\TUrlManagerAware;
use umicms\hmvc\component\admin\layout\action\Action;

/**
 * Простой компонент административной панели.
 */
class AdminComponent extends BaseCmsComponent implements IUrlManagerAware
{
    use TUrlManagerAware;

    /**
     * Опция для задания дополнительного списка доступных действий на запрос данных
     */
    const OPTION_QUERY_ACTIONS = 'queryActions';
    /**
     * Опция для задания дополнительного списка доступных действий на изменение данных
     */
    const OPTION_MODIFY_ACTIONS = 'modifyActions';
    /**
     * Опция для указания игнорирования компонента в доке
     */
    const OPTION_SKIP_IN_DOCK = 'skipInDock';
    /**
     * Контроллер для выполнения действий
     */
    const ACTION_CONTROLLER = 'action';
    /**
     * Контроллер для получения настроек интерфейса компонента
     */
    const INTERFACE_LAYOUT_CONTROLLER = 'interfaceLayout';

    /**
     * Возвращает информацию о компоненте.
     * @return array
     */
    public function getComponentInfo()
    {
        $info = parent::getComponentInfo();
        $info['resource'] = $this->getUrlManager()->getAdminComponentResourceUrl($this);

        return $info;
    }

    /**
     * Возвращает список доступных действий на запрос данных.
     * @return Action[] массив вида [actionName => Action, ...]
     */
    public function getQueryActions()
    {
        $result = [];
        if (isset($this->options[self::OPTION_QUERY_ACTIONS])) {
            $actions = $this->configToArray($this->options[self::OPTION_QUERY_ACTIONS], true);
            foreach ($actions as $actionName => $params) {
                $result[$actionName] = $this->createQueryAction($actionName, $params);
            }
        }

        return $result;
    }

    /**
     * Возвращает список доступных действий на изменение данных.
     * @return Action[] массив вида [actionName => Action, ...]
     */
    public function getModifyActions()
    {
        $result = [];

        if (isset($this->options[self::OPTION_MODIFY_ACTIONS])) {
            $actions = $this->configToArray($this->options[self::OPTION_MODIFY_ACTIONS], true);
            foreach ($actions as $actionName => $params) {
                $result[$actionName] = $this->createModifyAction($actionName, $params);
            }
        }

        return $result;
    }

    /**
     * Указывает на необходимость игнорировать компонент в доке
     * @return bool
     */
    public function isSkippedInDock()
    {
        if (isset($this->options[self::OPTION_SKIP_IN_DOCK])) {
            return (bool) $this->options[self::OPTION_SKIP_IN_DOCK];
        }

        return false;
    }

    /**
     * Создает новое REST-действие компонента для выборки данных
     * @param string $actionName имя действия
     * @param array $params список GET-параметров. Значение может быть плейсхолдером, который будет обработан на клиенте.
     * @return Action
     */
    protected function createQueryAction($actionName, array $params = [])
    {
        return new Action(
            $this->getUrlManager()->getAdminComponentActionResourceUrl($this, $actionName, $params),
            Action::TYPE_QUERY
        );
    }

    /**
     * Создает новое REST-действие компонента для модификации данных
     * @param string $actionName имя действия
     * @param array $params список GET-параметров. Значение может быть плейсхолдером, который будет обработан на клиенте.
     * @return Action
     */
    protected function createModifyAction($actionName, array $params = [])
    {
        return new Action(
            $this->getUrlManager()->getAdminComponentActionResourceUrl($this, $actionName, $params),
            Action::TYPE_MODIFY
        );
    }
}
 