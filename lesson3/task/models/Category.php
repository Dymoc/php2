<?php

namespace app\models;


class Category extends Model
{
    public $id;
    public $name;


    public function __construct($name = '')
    {
        $this->name = $name;
    }


    public function getTableName() {
        return 'category';
    }
}