<?php
/**
 * CONST类常量使用详解
 */
class Modal{
    const EXIST_VALIDARE=1;
    public function validate(){
        return self::EXIST_VALIDARE;
    }
}
// echo Modal::EXIST_VALIDARE;
echo (new Modal)->validate();