<?php
class User{
    public function say(){
        return $this->name.'说，你好';
    }
    public function setName(string $name)
    {
        $this->name=$name;
    }
}
//类的创建方法
$obj=new User();
$obj->setName('zxk');
echo $obj->say();