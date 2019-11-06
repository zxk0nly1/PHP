<?php
header('Content-type:image/gif');
$res = imagecreatetruecolor(500,500);
$red = imagecolorAllocate($res,255,0,0);
$green = imagecolorAllocate($res,0,255,0);
$blue=imagecolorAllocate($res,0,0,255);
$white=imagecolorAllocate($res,255,255,255);
imagefill($res,0,0,$white);
$font=realpath('Source.otf');
$text='zhouxiaokeng';
$text1='后盾人';
for($i=0;$i<strlen($text);$i++){
	imagettftext($res,20,mt_rand(-20,30),20*$i,50,$red,$font,$text[$i]);
}
for($i=0;$i<mb_strlen($text1,'utf-8');$i++){
	imagettftext(
	$res,
	20,
	mt_rand(-20,30),
	125*$i+50,
	150,
	$red,
	$font,
	mb_substr($text1,$i,1,'utf-8')
	);
}
imagepng($res);
imagedestroy($res);