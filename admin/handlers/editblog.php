<?php
include ("../../app.php");
use Elhawra\Classes\Validation\Validator;
use Elhawra\Classes\File;
use Elhawra\Classes\Models\Blog;

if($request->postHas('submit')){
    $id = $request->post('id');
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
    $validate->validate('img',$mainImg,['requiredFile']);
    $validate->validate('imgtwo',$internalImg,['requiredFile']);

    if($validate->hasErrors()){
        $session->set("errors",$validate->getErrors());
        $request->aredirect('blog.php');
    } else{
        $blog = new Blog();
        $imgName = $blog->selectId($id,'main_img')['img'];
        $imgNametwo = $blog->selectId($id,'internal_img')['imgtwo'];
        if ($mainImg["errors"] == 0){
            unlink(PATH."uploads/".$imgName);
            $file = new File($mainImg);
            $imgName = $file->rename()->upload();
        }
        if ($internalImg["errors"] == 0){
            unlink(PATH."uploads/".$imgNametwo);
            $file = new File($internalImg);
            $imgNametwo = $file->rename()->upload();
        }
        $blog->update("title = '$name',s_description = '$sDesc', l_description = '$lDesc',cat_id = '$catId',main_img = '$imgName',internal_img = '$imgNametwo'",$id);
        $request->aredirect('blog.php');

    }
}
