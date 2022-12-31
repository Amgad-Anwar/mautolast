<?php
namespace Elhawra\Classes\Validation;
class Required implements ValidationRule{
    public function check($name, $value)
    {
        // TODO: Implement check() method.
        if(empty($value)){
            return "$name is Required";
        }
        return false;
    }
}
