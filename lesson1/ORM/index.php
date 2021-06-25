<?php

class Db {
    protected $tableName;
    protected $wheres = [];
    protected $andwheres = [];


    public function table($tableName) {
        $this->tableName = $tableName;
        return $this;
    }

    public function getAll() {
        
        $sql = "SELECT * FROM {$this->tableName}";

        if (!empty($this->wheres)) {
            $sql .= " WHERE ";
            foreach ($this->wheres as $value) {
                $sql .= $value['field'] . " = " . $value['value'];
                if ($value != end($this->wheres) || !empty($this->andwheres)) $sql .= " AND ";
            }
            $this->wheres = [];
        }
        if (!empty($this->andwheres)) {
            foreach ($this->andwheres as $value) {
                $sql .= $value['field'] . " = " . $value['value'];
                if ($value != end($this->andwheres)) $sql .= " AND ";
            }
            $this->andwheres = [];
        }
        return $sql . PHP_EOL;
    }

    public function getOne($id) {
        return "SELECT * FROM {$this->tableName} WHERE id = {$id}" . PHP_EOL;
    }

    public function where($field, $value) {
        $this->wheres[] = [
            'field' => $field,
            'value' => $value
        ];
        return $this;
    }

    public function andwhere($field, $value) {
        $this->andwheres[] = [
            'field' => $field,
            'value' => $value
        ];
        return $this;
    }
}

$db = new Db();
// echo $db->table('goods')->getAll();
// echo $db->table('goods')->getOne(1);
// echo $db->table('user')->where('name', 'admin')->getAll();
echo $db->table('users')->where('login', 'admin')->where('pass', 123)->getAll();
echo "<br>";
echo $db->table('goods')->where('name', 'чай')->where('name', 'чай')->andwhere('id', 5)->getAll();
