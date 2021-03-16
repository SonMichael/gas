<?php
/**
 * Created by PhpStorm.
 * User: Ehtesham Mehmood
 * Date: 11/21/2014
 * Time: 1:13 AM
 */

namespace NanoGas\Modules\Connection;

use NanoGas\Modules\Modules;
use NanoGas\Modules\Product\Product;
use NanoGas\Modules\User\User;
use NanoGas\Modules\User\UserDto;

class Connection
{

    private $db = null;
    /** @var Session $session */
    private $session = null;

    public function __construct()
    {
        $this->db = mysqli_connect("localhost", "root", "Qwe321@!");
        $this->session = new Session();
    }

    /**
     * @return \mysqli|null
     */
    public function getDb()
    {
        return $this->db;
    }

    /**
     * @return Session
     */
    public function getSession(): Session
    {
        return $this->session;
    }

    public function login($user_name, $pass_word): ?UserDto
    {
        $model = User::findUserNameAndPass($user_name, $pass_word);
        if (empty($model)) {
            return null;
        }
        $this->session->setUser($model);
        return $model;
    }

}


?>