<?php
include 'Thumb.php';
$thumb=new Thumb;
try{
$thumb->make('1.jpeg','1.jpg',100,200,1);
}
catch(Exception $e){
    echo $e->getMessage();
}