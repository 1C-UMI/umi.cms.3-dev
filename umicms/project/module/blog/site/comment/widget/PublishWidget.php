<?php
/**
 * This file is part of UMI.CMS.
 *
 * @link http://umi-cms.ru
 * @copyright Copyright (c) 2007-2014 Umisoft ltd. (http://umisoft.ru)
 * @license For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace umicms\project\module\blog\site\comment\widget;

use umi\acl\IAclResource;
use umicms\exception\InvalidArgumentException;
use umicms\hmvc\widget\BaseFormWidget;
use umicms\project\module\blog\api\BlogModule;
use umicms\project\module\blog\api\object\BlogComment;

/**
 * Виджет публикации комментария.
 */
class PublishWidget extends BaseFormWidget implements IAclResource
{
    /**
     * @var string $template имя шаблона, по которому выводится виджет
     */
    public $template = 'publishForm';
    /**
     * @var string|BlogComment $blogComment комментарий или GUID комментария
     */
    public $blogComment;
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
    protected function getForm()
    {
        if (is_string($this->blogComment)) {
            $this->blogComment = $this->api->comment()->get($this->blogComment);
        }

        if (!$this->blogComment instanceof BlogComment) {
            throw new InvalidArgumentException(
                $this->translate(
                    'Widget parameter "{param}" should be instance of "{class}".',
                    [
                        'param' => 'blogComment',
                        'class' => BlogComment::className()
                    ]
                )
            );
        }

        $form = $this->api->comment()->getForm(BlogComment::FORM_PUBLISH_COMMENT, BlogComment::TYPE, $this->blogComment);
        $form->setAction($this->getUrl('publish', ['id' => $this->blogComment->getId()]));

        return $form;
    }
}
 