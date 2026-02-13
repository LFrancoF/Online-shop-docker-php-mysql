<?php
class HomeController extends Controllers{

    protected $model;

    public function __construct(){
        parent::__construct();
    }

    public function home($params){
        
    }

    public function datos($params){
        echo "dato recibido: ".$params;
    }

    public function carrito($params){
        $carrito = $this->model->getCarrito($params);
        echo $carrito;
    }
}