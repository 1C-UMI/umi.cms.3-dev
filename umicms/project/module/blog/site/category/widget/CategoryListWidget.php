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
 * Виджет для вывода списка категорий блога.
 */
class CategoryListWidget extends BaseSecureWidget
{
    /**
     * @var string $template имя шаблона, по которому выводится виджет
     */
    public $template = 'list';
    /**
     * @var int $limit максимальное количество выводимых категорий.
     * Если не указано, выводятся все категории.
     */
    public $limit;
    /**
     * @var string|null|BlogCategory $parentCategory категория блога или GUID, из которой выводятся дочерние категории.
     * Если не указан, выводятся все корневые категории.
     */
    public $parentCategory;

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
        if (is_string($this->parentCategory)) {
            $this->parentCategory = $this->api->category()->get($this->parentCategory);
        }

        if (isset($this->parentCategory) && !$this->parentCategory instanceof BlogCategory) {
            throw new InvalidArgumentException(
                $this->translate(
                    'Widget parameter "{param} should be instance of "{class}".',
                    [
                        'param' => 'parentRubric',
                        'class' => 'BlogCategory'
                    ]
                )
            );
        }

        return $this->createResult(
            $this->template,
            [
                'categories' => $this->api->getCategories($this->parentCategory, $this->limit)
            ]
        );
    }
}
 