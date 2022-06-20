<?php

namespace Student\Models;

class Room
{
    public int $id;
    public float $price;

    public function __construct(int $id, float $price)
    {
        $this->id = $id;
        $this->price = $price;
    }
}