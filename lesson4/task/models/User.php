<?php

namespace app\models;


class User extends DBModel
{
    public $id;
    public $login;
    public $pass;

    public $props = [
        'id' => false,
        'login' => false,
        'pass' => false
    ];


    public function __construct($login = null, $pass = null)
    {
        $this->login = $login;
        $this->pass = $pass;
    }


    public static function getTableName() {
        return 'users';
    }


}