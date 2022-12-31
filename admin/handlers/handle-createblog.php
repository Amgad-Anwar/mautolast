<?php
include ("../../app.php");
use Elhawra\Classes\Validation\Validator;
use Elhawra\Classes\File;
use Elhawra\Classes\Models\Blog;


if($request->postHas('submit')){
//    print_r($_FILES['img']);
//    return 0;
    $name = $request->post('title');
    $sDesc = $request->post('s_description');
    $lDesc = $request->post('l_description');
    $catId = $request->post('cat_id');
    $mainImg = $request->files('img');
    $internalImg = $request->files(('imgtwo'));

    $validate = new Validator();
    $validate->validate('title',$name,['required','str','max']);
    $validate->validate('s_description',$sDesc,['required','str']);
    $validate->validate('l_description',$lDesc,['required','str']);
    $validate->validate('cat_id',$catId,['required']);
    $validate->validate('main_img',$mainImg,['requiredFile']);
    $validate->validate('internal_img',$internalImg,['requiredFile']);

    if($validate->hasErrors()){
        $session->set("errors",$validate->getErrors());
        $request->aredirect('blogcreate.php');
    } else{
        $main = new File($mainImg);
        $firstImage = $main->rename()->upload();
        $intern = new File($internalImg);
        $secondImage = $intern->rename()->upload();

        $blog = new Blog();
        $blog->insert("title,s_description,l_description,main_img,internal_img,cat_id","'$name','$sDesc','$lDesc','$firstImage','$secondImage','$catId'");
        $request->aredirect('blogcreate.php');

    }
}
