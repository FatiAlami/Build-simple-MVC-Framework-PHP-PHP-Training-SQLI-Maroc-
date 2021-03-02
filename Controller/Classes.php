<?php

class Classes extends Controller{
    public static function CreateView($viewName){
        $classesData = file_get_contents('./data/classes.json');
        require_once("./Views/$viewName.php");
    }
}