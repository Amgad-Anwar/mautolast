<?php include ("app.php");?>
<?php
use Elhawra\Classes\Models\Setting;

$set = new Setting();
$setting = $set->selectId(1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="<?= $setting['keywords'] ?>"/>
    <meta name="description" content="<?= $setting['description'] ?>"/>
    <meta name="author" content="<?= $setting['author'] ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <title><?= $setting['name'] ?></title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?=URL?>uploads/<?=$setting['icon']?>" />

    <!-- bootstrap -->
    <link rel="stylesheet" type="text/css" href="<?=URL ?>assets/css/bootstrap.min.css"/>

    <!-- flaticon -->
    <link rel="stylesheet" type="text/css" href="<?=URL ?>assets/css/flaticon.css"/>

    <!-- mega menu -->
    <link rel="stylesheet" type="text/css" href="<?=URL ?>assets/css/mega-menu/mega_menu.css"/>

    <!-- slick css -->
    <link rel="stylesheet" type="text/css" href="<?=URL ?>assets/css/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="<?=URL ?>assets/css/slick/slick-theme.css"/>

    <!-- font awesome -->
    <link rel="stylesheet" type="text/css" href="<?=URL ?>assets/css/font-awesome.min.css"/>

    <!-- owl-carousel -->
    <link rel="stylesheet" type="text/css" href="<?=URL ?>assets/css/owl-carousel/owl.carousel.css"/>

    <!-- magnific-popup -->
    <link rel="stylesheet" type="text/css" href="<?=URL ?>assets/css/magnific-popup/magnific-popup.css"/>

    <!-- jquery-ui -->
    <link rel="stylesheet" type="text/css" href="<?=URL ?>assets/css/jquery-ui.css"/>

    <!-- revolution -->
    <link rel="stylesheet" type="text/css" href="<?=URL ?>assets/revolution/css/settings.css"/>

    <!-- main style -->
    <link rel="stylesheet" type="text/css" href="<?=URL ?>assets/css/style.css"/>

    <!-- responsive -->
    <link rel="stylesheet" type="text/css" href="<?=URL ?>assets/css/responsive.css"/>

</head>

<body>

<!--=================================
  loading -->


<!--=================================
  loading -->


<!--=================================
 header -->

<header id="header" class="defualt">
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="topbar-left text-lg-start text-center">
                        <ul class="list-inline">
                            <li><i class="fa fa-envelope-o"> </i> <?= $setting['email'] ?></li>
                            <li><i class="fa fa-clock-o"></i> Mon - Sat 8.00 - 18.00. Sunday CLOSED</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="topbar-right text-lg-end text-center">
                        <ul class="list-inline">
                            <li><i class="fa fa-phone"></i> <?= $setting['phone'] ?></li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--=================================
     mega menu -->

    <div  class="menu">
        <!-- menu start -->
        <nav id="menu" class="mega-menu">
            <!-- menu list items container -->
            <section class="menu-list-items">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 position-relative">
                            <!-- menu logo -->
                            <!-- menu links -->
                            <ul class="menu-links">
                                <!-- active class -->
                                <li class="active"><a href="<?=URL?>index.php"> Home </a></li>
                                <li><a href="javascript:void(0)">About <i class="fa fa-angle-down fa-indicator"></i></a>
                                    <!-- drop down multilevel  -->
                                    <ul class="drop-down-multilevel">
                                        <li><a href="<?=URL ?>about.php">About US</a></li>
                                        <li><a href="<?=URL ?>team.php">Team</a></li>
                                    </ul>
                                </li>
                                <li><a href="<?=URL ?>service.php"> Our Service </a></li>
                                <li><a href="<?=URL ?>cars.php"> Cars </a></li>
                                <li><a href="<?=URL ?>maintainance.php"> Maintainance </a></li>
                                <li><a href="<?=URL ?>blog.php"> News </a></li>
                                <li><a href="<?=URL ?>contact.php"> Contact </a></li>
                                <li><a href="javascript:void(0)">English <i
                                                class="fa fa-angle-down fa-indicator"></i></a>
                                    <!-- drop down multilevel  -->
                                    <ul class="drop-down-multilevel">
                                        <li><a href="<?=URL ?>ar/index.php">Arabic</a></li>
                                    </ul>
                                </li>
                            </ul>

                            <ul class="menu-logo">
                                <li>
                                    <img src="<?=URL?>uploads/<?=$setting['logo']?>">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </nav>
        <!-- menu end -->
    </div>
</header>

<!--=================================
 header -->