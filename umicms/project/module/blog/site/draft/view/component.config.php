<?php
/**
 * This file is part of UMI.CMS.
 *
 * @link http://umi-cms.ru
 * @copyright Copyright (c) 2007-2014 Umisoft ltd. (http://umisoft.ru)
 * @license For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace umicms\project\module\blog\site\draft\view;

use umi\acl\IAclFactory;
use umi\acl\IAclManager;
use umicms\hmvc\component\site\SitePageComponent;

return [

    SitePageComponent::OPTION_CLASS => 'umicms\hmvc\component\site\SitePageComponent',
    SitePageComponent::OPTION_COLLECTION_NAME => 'blogPost',
    SitePageComponent::OPTION_CONTROLLERS => [
        'page' => __NAMESPACE__ . '\controller\PageController'
    ],
    SitePageComponent::OPTION_WIDGET => [
        'draft' => __NAMESPACE__ . '\widget\DraftWidget',
        'list' => __NAMESPACE__ . '\widget\ListWidget',
        'link' => __NAMESPACE__ . '\widget\LinkWidget'
    ],
    SitePageComponent::OPTION_ACL => [
        IAclFactory::OPTION_RESOURCES => [
            'model:blogPost'
        ],
        IAclFactory::OPTION_RULES => [
            'viewer' => [
                'widget:draft' => [],
                'widget:list' => [],
                'widget:link' => [],
                'model:blogPost' => [
                    IAclManager::OPERATION_ALL => ['own']
                ]
            ]
        ]
    ],
    SitePageComponent::OPTION_VIEW => [
        'directories' => ['module/blog/draft/view']
    ]
];