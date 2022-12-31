<?php
require_once ('../../app.php');
use Elhawra\Classes\Models\Category;

if($request->getHas('id')){
    $id = $request->get('id');
    $team = new Category();
    $team->delete($id);
    $request->redirect('../blogcategory.php');
}

