<?php
namespace Elhawra\Classes\Models;
use Elhawra\Classes\Db;
class TeamArabic extends Db{
    public function __construct(){
        $this->table = "teamar";
        $this->connect();
    }
}
