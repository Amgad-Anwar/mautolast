<?php include ("inc/header.php")?>
<?php
use Elhawra\Classes\Models\Team;
$data = new Team();
$teams = $data->selectAll();
?>
        <div class="page-body">
            <div class="container-fluid">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <h3>Team</h3>
                        </div>
                        <div class="col-12 col-sm-6">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php"> <i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item">Users</li>
                                <li class="breadcrumb-item active">Team</li>
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
                                    <a class="btn btn-primary" href="teamcreate.php"> <i data-feather="plus-square"> </i>Create New member</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php foreach ($teams as $team) { ?>
                    <div class="col-md-6 col-lg-6 col-xl-4 box-col-4">
                        <div class="card custom-card">
                            <div class="card-header">
                                <img class="img-fluid" src="assets/images/user-card/1.jpg" alt="">
                            </div>
                            <div class="card-profile">
                                <img class="rounded-circle" src="<?=URL ?>uploads/<?= $team['img'] ?>" alt=""></div>
                            <div class="text-center profile-details"><a href="#">
                                <h4><?= $team['name'] ?></h4></a>
                                <h6><?= $team['job'] ?></h6>
                            </div>
                            <ul class="card-social">
                                <li><a href="<?= $team['facebook'] ?>"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="<?= $team['twitter'] ?>"><i class="fa fa-twitter"></i></a></li>
                            </ul>
                            <div style="text-align: center">
                                <a href="<?=URL ?>admin/teamedite.php?id=<?=$team['id']?>" class="btn btn-primary">Edit</a>
                                <a href="<?=URL ?>admin/handlers/deleteteam.php?id=<?= $team['id'] ?>" class="btn btn-danger">Delete</a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
<?php include ("inc/footer.php")?>