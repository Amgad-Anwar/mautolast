<?php
include ("inc/header.php");
use Elhawra\Classes\Models\Contact;
use Elhawra\Classes\Validation\Validator;

if($request->postHas('submit')){
   $name = $request->post('name');
   $email = $request->post('email');
   $phone = $request->post('phone');
   $message = $request->post('message');
   $submit = $request->post('submit');

    $validate = new Validator();
    $validate->validate('name',$name,['required','str','max']);
    $validate->validate('email',$email,['required','email','max']);
    $validate->validate('phone',$phone,['required','numeric','max']);
    $validate->validate('message',$message,['required','str','max']);

    if($validate->hasErrors()){
        $session->set("errors",$validate->getErrors());
    }
    else{
        $data = new Contact();
        $data->insert("name,email,phone,message","'$name','$email','$phone','$message'");
    }
}


?>

<!--=================================
 inner-intro -->

 <section class="inner-intro bg-1 bg-overlay-black-70">
  <div class="container">
     <div class="row text-center intro-title">
           <div class="col-md-6 text-md-start d-inline-block">
             <h1 class="text-white">Contact us </h1>
           </div>
           <div class="col-md-6 text-md-end float-end">
             <ul class="page-breadcrumb">
                <li><a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
                <li><a href="#">pages</a> <i class="fa fa-angle-double-right"></i></li>
                <li><span>Contact us 01</span> </li>
             </ul>
           </div>
     </div>
  </div>
</section>

<!--=================================
 inner-intro -->


<!--=================================
 contact -->

<section class="contact page-section-ptb white-bg">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
         <div class="section-title">
           <span>We’d Love to Hear From You</span>
           <h2>LET'S GET IN TOUCH!</h2>
           <div class="separator"></div>
         </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6">
       <div class="contact-box text-center grey-border">
          <i class="fa fa-map-marker"></i>
          <h5>Address</h5>
          <p>220E Front St. Burlington NC 215</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
       <div class="contact-box text-center grey-border">
          <i class="fa fa-phone"></i>
          <h5>Phone</h5>
          <p> (007) 123 456 7890</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 mb-2 mb-sm-0">
       <div class="contact-box text-center grey-border mb-4 mb-sm-0">
          <i class="fa fa-envelope-o"></i>
          <h5>Email</h5>
          <p> support@website.com</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
       <div class="contact-box text-center mb-0 grey-border">
          <i class="fa fa-fax"></i>
          <h5>Fax</h5>
          <p>(007) 123 456 7890</p>
        </div>
      </div>
    </div>
    <div class="page-section-ptb">
      <div class="row">
       <div class="col-lg-8 col-sm-12">
       <div class="gray-form">
           <?php if($session->has('errors')) { ?>
         <div id="formmessage" class="form-notice" style="display:block;">
             <?php
                foreach ($session->get('errors') as $errs){ ?>
                    <p><?= $errs ?></p>
             <?php };$session->remove('errors'); ?>
         </div>
           <?php } ?>
           <form class="form-horizontal" role="form" method="post" action="<?=URL?>contact.php">
            <div class="contact-form row">
              <div class="col-lg-4 col-sm-12">
               <div class="mb-3">
                 <input id="contactform_name" type="text" placeholder="Name*" class="form-control"  name="name">
               </div>
             </div>
             <div class="col-lg-4 col-sm-12">
               <div class="mb-3">
                 <input id="contactform_email" type="email" placeholder="Email*" class="form-control" name="email">
                </div>
              </div>
              <div class="col-lg-4 col-sm-12">
                <div class="mb-3">
                  <input id="contactform_phone" type="text" placeholder="Phone*" class="form-control" name="phone">
                </div>
              </div>
              <div class="col-md-12">
                 <div class="mb-3">
                   <textarea id="contactform_message" class="form-control input-message" placeholder="Comment*" rows="7" name="message"></textarea>
                 </div>
              </div>
              <div class="col-md-12">
                 <input type="hidden" name="action" value="sendEmail"/>
                 <button id="submit" name="submit" type="submit" value="Send" class="button red">Send your message <i class="fa fa-spinner fa-spin fa-fw btn-loader" style="display: none;"></i></button>
               </div>
              </div>
          </form>
           </div>
       </div>
      <div class="col-lg-4 col-sm-12 mt-lg-0 mt-4">
        <div class="opening-hours gray-bg mt-sm-0">
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
   <div class="row">
     <div class="col-md-4">
       <div class="feature-box-3 grey-border">
          <div class="icon">
            <i class="fa fa-clock-o"></i>
          </div>
          <div class="content">
            <h6>opening hours </h6>
            <p>Voluptatem accusanoremque sed ut perspiciatis unde omnis iste natus error sit laudantium, totam rem aperiam. </p>
          </div>
         </div>
     </div>
     <div class="col-md-4">
       <div class="feature-box-3 grey-border">
          <div class="icon">
            <i class="fa fa-support"></i>
          </div>
          <div class="content">
            <h6>Our Support Center </h6>
            <p>Iste natus error sit sed ut perspiciatis unde omnis voluptatem laudantium, totam rem aperiam. </p>
          </div>
         </div>
     </div>
     <div class="col-md-4">
       <div class="feature-box-3 grey-border mb-0">
          <div class="icon">
            <i class="fa fa-info"></i>
          </div>
          <div class="content">
            <h6>Some Information </h6>
            <p class="mb-0">Totam rem aperiam sed ut perspiciatis unde omnis iste natus error sit voluptatem laudantium.</p>
          </div>
         </div>
     </div>
   </div>
  </div>
