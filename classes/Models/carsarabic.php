<?php
namespace Elhawra\Classes\Models;
use Elhawra\Classes\Db;
class CarsArabic extends Db{
    public function __construct(){
        $this->table = "carsar";
        $this->connect();
    }

}
