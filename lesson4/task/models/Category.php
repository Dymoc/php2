<?php

namespace app\models;


class Category extends Model
{
    public $id;
    public $name;

    public $props = [
        'id' => false,
        'name' => false
    ];


    public function __construct($name = null)
    {
        $this->name = $name;
    }


    public function getTableName() {
        return 'category';
    }
}