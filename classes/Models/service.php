<?php
namespace Elhawra\Classes\Models;
use Elhawra\Classes\Db;
class Service extends Db{
    public function __construct(){
        $this->table = "service";
        $this->connect();
    }
}
