<?php
namespace Elhawra\Classes;
class Request{
    public function get(string $key){
        return $_GET[$key];
    }
    public function post(string $key){
        return $_POST[$key];
    }

    public function files(string $key){
        return $_FILES[$key];
    }
    public function PostClean(string $key){
        return trim(htmlspecialchars($_POST($key)));
    }
    public function getHas(string $key) : bool{
        return isset($_GET[$key]);
    }
    public function postHas(string $key) : bool{
        return isset($_POST[$key]);
    }
    public function redirect($path){
        header('Location: '.$path);
    }
    public function aredirect($path){
        header('Location: '.URL.'admin/'.$path);
    }
}
