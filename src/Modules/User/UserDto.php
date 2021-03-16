<?php

namespace NanoGas\Modules\User;


/**
 * Created by PhpStorm.
 * User: sonle
 * Date: 07/03/2021
 * Time: 13:57
 */
class UserDto
{
    private $id;
    private $user_name;
    private $user_pass;
    private $user_email;

    public function __construct(int $id, string $user_name, string $user_pass = null, string $user_email= null)
    {
        $this->id = $id;
        $this->user_name = $user_name;
        $this->user_pass = $user_pass;
        $this->user_email = $user_email;

    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getUserName(): string
    {
        return $this->user_name;
    }

    /**
     * @return string
     */
    public function getUserPass(): string
    {
        return $this->user_pass;
    }

    /**
     * @return string
     */
    public function getUserEmail(): string
    {
        return $this->user_email;
    }


}