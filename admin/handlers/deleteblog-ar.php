<?php
require_once ('../../app.php');
use Elhawra\Classes\Models\BlogArabic;

if($request->getHas('id')){
    $id = $request->get('id');
    $blog = new BlogArabic();
    $imgData1 = $blog->selectId($id,'main_img')['img'];
    $imgData2 = $blog->selectId($id,'internal_img')['img'];
    unlink(PATH. "uploads/$imgData1");
    unlink(PATH. "uploads/$imgData2");
    $blog->delete($id);

    $request->redirect('../blog-ar.php');
}

