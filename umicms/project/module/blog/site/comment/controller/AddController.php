<?php
/**
 * UMI.Framework (http://umi-framework.ru/)
 *
 * @link      http://github.com/Umisoft/framework for the canonical source repository
 * @copyright Copyright (c) 2007-2013 Umisoft ltd. (http://umisoft.ru/)
 * @license   http://umi-framework.ru/license/bsd-3 BSD-3 License
 */

namespace umicms\project\module\blog\site\comment\controller;

use umi\form\IFormAware;
use umi\form\TFormAware;
use umi\hmvc\exception\http\HttpNotFound;
use umi\http\Response;
use umi\orm\metadata\IObjectType;
use umi\orm\persister\IObjectPersisterAware;
use umi\orm\persister\TObjectPersisterAware;
use umicms\hmvc\controller\BaseSecureController;
use umicms\project\module\blog\api\BlogModule;
use umicms\project\module\blog\api\object\BlogComment;

/**
 * Контроллер добавления комментария.
 */
class AddController extends BaseSecureController implements IFormAware, IObjectPersisterAware
{
    use TFormAware;
    use TObjectPersisterAware;

    /**
     * @var BlogModule $api API модуля "Блоги"
     */
    protected $api;

    /**
     * Конструктор.
     * @param BlogModule $blogModule API модуля "Блоги"
     */
    public function __construct(BlogModule $blogModule)
    {
        $this->api = $blogModule;
    }

    /**
     * Вызывает контроллер.
     * @throws HttpNotFound
     * @return Response
     */
    public function __invoke()
    {
        if (!$this->isRequestMethodPost()) {
            throw new HttpNotFound('Page not found');
        }

        $parentCommentId = $this->getRouteVar('parent');
        $parentComment = $parentCommentId ? $this->api->comment()->getById($parentCommentId) : null;

        $post = $this->api->post()->getById($this->getPostVar('post'));

        $comment = $this->api->addComment(BlogComment::TYPE, $post, $parentComment);

        $form = $this->api->comment()->getForm(BlogComment::FORM_ADD_COMMENT, BlogComment::TYPE, $comment);
        $formData = $this->getAllPostVars();

        if ($form->setData($formData) && $form->isValid()) {
            $this->getObjectPersister()->commit();

            return $this->createRedirectResponse($this->getRequest()->getReferer());
        } else {
            //TODO ajax
            var_dump($form->getMessages()); exit();
        }
    }
}
 