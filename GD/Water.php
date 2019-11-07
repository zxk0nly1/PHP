<?php
class Water{
    protected $water;
    public function __construct(string $water)
    {
        $this->water=$water;
    }
    public function make(string $image,string $filename =null)
    {
        $this->checkImage($image);
        $res=$this->resource($image);
        $water=$this->resource($this->water);
        imagecopy($res,$water,0,0,0,0,imagesx($water),imagesy($water));
        return $this->showAction($image)($res,$filename??$image);
    }
    protected function checkImage($image){
        if(!is_file($image)||getimagesize($image)===false){
           throw new Exception ('file is not image');
        };
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