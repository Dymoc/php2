<?php

use app\engine\Render;
use app\models\{Product, User};
use app\engine\Autoload;

include "../config/config.php";
include "../engine/Autoload.php";

spl_autoload_register([new Autoload(), 'loadClass']);

$url = explode('/', $_SERVER['REQUEST_URI']);

$controllerName = $url[1] ?: 'product';
$actionName = $url[2];

$controllerClass = CONTROLLER_NAMESPACE . ucfirst($controllerName) . "Controller";

if (class_exists($controllerClass)) {
    $controller = new $controllerClass(new Render());
    $controller->runAction($actionName);
} else {
    echo "404";
}















die();
//INSERT
$product = new Product("Книга", "Фантастика", 23);
$product->save();



//UPDATE GET
$product = Product::getOne(1);
$product->price = 23;
$product->save();


//DELETE
$product = Product::getOne(1);
$product->delete();























