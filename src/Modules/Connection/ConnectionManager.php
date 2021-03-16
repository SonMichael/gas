<?php
namespace NanoGas\Modules\Connection;

use NanoGas\Modules\Modules;


abstract class ConnectionManager extends Modules
{

    protected $connection;

    public function getConnection(): Connection
    {
        return $this->connection;
    }

    abstract public function getQueryCli(): QueryCliInterface;
}


?>