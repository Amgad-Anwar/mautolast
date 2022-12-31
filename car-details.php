<?php
include ("inc/header.php");
use Elhawra\Classes\Models\Cars;
if($request->getHas('id')){
    $id = $request->get('id');
}
else{
    $id = 1;
}
$data = new Cars();
$car = $data->selectId($id);

$data2 = new Cars();
$cars = $data2->selectAll();
?>
<?php
use Elhawra\Classes\Models\Car_Request;
use Elhawra\Classes\Validation\Validator;

if($request->postHas('submit')){

    $name = $request->post('name');
    $email = $request->post('email');
    $phone = $request->post('phone');
    $message = $request->post('message');
    $car_data = $request->post('car_name');
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
        $data = new Car_Request();
        $data->insert("name,email,phone,message,car","'$name','$email','$phone','$message','$car_data'");
    }
}
?>

<!--=================================
 inner-intro -->

<section class="inner-intro bg-6 bg-overlay-black-70">
    <div class="container">
        <div class="row text-center intro-title">
            <div class="col-md-6 text-md-start d-inline-block">
                <h1 class="text-white"><?= $car['name'] ?> </h1>
            </div>
            <div class="col-md-6 text-md-end float-end">
                <ul class="page-breadcrumb">
                    <li><a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
                    <li><span> <?= $car['name'] ?></span></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!--=================================
 inner-intro -->


<!--=================================
car-details -->

<section class="car-details page-section-ptb">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h3><?= $car['name'] ?> </h3>
                <p><?= $car['s_description'] ?></p>
            </div>
            <div class="col-md-3">
                <div class="car-price text-md-end">
                    <strong>$ <?= $car['price_new'] ?></strong>
                    <span>Plus Taxes & Licensing</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="details-nav">
                    <ul>
                        <li>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <i class="fa fa-question-circle"></i>Request More Info
                            </a>
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="exampleModalLabel">Request More Info</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close">×
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div id="rmi_notice" class="form-notice" style="display:none;"></div>
                                            <p class="sub-title">Please fill out the information below and one of our
                                                representatives will contact you regarding your more information
                                                request. </p>
                                            <form class="gray-form reset_css" id="rmi_form" method="post"
                                                  action="<?=URL?>car-details.php?id=<?= $car['id'] ?>">
                                                <input type="hidden" name="car_name" value="<?= $car['name'] ?>">
                                                <div class="mb-3">
                                                    <label class="form-label">Name*</label>
                                                    <input type="text" class="form-control" name="name"
                                                           id="rmi_name"/>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Email address*</label>
                                                    <input type="text" class="form-control" name="email"
                                                           id="rmi_email"/>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Phone*</label>
                                                    <input type="text" class="form-control" id="rmi_phone"
                                                           name="phone">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Message</label>
                                                    <textarea class="form-control" name="message"
                                                              id="rmi_message"></textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <div id="recaptcha1"></div>
                                                </div>
                                                <div>
                                                    <button class="button red" name="submit" type="submit" id="request_more_info_submit">Submit <i
                                                            class="fa fa-spinner fa-spin fa-fw btn-loader"
                                                            style="display: none;"></i></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li><a href="javascript:window.print()"><i class="fa fa-print"></i>Print this page</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="slider-slick">
                    <div class="slider slider-for detail-big-car-gallery">
                        <img class="img-fluid" src="<?=URL ?>uploads/<?= $car['images'] ?>" alt="">
                    </div>
                </div>

            </div>
            <div class="col-md-6">
                <div class="car-details-sidebar">
                    <div class="details-block details-weight">
                        <h5>DESCRIPTION</h5>
                        <ul>
                            <li><span>Make</span> <strong class="text-end"><?= $car['make'] ?></strong></li>
                            <li><span>Model</span> <strong class="text-end"><?= $car['model'] ?></strong></li>
                            <li><span>Registration date </span> <strong class="text-end"><?= $car['registration_date'] ?></strong></li>
                            <li><span>Mileage</span> <strong class="text-end"><?= $car['mileage'] ?></strong></li>
                            <li><span>Condition</span> <strong class="text-end"><?= $car['con'] ?></strong></li>
                            <li><span>Exterior Color</span> <strong class="text-end"><?= $car['exterior_color'] ?></strong></li>
                            <li><span>Interior Color</span> <strong class="text-end"><?= $car['interior_color'] ?></strong></li>
                            <li><span>Drivetrain</span> <strong class="text-end"><?= $car['drivetrain'] ?></strong></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-9 col-md-9  col-sm-9">
                <div id="tabs">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item icon-diamond" role="presentation">
                            <button class="nav-link active" id="general-information-tab" data-bs-toggle="tab"
                                    data-bs-target="#general-information" type="button" role="tab"
                                    aria-controls="general-information" aria-selected="true">General Information
                            </button>
                        </li>
                        <li class="nav-item icon-equalizer" role="presentation">
                            <button class="nav-link " id="vehicle-overview-tab" data-bs-toggle="tab"
                                    data-bs-target="#vehicle-overview" type="button" role="tab"
                                    aria-controls="vehicle-overview" aria-selected="false">Vehicle Overview
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="general-information" role="tabpanel"
                             aria-labelledby="general-information-tab">
                            <p><?= $car['l_description'] ?></p>
                        </div>
                        <div class="tab-pane fade" id="vehicle-overview" role="tabpanel"
                             aria-labelledby="vehicle-overview-tab">
                            <p><?= $car['vehicle_overview'] ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="car-details-sidebar">
                    <div class="details-location details-weight">
                        <h5>Location</h5>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.017231421863!2d-79.43780268425046!3d36.09306798010035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88532bae09664ccb%3A0xaa6b8f98d3fb8135!2s220+E+Front+St%2C+Burlington%2C+NC+27215%2C+USA!5e0!3m2!1sen!2sin!4v1475045272926"
                                allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        <div class="feature-car">
            <h6>Recently Vehicle</h6>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel" data-nav-arrow="true" data-nav-dots="false" data-items="4"
                         data-md-items="4" data-sm-items="2" data-xs-items="2" data-space="15">
                        <?php foreach ($cars as $car) { ?>
                        <div class="item">
                            <div class="car-item gray-bg text-center">
                                <div class="car-image">
                                    <img class="img-fluid" src="<?=URL ?>uploads/<?= $car['img'] ?>" alt="">
                                    <div class="car-overlay-banner">
                                        <ul>
                                            <li><a href="<?=URL ?>/car-details.php?id=<?= $car['id'] ?>"><i class="fa fa-link"></i></a></li>
                                            <li><a href="<?=URL ?>/car-details.php?id=<?= $car['id'] ?>"><i class="fa fa-dashboard"></i></a></li>
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
                                    <a href="<?=URL ?>/car-details.php?id=<?= $car['id'] ?>"><?= $car['name'] ?></a>
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
    </div>
</section>

<!--=================================
car-details  -->

<?php
include("inc/footer.php");
?>