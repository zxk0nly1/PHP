<?php
include 'Thumb.php';
$thumb=new Thumb;
try{
$thumb->make('1.jpeg',200,100);
}
catch(Exception $e){
    echo $e->getMessage();
}