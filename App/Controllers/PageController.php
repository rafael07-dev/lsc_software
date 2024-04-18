<?php

require_once(__DIR__ . '/../Core/controller.php');


class PageController extends Controller{
    public function index()
    {
        //require_once (__DIR__. "/../Views/index.view.php"); 
        $this->render("index");
    }
    public function traductor()
    {
        //require_once(__DIR__. "/../Views/traductor.php");
        $this->render("traductor");
    }
    public function aprendizaje()
    {
        $this->render("aprendizaje");
    }
    public function contactenos()
    {
        $this->render("contactenos");
    }
    public function nosotros()
    {
        $this->render("nosotros");
    }
    public function registro()
    {
        //require_once (__DIR__. "/../Views/registro.php");
        $this->render("registro");
    }
    public function inicio_sesion()
    {
        //require_once (__DIR__. "/../Views/inicio-sesion.php");
        $this->render("inicio-sesion");
    }
}
?>