<?php
class User{
    protected $name;
    public function say(){
        return $this->name.'说，你好';
    }
    public function setName(string $name)
    {
        $this->name=$name;
    }
    public function getName(){
        return $this->name;
    }
}
//类的创建方法       $THIS关键指针详细解读
$obj=new User();
$obj->setName('后盾人');
echo $obj->say();
echo '<hr>';
$lisi=new User();
$lisi->setName('李四');
echo $lisi->say();