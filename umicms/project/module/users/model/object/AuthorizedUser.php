<?php
/**
 * This file is part of UMI.CMS.
 *
 * @link http://umi-cms.ru
 * @copyright Copyright (c) 2007-2014 Umisoft ltd. (http://umisoft.ru)
 * @license For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace umicms\project\module\users\model\object;

use umicms\project\module\users\model\collection\UserCollection;
use umicms\Utils;

/**
 * Пользователь.
 *
 * @property string $login логин
 * @property string $email e-mail
 * @property string $firstName имя
 * @property string $middleName отчество
 * @property string $lastName фамилия
 * @property \DateTime $registrationDate дата регистрации
 */
class AuthorizedUser extends BaseUser
{
    /**
     * Имя типа авторизованного пользователя
     */
    const TYPE_NAME = 'authorized';

    /**
     * Имя поля для хранения логина
     */
    const FIELD_LOGIN = 'login';
    /**
     * Имя поля для хранения e-mail
     */
    const FIELD_EMAIL = 'email';
    /**
     * Поле для хранения соли для хэширования пароля.
     */
    const FIELD_PASSWORD_SALT = 'passwordSalt';
    /**
     * Поле для хранения кода активации.
     */
    const FIELD_ACTIVATION_CODE = 'activationCode';
    /**
     * Имя поля для хранения пароля
     */
    const FIELD_PASSWORD = 'password';
    /**
     * Имя поля для хранения имени пользователя
     */
    const FIELD_FIRST_NAME = 'firstName';
    /**
     * Имя поля для хранения фамилии пользователя
     */
    const FIELD_LAST_NAME = 'lastName';
    /**
     * Имя поля для хранения отчества пользователя
     */
    const FIELD_MIDDLE_NAME = 'middleName';
    /**
     * Имя поля для хранения даты регистрации пользователя
     */
    const FIELD_REGISTRATION_DATE = 'registrationDate';

    /**
     * Форма авторизации пользователя на сайте
     */
    const FORM_LOGIN_SITE = 'login.site';
    /**
     * Форма разавторизации пользователя на сайте
     */
    const FORM_LOGOUT_SITE = 'logout.site';
    /**
     * Форма редактирования профиля пользователя
     */
    const FORM_EDIT_PROFILE = 'editProfile';
    /**
     * Форма регистрации пользователя на сайте
     */
    const FORM_REGISTRATION = 'registration';
    /**
     * Форма запроса смены пароля
     */
    const FORM_RESTORE_PASSWORD = 'restorePassword';
    /**
     * Форма смены пароля
     */
    const FORM_CHANGE_PASSWORD = 'changePassword';
    /**
     * Форма авторизации пользователя в административной панели
     */
    const FORM_LOGIN_ADMIN = 'login.admin';

    /**
     * @var string $passwordSalt маска соли для хэширования паролей
     */
    public $passwordSaltMask = '$2a$09${salt}$';

    /**
     * @var string $rawPassword устанавливаемый пароль
     */
    private $rawPassword;

     /**
     * Устанавливает пароль для пользователя.
     * @param string $password
     * @return $this
     */
    public function setPassword($password)
    {
        if (is_array($password)) {
            list($password) = $password;
        }

        $password = trim($password);

        $oldPasswordSalt = $this->getProperty(self::FIELD_PASSWORD_SALT)->getValue();
        if (crypt($password, $oldPasswordSalt) === $this->getProperty(self::FIELD_PASSWORD)->getValue()) {
            return $this;
        }

        $this->rawPassword = $password;

        $passwordSalt = strtr($this->passwordSaltMask, [
                '{salt}' => uniqid('', true)
            ]);
        $passwordHash = crypt($password, $passwordSalt);

        $this->getProperty(self::FIELD_PASSWORD_SALT)->setValue($passwordSalt);
        $this->getProperty(self::FIELD_PASSWORD)->setValue($passwordHash);

        return $this;
    }

    /**
     * Возвращает устанавливаемый пароль.
     * @return string|null
     */
    public function getPassword()
    {
        return $this->rawPassword;
    }

    /**
     * Обновляет код активации пользователя.
     * @return $this
     */
    public function updateActivationCode()
    {
        $this->getProperty(AuthorizedUser::FIELD_ACTIVATION_CODE)->setValue(Utils::generateGUID());

        return $this;
    }

    /**
     * Проверяет валидность логина.
     * @return bool
     */
    public function validateLogin()
    {
        $result = true;
        /**
         * @var UserCollection $collection
         */
        $collection = $this->getCollection();

        if (!$collection->checkLoginUniqueness($this)) {
            $result = false;
            $this->getProperty(self::FIELD_LOGIN)->addValidationErrors(
                [$this->translate('Login is not unique')]
            );
        }

        return $result;
    }

    /**
     * Проверяет валидность логина.
     * @return bool
     */
    public function validateEmail()
    {
        $result = true;

        /**
         * @var UserCollection $collection
         */
        $collection = $this->getCollection();

        if (!$collection->checkEmailUniqueness($this)) {
            $result = false;
            $this->getProperty(self::FIELD_EMAIL)->addValidationErrors(
                [$this->translate('Email is not unique')]
            );
        }

        return $result;
    }

    /**
     * Проверяет валидность пароля.
     * @return bool
     */
    public function validatePassword()
    {
        if (is_null($this->rawPassword)) {
            return true;
        }

        $result = true;

        if (!strlen(trim($this->rawPassword))) {
            $this->getProperty(self::FIELD_PASSWORD)->addValidationErrors(
                [$this->translate('Value is required.')]
            );

            $result = false;
        }

        /**
         * @var UserCollection $collection
         */
        $collection = $this->getCollection();

        if ($collection->getIsPasswordAndLoginEqualityForbidden() && $this->rawPassword === $this->login) {
            $this->getProperty(self::FIELD_PASSWORD)->addValidationErrors(
                [$this->translate('Password must not be equal to login.')]
            );

            $result = false;
        }

        if ($minPasswordLength = $collection->getMinPasswordLength()) {

            if (strlen($this->rawPassword) < $minPasswordLength) {
                $this->getProperty(self::FIELD_PASSWORD)->addValidationErrors(
                    [$this->translate
                        (
                            'Password must contain at least {length} characters.',
                            ['length' => $minPasswordLength]
                        )
                    ]
                );

                $result = false;
            }
        }

        return $result;
    }

}