<?php
include ("../../app.php");
use Elhawra\Classes\Validation\Validator;
use Elhawra\Classes\Models\Service;


if($request->postHas('submit')){
    $email = $request->post('email');
    $password = $request->post('password');

    $validate = new Validator();
    $validate->validate('email',$email,['required','email','max']);
    $validate->validate('password',$password,['required','str','max']);

    if($validate->hasErrors()){
        $session->set("errors",$validate->getErrors());
        $request->aredirect('login.php');
    } else{
        $ad = new Admin();
        $isLogin = $ad->login($email,$password,$session);

        if ($isLogin){
            $request->aredirect('index.php');
        } else{
            $request->aredirect('login.php');
        }
    }
} else{
    $request->aredirect('login.php');
}
