<?php 
    $foldePath = $_SERVER['SCRIPT_NAME'];
    $urlPath = $_SERVER['REQUEST_URI'];
    $url = substr($urlPath, 12);

   /* echo strlen($foldePath);
    echo strlen($urlPath);

    echo'<br>';

    var_dump($_SERVER);

    //echo $url;*/

    define('URL', $url);
    define('URL_PATH', "http://localhost/adso/Public/page/");
?>