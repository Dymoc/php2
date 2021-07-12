<?php


namespace app\controllers;


use app\engine\Request;
use app\engine\Session;
use app\models\repositories\UserRepository;


class AuthController extends Controller
{
    public function actionLogin() {
        $login = (new Request())->getParams()['login'];
        $pass = (new Request())->getParams()['pass'];


        if ((new UserRepository())->auth($login, $pass)) {
            header("Location:" . $_SERVER['HTTP_REFERER']);
            die();
        } else {
            die("Не верный логин-пароль");
        }
    }
//auth/register
    public function actionLogout() {
        (new Session())->regenerate();
        (new Session())->destroy();
        header("Location:" . $_SERVER['HTTP_REFERER']);
        die();
    }
}
