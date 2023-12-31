<?php
/**
 * This file is part of UMI.CMS.
 *
 * @link http://umi-cms.ru
 * @copyright Copyright (c) 2007-2014 Umisoft ltd. (http://umisoft.ru)
 * @license For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace umicms\orm\collection;

use umi\acl\IAclAssertionResolver;
use umi\acl\IAclResource;
use umi\form\IForm;
use umi\form\IFormAware;
use umi\i18n\ILocalizable;
use umi\orm\collection\ICollection;
use umi\orm\collection\ICollectionManagerAware;
use umi\orm\metadata\IObjectType;
use umicms\exception\NonexistentEntityException;
use umicms\exception\OutOfBoundsException;
use umicms\orm\object\ICmsObject;
use umicms\orm\selector\CmsSelector;

/**
 * Интерфейс коллекции объектов UMI.CMS
 */
interface ICmsCollection extends ICollection, ILocalizable, ICollectionManagerAware, IFormAware, IAclResource, IAclAssertionResolver
{
    /**
     * Имя формы для редактирования объектов по умолчанию
     */
    const FORM_EDIT = 'edit';
    /**
     * Имя формы для создания объектов по умолчанию
     */
    const FORM_CREATE = 'create';
    /**
     * Компонент обработчик коллекций в сайтовой панеле
     */
    const HANDLER_SITE = 'site';
    /**
     * Компонент обработчик коллекций в административной части
     */
    const HANDLER_ADMIN = 'admin';
    /**
     * Констатнта для задания списка имен полей, выводимых в фильтре для таблицы по умолчанию
     */
    const DEFAULT_TABLE_FILTER_FIELDS = 'defaultTableFilterFields';
    /**
     * Констатнта для задания списка имен полей, игнорируемых в фильтре для таблицы
     */
    const IGNORED_TABLE_FILTER_FIELDS = 'ignoredTableFilterFields';

    /**
     * Возвращает тип коллекции.
     * @return string
     */
    public function getType();

    /**
     * Возвращает форму для типа объектов коллекции.
     * @param string $formName имя формы
     * @param string $typeName имя типа
     * @param ICmsObject $object объект, для которого создается форма
     * @throws NonexistentEntityException если форма не зарегистрирована
     * @return IForm
     */
    public function getForm($formName, $typeName = IObjectType::BASE, ICmsObject $object = null);

    /**
     * Проверяет, зарегистрирована ли форма для типа объектов коллекции.
     * @param string $formName имя формы
     * @param string $typeName имя типа
     * @return bool
     */
    public function hasForm($formName, $typeName = IObjectType::BASE);

    /**
     * Возвращает путь к компоненту, обрабатывающему коллекцию.
     * @param string $applicationName имя приложения
     * @throws OutOfBoundsException если обработчик не зарегистрирован
     * @param string
     */
    public function getHandlerPath($applicationName);

    /**
     * Проверяет, есть ли обработчик у коллекции для указанного приложения.
     * @param string $applicationName имя приложения
     * @return bool
     */
    public function hasHandler($applicationName);

    /**
     * Возвращает список имен словарей для перевода лейблов коллекции.
     * @return array
     */
    public function getDictionaryNames();

    /**
     * Возвращает список имен типов, доступных для создания.
     * @return array
     */
    public function getCreateTypeList();

    /**
     * Возвращает список имен типов, объекты которых доступны для редактирования.
     * @return array
     */
    public function getEditTypeList();

    /**
     * Возвращает список имен полей, выводимых в фильтре для таблицы по умолчанию
     * @internal
     * @return array
     */
    public function getDefaultTableFilterFieldNames();

    /**
     * Возвращает список имен полей, игнорируемых в фильтре для таблицы
     * @internal
     * @return array
     */
    public function getIgnoredTableFilterFieldNames();

    /**
     * Возвращает новый селектор для формирования выборки объектов коллекции без учета установленных инициализаторов.
     * @return CmsSelector|ICmsObject[]
     */
    public function getInternalSelector();

    /**
     * Возвращает сообщение коллекции, переведенное для текущей или указанной локали.
     * Текст сообщения может содержать плейсхолдеры. Ex: File "{path}" not found
     * Если идентификатор локали не указан, будет использована текущая локаль.
     * @param string $message текст сообщения на языке разработки
     * @param array $placeholders значения плейсхолдеров для сообщения. Ex: array('{path}' => '/path/to/file')
     * @param string $localeId идентификатор локали в которую осуществляется перевод (ru, en_us)
     * @return string
     */
    public function translate($message, array $placeholders = [], $localeId = null);
}
