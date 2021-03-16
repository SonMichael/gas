<?php

namespace NanoGas\Modules\Store;

use NanoGas\Modules\Connection\Mysql;

/**
 * Created by PhpStorm.
 * User: sonle
 * Date: 07/03/2021
 * Time: 13:57
 */
abstract class StoreAbstract
{
    const STATUS_ACTIVE = 1;

    abstract public static function getStores();
}