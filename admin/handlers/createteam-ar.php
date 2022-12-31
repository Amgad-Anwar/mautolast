<?php
include ("../../app.php");
use Elhawra\Classes\Validation\Validator;
use Elhawra\Classes\File;
use Elhawra\Classes\Models\TeamArabic;


if($request->postHas('submit')){
    $name = $request->post('name');
    $job = $request->post('job');
    $facebook = $request->post('facebook');
    $twitter = $request->post('twitter');
    $img = $request->files('img');

    $validate = new Validator();
    $validate->validate('name',$name,['required','str','max']);
    $validate->validate('job',$job,['required','str']);
    $validate->validate('facebook',$facebook,['required','str']);
    $validate->validate('twitter',$twitter,['required','str']);
    $validate->validate('img',$img,['requiredFile']);

    if($validate->hasErrors()){
        $session->set("errors",$validate->getErrors());
        $request->aredirect('team-ar.php');
    } else{
        $img = new File($img);
        $image = $img->rename()->upload();

        $blog = new TeamArabic();
        $blog->insert("name,job,facebook,twitter,img","'$name','$job','$facebook','$twitter','$image'");
        $request->aredirect('team-ar.php');

    }
}
