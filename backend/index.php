<?php

    require_once("src/Lime/App.php");

    $app = new Lime\App();

    $app->bind("/", function() use($app){
        return 'Hello';
    });

    if (isset($_SERVER['HTTP_ORIGIN'])) {
        //header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
        header("Access-Control-Allow-Origin: *");
        header('Access-Control-Allow-Credentials: true');    
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS"); 
      }   
      if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
        if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
            header("Access-Control-Allow-Methods: GET, POST, OPTIONS");         
        if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
            header("Access-Control-Allow-Headers:{$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");
      
        exit(0);
      } 

    $app->post("/calculations", function($data) {
        $fp = fopen('calculations.csv', 'w');
        $request_body = file_get_contents('php://input');
        fwrite($fp, $request_body, true);
        fclose($fp);
        return '';
    });
    
    $app->run();
 ?>
