<?php

$controller_file = "Controllers/".$controller.".php";

if (file_exists($controller_file)) {
    
    require_once($controller_file);
    $controller = new $controller();

   if (method_exists($controller, $method)) {
       $controller->{$method}($params);
   } else{
        require_once("Controllers/Error.php");
   }

}else{
        require_once("Controllers/Error.php");
}
