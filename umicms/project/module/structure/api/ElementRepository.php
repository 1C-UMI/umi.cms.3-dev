<?php
/**
 * UMI.Framework (http://umi-framework.ru/)
 *
 * @link      http://github.com/Umisoft/framework for the canonical source repository
 * @copyright Copyright (c) 2007-2013 Umisoft ltd. (http://umisoft.ru/)
 * @license   http://umi-framework.ru/license/bsd-3 BSD-3 License
 */

namespace umicms\project\module\structure\api;

use umi\orm\metadata\IObjectType;
use umicms\api\repository\BaseObjectRepository;
use umicms\api\repository\THierarchicAwareRepository;
use umicms\api\repository\TRecycleAwareRepository;
use umicms\exception\NonexistentEntityException;
use umicms\orm\selector\CmsSelector;
use umicms\project\module\structure\object\StructureElement;

/**
 * Репозиторий для работы с элементами структуры.
 */
class ElementRepository extends BaseObjectRepository
{
    use TRecycleAwareRepository;
    use THierarchicAwareRepository;

    /**
     * @var string $collectionName имя коллекции для хранения структуры
     */
    public $collectionName = 'structure';

    /**
     * Возвращает селектор для выбора элементов структуры.
     * @return CmsSelector|StructureElement[]
     */
    public function select() {
        return $this->getCollection()->select();
    }

    /**
     * Возвращает элемент по GUID.
     * @param string $guid
     * @throws NonexistentEntityException если не удалось получить элемент
     * @return StructureElement
     */
    public function get($guid)
    {
        try {
            return $this->getCollection()->get($guid);
        } catch(\Exception $e) {
            throw new NonexistentEntityException(
                $this->translate(
                    'Cannot find element by guid "{guid}".',
                    ['guid' => $guid]
                ),
                0,
                $e
            );
        }
    }

    /**
     * Возвращает элемент по id.
     * @param int $id
     * @throws NonexistentEntityException если не удалось получить элемент
     * @return StructureElement
     */
    public function getById($id) {

        try {
            return $this->getCollection()->getById($id);
        } catch(\Exception $e) {
            throw new NonexistentEntityException(
                $this->translate(
                    'Cannot find element by id "{id}".',
                    ['id' => $id]
                ),
                0,
                $e
            );
        }
    }

    /**
     * Возвращает элемент по Uri.
     * @param string $uri
     * @param bool $onlyPublic выбирать только публично доступные объекты
     * @throws NonexistentEntityException если не удалось получить элемент
     * @return StructureElement
     */
    public function getByUri($uri, $onlyPublic = true)
    {
        try {
            return $this->getByUri($uri, $onlyPublic);
        } catch(\Exception $e) {
            throw new NonexistentEntityException(
                $this->translate(
                    'Cannot find element by uri "{uri}".',
                    ['uri' => $uri]
                ),
                0,
                $e
            );
        }
    }

    /**
     * Добавляет элемент.
     * @param string $slug
     * @param StructureElement $parent
     * @return StructureElement
     */
    public function add($slug, StructureElement $parent = null)
    {
        return $this->getCollection()->add($slug, IObjectType::BASE, $parent);
    }

    /**
     * Помечает элемент на удаление.
     * @param StructureElement $element
     * @return $this
     */
    public function delete(StructureElement $element) {

        $this->getCollection()->delete($element);

        return $this;
    }

    /**
     * Перемещает элемент структуры в иерархии.
     * Если ветка не указана, элемент перемещается в корень.
     * Если предшественник не указан, элемент перемещается в начало ветки.
     * @param StructureElement $element перемещаемый элемент
     * @param StructureElement|null $branch ветка, в которую будет перемещен элемент
     * @param StructureElement|null $previousSibling элемент, после которой будет помещен перемещаемый элемент
     * @return $this
     */
    public function move(StructureElement $element, StructureElement $branch = null, StructureElement $previousSibling = null)
    {
        $this->getCollection()->move($element, $branch, $previousSibling);

        return $this;
    }

}