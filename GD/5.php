<?php
header('Content-type:image/gif');
$res = imagecreatetruecolor(500,500);
$red = imagecolorAllocate($res,255,0,0);
$green = imagecolorAllocate($res,0,255,0);
$blue=imagecolorAllocate($res,0,0,255);
$white=imagecolorAllocate($res,255,255,255);
imagefill($res,0,0,$white);
$font=realpath('Source.otf');
$text='后盾人houdunren.com';
$size=20;
$box=imagettfbbox($size,0,$font,$text);
$width=$box[2]-$box[0];
$height=$box[1]-$box[7];
imagettftext($res,$size,0,250-$width/2,250-$height/2,$blue,$font,$text);
imagepng($res);
