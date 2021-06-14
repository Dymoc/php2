<?php
namespace app\models;

class DigitalTovar extends Tovar
{
    public $id;
    public $name;
    public $price;
    public $count;
    public $allPrice;

    public function __construct(
         $id = '',
         $name = '', 
         $price = 0, 
         $count = 0, 
         $allPrice = 0)
    {
        parent::__construct(
             $id, 
             $name, 
             $price);
        $this->count = $count;
        $this->allPrice = $allPrice;

    }

        protected function getTableName()
    {
        return 'digitaltovar';
    }

    protected function getPrice() {
         return $this->allPrice = $this->$price * $this->$count / 2;
    }
}