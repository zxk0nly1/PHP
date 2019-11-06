<?php
// $res=imagecreatefrompng('1.png');
// var_dump($res);
// $water=imagecreatefrompng('water.png');
// echo imagesx($water);
// echo imagesy($water);

$info=getimagesize('water.png');
print_r($info);

// 1 gif 2 png 3 jpeg