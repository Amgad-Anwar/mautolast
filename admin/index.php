<?php include ("inc/header.php")?>
<?php
use Elhawra\Classes\Models\Blog;
use Elhawra\Classes\Models\Cars;
$data = new Blog();
$blogs = $data->selectAll();

$data2 = new Cars();
$cars = $data2->selectAll();
?>
        <div class="page-body">
            <div class="container-fluid">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <h3>Dashboard</h3>
                        </div>
                        <div class="col-12 col-sm-6">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a class="home-item" href="index.php"><i
                                        data-feather="home"></i></a></li>
                                <li class="breadcrumb-item"> Dashboard</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid starts-->
            <div class="container-fluid default-dash">
                <div class="row">
                    <div class="col-xl-12 col-md-12 dash-xl-100">
                        <div class="card profile-greeting">
                            <div class="card-body">
                                <div class="media">
                                    <div class="media-body">
                                        <div class="greeting-user">
                                            <h1>Hello, <?=$session->get('adminName')?></h1>
                                            <p>Welcome back, your dashboard is ready!</p>
                                            <a class="btn btn-outline-white_color" href="#">
                                                Get Started
                                                <i class="fa fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="cartoon-img"><img class="img-fluid" src="http://admin.pixelstrap.com/zeta/assets/images/images.svg" alt=""></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 dash-31 dash-xl-50">
                        <div class="card news-update">
                            <div class="card-header card-no-border">
                                <div class="header-top">
                                    <h5 class="m-0">News &amp; Update</h5>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="table-responsive custom-scrollbar">
                                    <table class="table table-bordernone">
                                        <tbody>
                                        <?php foreach ($blogs as $blog) { ?>
                                        <tr>
                                            <td>
                                                <div class="media">
                                                    <img style="width: 80px;height: 70px;" class="img-fluid me-3 b-r-5"
                                                         src="<?=URL ?>uploads/<?=$blog['main_img'] ?>" alt="">
                                                    <div class="media-body"><a href="<?=URL ?>admin/blogedit.php?id=<?=$blog['id']?>">
                                                        <h5><?=$blog['title']?></h5></a>
                                                        <p><?=$blog['s_description']?></p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 dash-31 dash-xl-50">
                        <div class="card news-update">
                            <div class="card-header card-no-border">
                                <div class="header-top">
                                    <h5 class="m-0">Our Cars</h5>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="table-responsive custom-scrollbar">
                                    <table class="table table-bordernone">
                                        <tbody>
                                        <?php foreach ($cars as $car) { ?>
                                        <tr>
                                            <td>
                                                <div class="media">
                                                    <img style="width: 80px;height: 70px;" class="img-fluid me-3 b-r-5"
                                                         src="<?=URL ?>uploads/<?= $car['img'] ?>" alt="">
                                                    <div class="media-body"><a href="<?=URL?>admin/caredite.php?id=<?= $car['id'] ?>">
                                                        <h5><?= $car['name'] ?> </h5></a>
                                                        <p><span><?= $car['s_description'] ?></p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>

                                            </td>
                                        </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php include ("inc/footer.php")?>