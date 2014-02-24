<?php
/**
 * UMI.Framework (http://umi-framework.ru/)
 *
 * @link      http://github.com/Umisoft/framework for the canonical source repository
 * @copyright Copyright (c) 2007-2013 Umisoft ltd. (http://umisoft.ru/)
 * @license   http://umi-framework.ru/license/bsd-3 BSD-3 License
 */

namespace umicms\project\config;

use umi\config\entity\IConfig;

/**
 * Интерфейс для использования настроек сайта.
 */
interface ISiteSettingsAware
{
    /**
     * Устанавливает настройки сайта.
     * @param IConfig $config
     */
    public function setSiteSettings(IConfig $config);
}