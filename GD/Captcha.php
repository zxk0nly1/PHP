<?php
class Captcha
{
	protected $width;
	protected $height;
	protected $res;
	public function __construct(int $width=100,int $height=30)
	{
		$this->width=$width;
		$this->height=$height;
	}
	public function render(){
		
		$res=imagecreatetruecolor($this->width,$this->height);
		imagefill($this->res=$res,0,0,imagecolorallocate($res,100,100,100));
		$this->line();
		$this->show();
	}
	protected function show(){
		header("Content-type:image/png");
		imagepng($this->res);
	}
	
	protected function line(){
		for($i=0;$i<6;$i++)
		{
			imagesetthickness($this->res,mt_rand(1,5));
			imageline(
			$this->res,
			mt_rand(0,$this->width),
			mt_rand(0,$this->height),
			mt_rand(0,$this->width),
			mt_rand(0,$this->height),
			$this->color()
			);
		}
	}
	protected function color(){
		
		return imagecolorallocate($this->res,mt_rand(0,255),mt_rand(0,255),mt_rand(0,255));
	}
}
