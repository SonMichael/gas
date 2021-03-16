<?php

namespace NanoGas\Modules\Gift;


/**
 * Created by PhpStorm.
 * User: sonle
 * Date: 07/03/2021
 * Time: 13:57
 */
class GiftDto
{
    private $id;
    private $name;
    private $image;
    private $gift_category_id;
    private $visible;

    public function __construct(int $id, string $name, string $image, int $gift_category_id, int $visible)
    {
        $this->id = $id;
        $this->name = $name;
        $this->image = $image;
        $this->gift_category_id = $gift_category_id;
        $this->visible = $visible;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * @return string
     */
    public function getGiftCategoryId(): string
    {
        return $this->gift_category_id;
    }

    /**
     * @return int
     */
    public function getVisible(): int
    {
        return $this->visible;
    }


}