<?php
class Router
{

    private $controller;
    private $method;

    public function __construct()
    {
        $this->matchRoute();
    }

    public function matchRoute(){

        $url = explode("/", URL);
        //var_dump($url);
        $this->controller = !empty($url[1]) ? $url[1] : "Page";
        $this->method = !empty($url[2]) ? $url[2] : "index";

        $this -> controller = $this->controller .'Controller';

        require_once(__DIR__ ."/controllers/".$this->controller.".php");
    }
    public function run()
    {
        $controller = new $this->controller();
        $method = $this->method;

        $controller->$method();

        /*$accion = isset($_GET["ruta"]) ? $_GET["ruta"] : "index";

        switch ($accion) {
            case "traductor":
                $this->controller->traductor();
                break;
            case "contactenos":
                $this->controller->contactenos();
                break;
            case "registro":
                $this->controller->registro();
                break;
            case "autenticacion":
                $this->controller->inicio_sesion();
                break;
            default:
                $this->controller->index();
                break;
        }*/
    }
}
?>