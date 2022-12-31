<?php include ("inc/header.php")?>
<?php
use Elhawra\Classes\Models\CarsArabic;
$data = new CarsArabic();
$cars = $data->selectAll();
?>
        <div class="page-body">
            <div class="container-fluid">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <h3>Project</h3>
                        </div>
                        <div class="col-12 col-sm-6">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php"> <i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item active">Cars</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid starts-->
            <div class="container-fluid user-card">
                <div class="row">
                    <div class="col-md-12 project-list">
                        <div class="card">
                            <div class="row">
                                <div class="col-md-6 p-0"></div>
                                <div class="col-md-6 p-0">
                                    <div class="form-group mb-0 me-0"></div>
                                    <a class="btn btn-primary" href="<?=URL?>admin/carcreate-ar.php"> <i
                                            data-feather="plus-square"> </i>Create New Car</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 xl-100">
                        <div class="row">
                            <?php foreach ($cars as $car) { ?>
                            <div class="col-xl-12 col-sm-6">
                                <div class="card">
                                    <div class="blog-box blog-list row">
                                        <div class="col-xl-5 col-12"><img class="img-fluid sm-100-w"
                                                                          src="<?=URL ?>uploads/<?= $car['img'] ?>" alt=""></div>
                                        <div class="col-xl-7 col-12">
                                            <div class="blog-details">
                                                <a href="#">
                                                    <h6><?= $car['name'] ?> </h6></a>
                                                <div class="blog-bottom-content">
                                                    <ul class="blog-social">
                                                        <li></li><br>
                                                        <li>Price : <span><?= $car['price_new'] ?></span></li><br>
                                                        <li>Short Description : <span><?= $car['s_description'] ?></span></li><br>
                                                        <li>Make : <span><?= $car['make'] ?></span></li><br>
                                                        <li>Model : <span><?= $car['model'] ?></span></li><br>
                                                        <li>Registration Date : <span><?= $car['registration_date'] ?></span></li><br>
                                                        <li>Mileage : <span><?= $car['mileage'] ?></span></li><br>
                                                        <li>Condition : <span><?= $car['con'] ?></span></li><br>
                                                        <li>Exterior Color : <span><?= $car['exterior_color'] ?></span></li><br>
                                                        <li>Interior Color : <span><?= $car['interior_color'] ?></span></li><br>
                                                    </ul>
                                                    <hr>
                                                    <div>
                                                        <a href="<?=URL?>admin/caredite-ar.php?id=<?= $car['id'] ?>" class="btn btn-primary">Edit</a>
                                                        <a href="<?=URL?>admin/handlers/cardelete-ar.php?id=<?= $car['id'] ?>" class="btn btn-danger">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
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

<?php include ("inc/footer.php")?>