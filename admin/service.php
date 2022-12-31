<?php include ("inc/header.php")?>
<?php
use Elhawra\Classes\Models\Service;
$data = new Service();
$services = $data->selectAll();
?>
        <div class="page-body">
            <div class="container-fluid">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <h3>Service</h3>
                        </div>
                        <div class="col-12 col-sm-6">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item active">Services</li>
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
                                    <a class="btn btn-primary" href="servicecreate.php"> <i
                                            data-feather="plus-square"> </i>Create New Service</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 xl-100">
                        <div class="row">
                            <?php foreach ($services as $service) { ?>
                            <div class="col-xl-12 col-sm-6">
                                <div class="card">
                                    <div class="blog-box blog-list row">
                                        <div class="col-xl-5 col-12">
                                            <img class="img-fluid sm-100-w" src="<?=URL ?>uploads/<?=$service['img'] ?>" alt=""></div>
                                        <div class="col-xl-7 col-12">
                                            <div class="blog-details">
                                                <div class="blog-date"><?= date('Y-m-d', strtotime($service['created_at'])); ?></div>
                                                <a href="#">
                                                    <h6><?=$service['title'] ?> </h6></a>
                                                <div class="blog-bottom-content">
                                                    <ul class="blog-social">
                                                        <li><?=$service['description'] ?></li>
                                                    </ul>
                                                    <hr>
                                                    <div>
                                                        <a href="<?= URL?>admin/serviceedit.php?id=<?=$service['id'] ?>" class="btn btn-primary">Edit</a>
                                                        <a href="<?= URL?>admin/handlers/servicedelete.php?id=<?=$service['id'] ?>" class="btn btn-danger">Delete</a>
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