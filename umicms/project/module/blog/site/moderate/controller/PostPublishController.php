<?php
/**
 * UMI.Framework (http://umi-framework.ru/)
 *
 * @link      http://github.com/Umisoft/framework for the canonical source repository
 * @copyright Copyright (c) 2007-2013 Umisoft ltd. (http://umisoft.ru/)
 * @license   http://umi-framework.ru/license/bsd-3 BSD-3 License
 */

namespace umicms\project\module\blog\site\moderate\controller;

use umi\form\IForm;
use umi\http\Response;
use umi\orm\metadata\IObjectType;
use umi\orm\persister\IObjectPersisterAware;
use umi\orm\persister\TObjectPersisterAware;
use umicms\exception\RuntimeException;
use umicms\hmvc\controller\BaseSecureController;
use umicms\project\module\blog\api\BlogModule;
use umicms\project\module\blog\api\object\BlogPost;
use umicms\project\site\controller\TFormController;

/**
 * Контроллер публикации поста, требующего модерации.
 */
class PostPublishController extends BaseSecureController implements IObjectPersisterAware
{
    use TFormController;
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
     * {@inheritdoc}
     */
    protected function getTemplateName()
    {
        return 'publishForm';
    }

    /**
     * {@inheritdoc}
     */
    protected function buildForm()
    {
        return $this->api->post()->getForm(BlogPost::FORM_PUBLISH_POST, IObjectType::BASE);
    }

    /**
     * {@inheritdoc}
     */
    protected function processForm(IForm $form)
    {
        $blogPost = $this->api->post()->getNeedModeratePostById($this->getRouteVar('id'));
        $blogPost->published();

        $this->getObjectPersister()->commit();
    }

    /**
     * {@inheritdoc}
     */
    protected function buildResponseContent()
    {
        return [];
    }

    /**
     * Формирует ответ.
     * @throws RuntimeException
     * @return Response
     */
    protected function buildResponse()
    {
        if (count($this->errors)) {
            throw new RuntimeException($this->translate(
                'Form invalid.'
            ));
        }

        return $this->buildRedirectResponse();
    }
}
 