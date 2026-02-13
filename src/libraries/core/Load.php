<?php

$controllerFile = "controllers/".$controller."Controller.php";
if (file_exists($controllerFile) && $controller != "error") {
    require_once($controllerFile);
    $controller = new ($controller."Controller")();
    if (method_exists($controller, $method))
        $controller->{$method}($params);
    else
        require_once("controllers/ErrorController.php");
}else{
    require_once("controllers/ErrorController.php");
}