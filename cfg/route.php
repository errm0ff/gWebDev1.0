<?php

class Routing{
    
    public static function CreateRoute(){
        
        /*Default Controller*/
        $controllerName = "IndexController";
        $modelName = "IndexModel";
        $action = "Index";
        
        $route = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH ));
        print_r($route);
        
        $i = count($route)-1;
        while ($i > 0) {
            if ($route[$i] != '') {
                if (is_file(CONTROLLER_PATH . ucfirst($route[$i]) . "Controller.php") || !empty($_GET)) {
                    $controllerName = ucfirst($route[$i]) . "Controller";
                    $modelName = ucfirst($route[$i]) . "Model";
                    break;
                } 
                else {
                    $action = $route[$i];
                }
                    
                
            }
            $i--;
        }
        
        require_once  CONTROLLER_PATH . $controllerName . ".php"; //IndexController.php
        require_once MODEL_PATH . $modelName . ".php"; //IndexModelr.php

        $controller = new $controllerName();
        $controller->$action();
        
        /*Controller define*/
        
        /*if($route[2] != ''){
            $controllerName = ucfirst($route[2]. "Controller");
            $modelName = ucfirst($route[2]. "Model"); 
        }
        include CONTROLLER_PATH . $controllerName . ".php"; //IndexController.php
        include MODEL_PATH . $modelName . ".php"; //IndexModelr.php
        
        if(isset($route[2]) && $route[2] != ''){
            $action = $route[2];
        }
        
        $controller = new $controllerName();
        $controller->$action();
       */ 
    }
    public function errorPage(){
        
    }
   
}

