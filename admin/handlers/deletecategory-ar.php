<?php
require_once ('../../app.php');
use Elhawra\Classes\Models\CategoryArabic;

if($request->getHas('id')){
    $id = $request->get('id');
    $team = new CategoryArabic();
    $team->delete($id);
    $request->redirect('../blogcategory-ar.php');
}

