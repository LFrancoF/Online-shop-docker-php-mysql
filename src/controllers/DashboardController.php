<?php
class DashboardController extends Controller{

    protected $model;

    public function __construct(){
        parent::__construct();
    }

    public function dashboard(){
        $data['page_id'] = 2;
        $data['page_tab'] = "Dashboard - Online Shop";
        $data['page_title'] = "Welcome to the Dashboard Shop";
        $data['page_name'] = "dashboard";
        $this->view->getView($this, "dashboard", $data);
    }
}