<?php
require_once ('../../app.php');
use Elhawra\Classes\Models\CarsArabic;

if($request->getHas('id')){
    $id = $request->get('id');
    $car = new CarsArabic();
    $car->delete($id);

    $request->redirect('../car-ar.php');
}

