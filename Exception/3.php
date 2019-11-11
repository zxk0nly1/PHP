<?php
class ValidateException  extends Exception{
    public function __toString()
    {
        return '异常'.$this->getFile().$this->getCode().$this->getLine().$this->getMessage();
    }
}
try{
    throw new ValidateException('验证错误',403);
}catch(ValidateException $e){
    // echo 'ValidateException'.$e->getMessage();
    // echo $e->getFile().'<br/>';
    // echo $e->getCode().'<br/>';
    // echo $e->getLine().'<br/>';
    // echo $e->getMessage().'<br/>';
    //魔术方法 __tostring
    echo $e;
}
catch(Exception $e){
    // echo 'Exception'.$e->getMessage();
}