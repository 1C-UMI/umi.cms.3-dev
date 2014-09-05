<?php
/**
 * This file is part of UMI.CMS.
 *
 * @link http://umi-cms.ru
 * @copyright Copyright (c) 2007-2014 Umisoft ltd. (http://umisoft.ru)
 * @license For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace umicms\project\module\dispatch\site\subscriber\widget;

use umicms\hmvc\view\CmsView;
use umicms\hmvc\widget\BaseCmsWidget;

/**
 * Виджет вывода выпуска.
 */
class DispatchSubscriberWidget extends BaseCmsWidget
{
    /**
     * @var string $template имя шаблона, по которому выводится виджет
     */
    public $template = 'form';

    /**
     * Формирует результат работы виджета.
     *
     * Для шаблонизации доступны следущие параметры:
     * @templateParam umi\form\FormEntityView $form представление формы подписки
     *
     * @return CmsView
     */
    public function __invoke()
    {
        $form = $this->getComponent()->getForm('subscriber');
        $form->setAction($this->getUrl('subscriber'));

        return $this->createResult(
            $this->template,
            [
                'form' => $form->getView()
            ]
        );
    }
}
