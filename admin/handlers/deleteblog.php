<?php
require_once ('../../app.php');
use Elhawra\Classes\Models\Blog;

if($request->getHas('id')){
    $id = $request->get('id');
    $blog = new Blog();
    $imgData1 = $blog->selectId($id,'main_img')['img'];
    $imgData2 = $blog->selectId($id,'internal_img')['img'];
    unlink(PATH. "uploads/$imgData1");
    unlink(PATH. "uploads/$imgData2");
    $blog->delete($id);

    $request->redirect('../blog.php');
}

