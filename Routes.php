<?php

Route::set('index',function (){
    Index::CreateView('index');
});

Route::set('student',function (){
    Student::CreateView('student');
});

Route::set('classes',function (){
    Classes::CreateView('classes');
});