<?php
/**
 * This file is part of UMI.CMS.
 *
 * @link http://umi-cms.ru
 * @copyright Copyright (c) 2007-2014 Umisoft ltd. (http://umisoft.ru)
 * @license For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace umicms\project\module\blog\site\author\view\widget;

use umicms\exception\InvalidArgumentException;
use umicms\hmvc\widget\BaseListWidget;
use umicms\project\module\blog\model\BlogModule;
use umicms\project\module\blog\model\object\BlogAuthor;

/**
 * Виджет для вывода списка постов по автору.
 */
class PostListWidget extends BaseListWidget
{
    /**
     * @var string $template имя шаблона, по которому выводится виджет
     */
    public $template = 'postList';
    /**
     * @var array|BlogAuthor[]|BlogAuthor|null $blogAuthors авторы, список авторов блога или GUID, посты которых выводятся.
     * Если не указаны, то посты выводятся всех авторов
     */
    public $blogAuthors;

    /**
     * @var BlogModule $module модуль "Блоги"
     */
    protected $module;

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
    protected function getSelector()
    {
        $blogAuthors = (array) $this->blogAuthors;

        foreach ($blogAuthors as &$blogAuthor) {
            if (is_string($blogAuthor)) {
                $blogAuthor = $this->module->author()->get($blogAuthor);
            }

            if (isset($blogAuthor) && !$blogAuthor instanceof BlogAuthor) {
                throw new InvalidArgumentException(
                    $this->translate(
                        'Widget parameter "{param}" should be instance of "{class}".',
                        [
                            'param' => 'blogAuthors',
                            'class' => BlogAuthor::className()
                        ]
                    )
                );
            }
        }

        return  $this->module->getPostsByAuthor($blogAuthors);
    }

}
 