<?php
namespace Elhawra\Classes\Validation;
class Max implements ValidationRule{
    public function check($name, $value)
    {
        // TODO: Implement check() method.
        if(strlen($value) > 255){
            return "$name Must be less than 255 characters";
        }
        return false;
    }
}
