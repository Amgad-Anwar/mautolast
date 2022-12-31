<?php
include ("../../app.php");
use Elhawra\Classes\Validation\Validator;
use Elhawra\Classes\Models\Admin;
use Elhawra\Classes\File;

if($request->postHas('submit')){
    $name = $request->post('name');
    $email = $request->post('email');
    $password = $request->post('password');
    $profile = $request->files('profile');

    $validate = new Validator();
    $validate->validate('name',$name,['str','max']);
    $validate->validate('email',$email,['email','max']);
    $validate->validate('password',$password,['str','max']);

    if($validate->hasErrors()){
        $session->set("errors",$validate->getErrors());
        $request->aredirect('setting.php');
    } else{
        $ad = new Admin();
        if (! empty($password)){
            $imgName = $ad->selectId(1,'profile')['img'];
            if ($profile["errors"] == 0){
                unlink(PATH."uploads/".$imgName);
                $file = new File($profile);
                $imgName = $file->rename()->upload();
            }
            $hashedPass = password_hash($password, PASSWORD_DEFAULT);
            $ad->update("name_admin = '$name',email = '$email', `password` = '$hashedPass',profile = '$imgName'",$session->get('adminId'));
        } else{
            $imgName = $ad->selectId(1,'profile')['img'];
            if ($profile["errors"] == 0){
                unlink(PATH."uploads/".$imgName);
                $file = new File($profile);
                $imgName = $file->rename()->upload();
            }
            $ad->update("name_admin = '$name',email = '$email',profile = '$imgName'",$session->get('adminId'));
        }

        $request->aredirect('handlers/handle-logout.php');
    }
}
