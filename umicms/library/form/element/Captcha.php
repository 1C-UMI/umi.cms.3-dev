<?php
/**
 * UMI.Framework (http://umi-framework.ru/)
 *
 * @link      http://github.com/Umisoft/framework for the canonical source repository
 * @copyright Copyright (c) 2007-2013 Umisoft ltd. (http://umisoft.ru/)
 * @license   http://umi-framework.ru/license/bsd-3 BSD-3 License
 */

namespace umicms\form\element;

use umi\form\element\BaseFormInput;
use umi\form\FormEntityView;
use umi\session\ISessionAware;
use umi\session\TSessionAware;
use umicms\captcha\ICaptchaAware;
use umicms\captcha\TCaptchaAware;
use umicms\hmvc\url\IUrlManagerAware;
use umicms\hmvc\url\TUrlManagerAware;
use umicms\project\module\users\api\UsersModule;

/**
 * Поле типа captcha.
 */
class Captcha extends BaseFormInput implements ICaptchaAware, ISessionAware, IUrlManagerAware
{
    use TCaptchaAware;
    use TSessionAware;
    use TUrlManagerAware;

    /**
     * Тип элемента.
     */
    const TYPE_NAME = 'captcha';

    /**
     * {@inheritdoc}
     */
    protected $type = 'captcha';
    /**
     * @var string $value фраза каптчи, введенная пользователем
     */
    protected $value;
    /**
     * @var UsersModule $usersApi
     */
    protected $usersApi;

    /**
     * {@inheritdoc}
     * @param UsersModule $usersApi
     */
    public function __construct($name, array $attributes = [], array $options = [], UsersModule $usersApi)
    {
        $this->usersApi = $usersApi;

        parent::__construct($name, $attributes, $options);
    }
    /**
     * {@inheritdoc}
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * {@inheritdoc}
     */
    protected function extendView(FormEntityView $view)
    {
        parent::extendView($view);

        $sessionKey = $this->getSessionKey();

        $options = $this->getOptions();
        $this->setSessionVar($sessionKey, $options);

        $view->isHuman = $this->getIsHuman();
        $view->sessionKey = $sessionKey;

        $url = rtrim($this->getUrlManager()->getProjectUrl(), '/');
        $view->url = $url . '/captcha/' . rawurlencode($sessionKey);
    }

    /**
     * {@inheritdoc}
     */
    protected function validate($value)
    {
        if ($this->getIsHuman()) {
            return true;
        }

        $sessionKey = $this->getSessionKey();
        $options = $this->getSessionVar($sessionKey, []);

        $result = false;
        if (isset($options['phrase'])) {
            $result = $this->getCaptchaGenerator()->test($options['phrase'], $value);
        }

        if ($result) {
            $this->setSessionVar('successTests', $this->getSessionVar('successTests', 0) + 1);
        } else {
            $this->messages = ['Invalid captcha test.'];
        }

        return $result;
    }

    /**
     * Возвращает признак необходимости вывода каптчи, в зависимости от настроек.
     * @return bool
     */
    protected function getIsHuman() {
        $checkMode = $this->getCheckMode();

        if ($checkMode === 'never') {
            return true;
        }

        if ($this->getSessionVar('successTests', 0) >= $this->getHumanTestsCount()) {
            return true;
        }

        if ($checkMode === 'all') {
            return false;
        }

        return $this->usersApi->isAuthenticated();
    }

    /**
     * Генерирует и возвращает уникальный ключ для хранения фразы в сессии.
     * @return string
     */
    protected function getSessionKey()
    {
        $names = $this->getName();

        $element = $this->getParent();
        while ($parent = $element->getParent()) {
            $names .= $parent->getName();
            $element = $parent;
        }

        return 'c_' . md5($names);
    }

    /**
     * Возвращает имя контейнера сессии.
     * @return string
     */
    protected function getSessionNamespacePath()
    {
        return 'umicms\captcha';
    }

    /**
     * Возвращат режим проверки captcha.
     * @return string all|never|guest
     */
    protected function getCheckMode()
    {
        return isset($this->options['checkMode']) ? $this->options['checkMode'] : 'guest';
    }

    /**
     * Возвращает количество успешных проверок, после которых captcha не проверяется.
     * @return int
     */
    protected function getHumanTestsCount()
    {
        return isset($this->options['humanTestsCount']) ? (int) $this->options['humanTestsCount'] : 1;
    }

}