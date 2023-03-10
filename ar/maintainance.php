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
             <h1 class="text-white">الصيانه </h1>
           </div>
           <div class="col-md-6 text-md-end float-end">
             <ul class="page-breadcrumb">
                <li><a href="#"><i class="fa fa-home"></i> الرئيسيه</a> <i class="fa fa-angle-double-right"></i></li>
                <li><span>الصيانه </span> </li>
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
           <h2>حدد موعد الان</h2>
           <div class="separator"></div>
         </div>
      </div>
    </div>
    <div class="row">

       <div style="direction: rtl" class="col-lg-4 col-sm-12">
          <div class="feature-box-3 grey-border">
            <div class="icon">
               <i class="fa fa-map-marker"></i>
             </div>
             <div class="content">
               <h5>العنوان </h5>
                <p><?= $setting['address'] ?></p>
              </div>
            </div>
            <div class="feature-box-3 grey-border">
            <div class="icon">
               <i class="fa fa-phone"></i>
             </div>
             <div class="content">
                 <h5>الهاتف</h5>
                 <p> <?= $setting['phone'] ?></p>
              </div>
            </div>
            <div class="feature-box-3 grey-border mb-0">
            <div class="icon">
               <i class="fa fa-envelope-o"></i>
             </div>
             <div class="content">
                 <h5>الايميل</h5>
                 <p> <?= $setting['email'] ?></p>
              </div>
            </div>
           <div class="col-lg-12 col-sm-12 mt-lg-0 mt-4">
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
                <div style="direction: rtl" class="col-md-12">
                    <form class="form-horizontal"  role="form" method="post" action="<?=URL ?>ar/maintainance.php">
                        <div class="contact-form">
                            <div class="mb-3">
                                <input id="contactform_name" type="text" placeholder="الاسم *" class="form-control"  name="name">
                            </div>
                            <div class="mb-3">
                                <input id="contactform_email" type="email" placeholder="الايميل *" class="form-control" name="email">
                            </div>
                            <div class="mb-3">
                                <input id="contactform_phone" type="text" placeholder="الهاتف *" class="form-control" name="phone">
                            </div>
                            <div class="mb-3">
                                <textarea id="contactform_message" class="form-control input-message" placeholder="الرساله *" rows="7" name="message"></textarea>
                            </div>
                            <div class="d-grid">
                                <input type="hidden" name="action" value="sendEmail"/>
                                <button id="submit" name="submit" type="submit" value="Send" class="button red btn-block"> ارسال الرساله <i class="fa fa-spinner fa-spin fa-fw btn-loader" style="display: none;"></i></button>
                            </div>
                        </div>
                    </form>
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