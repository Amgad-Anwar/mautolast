<?php
namespace Elhawra\Classes\Models;
use Elhawra\Classes\Session;
use Elhawra\Classes\Db;
class Admin extends Db{
    public function __construct(){
        $this->table = "admin";
        $this->connect();
    }
    public function login($email,$password,Session $session){
        $sql = "SELECT * FROM $this->table WHERE email = '$email' LIMIT 1";
        $result = mysqli_query($this->conn,$sql);
        $admin = mysqli_fetch_assoc($result);

        if(!empty($admin)){
            $hashedPassword = $admin['password'];
            $is_same = password_verify($password,$hashedPassword);
            if($is_same){
                $session->set('adminId',$admin['id']);
                $session->set('adminName',$admin['name_admin']);
                $session->set('adminEmail',$admin['email']);
                $session->set('adminId',$admin['id']);

                return true;
            }
            else{
                return false;
            }
        } else{
            return false;
        }


    }

    public function logout(Session $session){
        $session->destroy();
    }

}
