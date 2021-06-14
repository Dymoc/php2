<?php

use app\interfaces\IModel;
use app\models\{Product, User, Good, Tovar, ShtuchTovar};
use app\engine\Db;

include "../engine/Autoload.php";

spl_autoload_register([new Autoload(), 'loadClass']);


// $banan = new Tovar(1,"banan", 150, 1000);
// $mango = new Tovar(2,"mango", 550, 750);
// $banjo = new Tovar(3,"banjo", 1300, 50);
$tovar = new ShtuchTovar(1,"banan", 150, 1000);
echo "<pre>";
var_dump($tovar);
echo "</pre>";

// $tovar->insert($tovar);
// $goods = new app\models\Good;
// $goods->addTovars($banan);
// $goods->addTovars($mango);
// $goods->addTovars($banjo);

// $goods->getAllPrice();
// $goods->getAllCount();

// echo "<pre>";
// var_dump($goods);
// echo "</pre>";



// $product->getOne(15);
//$product->getAll();
$tovar1 = new ShtuchTovar(new Db());

echo "<pre>";
var_dump($tovar1);
echo "</pre>";

$user = new User(new Db());

echo "<pre>";
var_dump($user);
echo "</pre>";

$user->getOne(2);
$user->getAll();
$user->insert($tovar);


// function foo(IModel $model) {
//     $model->getAll();
// }


// var_dump($product);












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