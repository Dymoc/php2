<?php


namespace app\models;


class Basket extends DBModel
{

    public function getBasket() {

    }

    protected static function getTableName()
    {
        return 'basket';
    }
}