<?php
/**
 * UMI.Framework (http://umi-framework.ru/)
 *
 * @link      http://github.com/Umisoft/framework for the canonical source repository
 * @copyright Copyright (c) 2007-2013 Umisoft ltd. (http://umisoft.ru/)
 * @license   http://umi-framework.ru/license/bsd-3 BSD-3 License
 */

namespace umicms\module\toolbox;

use umi\toolkit\exception\UnsupportedServiceException;
use umi\toolkit\toolbox\IToolbox;
use umi\toolkit\toolbox\TToolbox;
use umicms\module\IModule;
use umicms\module\IModuleAware;

/**
 * Инструментарий для работы с модулями.
 */
class ModuleTools implements IToolbox
{
    /**
     * Имя набора инструментов
     */
    const NAME = 'module';

    use TToolbox;

    /**
     * @var array $modules конфигурация модулей
     */
    public $modules = [];

    /**
     * {@inheritdoc}
     */
    public function getService($serviceInterfaceName, $concreteClassName)
    {
        switch ($serviceInterfaceName) {
            case 'umicms\module\IModule':
                return $this->getModule($concreteClassName);
        }

        throw new UnsupportedServiceException($this->translate(
            'Toolbox "{name}" does not support service "{interface}".',
            ['name' => self::NAME, 'interface' => $serviceInterfaceName]
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function injectDependencies($object)
    {
        if ($object instanceof IModuleAware) {
            $object->setModuleTools($this);
        }
    }

    /**
     * Возвращает модуль.
     * @param string $className имя класса
     * @return IModule
     */
    protected function getModule($className)
    {
        $config = $this->getConfig($className);

        $concreteClassName = isset($config['className']) ? $config['className'] : $className;

        return $this->getPrototype($concreteClassName, [$className])
            ->createSingleInstance([], $config);
    }

    /**
     * Возвращает конфигурацию модуля.
     * @param string $className класс модуля
     * @return array
     */
    protected function getConfig($className)
    {
        return isset($this->modules[$className]) ? $this->configToArray($this->modules[$className], true) : [];
    }

}