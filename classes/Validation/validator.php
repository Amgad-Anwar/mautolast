<?php
namespace Elhawra\Classes\Validation;

class Validator{
    private $errors = [];
    public function validate($name,$value,$rules){
        foreach ($rules as $rule){
            $className = 'Elhawra\\Classes\\Validation\\'.$rule;
            $obj = new $className;
            $error = $obj->check($name,$value);
            if ($error !== false){
                $this->errors[] = $error;
            }

        }
    }
    public function getErrors(){
        return $this->errors;
    }

    public function hasErrors(){
        return ! empty($this->errors);
    }
}