<?php
include ("inc/header.php");
use Elhawra\Classes\Models\Team;
$data = new Team();
$teams = $data->selectAll();
?>
<!--=================================
inner-intro -->

<section class="inner-intro bg-1 bg-overlay-black-70">
    <div class="container">
        <div class="row text-center intro-title">
            <div class="col-md-6 text-md-start d-inline-block">
                <h1 class="text-white">Our team </h1>
            </div>
            <div class="col-md-6 text-md-end float-end">
                <ul class="page-breadcrumb">
                    <li><a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
                    <li><span>team</span></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!--=================================
inner-intro -->


<!--=================================
our-team -->

<section class="our-team white-bg page-section-ptb">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <span>List of people who matter in our Company</span>
                    <h2>Our Team</h2>
                    <div class="separator"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <?php foreach ($teams as $team) {?>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team text-center">
                    <div class="team-image">
                        <img class="img-fluid icon" src="<?=URL?>uploads/<?= $team['img']?>" alt="">
                        <div class="team-social">
                            <ul>
                                <li><a class="icon-1" href="<?= $team['facebook']?>"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="icon-2" href="<?= $team['twitter']?>"><i class="fa fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="team-name">
                        <h5 class="text-black"><?= $team['name']?></h5>
                        <span class="text-black"><?= $team['job']?></span>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>

<!--=================================
our-team -->

<?php
include ("inc/footer.php");
?>