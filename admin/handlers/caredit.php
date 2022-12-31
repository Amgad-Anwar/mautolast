<?php
include ("../../app.php");
use Elhawra\Classes\Validation\Validator;
use Elhawra\Classes\File;
use Elhawra\Classes\Models\Cars;


if($request->postHas('submit')){
    $id = $request->post('id');
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
        $request->aredirect('caredite.php');
    } else{
        $car = new Cars();
        $imgName = $car->selectId($id,'img')['img'];
        if ($ext_img["errors"] == 0){
            unlink(PATH."uploads/".$imgName);
            $file = new File($ext_img);
            $imgName = $file->rename()->upload();
        }

        $imgNameTwo = $car->selectId($id,'images')['images'];
        if ($inter_img["errors"] == 0){
            unlink(PATH."uploads/".$imgNameTwo);
            $file = new File($inter_img);
            $imgNameTwo = $file->rename()->upload();
        }
        $car->update("name = '$name',price_old = '$price_old', price_new = '$price_new',make = '$make',model = '$model',mileage = '$mileage',registration_date = '$registration_date',con = '$condition',exterior_color = '$exterior_color',interior_color = '$interior_color',drivetrain = '$drivetrain',s_description = '$s_description',l_description = '$l_description',vehicle_overview = '$vehicle_overview',img = '$imgName',images = '$imgNameTwo'",$id);

        $request->aredirect('car.php');

    }
}