</section>

<!--=================================
 contact -->


<!--=================================
 contact-map -->

 <section class="contact-map">
  <div class="container-fluid">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.017231421863!2d-79.43780268425046!3d36.09306798010035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88532bae09664ccb%3A0xaa6b8f98d3fb8135!2s220+E+Front+St%2C+Burlington%2C+NC+27215%2C+USA!5e0!3m2!1sen!2sin!4v1475045272926" allowfullscreen></iframe>
  </div>
 </section>

<!--=================================
 contact-map -->


<!--=================================
 footer -->

<footer style="padding-top: 25px;" class="footer bg-2 bg-overlay-black-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="about-content">
                    <img class="img-fluid" id="logo-footer" src="assets/images/logo.png" alt="">
                    <p>We provide everything you need to build an amazing dealership website developed especially for
                        car sellers dealers or auto motor retailers.</p>
                </div>
                <div class="address">
                    <ul>
                        <li><i class="fa fa-map-marker"></i><span>220E Front St. Burlington NC 27215</span></li>
                        <li><i class="fa fa-phone"></i><span>(007) 123 456 7890</span></li>
                        <li><i class="fa fa-envelope-o"></i><span>support@website.com</span></li>
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
                            <img class="img-fluid" src="assets/images/car/01.jpg" alt="">
                        </div>
                        <div class="recent-post-info">
                            <a href="#">Time to change your </a>
                            <span class="post-date"><i class="fa fa-calendar"></i>September 10, 2021</span>
                        </div>
                    </div>
                    <div class="recent-post">
                        <div class="recent-post-image">
                            <img class="img-fluid" src="assets/images/car/02.jpg" alt="">
                        </div>
                        <div class="recent-post-info">
                            <a href="#">The best time to </a>
                            <span class="post-date"><i class="fa fa-calendar"></i>September 10, 2021</span>
                        </div>
                    </div>
                    <div class="recent-post">
                        <div class="recent-post-image">
                            <img class="img-fluid" src="assets/images/car/03.jpg" alt="">
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
    <span><img src="assets/images/car.png" alt=""></span>
</div>

<!--=================================
back to top -->

<!--=================================
 jquery -->

<!-- jquery  -->
<script type="text/javascript" src="assets/js/jquery-3.6.0.min.js"></script>

<!-- jquery-ui -->
<script type="text/javascript" src="assets/js/jquery-ui.js"></script>

<!-- bootstrap -->
<script type="text/javascript" src="assets/js/popper.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

<!-- mega-menu -->
<script type="text/javascript" src="assets/js/mega-menu/mega_menu.js"></script>

<!-- appear -->
<script type="text/javascript" src="assets/js/jquery.appear.js"></script>

<!-- counter -->
<script type="text/javascript" src="assets/js/counter/jquery.countTo.js"></script>

<!-- owl-carousel -->
<script type="text/javascript" src="assets/js/owl-carousel/owl.carousel.min.js"></script>

<!-- select -->
<script type="text/javascript" src="assets/js/select/jquery-select.js"></script>

<!-- magnific popup -->
<script type="text/javascript" src="assets/js/magnific-popup/jquery.magnific-popup.min.js"></script>

<!-- revolution -->
<script type="text/javascript" src="assets/revolution/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="assets/revolution/js/jquery.themepunch.revolution.min.js"></script>
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.video.min.js"></script>

<!-- custom -->
<script type="text/javascript" src="assets/js/custom.js"></script>

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
