<?php
include ("../../app.php");
use Elhawra\Classes\Validation\Validator;
use Elhawra\Classes\File;
use Elhawra\Classes\Models\ServiceArabic;


if($request->postHas('submit')){
    $id = $request->post('id');
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
        $blog = new ServiceArabic();
        $imgName = $blog->selectId($id,'img')['img'];
        if ($img["errors"] == 0){
            unlink(PATH."uploads/".$imgName);
            $file = new File($img);
            $imgName = $file->rename()->upload();
        }
        $blog->update("title = '$title',description = '$description',img = '$imgName'",$id);
        $request->aredirect('service-ar.php');

    }
}
