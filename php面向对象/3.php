<?php
class Notify{
    protected $color='red';
    protected $credit=10;
    //final关键字对父类的方法保护，禁止重写策略
    public final function message(){
        return '<span style="color:'.$this->color.'">发送通知消息,奖励'.$this->credit().'个积分</span>';
        
    }
    public function credit(){
        return $this->credit;
    }
}
class User extends Notify
{
    public function toUserMessage(){
        return "欢迎新用户进入网站";
    }
    protected $credit=20;
    public function register(){
        return $this->message();
    }
    // public function credit(){
    //     return 5;
    // }
}
class Comment extends Notify
{
    public function send(){
        return $this->message();
    }
}
echo (new User)->toUserMessage();
echo "<hr/>";
echo (new User)->register();
echo "<hr/>";
echo (new Comment)->send();
