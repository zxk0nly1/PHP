<?php
class Notify{
    protected function send(){
        return "notify send";
    }
}
class User extends Notify
{
    public function say(){
        return '你好，后盾人'.$this->send();
    }
}
//protected可以被继承，private不能被继承
$user=new User;
echo $user->say();