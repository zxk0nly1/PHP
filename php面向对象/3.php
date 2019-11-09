<?php
abstract class Notify{
    protected $color='red';
    protected $credit=10;
    //抽象类没有实现体
    abstract public function content();
    //final关键字对父类的方法保护，禁止重写策略
    public final function message(){
        return '<span style="color:'.$this->color.'">' .$this->content().',奖励'.$this->credit().'个积分</span>';
    }
    public function credit(){
        return $this->credit;
    }
}
class User extends Notify
{
    protected $credit=20;
    public function register(){
        return $this->message();
    }
    public function content(){
        return '感谢注册';
    }
}
class Comment extends Notify
{
    public function send(){
        return $this->message();
    }
    public function content(){
        return '感谢你的评论';
    }
}
echo (new User)->register();
echo "<hr/>";
echo (new Comment)->send();
