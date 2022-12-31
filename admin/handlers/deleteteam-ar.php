<?php
require_once ('../../app.php');
use Elhawra\Classes\Models\TeamArabic;

if($request->getHas('id')){
    $id = $request->get('id');
    $team = new TeamArabic();
    $team->delete($id);

    $request->redirect('../team-ar.php');
}

