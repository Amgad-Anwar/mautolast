<?php
include ("../../app.php");
use Elhawra\Classes\Validation\Validator;
use Elhawra\Classes\Models\Category;


if($request->postHas('submit')){
    $name = $request->post('blog_cat');

    $validate = new Validator();
    $validate->validate('blog_cat',$name,['required','str','max']);

    if($validate->hasErrors()){
        $session->set("errors",$validate->getErrors());
        $request->aredirect('blogcategory.php');
    } else{

        $blog = new Category();
        $blog->insert("blog_cat","'$name'");
        $request->aredirect('blogcategory.php');

    }
}
