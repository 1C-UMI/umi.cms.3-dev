<?php
/**
 * This file is part of UMI.CMS.
 *
 * @link http://umi-cms.ru
 * @copyright Copyright (c) 2007-2014 Umisoft ltd. (http://umisoft.ru)
 * @license For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace umicms\install\command;

use umicms\install\installer\Installer;
use umicms\install\exception\RuntimeException;

/**
 * Распаковщик ядра системы.
 */
class ExtractCore implements ICommandInstall
{
    /**
     * @var Installer $installer
     */
    private $installer;

    /**
     * {@inheritdoc}
     */
    public function __construct(Installer $installer, $param = null)
    {
        $this->installer = $installer;
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        if (!is_file(CMS_CORE_PHAR)) {
            throw new RuntimeException(
                'Не найден пакет с ядром.'
            );
        }

        $phar = new \Phar(CMS_CORE_PHAR);

        if (!$phar->extractTo(INSTALL_ROOT_DIR, null, true)) {
            throw new RuntimeException(
                'Не удалось распаковать ядро.'
            );
        }

        return true;
    }
}
 