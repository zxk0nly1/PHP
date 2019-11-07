<?php
class Water{
    public function make(string $image,string $filename =null)
    {
        $res=$this->resource($image);
        return $this->showAction($image)($res,$filename??$image);
    }

    protected function showAction(stirng $image){
        $info=getimagesize($image);
        $functions=[1=>'imagegif',2=>'imagejpeg',3=>'imagepng'];
        return $functions[$info[2]];
    }

    //根据图片生成资源
    protected function resource(string $image){
        $info=getimagesize($image);
        $functions=[1=>'imagecreatefromgif',2=>'imagecreatefromjpeg',3=>'imagecreatefrompng'];
        $call=$functions[$info[2]];
        return $call($image);
    }
}