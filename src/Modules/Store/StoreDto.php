<?php

namespace NanoGas\Modules\Store;


/**
 * Created by PhpStorm.
 * User: sonle
 * Date: 07/03/2021
 * Time: 13:57
 */
class StoreDto
{
    private $id;
    private $name;
    private $address;
    private $phone_number;
    private $visible;

    public function __construct(int $id, string $name, string $address, string $phone_number, int $visible)
    {
        $this->id = $id;
        $this->name = $name;
        $this->address = $address;
        $this->phone_number = $phone_number;
        $this->visible = $visible;
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
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @return string
     */
    public function getPhoneNumber(): string
    {
        return $this->phone_number;
    }

    /**
     * @return int
     */
    public function getVisible(): int
    {
        return $this->visible;
    }


}