<?php
require_once ('../../app.php');
use Elhawra\Classes\Models\Team;

if($request->getHas('id')){
    $id = $request->get('id');
    $team = new Team();
    $team->delete($id);

    $request->redirect('../team.php');
}

