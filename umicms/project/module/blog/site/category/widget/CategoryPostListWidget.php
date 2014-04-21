<?php
/**
 * UMI.Framework (http://umi-framework.ru/)
 *
 * @link      http://github.com/Umisoft/framework for the canonical source repository
 * @copyright Copyright (c) 2007-2013 Umisoft ltd. (http://umisoft.ru/)
 * @license   http://umi-framework.ru/license/bsd-3 BSD-3 License
 */

namespace umicms\project\module\blog\site\category\widget;

use umicms\exception\InvalidArgumentException;
use umicms\hmvc\widget\BaseSecureWidget;
use umicms\project\module\blog\api\BlogModule;
use umicms\project\module\blog\api\object\BlogCategory;

/**
 * Виджет для вывода списка постов по категориям.
 */
class CategoryPostListWidget extends BaseSecureWidget
{
    /**
     * @var string $template имя шаблона, по которому выводится виджет
     */
    public $template = 'postList';
    /**
     * @var int $limit максимальное количество выводимых постов.
     * Если не указано, выводятся все посты.
     */
    public $limit;
    /**
     * @var array|BlogCategory[]|BlogCategory|null $category категория, список категорий блога или GUID, из которых выводятся посты.
     * Если не указаны, то посты выводятся из всех категорий
     */
    public $categories;

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
        $categories = (array) $this->categories;

        foreach ($categories as &$category) {
            if (is_string($category)) {
                $category = $this->api->category()->get($category);
            }

            if (isset($category) && !$category instanceof BlogCategory) {
                throw new InvalidArgumentException(
                    $this->translate(
                        'Widget parameter "{param} should be instance of "{class}".',
                        [
                            'param' => 'categories',
                            'class' => 'BlogCategory'
                        ]
                    )
                );
            }
        }

        return $this->createResult(
            $this->template,
            [
                'posts' => $this->api->getPostByCategory($categories, $this->limit)
            ]
        );
    }
}
 