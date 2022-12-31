<?php
namespace Elhawra\Classes\Models;
use Elhawra\Classes\Db;
class ServiceArabic extends Db{
    public function __construct(){
        $this->table = "servicear";
        $this->connect();
    }
}
