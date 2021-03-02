<?php

require_once('Routes.php');

function __autoload($class_name){
    if (file_exists('./Lib/'.$class_name.'.php')){
        require_once './Lib/'.$class_name.'.php';
    }elseif (file_exists('./Controller/'.$class_name.'.php')){
        require_once './Controller/'.$class_name.'.php';
    }
}