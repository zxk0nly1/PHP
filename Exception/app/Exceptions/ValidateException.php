<?php
namespace App\Exceptions;
use Exception;
class ValidateException extends Exception {
    public function render(){
        echo __METHOD__;
    }
}