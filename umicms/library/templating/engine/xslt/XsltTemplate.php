<?php
/**
 * This file is part of UMI.CMS.
 *
 * @link http://umi-cms.ru
 * @copyright Copyright (c) 2007-2014 Umisoft ltd. (http://umisoft.ru)
 * @license For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace umicms\templating\engine\xslt;

use DOMDocument;
use umi\templating\exception\RuntimeException;
use umicms\exception\LibXMLException;
use umicms\serialization\ISerializationAware;
use umicms\serialization\TSerializationAware;
use XSLTProcessor;

/**
 * XSLT шаблон.
 */
class XsltTemplate implements ISerializationAware
{
    use TSerializationAware;

    /**
     * @var XsltTemplateEngine $templateEngine
     */
    protected $templateEngine;

    /**
     * Конструктор
     * @param XsltTemplateEngine $templateEngine
     */
    public function __construct(XsltTemplateEngine $templateEngine)
    {
        $this->templateEngine = $templateEngine;
    }

    /**
     * Запускает XSLT-шаблонизацию.
     * @param string $templateName имя XSL-шаблона
     * @param string $xmlData данные в XML
     * @throws RuntimeException
     * @throws LibXMLException
     * @return string
     */
    public function render($templateName, $xmlData)
    {
        $templateFilePath = $this->templateEngine->findTemplate($templateName);
        if (!is_readable($templateFilePath)) {
            throw new RuntimeException(sprintf(
                'Cannot render template "%s". XSLT Template file "%s" is not readable.',
                $templateName,
                $templateFilePath
            ));
        }

        $template = $this->createDomDocument(file_get_contents($templateFilePath));

        $data = $this->createDomDocument($xmlData);

        $xslt = new XSLTProcessor();
        $xslt->registerPHPFunctions();
        $xslt->importStylesheet($template);

        libxml_clear_errors();
        $result = (string) @$xslt->transformToXML($data);
        if ($error = libxml_get_last_error()) {
            throw new LibXMLException($error);
        }

        return $result;
    }

    /**
     * Создает DOMDocument из xml-строки
     * @param string $xmlString
     * @throws LibXMLException если не удалось создать DOMDocument
     * @return DOMDocument
     */
    protected function createDomDocument($xmlString) {
        $document = new DOMDocument('1.0', 'utf-8');
        $document->resolveExternals = true;
        $document->substituteEntities = true;
        $document->formatOutput = true;

        libxml_clear_errors();
        @$document->loadXML($xmlString);
        if ($error = libxml_get_last_error()) {
            throw new LibXMLException($error);
        }

        return $document;
    }
}