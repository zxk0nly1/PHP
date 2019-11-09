<?php

trait Log{
    public function save(){
        return __METHOD__;
    }
}
trait Comment{
    public function total(){
        return __METHOD__;
    }
}
class Site{
    public function total(){
        return __METHOD__;
    }
}
class Topic extends Site{
    use Log,Comment;
    // public function total(){
    //     return __METHOD__;
    // }
}
$topic =new Topic;
echo $topic->total();
//优先级 ： 子类>多继承类>继承类 