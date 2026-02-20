<?php

class Connection{

	private $connect;

	public function __construct(){
		$connectionString = "mysql:host=".DB_HOST.";dbname=".DB_NAME.";".DB_CHARSET;
		try{
		    //$this->conect = new PDO($connectionString, $this->user, $this->password,array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
			//
			$this->connect = new PDO($connectionString, DB_USER, DB_PASSWORD);
			$this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		    //echo "conexion exitosa";
		}catch(PDOException $e){
			$this->connect = 'Error de conexión';
		    echo "ERROR: " . $e->getMessage();
		}
	}

	public function connect(){
		return $this->connect;
	}
}