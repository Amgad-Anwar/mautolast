<?php
include ("../../app.php");
use Elhawra\Classes\Validation\Validator;
use Elhawra\Classes\Models\Setting;
use Elhawra\Classes\File;


if($request->postHas('submit')){
    $name = $request->post('name');
    $email = $request->post('email');
    $phone = $request->post('phone');
    $address = $request->post('address');
    $author = $request->post('author');
    $keywords = $request->post('keywords');
    $country = $request->post('country');
    $description = $request->post('description');
    $logo = $request->files('logo');
    $icon = $request->files('icon');

    $validate = new Validator();
    $validate->validate('name',$name,['str','max']);
    $validate->validate('email',$email,['email','max']);
    $validate->validate('phone',$phone,['str','max']);
    $validate->validate('address',$address,['str']);
    $validate->validate('author',$author,['str','max']);
    $validate->validate('keywords',$keywords,['str','max']);
    $validate->validate('country',$country,['str','max']);
    $validate->validate('description',$description,['str']);
    $validate->validate('logo',$logo,['requiredFile']);
    $validate->validate('icon',$icon,['requiredFile']);

    if($validate->hasErrors()){
        $session->set("errors",$validate->getErrors());
        $request->aredirect('setting.php');
    } else{
        $ad = new Setting();
        $main = new File($logo);
        $firstImage = $main->rename()->upload();
        $intern = new File($icon);
        $secondImage = $intern->rename()->upload();
        $ad->update("`name` = '$name',email = '$email', `phone` = '$phone',address = '$address',author = '$author',keywords = '$keywords',country = '$country',description = '$description', logo = '$firstImage', icon = '$secondImage'",1);

        $request->aredirect('handlers/handle-logout.php');
    }
}
