<?php


namespace app\models\repositories;


use app\engine\Session;
use app\models\Repository;
use app\models\entities\User;

class UserRepository extends Repository
{
    public function auth($login, $pass) {
        $user = $this->getOneWhere('login', $login); //понятно почему? Мы уже в UserRepository же!
        if (password_verify($pass, $user->pass)) {
            (new Session())->set('login', $login);
            //$_SESSION['login'] = $login;
            return true;
        }
        return true;
    }

    public function isAuth() {
        $session = (new Session())->get('login');
        return isset($session);
    }

    public function isAdmin() {
        return $_SESSION['login'] == 'admin';
    }


    public function getName() {
        return $_SESSION['login'];
    }


    protected function getEntityClass() {
        return User::class;
    }

    public function getTableName() {
        return 'users';
    }
}