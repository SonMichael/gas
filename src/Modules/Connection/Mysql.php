<?php
namespace NanoGas\Modules\Connection;

use NanoGas\Modules\Modules;
use NanoGas\Modules\Product\Product;

class Mysql extends ConnectionManager
{

    /** @var $instance self */
    private static $instance = null;

    /** @var $mysqlQueryCli QueryCliInterface */
    private $mysqlQueryCli = null;

    public function __construct()
    {
        $this->connection = new Connection();
        $this->mysqlQueryCli = new MysqlQueryCli($this->connection->getDb());
        mysqli_select_db($this->connection->getDb(), "project_nano");
    }

    public static function getInstance()
    {
        if (empty(self::$instance)) {
            self::$instance = new Mysql();
        }
        return self::$instance;
    }

    public function getQueryCli(): QueryCliInterface
    {
        return $this->mysqlQueryCli;
    }

}


?>