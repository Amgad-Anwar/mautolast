<?php
namespace Elhawra\Classes\Models;
use Elhawra\Classes\Db;
class Blog extends Db{
    public function __construct(){
        $this->table = "blog";
        $this->connect();
    }

}
