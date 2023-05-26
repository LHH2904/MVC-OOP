<?php
class BaseModel
{
    function __construct()
    {
        $this->conn = new PDO("mysql:host=127.0.0.1;dbname=poly-mvc;charset=utf8", "root", "");
    }

    static function all()
    {
        $model = new static;
        // câu sql
        $query = "select * from " . $model->table;
        // thực thi câu lệnh sql
        $stmt = $model->conn->prepare($query);
        $stmt->execute();
        // lấy toàn bộ dữ liệu trả về từ câu lệnh
        return $stmt->fetchAll();
    }

    static function destroy($id)
    {
        $model = new static;
        // câu sql
        $query = "delete from " . $model->table . " where id = $id";
        // thực thi câu lệnh sql
        $stmt = $model->conn->prepare($query);
        $stmt->execute();
    }

    static function find($id)
    {
        $model = new static;
        // câu sql
        $query = "select * from " . $model->table . " where id = $id";
        // thực thi câu lệnh sql
        $stmt = $model->conn->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll();
        if (count($data) > 0) {
            return $data[0];
        }

        return [];
    }

    static function where($col, $con, $val)
    {
        $model = new static;
        // câu sql
        $model->querybuilder = "select * from " . $model->table . " where $col $con '$val'";
        return $model;
    }

    static function andWhere($col, $con, $val)
    {
        $this->querybuilder .= " and $col $con '$val'";
        return $this;
    }

    function get()
    {
        $stmt = $this->conn->prepare($this->querybuilder);
        $stmt->execute();
        // lấy toàn bộ dữ liệu trả về từ câu lênh
        return $stmt->fetchAll();
    }
}
