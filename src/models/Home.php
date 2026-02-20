<?php

class Home extends Mysql{
    public function __construct(){
        parent::_construct();
    }

    public function setUser(string $nombre, int $edad){
        $query_insert = "INSERT INTO usuario(nombre,edad) VALUES(?,?)";
        $arrData = array($nombre,$edad);
        $request_insert = $this->insert($query_insert, $arrData);
        return $request_insert;
    }

    public function getUser(int $id){
        $sql = "SELECT * FROM usuario WHERE id = ?";
        $arrData = array($id);
        $result = $this->select($sql, $arrData);
        return $result;
    }

    public function updateUser(int $id, string $nombre, int $edad){
        $sql = "UPDATE usuario SET nombre = ?, edad = ? WHERE id=?";
        $arrData = array($nombre,$edad,$id);
        $request_update = $this->update($sql, $arrData);
        return $request_update;
    }

    public function getUsers(){
        $sql = "SELECT * FROM usuario";
        $result = $this->selectAll($sql);
        return $result;
    }

    public function delUser(int $id){
        $sql = "DELETE FROM usuario WHERE id = ?";
        $arrData = array($id);
        $result = $this->delete($sql, $arrData);
        return $result;
    }
}