<?php
class Notify{
    protected $color='red';
    public function message(){
        return '<span style="color:'.$this->color.'">发送通知消息</span>';
    }
}
class User extends Notify
{
    public function register(){
        return $this->message();
    }
}
class Comment extends Notify
{
    public function send(){
        return $this->message();
    }
}
echo (new User)->register();
echo "<hr/>";
echo (new Comment)->send();
