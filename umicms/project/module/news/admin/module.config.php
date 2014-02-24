<?php
/**
 * UMI.Framework (http://umi-framework.ru/)
 * @link      http://github.com/Umisoft/framework for the canonical source repository
 * @copyright Copyright (c) 2007-2013 Umisoft ltd. (http://umisoft.ru/)
 * @license   http://umi-framework.ru/license/bsd-3 BSD-3 License
 */

namespace umicms\project\module\news\admin;

use umi\hmvc\component\IComponent;
use umi\route\IRouteFactory;

return [

    IComponent::OPTION_COMPONENTS => [
        'rubric' => '{#lazy:~/project/module/news/admin/rubric/component.config.php}',
        'item' => '{#lazy:~/project/module/news/admin/item/component.config.php}',
        'subject' => '{#lazy:~/project/module/news/admin/subject/component.config.php}'
    ],

    IComponent::OPTION_ROUTES      => [
        'component' => [
            'type' => IRouteFactory::ROUTE_SIMPLE,
            'route' => '/{component}'
        ]
    ]
];