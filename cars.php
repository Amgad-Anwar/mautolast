<?php
include("inc/header.php");

use Elhawra\Classes\Models\Cars;

$data = new Cars();
$cars = $data->selectAll();
?>


<!--=================================
 inner-intro -->

<section class="inner-intro bg-1 bg-overlay-black-70">
    <div class="container">
        <div class="row text-center intro-title">
            <div class="col-md-6 text-md-start d-inline-block">
                <h1 class="text-white">Cars </h1>
            </div>
            <div class="col-md-6 text-md-end float-end">
                <ul class="page-breadcrumb">
                    <li><a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
                    <li><span>Cars</span></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!--=================================
 inner-intro -->


<!--=================================
product-listing  -->

<section class="product-listing page-section-ptb">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="row">
                    <?php foreach ($cars as $car) { ?>
                    <div class="col-lg-4 col-sm-6">
                        <div class="car-item gray-bg text-center">
                            <div class="car-image">
                                <img class="img-fluid" src="<?=URL ?>uploads/<?= $car['img'] ?>" alt="">
                                <div class="car-overlay-banner">
                                    <ul>
                                        <li><a href="<?=URL ?>car-details.php?id=<?= $car['id'] ?>"><i class="fa fa-link"></i></a></li>
                                        <li><a href="<?=URL ?>car-details.php?id=<?= $car['id'] ?>"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="car-list">
                                <ul class="list-inline">
                                    <li><i class="fa fa-registered"></i> <?= $car['registration_date'] ?></li>
                                    <li><i class="fa fa-cog"></i> <?= $car['model'] ?></li>
                                    <li><i class="fa fa-shopping-cart"></i> <?= $car['mileage'] ?></li>
                                </ul>
                            </div>
                            <div class="car-content">
                                <div class="star">
                                    <i class="fa fa-star orange-color"></i>
                                    <i class="fa fa-star orange-color"></i>
                                    <i class="fa fa-star orange-color"></i>
                                    <i class="fa fa-star orange-color"></i>
                                    <i class="fa fa-star-o orange-color"></i>
                                </div>
                                <a href="<?=URL ?>car-details.php?id=<?= $car['id'] ?>"><?= $car['name'] ?></a>
                                <div class="separator"></div>
                                <div class="price">
                                    <span class="old-price"><?= $car['price_old'] ?></span>
                                    <span class="new-price"><?= $car['price_new'] ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!--=================================
product-listing  -->

<?php
include("inc/footer.php");
?>