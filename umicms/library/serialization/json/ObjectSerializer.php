<?php
/**
 * UMI.Framework (http://umi-framework.ru/)
 *
 * @link      http://github.com/Umisoft/framework for the canonical source repository
 * @copyright Copyright (c) 2007-2013 Umisoft ltd. (http://umisoft.ru/)
 * @license   http://umi-framework.ru/license/bsd-3 BSD-3 License
 */

namespace umicms\serialization\json;

use umicms\serialization\exception\UnexpectedValueException;

/**
 * JSON-сериализатор для произвольных объектов "по умолчанию".
 */
class ObjectSerializer extends BaseSerializer
{
    /**
     * Сериализует объект в JSON.
     * @param object $object
     * @param array $options опции сериализации
     * @throws UnexpectedValueException если передан не объект
     */
    public function __invoke($object, array $options = [])
    {
        if (!is_object($object)) {
            throw new UnexpectedValueException($this->translate(
                'Cannot serialize object. Value type "{type}" is not object.',
                ['type' => gettype($object)]
            ));
        }

        if ($object instanceof \Traversable) {
            $variables = iterator_to_array($object, true);
        } else {
            $variables = get_object_vars($object);
        }

        $this->delegate($variables);
    }
}
