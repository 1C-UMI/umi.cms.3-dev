<?php
/**
 * This file is part of UMI.CMS.
 *
 * @link http://umi-cms.ru
 * @copyright Copyright (c) 2007-2014 Umisoft ltd. (http://umisoft.ru)
 * @license For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use umicms\orm\collection\ICmsCollection;

return [
    'forms' => [

        'static' => [
            'widget' => [
                ICmsCollection::FORM_EDIT => '{#lazy:~/project/module/structure/configuration/structure/form/widget.edit.config.php}'
            ],
            'controller' => [
                ICmsCollection::FORM_EDIT => '{#lazy:~/project/module/structure/configuration/structure/form/controller.edit.config.php}'
            ]
        ]
    ]
];