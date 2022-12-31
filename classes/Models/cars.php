<?php
namespace Elhawra\Classes\Models;
use Elhawra\Classes\Db;
class Cars extends Db{
    public function __construct(){
        $this->table = "cars";
        $this->connect();
    }

}
