<?php
namespace Elhawra\Classes\Models;
use Elhawra\Classes\Db;
class Team extends Db{
    public function __construct(){
        $this->table = "team";
        $this->connect();
    }
}
