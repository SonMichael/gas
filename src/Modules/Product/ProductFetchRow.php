<?php

namespace NanoGas\Modules\Product;

use NanoGas\Modules\Connection\MysqlFetchRow;


/**
 * Created by PhpStorm.
 * User: sonle
 * Date: 07/03/2021
 * Time: 13:57
 */
class ProductFetchRow extends MysqlFetchRow
{

    public function fetchRows()
    {
        $rows = $this->fetch();
        $products = [];
        foreach ($rows as $row) {
            $product = new ProductDto($row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6], $row[7]);
            array_push($products, $product);
        }
        return $products;
    }

    public function fetchRow(): ProductDto
    {
        $rows = $this->fetch();

        foreach ($rows as $row) {
            $product = new ProductDto($row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6], $row[7]);
            return $product;
        }
        return null;
    }

}