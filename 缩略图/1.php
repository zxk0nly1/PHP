<?php
/**
 * 缩略图等比例裁切算法
 * 
 * 图宽/布宽*布高=要取的图高
 * 图宽/布宽>图高/布高 裁切图宽度
 * 图宽=图高/布高*布宽
 */
$rw=500;
$rh=300;
$res=imagecreatetruecolor($rw,$rh);
$image=imagecreatefromjpeg('1.jpeg');
$iw=imagesx($image);
$ih=imagesy($image);
if($iw/$rw>$ih/$rh){
    $iw=$ih/$rh*$rw;
}
else{
    $ih=$iw/$rw*$rh;
}
imagecopyresampled($res,$image,0,0,0,0,$rw,$rh,$iw,$ih);
header('Content-type:image/jpeg');
imagejpeg($res);