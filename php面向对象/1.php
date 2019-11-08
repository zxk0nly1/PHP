<?php
class Users{
    protected $name;
    //静态变量使用案例 self 指当前类
    protected static $classname='三年一班';
    public function say(){
        return self::$classname.'的'.$this->name.'说，你好';
    }
    public function setName(string $name)
    {
        $this->name=$name;
    }
    public function getName(){
        return $this->name;
    }
}
$obj=new Users();
$obj->setName('后盾人');
echo $obj->say();
echo '<hr>';
$lisi=new Users();
$lisi->setName('李四');
echo $lisi->say();