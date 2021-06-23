<?php

namespace app\models;


class Order extends Model
{
    public $id;
    public $user;
    public $status;

    public $props = [
        'id' => false,
        'user' => false,
        'status' => false
    ];

    public function __construct($user = null, $status = null)
    {
        $this->user = $user;
        $this->status = $status;
    }


    public function getTableName() {
        return 'orders';
    }
}
