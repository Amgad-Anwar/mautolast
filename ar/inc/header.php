<?php include ('../app.php')?>
<?php
use Elhawra\Classes\Models\Setting;
$data = new Setting();
$setting = $data->selectId(1);
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
    <link rel="stylesheet" type="text/css" href="<?= URL ?>ar/assets/css/bootstrap.min.css"/>

    <!-- flaticon -->
    <link rel="stylesheet" type="text/css" href="<?= URL ?>ar/assets/css/flaticon.css"/>

    <!-- mega menu -->
    <link rel="stylesheet" type="text/css" href="<?= URL ?>ar/assets/css/mega-menu/mega_menu.css"/>

    <!-- font awesome -->
    <link rel="stylesheet" type="text/css" href="<?= URL ?>ar/assets/css/font-awesome.min.css"/>

    <!-- owl-carousel -->
    <link rel="stylesheet" type="text/css" href="<?= URL ?>ar/assets/css/owl-carousel/owl.carousel.css"/>

    <!-- magnific-popup -->
    <link rel="stylesheet" type="text/css" href="<?= URL ?>ar/assets/css/magnific-popup/magnific-popup.css"/>

    <!-- jquery-ui -->
    <link rel="stylesheet" type="text/css" href="<?= URL ?>ar/assets/css/jquery-ui.css"/>

    <!-- revolution -->
    <link rel="stylesheet" type="text/css" href="<?= URL ?>ar/assets/revolution/css/settings.css"/>

    <!-- main style -->
    <link rel="stylesheet" type="text/css" href="<?= URL ?>ar/assets/css/style.css"/>

    <!-- responsive -->
    <link rel="stylesheet" type="text/css" href=<?= URL ?>ar/assets/"css/responsive.css"/>

    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300&display=swap" rel="stylesheet">
</head>

<body>

<!--=================================
  loading -->

<div id="loading">
    <div id="loading-center">
        <img src=<?= URL ?>ar/assets/images/loader.gif" alt="">
    </div>
</div>

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

    <div class="menu">
        <!-- menu start -->
        <nav id="menu" class="mega-menu">
            <!-- menu list items container -->
            <section class="menu-list-items">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 position-relative">
                            <!-- menu logo -->
                            <ul class="menu-logo">
                                <li>
                                    <img src="<?=URL?>uploads/<?=$setting['logo']?>">
                                </li>
                            </ul>
                            <!-- menu links -->
                            <ul style="text-align: right !important;" class="menu-links">
                                <!-- active class -->
                                <li><a style="font-family: 'Cairo', sans-serif;" href="javascript:void(0)" >العربيه <i
                                                class="fa fa-angle-down fa-indicator"></i></a>
                                    <!-- drop down multilevel  -->
                                    <ul class="drop-down-multilevel">
                                        <li><a style="text-align: right !important; font-family: 'Cairo', sans-serif;" href="../index.php">الانجليزيه</a></li>
                                    </ul>
                                </li>
                                <li><a style="font-family: 'Cairo', sans-serif;" href="<?= URL ?>ar/contact.php"> تواصل معنا </a></li>
                                <li><a style="font-family: 'Cairo', sans-serif;"  href="<?= URL ?>ar/blog.php"> الاخبار </a></li>
                                <li><a style="font-family: 'Cairo', sans-serif;" href="<?= URL ?>ar/maintainance.php"> الصيانه </a></li>
                                <li><a style="font-family: 'Cairo', sans-serif;" href="<?= URL ?>ar/cars.php"> السيارات </a></li>
                                <li><a style="font-family: 'Cairo', sans-serif;" href="<?= URL ?>ar/service.php"> خدماتنا </a></li>
                                <li><a style="font-family: 'Cairo', sans-serif;" href="javascript:void(0)"><i class="fa fa-angle-down fa-indicator"></i> عن الشركه </a>
                                    <!-- drop down multilevel  -->
                                    <ul class="drop-down-multilevel">
                                        <li><a style="text-align: right !important;font-family: 'Cairo', sans-serif;" href="<?= URL ?>ar/about.php">معلومات عنا</a></li>
                                        <li><a style="text-align: right !important;font-family: 'Cairo', sans-serif;" href="<?= URL ?>ar/team.php">فريق الشركه</a></li>
                                    </ul>
                                </li>
                                <li class="active"><a style="font-family: 'Cairo', sans-serif;" href="<?= URL ?>ar/index.php"> الرئيسيه </a></li>

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