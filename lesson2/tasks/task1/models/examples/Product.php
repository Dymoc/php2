<?php
namespace app\models\examples;

abstract class Product
{
    public $id;
    public $name;
    public $price;

    abstract protected function getPrice();

    public function __construct(
        $id = null,
        $name = '', 
        $price = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    //     protected function getTableName()
    // {
    //     return 'tovar';
    // }
}