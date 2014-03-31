<?php
/**
 * UMI.Framework (http://umi-framework.ru/)
 *
 * @link      http://github.com/Umisoft/framework for the canonical source repository
 * @copyright Copyright (c) 2007-2013 Umisoft ltd. (http://umisoft.ru/)
 * @license   http://umi-framework.ru/license/bsd-3 BSD-3 License
 */

namespace umicms\project\module\seo\admin\megaindex\controller;

use umicms\exception\InvalidArgumentException;
use umicms\project\admin\api\controller\BaseRestActionController;
use umicms\project\admin\component\SecureAdminComponent;
use umicms\project\module\seo\model\MegaindexModel;

/**
 * Контроллер операций с API Мегаиндекса
 */
class ActionController extends BaseRestActionController
{
    /**
     * {@inheritdoc}
     */
    public function getQueryActions()
    {
        return ['siteAnalyze', 'getBacklinks'];
    }

    /**
     * {@inheritdoc}
     */
    public function getModifyActions()
    {
        return [];
    }

    /**
     * Возвращает данные отчета {@link http://api.megaindex.ru/description/siteAnalyze «Видимость сайта»}
     * @return array
     */
    public function actionSiteAnalyze()
    {
        return $this->getModel()->queryApi('siteAnalyze');
    }

    /**
     * Возвращает данные отчета {@link http://api.megaindex.ru/description/get_backlinks «Получение ссылок на сайт»}
     * @return array
     */
    public function actionGetBacklinks()
    {
        return $this->getModel()->queryApi('get_backlinks');
    }

    /**
     * Создает и возвращает модель для отправки запросов к API Мегаиндекса
     * @return MegaindexModel
     * @throws InvalidArgumentException
     */
    protected function getModel()
    {
        /** @var $component SecureAdminComponent */
        $component = $this->getComponent();
        $options = $component->getSettings()['options'];
        if (!isset($options['login'])) {
            throw new InvalidArgumentException($this->translate("Option {option} is required", ['option' => 'login']));
        }
        if (!isset($options['password'])) {
            throw new InvalidArgumentException($this->translate(
                "Option {option} is required",
                ['option' => 'password']
            ));
        }
        if (!isset($options['siteUrl'])) {
            throw new InvalidArgumentException($this->translate(
                "Option {option} is required",
                ['option' => 'siteUrl']
            ));
        }
        return new MegaindexModel($options['login'], $options['password'], $options['siteUrl']);
    }
}