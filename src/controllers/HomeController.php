<?php
class HomeController extends Controller{

    protected $model;

    public function __construct(){
        parent::__construct();
    }

    public function home(){
        $data['page_id'] = 1;
        $data['page_tab'] = "Home - Online Shop";
        $data['page_title'] = "Welcome to the Online Shop";
        $data['page_name'] = "Home";
        $data['page_content'] = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius tempore asperiores temporibus 
                                perspiciatis at officiis repellendus distinctio, illum nihil facilis? Soluta quo, sed repellendus natus quibusdam 
                                obcaecati error tempora cumque?";
        $this->view->getView($this, "home", $data);
    }

    public function insertar(){
        $data = $this->model->setUser("Carla", 25);
        print_r($data);
    }

    public function verUsuario($id){
        $data = $this->model->getUser($id);
        print_r($data);
    }

    public function actualizar(){
        $data = $this->model->updateUser(1, "Gustavo F", 29);
        print_r($data);
    }

    public function verUsuarios(){
        $data = $this->model->getUsers();
        print_r($data);
    }

    public function eliminar($id){
        $data = $this->model->delUser($id);
        print_r($data);
    }
}