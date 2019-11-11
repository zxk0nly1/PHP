<?php
class LoginException extends Exception{

}
class UploaderException extends Exception{

}
try{
    throw new LoginException('您还没有登录',403);
    throw new UploaderException('您还没有登录',403);
}catch(LoginException $e){
    echo 33;
}
catch(UploaderException $e){
    echo 44;
}
finally{
    echo '永远执行';
}