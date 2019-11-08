<?php
class Thumb{
    public function make(string $file,string $to,int $width,int $height,int $type=3){
        $image=$this->resource($file);
        //var_dump($image);
        $info=$this->size($width,$height,imagesx($image),imagesy($image),$type);
        $res=imagecreatetruecolor($info[0],$info[1]);
        imagecopyresampled($res,$image,0,0,0,0,$info[0],$info[1],$info[2],$info[3]);
        // header('Content-type:image/jpeg');
        // imagejpeg($res);
        return $this->savaActive($file)($res,$to);
    }

    protected function size($rw,$rh,$iw,$ih,int $type)
    {
        switch($type){
            case 1:
            //保留宽度，高度自动
                $rh=$rw/$iw*$ih;
            break;
            case 2:
            //保留高度，宽度自动
                $rw=$rh/$ih*$iw;
            break;
            case 3:
            default:
                if($iw/$rw>$ih/$rh){
                    $iw=$ih/$rh*$rw;
                }
                else{
                    $ih=$iw/$rw*$rh;
                }
        }
        return [$rw,$rh,$iw,$ih];
    }
    protected function savaActive($image){
        $info=getimagesize($image);
        $functions=[1=>'imagegif',2=>'imagejpeg',3=>'imagepng'];
        return $functions[$info[2]];
    }

    protected function resource(string $image)
    {
        $this->check($image);
        $info=getimagesize($image);
        $functions=[1=>'imagecreatefromgif',2=>'imagecreatefromjpeg',3=>'imagecreatefrompng'];
        $call=$functions[$info[2]];
        return $call($image);
    }
    protected function check(string $image){
        if(!is_file($image)||getimagesize($image)===false)
        {
            throw new Exception("file not exists or it's not image ");
        }
    }
}