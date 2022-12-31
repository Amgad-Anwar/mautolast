<?php
include ("../../app.php");
use Elhawra\Classes\Validation\Validator;
use Elhawra\Classes\File;
use Elhawra\Classes\Models\Cars;


if($request->postHas('submit')){
    $name = $request->post('name');
    $price_old = $request->post('price_old');
    $price_new = $request->post('price_new');
    $make = $request->post('make');
    $model = $request->post('model');
    $registration_date = $request->post('registration_date');
    $mileage = $request->post('mileage');
    $condition = $request->post('con');
    $exterior_color = $request->post('exterior_color');
    $interior_color = $request->post('interior_color');
    $drivetrain = $request->post('drivetrain');
    $s_description = $request->post('s_description');
    $l_description = $request->post('l_description');
    $vehicle_overview = $request->post('vehicle_overview');
    $ext_img = $request->files('img');
    $inter_img = $request->files('images');

    $validate = new Validator();
    $validate->validate('name',$name,['required','str','max']);
    $validate->validate('price_old',$price_old,['required','str','max']);
    $validate->validate('price_new',$price_new,['required','str','max']);
    $validate->validate('make',$make,['required','str','max']);
    $validate->validate('model',$model,['required','str','max']);
    $validate->validate('mileage',$mileage,['required','str','max']);
    $validate->validate('registration_date',$registration_date,['required','str','max']);
    $validate->validate('exterior_color',$exterior_color,['required','str','max']);
    $validate->validate('interior_color',$interior_color,['required','str','max']);
    $validate->validate('drivetrain',$drivetrain,['required','str','max']);
    $validate->validate('s_description',$s_description,['required','str']);
    $validate->validate('l_description',$l_description,['required','str']);
    $validate->validate('vehicle_overview',$vehicle_overview,['required','str']);
    $validate->validate('img',$ext_img,['requiredFile']);
    $validate->validate('images',$inter_img,['requiredFile']);

    if($validate->hasErrors()){
        $session->set("errors",$validate->getErrors());
        $request->aredirect('carcreate.php');
    } else{
        $img = new File($ext_img);
        $image = $img->rename()->upload();

        $images = new File($inter_img);
        $imagesfinal = $images->rename()->upload();

        $car = new Cars();
        $car->insert("name,price_old,price_new,make,model,mileage,registration_date,con,exterior_color,interior_color,drivetrain,s_description,l_description,vehicle_overview,img,images",
            "'$name','$price_old','$price_new','$make','$model','$mileage','$registration_date','$condition','$exterior_color','$interior_color','$drivetrain','$s_description','$l_description','$vehicle_overview','$image','$imagesfinal'");
        $request->aredirect('car.php');

    }
}