<?php
include ("inc/header.php");
use Elhawra\Classes\Models\Contact;
use Elhawra\Classes\Validation\Validator;
use Elhawra\Classes\Models\Setting;
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
             <h1 class="text-white">تواصل معنا </h1>
           </div>
           <div class="col-md-6 text-md-end float-end">
             <ul class="page-breadcrumb">
                <li><a href="#"><i class="fa fa-home"></i> الرئيسيه</a> <i class="fa fa-angle-double-right"></i></li>
                <li><span>تواصل معنا </span> </li>
             </ul>
           </div>
     </div>
  </div>
</section>

<!--=================================
 inner-intro -->


<!--=================================
 contact -->

<section style="direction: rtl" class="contact page-section-ptb white-bg">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
         <div class="section-title">
           <h2>تواصل معنا الان</h2>
           <div class="separator"></div>
         </div>
      </div>
    </div>
      <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6">
           <div class="contact-box text-center grey-border">
              <i class="fa fa-map-marker"></i>
              <h5>العنوان</h5>
              <p><?= $setting['address'] ?></p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
           <div class="contact-box text-center grey-border">
              <i class="fa fa-phone"></i>
              <h5>الهاتف</h5>
              <p> <?= $setting['phone'] ?></p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 mb-2 mb-sm-0">
           <div class="contact-box text-center grey-border mb-4 mb-sm-0">
              <i class="fa fa-envelope-o"></i>
              <h5>الايميل</h5>
              <p> <?= $setting['email'] ?></p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
           <div class="contact-box text-center mb-0 grey-border">
              <i class="fa fa-fax"></i>
              <h5>الفاكس</h5>
              <p><?= $setting['phone'] ?></p>
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
                      <form class="form-horizontal" role="form" method="post" action="<?=URL?>ar/contact.php">
                          <div class="contact-form row">
                              <div class="col-lg-4 col-sm-12">
                                  <div class="mb-3">
                                      <input id="contactform_name" type="text" placeholder="الاسم*" class="form-control"  name="name">
                                  </div>
                              </div>
                              <div class="col-lg-4 col-sm-12">
                                  <div class="mb-3">
                                      <input id="contactform_email" type="email" placeholder="الايميل *" class="form-control" name="email">
                                  </div>
                              </div>
                              <div class="col-lg-4 col-sm-12">
                                  <div class="mb-3">
                                      <input id="contactform_phone" type="text" placeholder="رقم الهاتف *" class="form-control" name="phone">
                                  </div>
                              </div>
                              <div class="col-md-12">
                                  <div class="mb-3">
                                      <textarea id="contactform_message" class="form-control input-message" placeholder="الراله *" rows="7" name="message"></textarea>
                                  </div>
                              </div>
                              <div class="col-md-12">
                                  <input type="hidden" name="action" value="sendEmail"/>
                                  <button id="submit" name="submit" type="submit" value="Send" class="button red">ارسال الرساله <i class="fa fa-spinner fa-spin fa-fw btn-loader" style="display: none;"></i></button>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
              <div class="col-lg-4 col-sm-12 mt-lg-0 mt-4">
                  <div class="opening-hours gray-bg mt-sm-0">
                      <h6>ساعات العمل</h6>
                      <ul class="list-style-none">
                          <li><strong>الاحد </strong> <span class="text-red"> closed</span></li>
                          <li><strong>الاثنين </strong> <span> 9:00 AM to 9:00 PM</span></li>
                          <li><strong>الثلاثاء </strong> <span> 9:00 AM to 9:00 PM</span></li>
                          <li><strong>الاربعاء </strong> <span> 9:00 AM to 9:00 PM</span></li>
                          <li><strong>الخميس  </strong> <span> 9:00 AM to 9:00 PM</span></li>
                          <li><strong>الجمعه  </strong> <span> 9:00 AM to 9:00 PM</span></li>
                          <li><strong>السبت </strong> <span> 9:00 AM to 9:00 PM</span></li>
                      </ul>
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

<?php include ('inc/footer.php')?>