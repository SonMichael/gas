<?php
namespace NanoGas\Modules\Connection;

use NanoGas\Modules\Modules;
use NanoGas\Modules\Product\ProductFetchRow;

abstract class MysqlFetchRow
{

    protected $mysqlQueryCli = null;

    public function __construct($mysqlQueryCli)
    {
        $this->mysqlQueryCli = $mysqlQueryCli;
    }

    public function fetch()
    {
        return mysqli_fetch_all($this->mysqlQueryCli);
    }

    abstract public function fetchRows();

    abstract public function fetchRow();

}


?>