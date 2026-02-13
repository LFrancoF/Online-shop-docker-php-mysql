<?php
class ErrorController extends Controller{
    public function __construct(){
        parent::__construct();
    }

    public function notFound(){
        $this->view->getView($this, "error");
    }
}

$controllerError = new ErrorController();
$controllerError->notFound();