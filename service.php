<?php
include("inc/header.php");

use Elhawra\Classes\Models\Service;

$serv = new Service();
$services = $serv->selectAll();
?>


    <!--=================================
     inner-intro -->

    <section class="inner-intro bg-1 bg-overlay-black-70">
        <div class="container">
            <div class="row text-center intro-title">
                <div class="col-md-6 text-md-start d-inline-block">
                    <h1 class="text-white">Service </h1>
                </div>
                <div class="col-md-6 text-md-end float-end">
                    <ul class="page-breadcrumb">
                        <li><a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i>
                        </li>
                        <li><span>Service</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--=================================
     inner-intro -->


    <!--=================================
     service -->

    <section class="welcome-block objects-car why-choose page-section-ptb white-bg">
        <div class="objects-left"><img class="img-fluid objects-1" src="assets/images/objects/03.jpg" alt=""></div>
        <div class="objects-right"><img class="img-fluid objects-2" src="assets/images/objects/04.jpg" alt=""></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <span>Welcome to our website</span>
                        <h2>Our service</h2>
                        <div class="separator"></div>
                        <p>Car Dealer is the best premium HTML5 Template. We provide everything you need to build an
                            <strong>Amazing dealership website</strong> developed especially for car sellers, dealers or
                            auto motor retailers. You can use this template for creating website based on any framework
                            and any language.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php foreach ($services as $service){ ?>
                <div class="col-lg-3 col-sm-6">
                    <div class="feature-box text-center">
                        <div class="icon">
                            <img style="border: 1px solid black;border-radius: 50%" src="<?php URL?>uploads/<?= $service['img']?>">
                        </div>
                        <div class="content">
                            <h6><?= $service['title']?></h6>
                            <p><?= $service['description']?></p>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="halp-call text-center">
                        <img class="img-fluid" src="assets/images/team/01.jpg" alt="">
                        <span>Have a any question ?</span>
                        <h2 class="text-red">(007) 123 456 7890</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--=================================
     service -->


    <!--=================================
    Counter -->

    <section class="counter counter-style-2 bg-red bg-1 bg-overlay-black-70 page-section-ptb">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6 item">
                    <div class="counter-block text-start mb-lg-0 mb-4">
                        <div class="separator"></div>
                        <div class="info">
                            <h6 class="text-white">Vehicles in Stock</h6>
                            <i class="glyph-icon flaticon-beetle"></i>
                            <b class="timer text-white" data-to="561" data-speed="10000"></b>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 item">
                    <div class="counter-block text-start mb-lg-0 mb-4">
                        <div class="separator"></div>
                        <div class="info">
                            <h6 class="text-white">Dealer Reviews</h6>
                            <i class="glyph-icon flaticon-interface"></i>
                            <b class="timer text-white" data-to="856" data-speed="10000"></b>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 item">
                    <div class="counter-block text-start mb-sm-0 mb-4">
                        <div class="separator"></div>
                        <div class="info">
                            <h6 class="text-white">Happy Customer</h6>
                            <i class="glyph-icon flaticon-circle"></i>
                            <b class="timer text-white" data-to="789" data-speed="10000"></b>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 item">
                    <div class="counter-block text-start mb-0">
                        <div class="separator"></div>
                        <div class="info">
                            <h6 class="text-white">Awards</h6>
                            <i class="glyph-icon flaticon-cup"></i>
                            <b class="timer text-white" data-to="356" data-speed="10000"></b>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--=================================
    Counter -->


    <!--=================================
    custom-block -->

    <section class="custom-block-3 white-bg page-section-ptb">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="title">
                        <h3>Car dealer</h3>
                    </div>
                    <div class="content">
                        <h2 class="text-red">10</h2>
                        <strong>Everything you need to build an amazing dealership automotive responsive
                            website.</strong>
                        <p>Car Dealer is the best premium HTML5 Template. We provide everything you need to build an <b>Amazing
                                dealership website</b> developed especially for car sellers, dealers or auto motor
                            retailers.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <img class="img-fluid" src="assets/images/car/11.png" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="feature-box-3">
                        <div class="icon">
                            <i class="glyph-icon flaticon-beetle"></i>
                        </div>
                        <div class="content">
                            <h6>All brands </h6>
                            <p>Simply Ipsum is lorem </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="feature-box-3">
                        <div class="icon">
                            <i class="glyph-icon flaticon-interface-1"></i>
                        </div>
                        <div class="content">
                            <h6>Free Support</h6>
                            <p> Beatae dicta et optio</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="feature-box-3">
                        <div class="icon">
                            <i class="glyph-icon flaticon-key"></i>
                        </div>
                        <div class="content">
                            <h6>Dealership</h6>
                            <p>Iure, quidem maxime </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="feature-box-3">
                        <div class="icon">
                            <i class="glyph-icon flaticon-wallet"></i>
                        </div>
                        <div class="content">
                            <h6>Affordable</h6>
                            <p>Quod magni recusandae </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--=================================
     custom-block -->

    <hr class="gray"/>

    <!--=================================
     service schedule -->

    <section class="service-schedule white-bg page-section-ptb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <span>Get a customized maintenance schedule for your vehicle</span>
                        <h2>service schedule </h2>
                        <div class="separator"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="gray-form">
                        <div id="formmessage">Success/Error Message Goes Here</div>
                        <form class="form-horizontal" id="contactform" role="form" method="post"
                              action="http://themes.potenzaglobalsolutions.com/html/cardealer/php/contact-form.php">
                            <div class="row contact-form">
                                <div class="col-lg-4 col-sm-12">
                                    <div class="mb-3">
                                        <input id="name" type="text" placeholder="Name*" class="form-control"
                                               name="name">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-12">
                                    <div class="mb-3">
                                        <input type="email" placeholder="Email*" class="form-control" name="email">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-12">
                                    <div class="mb-3">
                                        <input type="text" placeholder="Phone*" class="form-control" name="phone">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <textarea class="form-control input-message" placeholder="Comment*" rows="7"
                                                  name="message"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <input type="hidden" name="action" value="sendEmail"/>
                                    <button id="submit" name="submit" type="submit" value="Send" class="button red">
                                        Send your message
                                    </button>
                                </div>
                            </div>
                        </form>
                        <div id="ajaxloader" style="display:none"><img class="center-block"
                                                                       src="assets/images/ajax-loader.gif" alt=""></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="opening-hours gray-bg">
                        <h6>opening hours</h6>
                        <ul class="list-style-none">
                            <li><strong>Sunday</strong> <span class="text-red"> closed</span></li>
                            <li><strong>Monday</strong> <span> 9:00 AM to 9:00 PM</span></li>
                            <li><strong>Tuesday </strong> <span> 9:00 AM to 9:00 PM</span></li>
                            <li><strong>Wednesday </strong> <span> 9:00 AM to 9:00 PM</span></li>
                            <li><strong>Thursday </strong> <span> 9:00 AM to 9:00 PM</span></li>
                            <li><strong>Friday </strong> <span> 9:00 AM to 9:00 PM</span></li>
                            <li><strong>Saturday </strong> <span> 9:00 AM to 9:00 PM</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--=================================
    service schedule -->

<?php
include("inc/footer.php");
?>