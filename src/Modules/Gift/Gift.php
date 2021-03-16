<?php

namespace NanoGas\Modules\Gift;

use NanoGas\Modules\Connection\Mysql;

/**
 * Created by PhpStorm.
 * User: sonle
 * Date: 07/03/2021
 * Time: 13:57
 */
class Gift extends GiftAbstract
{
    /** @var GiftDto $giftDto */
    private $giftDto;

    public function __construct(GiftDto $giftDto)
    {
        $this->giftDto = $giftDto;
    }

    public function getGiftDto()
    {
        return $this->giftDto;
    }

    public static function findStore($id): self
    {
        $query = "select * from gift where id = $id limit 1";
        return new self(Mysql::getInstance()->getQueryCli()->run($query)->getGiftFetchRow()->fetchRow());
    }

    public static function getGifts()
    {
        $query = "select * from gift where visible = " . self::STATUS_ACTIVE;
        return Mysql::getInstance()->getQueryCli()->run($query)->getGiftFetchRow()->fetchRows();
    }

    public function update(string $name, string $image, int $gift_category_id, int $visible)
    {
        $query = "update gift set `name` = '$name', image = '$image' , gift_category_id = '$gift_category_id', visible = $visible where id = " . $this->giftDto->getId();
        return Mysql::getInstance()->getQueryCli()->run($query);
    }

}