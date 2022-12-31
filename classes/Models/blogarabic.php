<?php
namespace Elhawra\Classes\Models;
use Elhawra\Classes\Db;
class BlogArabic extends Db{
    public function __construct(){
        $this->table = "blogar";
        $this->connect();
    }

}
