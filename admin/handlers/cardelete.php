<?php
require_once ('../../app.php');
use Elhawra\Classes\Models\Cars;

if($request->getHas('id')){
    $id = $request->get('id');
    $car = new Cars();
    $car->delete($id);

    $request->redirect('../car.php');
}

