<?php
/**
 * This file is part of UMI.CMS.
 *
 * @link http://umi-cms.ru
 * @copyright Copyright (c) 2007-2014 Umisoft ltd. (http://umisoft.ru)
 * @license For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace umicms\hmvc\component\admin\layout\control;

use umicms\hmvc\component\admin\collection\CollectionComponent;
use umicms\hmvc\component\admin\layout\button\behaviour\ChoicesBehaviour;
use umicms\hmvc\component\admin\layout\button\SplitButton;

/**
 * Административный контрол "Форма создания объекта коллекции"
 */
class CreateObjectControl extends CollectionControl
{
    /**
     * {@inheritdoc}
     */
    protected function configureParams()
    {
        $this->params['action'] = CollectionComponent::ACTION_GET_CREATE_FORM;
    }

    /**
     * {@inheritdoc}
     */
    protected function configureI18n()
    {
        $this->labels['Nothing is selected'] = $this->component->translate('Nothing is selected');
    }

    /**
     * {@inheritdoc}
     */
    protected function configureSubmitToolbar()
    {
        $behaviour = new ChoicesBehaviour('add');
        $behaviour->addChoice('add', $this->createActionChoice('add'));
        $behaviour->addChoice('addAndGoBack', $this->createActionChoice('addAndGoBack'));

        $addButton = new SplitButton($this->component->translate('button:add'), $behaviour);
        $addButton->attributes['hasIcon'] = false;

        $this->addSubmitButton('add', $addButton);

    }
}
 