<?php

namespace NanoGas\Modules\Product;

use NanoGas\Modules\Connection\Mysql;

/**
 * Created by PhpStorm.
 * User: sonle
 * Date: 07/03/2021
 * Time: 13:57
 */
class Product extends ProductAbstract
{
    /** @var ProductDto $storeDto */
    private $productDto;

    public function __construct(ProductDto $productDto)
    {
        $this->productDto = $productDto;
    }

    public function getProductDto()
    {
        return $this->productDto;
    }

    public static function findStore($id): self
    {
        $query = "select * from product where id = $id limit 1";
        return new self(Mysql::getInstance()->getQueryCli()->run($query)->getProductFetchRow()->fetchRow());
    }

    public static function getProducts()
    {
        $query = "select * from product where visible = " . self::STATUS_ACTIVE;
        return Mysql::getInstance()->getQueryCli()->run($query)->getProductFetchRow()->fetchRows();
    }

    public function update(
        string $name,
        string $color,
        string $material,
        int $weight,
        float $price,
        int $visible,
        string $image
    ) {
        $query = "update product set `name` = '$name', color = '$color' , material = '$material', weight=$weight,price=$price, visible = $visible, image='$image' where id = " . $this->productDto->getId();
        return Mysql::getInstance()->getQueryCli()->run($query);
    }

}