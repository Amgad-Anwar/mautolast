<?php
namespace Elhawra\Classes\Models;
use Elhawra\Classes\Db;
class Setting extends Db{
    public function __construct(){
        $this->table = "setting";
        $this->connect();
    }
}
