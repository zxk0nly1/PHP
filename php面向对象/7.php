<?php

trait Log{
    public function save(){
        return __METHOD__;
    }
}
trait Comment{
    public function save(){
        return __METHOD__;
    }
}
class Topic {
    use Log,Comment{
        //替换方法
        Log::save insteadof Comment;
        Comment::save as send;
    }
}
$topic =new Topic;
// echo $topic->save();
echo $topic->send();
