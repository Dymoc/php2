<?php


namespace app\engine;


use app\interfaces\IRenderer;

class TwigRender implements IRenderer
{
    public 

    public function renderTemplate($template, $params = []) {
        require_once '../vendor/autoload.php';

        $loader = new \Twig\Loader\FilesystemLoader('/');
        $twig = new \Twig\Environment($loader);

        return $twig->render('template.twig', ['name' => 'Fabien']);
    }
}