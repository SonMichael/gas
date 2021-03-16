<?php

namespace NanoGas\Modules\Product;


/**
 * Created by PhpStorm.
 * User: sonle
 * Date: 07/03/2021
 * Time: 13:57
 */
class ProductDto
{
    private $id;
    private $name;
    private $color;
    private $material;
    private $weight;
    private $price;
    private $visible;
    private $image;

    public function __construct(
        int $id,
        string $name,
        string $color,
        string $material,
        int $weight,
        float $price,
        int $visible,
        string $image
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->color = $color;
        $this->material = $material;
        $this->weight = $weight;
        $this->price = $price;
        $this->visible = $visible;
        $this->image = $image;
    }

    public function getImage(): string
    {
        return $this->image;
    }

    public function getVisible(): int
    {
        return $this->visible;
    }

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
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @return string
     */
    public function getMaterial(): string
    {
        return $this->material;
    }

    /**
     * @return int
     */
    public function getWeight(): int
    {
        return $this->weight;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }


}