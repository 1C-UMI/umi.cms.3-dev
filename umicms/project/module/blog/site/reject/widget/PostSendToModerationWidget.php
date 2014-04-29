<?php
/**
 * UMI.Framework (http://umi-framework.ru/)
 *
 * @link      http://github.com/Umisoft/framework for the canonical source repository
 * @copyright Copyright (c) 2007-2013 Umisoft ltd. (http://umisoft.ru/)
 * @license   http://umi-framework.ru/license/bsd-3 BSD-3 License
 */

namespace umicms\project\module\blog\site\reject\widget;

use umi\orm\metadata\IObjectType;
use umicms\exception\InvalidArgumentException;
use umicms\hmvc\widget\BaseSecureWidget;
use umicms\project\module\blog\api\BlogModule;
use umicms\project\module\blog\api\object\BlogPost;

/**
 * Виджет отправки поста на модерацию.
 */
class PostSendToModerationWidget extends BaseSecureWidget
{
    /**
     * @var string $template имя шаблона, по которому выводится виджет
     */
    public $template = 'publishForm';
    /**
     * @var string|BlogPost $blogPost пост или GUID поста отправляемого на модерацию
     */
    public $blogPost;
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
    public function __invoke()
    {
        if (is_string($this->blogPost)) {
            $this->blogPost = $this->api->post()->getRejectedPost($this->blogPost);
        }

        if (!$this->blogPost instanceof BlogPost) {
            throw new InvalidArgumentException(
                $this->translate(
                    'Widget parameter "{param}" should be instance of "{class}".',
                    [
                        'param' => 'blogPost',
                        'class' => 'BlogPost'
                    ]
                )
            );
        }

        $formPost = $this->api->post()->getForm(
            BlogPost::FORM_CHANGE_POST_STATUS,
            IObjectType::BASE,
            $this->blogPost
        );

        $formPost->setAction($this->getUrl('sendToModeration', ['id' => $this->blogPost->getId()]));
        $formPost->setMethod('post');

        return $this->createResult(
            $this->template,
            [
                'form' => $formPost
            ]
        );
    }
}
 