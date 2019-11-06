<?php
header('Content-type:image/gif');
$res = imagecreatetruecolor(500,500);
$red = imagecolorAllocate($res,255,0,0);
$green = imagecolorAllocate($res,0,255,0);
$blue=imagecolorAllocate($res,0,0,255);
imagefill($res,200,200,$red);
imageRectangle($res,100,100,400,400,$green);
imagefilledrectangle($res,200,200,300,300,$blue);
imageellipse($res,250,250,400,400,$green);
imagefilledellipse($res,250,250,100,100,$green);
imageline($res,0,0,500,500,$blue);
imageline($res,500,0,0,500,$blue);
imagepng($res);