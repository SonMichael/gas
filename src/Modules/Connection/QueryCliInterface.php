<?php

namespace NanoGas\Modules\Connection;

use NanoGas\Modules\Product\ProductFetchRow;

interface QueryCliInterface
{

    public function run(string $query): MysqlQueryCli;

    public function getProductFetchRow(): ProductFetchRow;

}

?>