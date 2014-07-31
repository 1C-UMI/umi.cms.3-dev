<?php

use umicms\project\site\SiteApplication;
use umicms\templating\engine\xslt\XsltTemplateEngine;

return [
    SiteApplication::SETTING_DEFAULT_PAGE_GUID => '002675ac-9e29-4675-abf7-aa0f93ff9a8c',
    SiteApplication::SETTING_DEFAULT_LAYOUT_GUID => 'd6cb8b38-7e2d-4b36-8d15-9fe8947d66c7',

    SiteApplication::SETTING_DEFAULT_TEMPLATING_ENGINE_TYPE => XsltTemplateEngine::NAME,
    SiteApplication::SETTING_DEFAULT_TEMPLATE_EXTENSION => 'xsl'
];