<?php
include ("../../app.php");
use Elhawra\Classes\Validation\Validator;
use Elhawra\Classes\File;
use Elhawra\Classes\Models\ServiceArabic;


if($request->postHas('submit')){
    $title = $request->post('title');
    $description = $request->post('description');
    $img = $request->files('img');

    $validate = new Validator();
    $validate->validate('title',$title,['required','str','max']);
    $validate->validate('s_description',$description,['required','str']);
    $validate->validate('img',$img,['requiredFile']);

    if($validate->hasErrors()){
        $session->set("errors",$validate->getErrors());
        $request->aredirect('service-ar.php');
    } else{
        $img = new File($img);
        $image = $img->rename()->upload();

        $service = new ServiceArabic();
        $service->insert("title,img,description","'$title','$image','$description'");
        $request->aredirect('service-ar.php');

    }
}
