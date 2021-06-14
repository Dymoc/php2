<?php

use app\interfaces\IModel;
use app\models\{ 
     User};
use app\models\Product as Tovar; // Необходимо для правильного идентифицирования, инче ругается на дубль
use app\engine\Db;

use app\models\examples\{
     Good, 
     Product, 
     ShtuchTovar,
     DigitalTovar,
     VesTovar
     };

include "../engine/Autoload.php";

spl_autoload_register([new Autoload(), 'loadClass']);


$sTovar = new ShtuchTovar(1,"CD", 150, 1000);
echo "<pre>";
var_dump($sTovar);
var_dump($sTovar->showAllPrice());
echo "</pre>";


$dTovar = new DigitalTovar(2, 'notebook', 15000, 15);

echo "<pre>";
var_dump($dTovar);
var_dump($dTovar->showAllPrice());
echo "</pre>";


$vTovar = new VesTovar(3, 'banan', 150, 1000);

echo "<pre>";
var_dump($vTovar);
var_dump($vTovar->showAllPrice());
echo "</pre>";











die();
/*
//CREATE
$product = new Product();
$product->name = 'Чай';
$product->price = 23;
$product->insert();

//READ
$product = new Product();
$product->getOne(5);
$product->getAll();

//UPDATE
$product = new Product();
$product->getOne(5);
$product->price = 25;
$product->update();

//DELETE
$product = new Product();
$product->getOne(5);
$product->delete();
*/