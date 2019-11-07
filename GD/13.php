<?php
include 'Water.php';
try{
    $water=new Water('water.png');
    $water->make('1.jpeg','b.jpg');
}
catch(Exception $e)
{
    echo $e->getMessage();
}