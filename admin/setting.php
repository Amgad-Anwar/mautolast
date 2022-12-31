<?php include ("inc/header.php")?>
<?php
use Elhawra\Classes\Models\Setting;
use Elhawra\Classes\Models\Admin;
$data = new Setting();
$setting = $data->selectId(1);

$dataTwo = new Admin();
$admin = $dataTwo->selectId(1);
?>
        <div class="page-body">
            <div class="container-fluid">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <h3>Edit Profile</h3>
                        </div>
                        <div class="col-12 col-sm-6">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php"> <i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item">Admin</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="edit-profile">
                    <div class="row">
                        <div class="col-xl-4">
                            <div class="card">
                                <div class="card-header pb-0">
                                    <h4 class="card-title mb-0">My Profile</h4>
                                    <div class="card-options"><a class="card-options-collapse" href="#"
                                                                 data-bs-toggle="card-collapse"><i
                                            class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#"
                                                                                data-bs-toggle="card-remove"><i
                                            class="fe fe-x"></i></a></div>
                                </div>
                                <div class="card-body">
                                    <form method="post" action="<?=URL?>admin/handlers/handle-profile.php" enctype="multipart/form-data">
                                        <div class="row mb-2">
                                            <div class="profile-title">
                                                <div class="media"><img class="img-70 rounded-circle" alt=""
                                                                        src="<?=URL?>uploads/<?=$admin['profile'] ?>">
                                                    <div class="media-body">
                                                        <h3 class="mb-1 f-20 txt-primary"><?=$session->get('adminName')?></h3>
                                                        <p class="f-12">Admin</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Name</label>
                                            <input class="form-control" name="name" value="<?=$session->get('adminName')?>">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Email-Address</label>
                                            <input class="form-control" name="email" value="<?=$session->get('adminEmail')?>">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Password</label>
                                            <input class="form-control" name="password" type="password">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Photo</label>
                                            <input class="form-control" type="file" name="profile">
                                        </div>
                                        <div class="form-footer">
                                            <button type="submit" name="submit" class="btn btn-primary btn-block">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8">
                            <div>
                                <?php include ('inc/errors.php')?>
                            </div>
                            <form method="post" action="<?= URL?>admin/handlers/handle-setting.php" enctype="multipart/form-data" class="card">
                                <div class="card-header pb-0">
                                    <h4 class="card-title mb-0">Website Setting</h4>
                                    <div class="card-options"><a class="card-options-collapse" href="#"
                                                                 data-bs-toggle="card-collapse"><i
                                            class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#"
                                                                                data-bs-toggle="card-remove"><i
                                            class="fe fe-x"></i></a></div>
                                </div>

                                <div class="card-body">
                                    <input type="hidden" name="id" value="<?= $setting['id'] ?>">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="mb-3">
                                                <label class="form-label">Website name</label>
                                                <input class="form-control" type="text" name="name" value="<?= $setting['name'] ?>">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-3">
                                            <div class="mb-3">
                                                <label class="form-label">Phone</label>
                                                <input class="form-control" type="number" name="phone" value="<?= $setting['phone'] ?>">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="mb-3">
                                                <label class="form-label">Email address</label>
                                                <input class="form-control" type="email" name="email" value="<?= $setting['email'] ?>">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Logo</label>
                                                <input class="form-control" type="file" name="logo">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Icon</label>
                                                <input class="form-control" type="file" name="icon">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">Address</label>
                                                <input class="form-control" type="text" name="address" value="<?= $setting['address'] ?>">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="mb-3">
                                                <label class="form-label">Keywords</label>
                                                <input class="form-control" type="text" name="keywords" value="<?= $setting['keywords'] ?>">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-3">
                                            <div class="mb-3">
                                                <label class="form-label">Author</label>
                                                <input class="form-control" type="text" name="author" value="<?= $setting['author'] ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="mb-3">
                                                <label class="form-label">Country</label>
                                                <select name="country" class="form-control btn-square" value="<?= $setting['country'] ?>" >
                                                    <option value="0">--Select--</option>
                                                    <option value="1">Germany</option>
                                                    <option value="2">Canada</option>
                                                    <option value="3">Usa</option>
                                                    <option value="4">Aus</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div>
                                                <label class="form-label">Website Description</label>
                                                <input class="form-control" type="text"
                                                       name="description" value="<?= $setting['description'] ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-end">
                                    <button class="btn btn-primary" type="submit" name="submit">Update Profile</button>
                                </div>
                            </form>
                            <!-- Container-fluid Ends-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php include ("inc/footer.php")?>