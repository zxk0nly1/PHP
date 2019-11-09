<?php
class Notify{
    protected $color='red';
    protected $credit=10;
    public function message(){
        return '<span style="color:'.$this->color.'">发送通知消息,奖励'.$this->credit().'个积分</span>';
        
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
echo (new User)->register();
echo "<hr/>";
echo (new Comment)->send();
