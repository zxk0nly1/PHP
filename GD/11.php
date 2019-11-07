<?php
$res=imagecreatefromjpeg('1.jpeg');
$icon=imagecreatefromjpeg('logo.jpg');
imagecopymerge($res,$icon,100,100,0,0,imagesx($icon),imagesy($icon),50);
// imagecopy($res,$icon,100,100,0,0,imagesx($icon),imagesy($icon));
header('Content-type:image/jpeg');
imagepng($res);
