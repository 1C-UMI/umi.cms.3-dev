<?php
/**
 * This file is part of UMI.CMS.
 * @link http://umi-cms.ru
 * @copyright Copyright (c) 2007-2014 Umisoft ltd. (http://umisoft.ru)
 * @license For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace umicms\hmvc\component\admin\layout\button;


/**
 * Кнопка для тулбара с выпадающим списком.
 * @see http://foundation.zurb.com/docs/components/dropdown_buttons.html
 */
class DropdownButton extends Button
{
    /**
     * @var string $type тип кнопки
     */
    public $type = 'dropdownButton';
    /**
     * @var array $attributes атрибуты кнопки
     */
    public $attributes = [
        'class' => 'button white dropdown',
        'hasIcon' => true
    ];

}
 