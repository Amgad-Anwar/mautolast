<?php
namespace Elhawra\Classes\Validation;
class Str implements ValidationRule{
    public function check($name, $value)
    {
        // TODO: Implement check() method.
        if(! is_string($value)){
            return "$name Must be string";
        }
        return false;
    }
}

