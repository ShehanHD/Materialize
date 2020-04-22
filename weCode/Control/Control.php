<?php
include_once("Model/Model.php");

class Control{
    function invoke(){
        if(isset($_REQUEST['request'])){
            $request = $_REQUEST['request'];
        }
        else{
            $request = "";
        }

        switch ($request) {
            case 'feedback':
                $obj = new Model();
                $obj->feedback($_REQUEST['email'], $_REQUEST['comment'], $_REQUEST['vote']);
                break;

            default:
                include_once('view/main.htm');
            break;
        }
    }
}
