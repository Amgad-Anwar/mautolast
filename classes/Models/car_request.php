<?php
namespace Elhawra\Classes\Models;
use Elhawra\Classes\Db;
class Car_Request extends Db{
    public function __construct(){
        $this->table = "car_request";
        $this->connect();
    }

}
