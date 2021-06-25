<?php
namespace app\models\examples;

class VesTovar extends Product
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

        protected function getTableName()
    {
        return 'digitaltovar';
    }

    protected function getPrice() {
         if($this->count >= 1000) {
          return $this->allPrice = $this->price * $this->count / 0.9;
         }
         return $this->allPrice = $this->price * $this->count;
    }

    public function showAllPrice() {
        $this->getPrice();
        return round($this->allPrice, 2);
    }
}