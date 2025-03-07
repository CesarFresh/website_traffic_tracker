<?php
class Router {

    /*
        Handle the URL to call the controller
    */
    public static function route() {
        // Get controller name
        $controller = (isset($_GET['name'])) ? str_replace('-', '', ucwords($_GET['name'], '-')) : 'track-report';
        $controller .= "Controller";
        
        // Get method
        $method = isset($_GET['method']) ? $_GET['method'] : 'index';
        
        // Check if controller exists, otherwise 404 controller is called
        if(file_exists("../app/controllers/$controller.php")) {
            require_once "../app/controllers/$controller.php";
        } else {
            $controller = 'NotFoundController';
            require_once "../app/controllers/NotFoundController.php";
        }

        $controller = new $controller();
        
        // Call method
        if (method_exists($controller, $method)) {
            $controller->$method();
        } else {
            echo "Method not found";
        }
    }
}
