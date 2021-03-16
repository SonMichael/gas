<?php

namespace NanoGas\Modules\Store;

use NanoGas\Modules\Connection\Mysql;
use NanoGas\Modules\Product\ProductDto;

/**
 * Created by PhpStorm.
 * User: sonle
 * Date: 07/03/2021
 * Time: 13:57
 */
class Store extends StoreAbstract
{
    /** @var StoreDto $storeDto */
    private $storeDto;

    public function __construct(StoreDto $productDto)
    {
        $this->storeDto = $productDto;
    }

    public function getStoreDto()
    {
        return $this->storeDto;
    }

    public static function findStore($id): self
    {
        $query = "select * from store where id = $id limit 1";
        return new self(Mysql::getInstance()->getQueryCli()->run($query)->getStoreFetchRow()->fetchRow());
    }

    public static function getStores()
    {
        $query = "select * from store where visible = " . self::STATUS_ACTIVE;
        return Mysql::getInstance()->getQueryCli()->run($query)->getStoreFetchRow()->fetchRows();
    }

    public function update(string $name, string $address, string $phone_number, int $visible)
    {
        $query = "update store set `name` = '$name', address = '$address' , phone_number = '$phone_number', visible = $visible where id = " . $this->storeDto->getId();
        return Mysql::getInstance()->getQueryCli()->run($query);
    }

}