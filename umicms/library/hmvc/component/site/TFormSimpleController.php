<?php
/**
 * This file is part of UMI.CMS.
 *
 * @link http://umi-cms.ru
 * @copyright Copyright (c) 2007-2014 Umisoft ltd. (http://umisoft.ru)
 * @license For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace umicms\hmvc\component\site;

use umi\form\element\IFormElement;
use umi\form\IForm;
use umi\hmvc\exception\http\HttpException;
use umi\hmvc\exception\http\HttpNotFound;
use umi\http\Request;
use umi\http\Response;
use umicms\hmvc\url\IUrlManager;
use umicms\hmvc\widget\BaseFormWidget;

/**
 * Трейт для контроллера, обрабатывающего формы (без вывода)
 */
trait TFormSimpleController
{
    /**
     * @var IForm $form форма для обработки
     */
    private $form;

    /**
     * Возвращает форму для обработки
     * @return IForm
     */
    abstract protected function buildForm();

    /**
     * Обрабатывает валидную форму
     * @param IForm $form
     */
    abstract protected function processForm(IForm $form);

    /**
     * @see BaseController::isRequestMethodPost()
     */
    abstract protected function isRequestMethodPost();

    /**
     * @see BaseController::getAllPostVars()
     */
    abstract protected function getAllPostVars();

    /**
     * @see BaseController::getUrlManager()
     * @return IUrlManager
     */
    abstract protected function getUrlManager();

    /**
     * @see TLocalizable::translate()
     * @param $message
     * @param array $placeholders
     * @param null $localeId
     * @return string
     */
    abstract protected function translate($message, array $placeholders = [], $localeId = null);

    /**
     * @see BaseController::createRedirectResponse()
     * @param string $url
     * @param int $code
     * @return Response
     */
    abstract protected function createRedirectResponse($url, $code = Response::HTTP_SEE_OTHER);

    /**
     * @see BaseController::getRequest()
     * @return Request
     */
    abstract protected function getRequest();

    /**
     * @see BaseController::createResponse()
     * @param $content
     * @param int $code
     * @return Request
     */
    abstract protected function createResponse($content, $code = Response::HTTP_OK);

    /**
     * {@inheritdoc}
     */
    public function __invoke()
    {
        if (!$this->isRequestMethodPost()) {
            throw new HttpNotFound($this->translate(
                'Page not found.'
            ));
        }

        $this->form = $this->buildForm();
        $this->form->setData($this->getAllPostVars());

        if (!$this->form->isValid()) {
            throw new HttpException(
                Response::HTTP_BAD_REQUEST,
                $this->translate('Form is invalid.')
            );
        }

        $this->processForm($this->form);

        return $this->buildRedirectResponse();
    }

    /**
     * Формирует ответ с переадресацией.
     * @throws HttpException
     * @return Response
     */
    protected function buildRedirectResponse()
    {
        $redirectUrl = null;
        if ($this->form->has(BaseFormWidget::INPUT_REDIRECT_URL)) {
            /** @var IFormElement $redirectUrlInput */
            $redirectUrlInput = $this->form->get(BaseFormWidget::INPUT_REDIRECT_URL);
            $redirectUrl = $redirectUrlInput->getValue();

            if ($this->validateRedirectUri($redirectUrl)) {
                return $this->createRedirectResponse($redirectUrl);
            }
        }

        $redirectUrl = $this->getDefaultRedirectUrl();
        if ($this->validateRedirectUri($redirectUrl)) {
            return $this->createRedirectResponse($redirectUrl);
        }

        return $this->createResponse($this->translate(
                'The request was processed successfully.'
            ));
    }

    /**
     * Возвращает URL для переадресации по умолчанию.
     * @return string
     */
    protected function getDefaultRedirectUrl()
    {
        return $this->getRequest()->getReferer();
    }

    /**
     * Валидация URL для переадресации.
     * @param string $redirectUrl URL для переадресации
     * @return bool
     */
    protected function validateRedirectUri($redirectUrl)
    {
        if (strpos($redirectUrl, '/') === 0 ||
            strpos($redirectUrl, $this->getUrlManager()->getProjectUrl(true)) === 0)
        {
            return true;
        }
        return false;
    }
}
 