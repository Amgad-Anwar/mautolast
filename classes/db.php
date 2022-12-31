<?php
namespace Elhawra\Classes;
abstract class Db{
    protected $conn;
    protected $table;
    public function connect(){
        $this->conn = mysqli_connect(DB_SERVERNAME,DB_USERNAME,DB_PASSWORD,DB_NAME);
    }
    public function selectAll($fields = "*"){
        $sql = "SELECT $fields FROM `$this->table`";
        $result = mysqli_query($this->conn,$sql);
        return mysqli_fetch_all($result,MYSQLI_ASSOC);
    }

    public function selectAllWithLimit($fields = "*"){
        $sql = "SELECT $fields FROM `$this->table` LIMIT 4";
        $result = mysqli_query($this->conn,$sql);
        return mysqli_fetch_all($result,MYSQLI_ASSOC);
    }
    public function selectAllWithLimitOne($fields = "*"){
        $sql = "SELECT $fields FROM `$this->table` LIMIT 1";
        $result = mysqli_query($this->conn,$sql);
        return mysqli_fetch_all($result,MYSQLI_ASSOC);
    }

    public function selectId($id,$fields = "*"){
        $sql = "SELECT $fields FROM `$this->table` WHERE id = $id";
        $result = mysqli_query($this->conn,$sql);
        return mysqli_fetch_assoc($result);
    }

    public function selectWhere($conds,$fields = "*"){
        $sql = "SELECT $fields FROM `$this->table` WHERE $conds";
        $result = mysqli_query($this->conn,$sql);
        return mysqli_fetch_all($result,MYSQLI_ASSOC);
    }

    public function getConut(){
        $sql = "SELECT COUNT(*) AS Cnt FROM `$this->table`";
        $result = mysqli_query($this->conn,$sql);
        return mysqli_fetch_assoc($result)["Cnt"];
    }

    public function insert(string $fields,string $values){
        $sql = "INSERT INTO $this->table($fields) VALUES($values)";
        return mysqli_query($this->conn, $sql);
    }

    public function update(string $set,$id){
        $sql = "UPDATE $this->table SET $set WHERE id = $id";
        return mysqli_query($this->conn, $sql);
    }

    public function delete($id){
        $sql = "DELETE FROM $this->table WHERE id = $id";
        return mysqli_query($this->conn, $sql);
    }
}
