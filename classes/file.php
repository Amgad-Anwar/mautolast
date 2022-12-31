<?php
namespace Elhawra\Classes;
class File{
    private $name,$tmpName, $uploadedName;
    public function __construct($file)
    {
        $this->name = $file['name'];
        $this->tmpName = $file['tmp_name'];
    }
    public function rename(){
        $ext = pathinfo($this->name,PATHINFO_EXTENSION);
        $randomStr = uniqid();
        $this->uploadedName = "$randomStr.$ext";
        return $this;
    }
    public function upload(){
        $destination = PATH."uploads/".$this->uploadedName;
        move_uploaded_file($this->tmpName,$destination);
        return $this->uploadedName;
    }
}
