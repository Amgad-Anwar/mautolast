<?php
require_once ('../../app.php');
use Elhawra\Classes\Models\Service;

if($request->getHas('id')){
    $id = $request->get('id');
    $service = new Service();
    $service->delete($id);

    $request->redirect('../service.php');
}

