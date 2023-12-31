<?php
/**
 * This file is part of UMI.CMS.
 *
 * @link http://umi-cms.ru
 * @copyright Copyright (c) 2007-2014 Umisoft ltd. (http://umisoft.ru)
 * @license For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace umicms\project\module\statistics\admin\metrika\controller;

use umi\spl\config\TConfigSupport;
use umicms\exception\InvalidArgumentException;
use umicms\hmvc\component\admin\BaseController;
use umicms\hmvc\component\admin\TActionController;
use umicms\project\module\statistics\admin\metrika\model\MetrikaModel;

/**
 * Контроллер операций компонента Метрики.
 */
class ActionController extends BaseController
{
    use TConfigSupport;
    use TActionController;

    /**
     * @var MetrikaModel $model API для запросов к Яндекс.Метрике
     */
    protected $model;

    /**
     * Возвращает данные статистики для ресурса, собранные по указанному счетчику.
     * @throws InvalidArgumentException
     * @return array
     */
    protected function actionCounter()
    {
        $this->createModel();

        $counterId = $this->getRequiredQueryVar('counterId');
        $resource = $this->getRequiredQueryVar('resource');
        $dateFrom = $this->model->normalizeDateFrom($this->getQueryVar('date1'));
        $dateTo = $this->model->normalizeDateTo($this->getQueryVar('date2'));
        if (is_null($counterId)) {
            throw new InvalidArgumentException(
                $this->translate("Incorrect Metrika counter id")
            );
        }
        if (is_null($resource)) {
            throw new InvalidArgumentException(
                $this->translate("Incorrect resource queried")
            );
        }

        $apiData = $this->model->statQuery(
            $resource,
            $counterId,
            $dateFrom,
            $dateTo,
            $this->getQueryVar('sort', 'id')
        );

        $result = [
            'labels' => $this->model->extractFieldsLabel($resource, $apiData),
            'report' => $this->model->extractReportData($resource, $apiData),
            'date1' => $apiData['date1'],
            'date2' => $apiData['date2'],
            'rows' => $apiData['rows'],
            'totals' => $apiData['totals'],
            'max' => $apiData['max'],
            'min' => $apiData['min']
        ];
        if (isset($apiData['errors'])) {
            foreach($apiData['errors'] as $error) {
                $result['errors'] = [
                    'text' => $this->translate($error['code']),
                    'code' => $error['code']
                ];
            }
        }

        return $result;
    }

    /**
     * Возвращает список доступных счетчиков Метрики.
     * @return array
     */
    protected function actionCounters()
    {
        $this->createModel();

        $listCounters = $this->model->listCounters();

        foreach ($listCounters['counters'] as &$counter) {
            $counter['code_status'] = $this->translate($counter['code_status']);
        }

        $counters['labels'] = $this->model->getFieldsReport($listCounters['counters'], 'counters');
        $counters['objects'] = $listCounters['counters'];

        return $counters;
    }

    /**
     * Возвращает список доступных отчетов.
     * @return array
     */
    protected function actionNavigation()
    {
        $this->createModel();

        $counterId = $this->getRequiredQueryVar('counterId');
        $navigation = [];
        $apiResourceGroups = $this->model->getApiResources();
        foreach ($apiResourceGroups as $group => $resourceGroup) {
            $navigationGroup = [];
            $navigationGroup['displayName'] = $this->model->getLabel($group);
            $navigationGroup['children'] = [];
            foreach ($resourceGroup['resources'] as $resource) {
                $query = ['counterId'=>$counterId, 'resource'=>$resource['name']];
                $navigationGroup['children'][] = [
                    'displayName' => $this->model->getLabel($resource['name']),
                    'uri' => '/counter/?' . http_build_query($query),
                    'resource' => $resource['name'],
                ];
            }
            $navigation[] = $navigationGroup;
        }
        return $navigation;
    }

    /**
     * Создает модель для отправки запросов к API Яндекс.Метрика.
     * @throws InvalidArgumentException
     */
    protected function createModel()
    {
        $component = $this->getComponent();

        $oauthToken = $component->getSetting(MetrikaModel::OAUTH_TOKEN);
        $apiResources = $this->configToArray($component->getSetting(MetrikaModel::API_RESOURCES), true);

        if (is_null($oauthToken)) {
            throw new InvalidArgumentException($this->translate(
                "Option {option} is required",
                ['option' => MetrikaModel::OAUTH_TOKEN]
            ));
        }

        $this->model = new MetrikaModel($oauthToken, $apiResources);
    }

}
