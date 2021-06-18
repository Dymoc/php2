<?php

namespace app\models;

use app\interfaces\IModel;
use app\engine\Db;

abstract class Model implements IModel
{


    abstract protected function getTableName();


    public function getOne($id) {
        $sql = "SELECT * FROM {$this->getTableName()} WHERE id = :id";
        return DB::getInstance()->queryOne($sql, ['id' => $id]);
    }

    public function getObject($id) {
        $sql = "SELECT * FROM {$this->getTableName()} WHERE id = :id";

        return DB::getInstance()->queryOneObject($sql, ['id' => $id], get_called_class());
    }


    public function getAll() {
        $sql = "SELECT * FROM {$this->getTableName()}";

        return DB::getInstance()->queryAll($sql);
    }

    public function insert() {
        $keys;
        $values;
        
        foreach ($this as $key => $value) {
            if ($key == 'id') continue;

            $keys .= "{$key},";
            $values .= ":{$key},";
        }

        $keys = substr($keys, 0, -1);
        $values = substr($values, 0, -1);
            
            
         $sql = "INSERT INTO {$this->getTableName()} ({$keys}) VALUES ({$values})";
         $array = (array)$this;
         unset($array['id']);
         var_dump($array);

        DB::getInstance()->queryInsert($sql, $array);
        $this->id = DB::getInstance()->lastInsertId();

       return $this;
    }

    public function update() {

        $keys;
        
        foreach ($this as $key => $value) {
            if ($key == 'id') continue;

            $keys .= "{$key}=:{$key},";
        }

        $keys = substr($keys, 0, -1);
        $array = (array)$this;

        $sql = "UPDATE {$this->getTableName()} SET {$keys} WHERE id = :id";
        var_dump($sql);
        DB::getInstance()->queryAll($sql, $array);
        $this->id = DB::getInstance()->lastInsertId();

        return $this;
    }

    public function delete() {
        $sql = "DELETE FROM {$this->getTableName()} WHERE id = :id";
        return DB::getInstance()->queryOne($sql, ['id' => $this->id]);

        return $this;
    }

}