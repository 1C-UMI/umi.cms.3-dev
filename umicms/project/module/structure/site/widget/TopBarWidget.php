<?php
/**
 * This file is part of UMI.CMS.
 *
 * @link http://umi-cms.ru
 * @copyright Copyright (c) 2007-2014 Umisoft ltd. (http://umisoft.ru)
 * @license For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace umicms\project\module\structure\site\widget;

use umicms\hmvc\widget\BaseCmsWidget;

/**
 * Виджет вывода верхней панели сайта.
 */
class TopBarWidget extends BaseCmsWidget
{
    /**
     * {@inheritdoc}
     */
    public function __invoke()
    {
        //TODO
        return <<<EOF
<link rel="stylesheet" type="text/css" href="/umi-admin/sitePanel/styles/styles.css?version=1">
<script src="/umi-admin/sitePanel/main.js?version=1" data-baseURL="/admin" data-baseApiURL="/admin/rest" id="umi-site-panel"></script>
EOF;
    }
}
 