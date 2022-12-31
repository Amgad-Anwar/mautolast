<?php
include ("inc/header.php");
use Elhawra\Classes\Models\Setting;
use Elhawra\Classes\Models\Requests;
use Elhawra\Classes\Validation\Validator;
$data = new Setting();
$setting = $data->selectId(1);

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
        $data = new Requests();
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
                        <li><span>Contact us </span> </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--=================================
     inner-intro -->


    <!--=================================
     contact -->

    <section class="contact-2 page-section-ptb white-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 justify-content-center">
                    <div class="section-title">
                        <span>We’d Love to Hear From You</span>
                        <h2>SCHEDULE AN APPOINTMENT</h2>
                        <div class="separator"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-sm-12 mb-lg-0 mb-1">
                    <div class="gray-form row">
                        <?php if($session->has('errors')) { ?>
                            <div id="formmessage" class="form-notice" style="display:block;">
                                <?php
                                foreach ($session->get('errors') as $errs){ ?>
                                    <p><?= $errs ?></p>
                                <?php };$session->remove('errors'); ?>
                            </div>
                        <?php } ?>
                        <div class="col-md-12">
                            <form class="form-horizontal"  role="form" method="post" action="<?=URL ?>maintainance.php">
                                <h5>We have completed over a 1000+ projects for five hundred clients. Give us your next project.</h5>
                                <p>It would be great to hear from you! If you got any questions, please do not hesitate to send us a message. We are looking forward to hearing from you! We reply within 24 hours !</p>
                                <div class="contact-form">
                                    <div class="mb-3">
                                        <input id="contactform_name" type="text" placeholder="Name*" class="form-control"  name="name">
                                    </div>
                                    <div class="mb-3">
                                        <input id="contactform_email" type="email" placeholder="Email*" class="form-control" name="email">
                                    </div>
                                    <div class="mb-3">
                                        <input id="contactform_phone" type="text" placeholder="Phone*" class="form-control" name="phone">
                                    </div>
                                    <div class="mb-3">
                                        <textarea id="contactform_message" class="form-control input-message" placeholder="Comment*" rows="7" name="message"></textarea>
                                    </div>
                                    <div class="d-grid">
                                        <input type="hidden" name="action" value="sendEmail"/>
                                        <button id="submit" name="submit" type="submit" value="Send" class="button red btn-block"> Send your message <i class="fa fa-spinner fa-spin fa-fw btn-loader" style="display: none;"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="feature-box-3 grey-border">
                        <div class="icon">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <div class="content">
                            <h5>Address </h5>
                            <p><?= $setting['address'] ?> </p>
                        </div>
                    </div>
                    <div class="feature-box-3 grey-border">
                        <div class="icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="content">
                            <h5>Phone </h5>
                            <p><?= $setting['phone'] ?> </p>
                        </div>
                    </div>
                    <div class="feature-box-3 grey-border mb-0">
                        <div class="icon">
                            <i class="fa fa-envelope-o"></i>
                        </div>
                        <div class="content">
                            <h5>Email  </h5>
                            <p> <?= $setting['email'] ?> </p>
                        </div>
                    </div>
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

<?php
include ("inc/footer.php");
?>