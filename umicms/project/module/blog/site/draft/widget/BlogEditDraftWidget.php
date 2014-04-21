<?php
/**
 * UMI.Framework (http://umi-framework.ru/)
 *
 * @link      http://github.com/Umisoft/framework for the canonical source repository
 * @copyright Copyright (c) 2007-2013 Umisoft ltd. (http://umisoft.ru/)
 * @license   http://umi-framework.ru/license/bsd-3 BSD-3 License
 */

namespace umicms\project\module\blog\site\draft\widget;

use umi\orm\metadata\IObjectType;
use umicms\exception\InvalidArgumentException;
use umicms\hmvc\widget\BaseSecureWidget;
use umicms\project\module\blog\api\BlogModule;
use umicms\project\module\blog\api\object\BlogPost;

/**
 * Виджет редактирования черновика.
 */
class BlogEditDraftWidget extends BaseSecureWidget
{
    /**
     * @var string $template имя шаблона, по которому выводится виджет
     */
    public $template = 'editDraft';
    /**
     * @var string|BlogPost $blogDraft черновик или GUID редактируемого черновика
     */
    public $blogDraft;
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
        if (is_string($this->blogDraft)) {
            $this->blogDraft = $this->api->post()->getDraft($this->blogDraft);
        }

        if (isset($this->blogDraft) && !$this->blogDraft instanceof BlogPost) {
            throw new InvalidArgumentException(
                $this->translate(
                    'Widget parameter "{param} should be instance of "{class}".',
                    [
                        'param' => 'blogDraft',
                        'class' => 'BlogPost'
                    ]
                )
            );
        }

        $formEditDraft = $this->api->post()->getForm(BlogPost::FORM_EDIT_POST, IObjectType::BASE, $this->blogDraft);

        $formEditDraft->setAction($this->getUrl('editDraft', ['id' => $this->blogDraft->getId()]));
        $formEditDraft->setMethod('post');

        return $this->createResult(
            $this->template,
            [
                'form' => $formEditDraft
            ]
        );
    }
}
 