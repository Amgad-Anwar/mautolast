<?php
require_once ('../../app.php');
use Elhawra\Classes\Models\ServiceArabic;

if($request->getHas('id')){
    $id = $request->get('id');
    $service = new ServiceArabic();
    $service->delete($id);

    $request->redirect('../service-ar.php');
}

