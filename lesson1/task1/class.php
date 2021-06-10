<?php

class Tovar
{
    public $id;
    public $name;
    public $price;
    public $count;

    public function __construct($id = '',$name = '', $price = 0, $count = 0)
    {
     //    var_dump("<br>Товар поступил на склад " . self::class);
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->count = $count;
    }

    public function getPrice() 
    {
        echo "<br>Товар " . $this->name . " стоит " . $this->price . "руб/кг<br>";
    }
}

class Goods extends Tovar
{
    public $tovars=[];

    public function __construct($id = '',$name = '', $price = 0, $count = 0, $tovars=[])
    {        
        parent::__construct($id, $name, $price, $count);
        $this->tovars = $tovars;
        var_dump("<br>Создана корзина " . self::class);
    }

    public function addTovars(Tovar $el) 
    {
     array_push($this->tovars, $el);
    }

    public function getAllPrice()
    {
         foreach ($this->tovars as $key => $value) {

               $this->price += $value->price;       
         }
         return $this->price;
    }    

    public function getAllCount()
    {
         foreach ($this->tovars as $key => $value) {

               $this->count += $value->count;       
         }
         return $this->count;
    }    
}

$banan = new Tovar(1,"banan", 150, 1000);
$mango = new Tovar(2,"mango", 550, 750);
$banjo = new Tovar(3,"banjo", 1300, 50);

$goods = new Goods(1, "goods");
$goods->addTovars($banan);
$goods->addTovars($mango);
$goods->addTovars($banjo);

$goods->getAllPrice();
$goods->getAllCount();

echo "<pre>";
var_dump($goods);
echo "</pre>";