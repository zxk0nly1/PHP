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
        // Log::save as protected;
        Comment::save as protected send;
    }
}
$topic =new Topic;
echo $topic->save();
