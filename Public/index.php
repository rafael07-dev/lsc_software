<?php
    /*require_once(__DIR__ ."/../App/autoload.php");
    require_once(__DIR__ ."/../App/Controllers/PageController.php");

    $controller = new PageController();

    $router = new Router($controller);

    $router->run();*/

    require_once(__DIR__ ."/../App/config.php");
    //require_once(__DIR__ ."/../App/Core/controller.php");
    require_once(__DIR__ ."/../App/router.php");

    $route = new Router();

    $route->run();

    //echo"Estoy en index";
?>

