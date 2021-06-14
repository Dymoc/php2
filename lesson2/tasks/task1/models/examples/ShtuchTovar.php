<?php
namespace app\models\examples;

class ShtuchTovar extends Product
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
    //     return 'shtuchtovar';
    // }

    protected function getPrice() {
         return $this->allPrice = $this->price * $this->count;
    }

    public function showAllPrice() {
        $this->getPrice();
        return $this->allPrice;
    }
}