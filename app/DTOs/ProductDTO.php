<?php

namespace App\DTOs;

class ProductDTO
{
    public string $brand;
    public string $name;
    public ?string $image;
    public int $quantity;
    public float $cost_price;
    public float $sell_price;
    public string $description;
    public int $rating;
    public string $status;

    public function __construct(
        string $brand,
        string $name,
        ?string $image,
        int $quantity,
        float $cost_price,
        float $sell_price,
        string $description,
        int $rating,
        string $status
    ) {
        $this->brand = $brand;
        $this->name = $name;
        $this->image = $image;
        $this->quantity = $quantity;
        $this->cost_price = $cost_price;
        $this->sell_price = $sell_price;
        $this->description = $description;
        $this->rating = $rating;
        $this->status = $status;
    }
}
