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
                                <li class="breadcrumb-item">Car</li>
                                <li class="breadcrumb-item active">Car Create</li>
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
                                <?php include ('inc/errors.php')?>
                                <form method="post" action="<?=URL?>admin/handlers/createcar.php" enctype="multipart/form-data" class="form theme-form projectcreate">
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label>Car Name</label>
                                                <input class="form-control" type="text" name="name"
                                                       placeholder=" name *">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-3">
                                            <label class="form-label" for="validationTextarea">Car Small
                                                Description</label>
                                            <textarea class="form-control" id="validationTextarea"
                                                      placeholder="Required example textarea" required="" name="s_description"></textarea>
                                            <div class="invalid-feedback">Please enter a message in the textarea.</div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label>Old Price</label>
                                                <input class="form-control" type="text" placeholder="Old price" name="price_old">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label>New Price</label>
                                                <input class="form-control" type="text" placeholder="New Price" name="price_new">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label>Make</label>
                                                <input class="form-control" type="text" placeholder="Make" name="make">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label>Model</label>
                                                <input class="form-control" type="text" placeholder="Model" name="model">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label>Registration Date</label>
                                                <input class="form-control" type="text" placeholder="Year" name="registration_date">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label>Mileage</label>
                                                <input class="form-control" type="text" placeholder="Mileage" name="mileage">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label>Condition</label>
                                                <input class="form-control" type="text" placeholder="Condition" name="condition">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label>Drivetrain</label>
                                                <input class="form-control" type="text" placeholder="drivetrain" name="drivetrain">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label>Exterior Color</label>
                                                <input class="form-control" type="text" placeholder="Exterior Color" name="exterior_color">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label>Interior Color</label>
                                                <input class="form-control" type="text" placeholder="Interior Color" name="interior_color">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-3">
                                            <label class="form-label" for="validationTextarea">Car Long
                                                Description</label>
                                            <textarea class="form-control" id="validationTextarea"
                                                      placeholder="Required example textarea" required="" name="l_description"></textarea>
                                            <div class="invalid-feedback">Please enter a message in the textarea.</div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-3">
                                            <label class="form-label" for="validationTextarea">Car Overview</label>
                                            <textarea class="form-control" id="validationTextarea"
                                                      placeholder="Required example textarea" required="" name="vehicle_overview"></textarea>
                                            <div class="invalid-feedback">Please enter a message in the textarea.</div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label>External Image</label>
                                                <input class="form-control" type="file" name="img">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label>Internal Image</label>
                                                <input class="form-control" type="file" multiple name="images">
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