<?php

use app\models\{
     Product, 
     User, 
     Category,
     Order
};
use app\engine\Db;
use app\engine\Autoload;

include "../config/config.php";
include "../engine/Autoload.php";

spl_autoload_register([new Autoload(), 'loadClass']);


// $product = new Product('Ноутбук', 'HP', 35000);
echo "<pre>";
// var_dump($product->insert());


// $user = new User;
// $user = $user->getOne(3);
// var_dump($user);
// $user->delete();

// $category = new Category('Продукты');
// $category->insert();

// $order = new Order(2, 'Не оплачено');
// var_dump($order->insert());

$product = new Product;
$product = $product->getOne(1);
var_dump($product);
$product->price=6000000;
var_dump($product);
$product->update();






die();
/*
//INSERT
$product = new Product('Чай', 25);

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