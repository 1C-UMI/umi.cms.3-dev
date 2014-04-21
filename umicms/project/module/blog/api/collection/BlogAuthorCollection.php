<?php
/**
 * UMI.Framework (http://umi-framework.ru/)
 *
 * @link      http://github.com/Umisoft/framework for the canonical source repository
 * @copyright Copyright (c) 2007-2013 Umisoft ltd. (http://umisoft.ru/)
 * @license   http://umi-framework.ru/license/bsd-3 BSD-3 License
 */

namespace umicms\project\module\blog\api\collection;

use umi\orm\metadata\IObjectType;
use umicms\orm\collection\PageCollection;
use umicms\orm\selector\CmsSelector;
use umicms\project\module\blog\api\object\BlogAuthor;

/**
 * Коллекция авторов блога.
 *
 * @method CmsSelector|BlogAuthor[] select() Возвращает селектор для выбора авторов.
 * @method BlogAuthor get($guid, $withLocalization = false) Возвращает автора по GUID
 * @method BlogAuthor getById($objectId, $withLocalization = false) Возвращает автора по id
 * @method BlogAuthor add($typeName = IObjectType::BASE) Создает и возвращает автора
 * @method BlogAuthor getByUri($uri, $withLocalization = false) Возвращает автора по его последней части ЧПУ
 */
class BlogAuthorCollection extends PageCollection
{

}