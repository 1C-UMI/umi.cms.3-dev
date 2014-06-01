<?php
/**
 * This file is part of UMI.CMS.
 *
 * @link http://umi-cms.ru
 * @copyright Copyright (c) 2007-2014 Umisoft ltd. (http://umisoft.ru)
 * @license For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace umicms\form\element;

use umi\form\element\BaseFormInput;

/**
 * Элемент формы картинка.
 */
class Image extends BaseFormInput
{
    /**
     * Тип элемента.
     */
    const TYPE_NAME = 'image';

    /**
     * {@inheritdoc}
     */
    protected $type = 'image';
    /**
     * {@inheritdoc}
     */
    protected $inputType = 'image';
}
 