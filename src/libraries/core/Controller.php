<?php
class Controller{

    protected $model;
    protected $view;

    public function __construct(){
        $this->view = new View();
        $this->loadModel();
    }

    public function loadModel(){
        $model = get_class($this);
        $model = str_replace("Controller", "", $model); //quitamos la palabra Controller del nombre de la clase del Controller, para cargar el modelo
        $routeModel = "models/".$model.".php";
        if (file_exists($routeModel)) {
            require_once($routeModel);
            $this->model = new $model();
        }
    }
}