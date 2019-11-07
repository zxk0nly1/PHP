<?php
class Water{
    public function make(string $image)
    {
        $res=$this->resource($image);
        var_dump($res);
    }
    //根据图片生成资源
    protected function resource(string $image){
        $info=getimagesize($image);
        $function=[1=>'imagecreatefromgif',2=>'imagecreatefromjpeg',3=>'imagecreatefrompng'];
        $call=$function[$info[2]];
        return $call($image);
    }
}