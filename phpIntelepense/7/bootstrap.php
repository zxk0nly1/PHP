<?php
spl_autoload_register(function ($class){
    //echo $class;
    $file=str_replace('\\','/',$class).'.php';
    require $file;
});