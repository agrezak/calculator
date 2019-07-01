<?php

    require_once("src/Lime/App.php");
    require_once("src/scripts/helpers.php");
    require_once("config/cors.php");

    $app = new Lime\App();

    $app->bind("/", function() use($app){
        return 'Hello';
    });

    $app->post("/calculations", function($data) {
        to_csv($data);
        return '';
    });

    $app->run();
 ?>
