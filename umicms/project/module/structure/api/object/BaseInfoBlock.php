<?php
/**
 * UMI.Framework (http://umi-framework.ru/)
 *
 * @link      http://github.com/Umisoft/framework for the canonical source repository
 * @copyright Copyright (c) 2007-2013 Umisoft ltd. (http://umisoft.ru/)
 * @license   http://umi-framework.ru/license/bsd-3 BSD-3 License
 */

namespace umicms\project\module\structure\api\object;

use umicms\orm\object\behaviour\ILockedAccessibleObject;
use umicms\orm\object\CmsObject;

/**
 * Информационный блок сайта.
 */
abstract class BaseInfoBlock extends CmsObject implements ILockedAccessibleObject
{

}
 