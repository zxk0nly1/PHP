<?php
header('Content-type:image/gif');
$res = imagecreatetruecolor(500,500);
$red = imagecolorAllocate($res,255,0,0);
$green = imagecolorAllocate($res,0,255,0);
$blue=imagecolorAllocate($res,0,0,255);
$white=imagecolorAllocate($res,255,255,255);
imagefill($res,0,0,$white);
for($i=0;$i<5000;$i++)
{
	imagesetpixel($res,mt_rand(0,500),mt_rand(0,500),$red);
}
for($i=0;$i<100;$i++)
{
	imageline(
	$res,
	mt_rand(0,500),
	mt_rand(0,500),
	mt_rand(0,500),
	mt_rand(0,500),
	$blue);
}
imagepng($res);