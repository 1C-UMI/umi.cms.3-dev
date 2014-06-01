<?php
/**
 * This file is part of UMI.CMS.
 *
 * @link http://umi-cms.ru
 * @copyright Copyright (c) 2007-2014 Umisoft ltd. (http://umisoft.ru)
 * @license For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace umicms\project\site\callstack;

use SplStack;

/**
 * Интерфейс для внедрения стека вызова страниц сайта.
 */
interface IPageCallStackAware
{
    /**
     * Устанавливает стек вызова страниц.
     * @param SplStack $callStack
     */
    public function setPageCallStack(SplStack $callStack);
}
 