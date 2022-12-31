<?php
namespace Elhawra\Classes\Models;
use Elhawra\Classes\Db;
class Contact extends Db{
    public function __construct(){
        $this->table = "contact";
        $this->connect();
    }
}
