<?php
namespace Elhawra\Classes\Models;
use Elhawra\Classes\Db;
class Requests extends Db{
    public function __construct(){
        $this->table = "requests";
        $this->connect();
    }
}
