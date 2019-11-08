<?php
class Thumb{
    public function make(string $image,int $width,int $height){
        $image=$this->resource($image);
        //var_dump($image);
    }
    protected function resource(string $image)
    {
        $this->check($image);
        $info=getimagesize($image);
        //print_r($info);
        $functions=[1=>'imagecreatefromgif',2=>'imagecreatefromjpeg',3=>'imagecreatefrompng'];
        $call=$functions[$info[2]];
        // echo $call;
        return $call($image);
    }
    protected function check(string $image){
        if(!is_file($image)||getimagesize($image)===false)
        {
            throw new Exception("file not exists or it's not image ");
        }
    }
}