<?php
/**
 * UMI.Framework (http://umi-framework.ru/)
 *
 * @link      http://github.com/Umisoft/framework for the canonical source repository
 * @copyright Copyright (c) 2007-2013 Umisoft ltd. (http://umisoft.ru/)
 * @license   http://umi-framework.ru/license/bsd-3 BSD-3 License
 */

namespace umicms\project\module\blog\site\post\controller;

use umicms\project\site\controller\SitePageController;
use umicms\project\module\blog\api\BlogModule;

/**
 * Контроллер отображения постов.
 */
class BlogPostController extends SitePageController
{
    /**
     * @var BlogModule $api
     */
    protected $api;

    public function __construct(BlogModule $api)
    {
        $this->api = $api;
    }

    /**
     * {@inheritdoc}
     */
    public function __invoke()
    {
        $slug = $this->getRouteVar('slug');
        $blogPost = $this->api->post()->getByUri($slug);

        $this->pushCurrentPage($blogPost);

        return $this->createViewResponse(
            'view',
            [
                'blogPost' => $blogPost
            ]
        );
    }
}
 