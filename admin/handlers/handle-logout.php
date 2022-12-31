<?php
include ("../../app.php");
use Elhawra\Classes\Models\Admin;

$ad = new Admin();
$ad->logout($session);

$request->aredirect('login.php');
