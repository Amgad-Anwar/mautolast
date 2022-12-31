<?php
namespace Elhawra\Classes\Validation;
class Image implements ValidationRule{
    public function check($name, $value)
    {
        $extentions = ['png','jpg','jpeg'];
        $ext = pathinfo($value['name'],PATHINFO_EXTENSION);
        if(!in_array($ext,$extentions)){
            return "$name Extention is not allowed";
        }
        return false;
    }
}
