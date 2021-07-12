<?php

namespace app\models;


class Order extends Model
{
    public $id;
    public $user;
    public $status;


    public function __construct($user = '', $status = '')
    {
        $this->user = $user;
        $this->status = $status;
    }


    public function getTableName() {
        return 'orders';
    }
}
