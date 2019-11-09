<?php
abstract class Query{
    abstract protected function record(array $data);
    public function select(){
        $this->record(['name'=>'后盾人','age'=>21,'tel'=>'19999999999']);
    }
}
class Model extends Query{
    protected $field=[];
    protected $deny=['name'];
    public function all(){
        $this->select();
      return $this->field;
    }
    protected function record(array $data){
        $this->field=$data;
    }
    protected function __tel(){
        return substr($this->field['tel'],0,8).'***';
    }
    public function __get($name)
    {
        if(method_exists($this,'__'.$name)){
            return call_user_func_array([$this,'__'.$name],[]);
        }
        if(isset($this->field[$name])){
            return $this->field[$name];
        }
        throw new Exception('参数错误');
    }
    public function __set($name, $value)
    {
        if(isset($this->field[$name])){
             $this->field[$name]=$value;
        }
        else{
            throw new Exception('参数错误');
        }
    }
    public function __unset($name)
    {
        if(!isset($this->field[$name])||in_array($name,$this->deny)){
            throw new Exception('属性不存在或禁止操作');
        }
        $this->field[$name]='';
    }
    public function __isset($name)
    {
        return isset($this->field[$name]);
    }
}
try{
    $user=new Model;
    $user->all();
    //unset($user->name);
    var_dump(isset($user->title));
}catch(Exception $e){
    echo $e->getMessage();
}