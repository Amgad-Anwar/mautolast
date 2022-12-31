<?php include ("inc/header.php")?>
<?php
use Elhawra\Classes\Models\Contact;
$data = new Contact();
$messages = $data->selectAll();
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
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Contact Messages</h5>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Message</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($messages as $index=>$message) { ?>
                                    <tr>
                                        <th scope="row"><?= $index + 1 ?></th>
                                        <td><?=$message['name'] ?></td>
                                        <td><?=$message['email'] ?></td>
                                        <td><?=$message['phone'] ?></td>
                                        <td><?=$message['message'] ?></td>
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
<?php include ("inc/footer.php")?>