<?php


class Student extends Controller {
    public static function CreateView($viewName){
        $studentData = file_get_contents('./data/students.json');
        require_once("./Views/$viewName.php");
    }
}