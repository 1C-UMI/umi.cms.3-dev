<?php
/**
 * UMI.Framework (http://umi-framework.ru/)
 *
 * @link      http://github.com/Umisoft/framework for the canonical source repository
 * @copyright Copyright (c) 2007-2013 Umisoft ltd. (http://umisoft.ru/)
 * @license   http://umi-framework.ru/license/bsd-3 BSD-3 License
 */

namespace umicms\project\module\structure\site\menu\widget;

use umicms\hmvc\widget\BaseWidget;
use umicms\project\module\structure\api\StructureApi;

/**
 * Виджет для вывода автогенерируемого меню
 */
class AutoMenuWidget extends BaseWidget
{
    /**
     * @var string $template имя шаблона, по которому выводится виджет.
     */
    public $template = 'auto';

    /**
     * @var string $branchGuid GUID ветки, от которой строится меню. Если не задано, меню строится от корня сайта.
     */
    public $branchGuid;

    /**
     * @var int $depth уровень вложенности меню.
     */
    public $depth = 1;

    /**
     * @var StructureApi $api
     */
    protected $api;

    /**
     * Конструктор.
     * @param StructureApi $api
     */
    public function __construct(StructureApi $api)
    {
        $this->api = $api;
    }

    /**
     * {@inheritdoc}
     */
    public function __invoke()
    {
        $branch = $this->branchGuid ? $this->api->element()->get($this->branchGuid) : null;
        return $this->createResult(
            $this->template,
            [
                'menu' => $this->api->structureMenu()->buildMenu($branch, $this->depth)
            ]
        );
    }
}
