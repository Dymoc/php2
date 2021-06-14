<?php
namespace app\models;

abstract class Tovar extends Model
{
    public $id;
    public $name;
    public $price;

    abstract protected function getPrice();

    public function __construct(
        $id = '',
        $name = '', 
        $price = 0)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

        protected function getTableName()
    {
        return 'tovar';
    }
}