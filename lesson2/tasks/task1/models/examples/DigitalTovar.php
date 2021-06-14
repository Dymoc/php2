<?php
namespace app\models\examples;

class DigitalTovar extends Product
{
    public $id;
    public $name;
    public $price;
    public $count;
    public $allPrice;

    public function __construct(
         $id = null,
         $name = '', 
         $price = null, 
         $count = null, 
         $allPrice = null)
    {
        parent::__construct(
             $id, 
             $name, 
             $price);
        $this->count = $count;
        $this->allPrice = $allPrice;

    }

    //     protected function getTableName()
    // {
    //     return 'digitaltovar';
    // }

    protected function getPrice() {
         return $this->allPrice = $this->price * $this->count / 2;
    }

    public function showAllPrice() {
        $this->getPrice();
        return $this->allPrice;
    }
}