<?php

namespace NanoGas\Modules\Connection;

use NanoGas\Modules\Modules;
use NanoGas\Modules\Product\Product;
use NanoGas\Modules\User\User;
use NanoGas\Modules\User\UserDto;

class Session
{

    const KEY_USER_ID = 'user_id';
    const KEY_USER_NAME = 'user_name';
    const KEY_USER_EMAIL = 'user_email';

    public function __construct()
    {
    }

    public function getUser(): ?UserDto
    {
        if (empty($_SESSION[self::KEY_USER_ID])) {
            return null;
        }
        return new UserDto($_SESSION[self::KEY_USER_ID], $_SESSION[self::KEY_USER_NAME], null,
            $_SESSION[self::KEY_USER_EMAIL]);
    }

    private function setUserId(int $id)
    {
        $_SESSION[self::KEY_USER_ID] = $id;
    }

    private function setUserName(string $user_name)
    {
        $_SESSION[self::KEY_USER_NAME] = $user_name;
    }

    private function setUserEmail(string $user_email)
    {
        $_SESSION[self::KEY_USER_EMAIL] = $user_email;
    }

    public function setUser(UserDto $user)
    {
        $this->setUserId($user->getId());
        $this->setUserName($user->getUserName());
        $this->setUserEmail($user->getUserEmail());
    }


}


?>