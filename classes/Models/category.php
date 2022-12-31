<?php
namespace Elhawra\Classes\Models;
use Elhawra\Classes\Db;
class Category extends Db{
    public function __construct(){
        $this->table = "cats";
        $this->connect();
    }
}
