<?php
/**
 * UMI.Framework (http://umi-framework.ru/)
 *
 * @link      http://github.com/Umisoft/framework for the canonical source repository
 * @copyright Copyright (c) 2007-2013 Umisoft ltd. (http://umisoft.ru/)
 * @license   http://umi-framework.ru/license/bsd-3 BSD-3 License
 */

namespace umicms\project\module\blog\site\moderate\widget;

use umi\orm\metadata\IObjectType;
use umicms\exception\InvalidArgumentException;
use umicms\hmvc\widget\BaseSecureWidget;
use umicms\project\module\blog\api\BlogModule;
use umicms\project\module\blog\api\object\BlogPost;

/**
 * Виджет переноса поста с модерации в черновики.
 */
class PostDraftWidget extends BaseSecureWidget
{
    /**
     * @var string $template имя шаблона, по которому выводится виджет
     */
    public $template = 'draftForm';
    /**
     * @var string|BlogPost $blogPost пост или GUID поста на модерации, необходимого перенесте в черновики
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
            $this->blogPost = $this->api->post()->getNeedModeratePost($this->blogPost);
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

        $formPostModerate = $this->api->post()->getForm(
            BlogPost::FORM_CHANGE_POST_STATUS,
            IObjectType::BASE,
            $this->blogPost
        );

        $formPostModerate->setAction($this->getUrl('draft', ['id' => $this->blogPost->getId()]));
        $formPostModerate->setMethod('post');

        return $this->createResult(
            $this->template,
            [
                'form' => $formPostModerate
            ]
        );
    }
}
 