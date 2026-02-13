<?php

class View{
    function getView($controller, $view, $data = ""){
        $controller = str_replace("Controller", "", get_class($controller));
        $controller = strtolower($controller);
        
        if ($controller == "home")
            $view = "views/".$view.".php";
        else
            $view = "views/".$controller."/".$view.".php";

        require_once($view);
    }
}