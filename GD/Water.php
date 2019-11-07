<?php
class Water{
    protected $water;
    public function __construct(string $water)
    {
        $this->water=$water;
    }
    public function make(string $image,string $filename =null,int $pos=3)
    {
        $this->checkImage($image);
        $res=$this->resource($image);
        $water=$this->resource($this->water);
        $position=$this->position($res,$image,$pos);
        imagecopy($res,$water,$position['x'],$position['y'],0,0,imagesx($water),imagesy($water));
        //return $this->showAction($image)($res,$filename??$image);
        header('Content-type:image/jpeg');
        return $this->showAction($image)($res);
    }
    protected function position($res,$water,$pos){
        $info=['x'=>20,'y'=>20];
        switch($pos){
            case 1:
            break;
            case 2:
            $info['x']=(imagesx($res)-imagesx($water))/2;
            break;
            case 3:
            $info['x']=(imagesx($res)-imagesx($water))-20;
            break;
            case 4:
            $info['y']=(imagesy($res)-imagesy($water))/2;
            break;
            case 5:
            $info['x']=(imagesx($res)-imagesx($water))/2;
            $info['y']=(imagesy($res)-imagesy($water))/2;
            break;
            case 6:
            $info['x']=(imagesx($res)-imagesx($water))-20;
            $info['y']=(imagesy($res)-imagesy($water))/2;
            break;
            case 7:
            $info['y']=(imagesy($res)-imagesy($water))-20;
            break;
            case 8:
            $info['x']=(imagesx($res)-imagesx($water))/2;
            $info['y']=(imagesy($res)-imagesy($water))-20;
            break;
            case 9:
            $info['x']=(imagesx($res)-imagesx($water))-20;
            $info['y']=(imagesy($res)-imagesy($water))-20;
            break;

        }
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