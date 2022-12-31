<?php
include ("../../app.php");
use Elhawra\Classes\Validation\Validator;
use Elhawra\Classes\File;
use Elhawra\Classes\Models\Team;


if($request->postHas('submit')){
    $id = $request->post('id');
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
        $request->aredirect('team.php');
    } else{
        $team = new Team();
        $imgName = $team->selectId($id,'img')['img'];
        if ($img["errors"] == 0){
            unlink(PATH."uploads/".$imgName);
            $file = new File($img);
            $imgName = $file->rename()->upload();
        }
        $team->update("name = '$name',job = '$job', facebook = '$facebook',twitter = '$twitter',img = '$imgName'",$id);
        $request->aredirect('team.php');

    }
}
