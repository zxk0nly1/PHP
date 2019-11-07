<?php
include 'Water.php';
try{
$water=new Water;
$water->make('1.jpeg','a.jpg');
}
catch(Exception $e){
    echo $e->getMessage();
}