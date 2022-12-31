<?php
use Elhawra\Classes\Models\Setting;

$set = new Setting();
$setting = $set->selectId(1);
?>
<footer style="padding-top: 25px;" class="footer bg-2 bg-overlay-black-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="about-content">
                    <img class="img-fluid" id="logo-footer" src="<?=URL ?>assets/images/logo.png" alt="">
                    <p>We provide everything you need to build an amazing dealership website developed especially for
                        car sellers dealers or auto motor retailers.</p>
                </div>
                <div class="address">
                    <ul>
                        <li><i class="fa fa-map-marker"></i><span><?= $setting['address'] ?></span></li>
                        <li><i class="fa fa-phone"></i><span><?= $setting['phone'] ?></span></li>
                        <li><i class="fa fa-envelope-o"></i><span><?= $setting['email'] ?></span></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="usefull-link">
                    <h6 class="text-white">Useful Links</h6>
                    <ul>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i> Change Oil and Filter</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i> Brake Pads Replacement</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i> Timing Belt Replacement</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i> Pre-purchase Car Inspection</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i> Starter Replacement</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="recent-post-block">
                    <h6 class="text-white">recent posts </h6>
                    <div class="recent-post">
                        <div class="recent-post-image">
                            <img class="img-fluid" src="<?=URL ?>assets/images/car/01.jpg" alt="">
                        </div>
                        <div class="recent-post-info">
                            <a href="#">Time to change your </a>
                            <span class="post-date"><i class="fa fa-calendar"></i>September 10, 2021</span>
                        </div>
                    </div>
                    <div class="recent-post">
                        <div class="recent-post-image">
                            <img class="img-fluid" src="<?=URL ?>assets/images/car/02.jpg" alt="">
                        </div>
                        <div class="recent-post-info">
                            <a href="#">The best time to </a>
                            <span class="post-date"><i class="fa fa-calendar"></i>September 10, 2021</span>
                        </div>
                    </div>
                    <div class="recent-post">
                        <div class="recent-post-image">
                            <img class="img-fluid" src="<?=URL ?>assets/images/car/03.jpg" alt="">
                        </div>
                        <div class="recent-post-info">
                            <a href="#">Replacing a timing </a>
                            <span class="post-date"><i class="fa fa-calendar"></i>September 10, 2021</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="news-letter">
                    <h6 class="text-white">subscribe Our Newsletter </h6>
                    <p>Keep up on our always evolving products features and technology. Enter your e-mail and subscribe
                        to our newsletter.</p>
                    <form class="news-letter">
                        <input type="email" placeholder="Enter your Email" class="form-control placeholder">
                        <a class="button red" href="#">Subscribe</a>
                    </form>
                </div>
            </div>
        </div>
        <hr/>
        <div class="copyright">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="text-lg-start text-center">
                        <p>©Copyright 2022 Mekawy. AllRights Reserved Developed by <a href="https://www.technolgyplanet.com/"
                                                                                      target="_blank">Technolgy Planet</a></p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <ul class="list-inline text-lg-end text-center">
                        <li><a href="#">privacy policy </a> |</li>
                        <li><a href="#">terms and conditions </a> |</li>
                        <li><a href="#">contact us </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<!--=================================
 footer -->

<!--=================================
back to top -->

<div class="car-top">
    <span><img src="<?=URL ?>assets/images/car.png" alt=""></span>
</div>

<!--=================================
back to top -->

<!--=================================
 jquery -->

<!-- jquery  -->
<script type="text/javascript" src="<?=URL ?>assets/js/jquery-3.6.0.min.js"></script>

<!-- jquery-ui -->
<script type="text/javascript" src="<?=URL ?>assets/js/jquery-ui.js"></script>

<!-- bootstrap -->
<script type="text/javascript" src="<?=URL ?>assets/js/popper.js"></script>
<script type="text/javascript" src="<?=URL ?>assets/js/bootstrap.min.js"></script>

<!-- mega-menu -->
<script type="text/javascript" src="<?=URL ?>assets/js/mega-menu/mega_menu.js"></script>

<!-- appear -->
<script type="text/javascript" src="<?=URL ?>assets/js/jquery.appear.js"></script>

<!-- counter -->
<script type="text/javascript" src="<?=URL ?>assets/js/counter/jquery.countTo.js"></script>

<!-- owl-carousel -->
<script type="text/javascript" src="<?=URL ?>assets/js/owl-carousel/owl.carousel.min.js"></script>

<!-- select -->
<script type="text/javascript" src="<?=URL ?>assets/js/select/jquery-select.js"></script>

<!-- slick -->
<script type="text/javascript" src="<?=URL ?>assets/js/slick/slick.min.js"></script>

<!-- magnific popup -->
<script type="text/javascript" src="<?=URL ?>assets/js/magnific-popup/jquery.magnific-popup.min.js"></script>

<!-- revolution -->
<script type="text/javascript" src="<?=URL ?>assets/revolution/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="<?=URL ?>assets/revolution/js/jquery.themepunch.revolution.min.js"></script>
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="<?=URL ?>assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="<?=URL ?>assets/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="<?=URL ?>assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="<?=URL ?>assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="<?=URL ?>assets/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="<?=URL ?>assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="<?=URL ?>assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="<?=URL ?>assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="<?=URL ?>assets/revolution/js/extensions/revolution.extension.video.min.js"></script>

<!-- custom -->
<script type="text/javascript" src="<?=URL ?>assets/js/custom.js"></script>


<script type="text/javascript">
    (function ($) {
        "use strict";

        var tpj = jQuery;
        var revapi2;
        tpj(document).ready(function () {
            if (tpj("#rev_slider_2_1").revolution == undefined) {
                revslider_showDoubleJqueryError("#rev_slider_2_1");
            } else {
                revapi2 = tpj("#rev_slider_2_1").show().revolution({
                    sliderType: "standard",
                    sliderLayout: "fullwidth",
                    dottedOverlay: "none",
                    delay: 9000,
                    navigation: {
                        keyboardNavigation: "off",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation: "off",
                        mouseScrollReverse: "default",
                        onHoverStop: "off",
                        bullets: {
                            enable: true,
                            hide_onmobile: false,
                            style: "hermes",
                            hide_onleave: false,
                            direction: "horizontal",
                            h_align: "center",
                            v_align: "bottom",
                            h_offset: 0,
                            v_offset: 50,
                            space: 10,
                            tmp: ''
                        }
                    },
                    visibilityLevels: [1240, 1024, 778, 480],
                    gridwidth: 1570,
                    gridheight: 1000,
                    lazyType: "none",
                    shadow: 0,
                    spinner: "spinner3",
                    stopLoop: "off",
                    stopAfterLoops: -1,
                    stopAtSlide: -1,
                    shuffle: "off",
                    autoHeight: "off",
                    disableProgressBar: "on",
                    hideThumbsOnMobile: "off",
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    debugMode: false,
                    fallbacks: {
                        simplifyAll: "off",
                        nextSlideOnWindowFocus: "off",
                        disableFocusListener: false,
                    }
                });
            }
        });
    })(jQuery);

</script>

</body>
</html>
