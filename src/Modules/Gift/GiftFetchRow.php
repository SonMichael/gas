<?php

namespace NanoGas\Modules\Gift;

use NanoGas\Modules\Connection\MysqlFetchRow;


/**
 * Created by PhpStorm.
 * User: sonle
 * Date: 07/03/2021
 * Time: 13:57
 */
class GiftFetchRow extends MysqlFetchRow
{

    public function fetchRows()
    {
        $rows = $this->fetch();
        $products = [];
        foreach ($rows as $row) {
            $product = new GiftDto($row[0], $row[1], $row[2], $row[3], $row[4]);
            array_push($products, $product);
        }
        return $products;
    }

    public function fetchRow(): GiftDto
    {
        $rows = $this->fetch();

        foreach ($rows as $row) {
            $product = new GiftDto($row[0], $row[1], $row[2], $row[3], $row[4]);
            return $product;
        }
        return null;
    }

}