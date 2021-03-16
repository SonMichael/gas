<?php

namespace NanoGas\Modules\Gift;

use NanoGas\Modules\Connection\Mysql;

/**
 * Created by PhpStorm.
 * User: sonle
 * Date: 07/03/2021
 * Time: 13:57
 */
abstract class GiftAbstract
{
    const STATUS_ACTIVE = 1;

    abstract public static function getGifts();
}