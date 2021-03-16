<?php

namespace NanoGas\Modules\User;

use NanoGas\Modules\Connection\Mysql;
use NanoGas\Modules\Product\ProductDto;

/**
 * Created by PhpStorm.
 * User: sonle
 * Date: 07/03/2021
 * Time: 13:57
 */
class User extends UserAbstract
{
    /** @var UserDto $userDto */
    private $userDto;

    public function __construct(UserDto $userDto)
    {
        $this->userDto = $userDto;
    }

    public function getUserDto()
    {
        return $this->userDto;
    }

    public static function findUser($id): self
    {
        $query = "select * from `users` where id = $id limit 1";
        return new self(Mysql::getInstance()->getQueryCli()->run($query)->getUserFetchRow()->fetchRow());
    }

    public static function findUserNameAndPass($user_name, $pass_word): ?UserDto
    {
        $query = "select * from `users` where user_email = '$user_name' and user_pass = '$pass_word' limit 1";
        return Mysql::getInstance()->getQueryCli()->run($query)->getUserFetchRow()->fetchRow();

    }


}