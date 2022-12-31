<?php
namespace Elhawra\Classes\Validation;

interface ValidationRule {
    public function check($name,$value);
}