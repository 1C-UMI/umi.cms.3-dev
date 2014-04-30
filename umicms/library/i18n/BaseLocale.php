<?php
/**
 * UMI.Framework (http://umi-framework.ru/)
 *
 * @link      http://github.com/Umisoft/framework for the canonical source repository
 * @copyright Copyright (c) 2007-2013 Umisoft ltd. (http://umisoft.ru/)
 * @license   http://umi-framework.ru/license/bsd-3 BSD-3 License
 */

namespace umicms\i18n;

/**
 * Базовый класс локали.
 */
abstract class BaseLocale
{
    /**
     * @var string $id идентификатор
     */
    protected $id;

    /**
     * Конструктор.
     * @param string $id идентификатор
     */
    public function __construct($id)
    {
        $this->id = $id;
    }

    /**
     * Возвращает идентификатор.
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }
}
 