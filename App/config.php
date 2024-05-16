<?php 
    $foldePath = $_SERVER['SCRIPT_NAME'];
    $urlPath = $_SERVER['REQUEST_URI'];
    $url = substr($urlPath, 20);

    define('URL', $url);
    define('URL_PATH', "http://localhost/lsc_software/Public/page/");
?>