<?php
namespace app\models;

class Good extends Model
{
    public $tovars;
    public $allPrice;
    public $allCount;

    public function __construct(
        $tovars=[], 
        $allPrice=0, 
        $allCount=0)
    {        
        $this->tovars = $tovars;
        $this->allPrice = $allPrice;
        $this->allCount = $allCount;
        // var_dump("<br>Создана корзина " . self::class . "<br>");
    }

    protected function getTableName()
    {
        return 'good';
    }


    public function addTovars(Tovar $el) 
    {
     array_push($this->tovars, $el);
    }

    public function getAllPrice()
    {
         foreach ($this->tovars as $key => $value) {

               $this->allPrice += $value->price;       
         }
         return $this->allPrice;
    }    

    public function getAllCount()
    {
         foreach ($this->tovars as $key => $value) {

               $this->allCount += $value->count;       
         }
         return $this->allCount;
    }    
}
