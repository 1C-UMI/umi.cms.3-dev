<?php
/**
 * UMI.Framework (http://umi-framework.ru/)
 *
 * @link      http://github.com/Umisoft/framework for the canonical source repository
 * @copyright Copyright (c) 2007-2013 Umisoft ltd. (http://umisoft.ru/)
 * @license   http://umi-framework.ru/license/bsd-3 BSD-3 License
 */

namespace umicms\project\admin\component;

use umicms\hmvc\component\BaseComponent;
use umicms\hmvc\url\IUrlManagerAware;
use umicms\hmvc\url\TUrlManagerAware;

/**
 * Компонент административной панели.
 */
class AdminComponent extends BaseComponent implements IUrlManagerAware
{

    use TUrlManagerAware;

    /**
     * Контроллер для выполнения действий
     */
    const ACTION_CONTROLLER = 'action';
    /**
     * Контроллер для отображеня настроек компонента
     */
    const SETTINGS_CONTROLLER = 'settings';
    /**
     * Контроллер для выполнения RUD-операций над объектом
     */
    const ITEM_CONTROLLER = 'item';
    /**
     * Контроллер для выполнения CRUD-операций над списком объектов
     */
    const LIST_CONTROLLER = 'list';

    /**
     * Возвращает информацию о компоненте.
     * @return array
     */
    public function getComponentInfo()
    {
        return [
            'name'        => $this->getName(),
            'displayName' => $this->translate('component:' . $this->getName() . ':displayName'),
            'resource' => $this->getUrlManager()->getAdminComponentResourceUrl($this)
        ];
    }
}
 