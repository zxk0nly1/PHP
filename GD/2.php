<?php
header('Content-type:image/gif');
$res = imagecreatetruecolor(500,500);
$red = imagecolorAllocate($res,255,0,0);
$green = imagecolorAllocate($res,0,255,0);
$blue=imagecolorAllocate($res,0,0,255);
imagefill($res,200,200,$red);
imagesetthickness($res,10);
imageline($res,0,0,500,500,$blue);
imagesetthickness($res,30);
imagesetstyle($res,[$red,$green,$blue]);
imageline($res,500,0,0,500,IMG_COLOR_STYLED);
imagepng($res);