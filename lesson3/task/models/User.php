<?php

namespace app\models;


class User extends Model
{
    public $id;
    public $login;
    public $pass;


    public function __construct($login = '', $pass = '')
    {
        $this->login = $login;
        $this->pass = $pass;
    }


    public function getTableName() {
        return 'users';
    }
}