<?php

use Controllers\Login;

class App 
{
    public function __construct()
    {
        $url = $_GET['url'] ?? '';
        $url = rtrim($url, '/');
        $url = explode('/', $url);
        
        if(empty($url[0])) {
            $login = new Login();
            $login->render();
        }
        $fileController = "controllers/$url[0].php";
        //echo $fileController;
        if(file_exists($fileController)) {
            $nameController = "Controllers\\".ucfirst($url[0]);
            //echo $nameController;
            $controller = new $nameController;
        } else {
            echo "No existe archivo";
        }
        
    }
}

/*
* 0 => controller
* 1 => method
* 2 => parameters
*/