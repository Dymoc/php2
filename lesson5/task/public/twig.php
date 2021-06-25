<?php
require_once '../vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('../twigtemplate/layouts');
$twig = new \Twig\Environment($loader);

echo $twig->render('main.twig', [
     'menu' => 'Fabien',
     'content' => 'Что то'
]);

// lesson5\task\twigtemplate\layouts