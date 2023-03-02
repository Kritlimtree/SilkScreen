<?php
    $controllers = array(
                         'order'=>['check'],
                         '2'=>['check']
                         );

    function call($controller, $action){
        echo "routes to ".$controller."-".$action."<br>";
        require_once("controllers/".$controller."_controller.php");
        switch($controller)
        {
        case "order": 
                             
                             $controller = new OrderController();
                             break;

            case "2": 
                             $controller = new Section3Controller();
                             break;
        require_once("checkorder_".$controller.".php");
            }
        $controller->{$action}();
    }


?>