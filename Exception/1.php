<?php

include 'code.php';
// $code =new Code;
// if($code->make(50)===false){
//     echo $code->getError();
// }
try{
    $code=new Code;
    $code->make(100);
}catch(Exception $e){
    echo $e->getMessage();
}