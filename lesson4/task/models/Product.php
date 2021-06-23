<?php

namespace app\models;

class Product extends DBModel
{
    public $id;
    public $name;
    public $description;
    public $price;

    public $props = [
        'id' => false,
        'name' => false,
        'description' => false,
        'price' => false
    ];


    public function __construct($name = null, $description = null, $price = null)
    {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
    }


    protected static function getTableName()
    {
        return 'products';
    }

}

