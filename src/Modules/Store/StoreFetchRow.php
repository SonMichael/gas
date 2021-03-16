<?php

namespace NanoGas\Modules\Store;

use NanoGas\Modules\Connection\MysqlFetchRow;
use NanoGas\Modules\Product\ProductDto;
use PHPUnit\Framework\Constraint\ExceptionMessage;


/**
 * Created by PhpStorm.
 * User: sonle
 * Date: 07/03/2021
 * Time: 13:57
 */
class StoreFetchRow extends MysqlFetchRow
{

    public function fetchRows()
    {
        $rows = $this->fetch();
        $products = [];
        foreach ($rows as $row) {
            $product = new StoreDto($row[0], $row[1], $row[2], $row[3], $row[4]);
            array_push($products, $product);
        }
        return $products;
    }

    public function fetchRow(): StoreDto
    {
        $rows = $this->fetch();

        foreach ($rows as $row) {
            $product = new StoreDto($row[0], $row[1], $row[2], $row[3], $row[4]);
            return $product;
        }
        return null;
    }


}