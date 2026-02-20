<?php

class Mysql extends Connection{

    private $connect;
    private $strquery;
    private $arrValues;

    function _construct(){
        $this->connect = new Connection();
		$this->connect = $this->connect->connect();
    }

    public function insert(string $query, array $arrvalues){
        $this->strquery = $query;
        $this->arrValues = $arrvalues;
        $insert = $this->connect->prepare($this->strquery);
        $result = $insert->execute($this->arrValues);
        if ($result)
            $lastInsert = $this->connect->lastInsertId();
        else
            $lastInsert = 0;

        return $lastInsert;
    }

    public function select(string $query, array $arrvalues){
        $this->strquery = $query;
        $this->arrValues = $arrvalues;
        $result = $this->connect->prepare($this->strquery);
        $result->execute($this->arrValues);
        $data = $result->fetch(PDO::FETCH_ASSOC);
        return $data;
    }

    public function selectAll(string $query){
        $this->strquery = $query;
        $result = $this->connect->prepare($this->strquery);
        $result->execute();
        $data = $result->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function update(string $query, array $arrvalues){
        $this->strquery = $query;
        $this->arrValues = $arrvalues;
        $update = $this->connect->prepare($this->strquery);
        $result = $update->execute($this->arrValues);
        return $result;
    }

    public function delete(string $query, array $arrvalues){
        $this->strquery = $query;
        $this->arrValues = $arrvalues;
        $result = $this->connect->prepare($this->strquery);
        $result_del = $result->execute($this->arrValues);
        return $result_del;
    }


}