<?php
    require_once(__DIR__ ."/../App/config.php");
    require_once(__DIR__ ."/../App/router.php");

    $route = new Router();

    $route->run();

?>

