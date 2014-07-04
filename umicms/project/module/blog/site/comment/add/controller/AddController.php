<?php
/**
 * This file is part of UMI.CMS.
 *
 * @link http://umi-cms.ru
 * @copyright Copyright (c) 2007-2014 Umisoft ltd. (http://umisoft.ru)
 * @license For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace umicms\project\module\blog\site\comment\add\controller;

use umi\form\IForm;
use umicms\hmvc\component\site\BaseSitePageController;
use umicms\project\module\blog\model\BlogModule;
use umicms\project\module\blog\model\object\BlogComment;
use umicms\hmvc\component\site\TFormController;

/**
 * Контроллер добавления комментария.
 */
class AddController extends BaseSitePageController
{
    use TFormController;

    /**
     * @var BlogModule $module модуль "Блоги"
     */
    protected $module;

    /**
     * @var string|null $added флаг указывающий на публикацию комментария
     */
    private $added;

    /**
     * Конструктор.
     * @param BlogModule $module модуль "Блоги"
     */
    public function __construct(BlogModule $module)
    {
        $this->module = $module;
    }

    /**
     * {@inheritdoc}
     */
    protected function getTemplateName()
    {
        return 'index';
    }

    /**
     * {@inheritdoc}
     */
    protected function buildForm()
    {
        $parentCommentId = $this->getRouteVar('parent');
        $parentComment = $parentCommentId ? $this->module->comment()->getById($parentCommentId) : null;

        $post = $this->module->post()->getById($this->getPostVar('post'));

        $comment = $this->module->addComment(
            BlogComment::TYPE,
            $post,
            $parentComment
        );


        if ($this->isAllowed($comment, 'publish')) {
            $this->added = BlogComment::COMMENT_STATUS_PUBLISHED;
            $comment->publish();
        } else {
            $this->added = BlogComment::COMMENT_STATUS_NEED_MODERATE;
            $comment->needModerate();
        }

        return $this->module->comment()->getForm(
            BlogComment::FORM_ADD_COMMENT,
            BlogComment::TYPE,
            $comment
        );
    }

    /**
     * {@inheritdoc}
     */
    protected function processForm(IForm $form)
    {
        $this->commit();

        return $this->buildRedirectResponse();
    }

    /**
     * {@inheritdoc}
     */
    protected function buildResponseContent()
    {
        return [
            'added' => $this->added,
            'page' => $this->getCurrentPage()
        ];
    }
}
 