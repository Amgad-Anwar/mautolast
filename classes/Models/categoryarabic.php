<?php
namespace Elhawra\Classes\Models;
use Elhawra\Classes\Db;
class CategoryArabic extends Db{
    public function __construct(){
        $this->table = "catsar";
        $this->connect();
    }
}
