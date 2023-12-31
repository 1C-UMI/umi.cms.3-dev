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

use umicms\exception\RuntimeException;
use umicms\hmvc\component\BaseCmsController;

/**
 * Базовый административный контроллер.
 */
abstract class BaseController extends BaseCmsController
{
    /**
     * Возвращает компонент, у которого вызван контроллер.
     * @throws RuntimeException при неверном классе компонента
     * @return AdminComponent
     */
    protected function getComponent()
    {
        $component = parent::getComponent();

        if (!$component instanceof AdminComponent) {
            throw new RuntimeException(
                $this->translate(
                    'Component for controller "{controllerClass}" should be instance of "{componentClass}".',
                    [
                        'controllerClass' => get_class($this),
                        'componentClass' => 'umicms\hmvc\component\admin\AdminComponent'
                    ]
                )
            );
        }

        return $component;
    }
}
 