<?php
/**
 * This file is part of UMI.CMS.
 *
 * @link http://umi-cms.ru
 * @copyright Copyright (c) 2007-2014 Umisoft ltd. (http://umisoft.ru)
 * @license For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use umicms\hmvc\component\admin\settings\SettingsGroupComponent;

return [

    SettingsGroupComponent::OPTION_CLASS => 'umicms\hmvc\component\admin\settings\SettingsGroupComponent',

    SettingsGroupComponent::OPTION_COMPONENTS => [
        'common' => '{#lazy:~/project/site/settings/common/component.config.php}',
        'mail' => '{#lazy:~/project/site/settings/mail/component.config.php}',
        'seo' => '{#lazy:~/project/site/settings/seo/component.config.php}',
        'templating' => '{#lazy:~/project/site/settings/templating/component.config.php}',
        'slugify' => '{#lazy:~/project/site/settings/slugify/component.config.php}',
        'license' => '{#lazy:~/project/site/settings/license/component.config.php}'

    ]

];
