<?php
/**
 * This file is part of UMI.CMS.
 *
 * @link http://umi-cms.ru
 * @copyright Copyright (c) 2007-2014 Umisoft ltd. (http://umisoft.ru)
 * @license For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace umicms\project\module\testmodule\model;

use umicms\module\BaseModule;
use umicms\project\module\testmodule\model\collection\TestCollection;

/**
 * Репозиторий тестовый.
 */
class TestModule extends BaseModule
{
    /**
     * Возвращает коллекцию новостей.
     * @return TestCollection
     */
    public function test()
    {
        return $this->getCollection('testTest');
    }
}
 