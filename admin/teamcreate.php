<?php include ("inc/header.php")?>
        <div class="page-body">
            <div class="container-fluid">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <h3>
                                Team Create</h3>
                        </div>
                        <div class="col-12 col-sm-6">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="index.php"><i data-feather="home"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item">Team</li>
                                <li class="breadcrumb-item active">Team Create</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <form method="post" action="<?= URL?>/admin/handlers/createteam.php" enctype="multipart/form-data" class="form theme-form projectcreate">
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label>Team Member Name</label>
                                                <input class="form-control" type="text"
                                                       placeholder="Team member name *" name="name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label>Job TITLE</label>
                                                <input class="form-control" type="text" placeholder="Job Title" name="job">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="mb-3">
                                                <label>Facebook Url</label>
                                                <input class="form-control" type="text" placeholder="Facebook url" name="facebook">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="mb-3">
                                                <label>Twitter Url</label>
                                                <input class="form-control" type="text" placeholder="Twitter url" name="twitter">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label>User Image</label>
                                                <input class="form-control" type="file" name="img">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="text-end">
                                                <button type="submit" name="submit" class="btn btn-danger" href="#">Add</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->
        </div>
<?php include ("inc/footer.php")?>