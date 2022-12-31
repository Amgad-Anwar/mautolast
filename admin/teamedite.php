<?php include ("inc/header.php")?>
<?php
use Elhawra\Classes\Models\Team;
if($request->getHas('id')){
    $id = $request->get('id');
}
else{
    $id = 1;
}
$data = new Team();
$team = $data->selectId($id);
?>
        <div class="page-body">
            <div class="container-fluid">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <h3>
                                Team Edit</h3>
                        </div>
                        <div class="col-12 col-sm-6">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="index.php"><i data-feather="home"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item">Team</li>
                                <li class="breadcrumb-item active">Team Edit</li>
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
                                <form method="post" action="<?= URL?>admin/handlers/editteam.php?id=<?= $team['id']?>" enctype="multipart/form-data" class="form theme-form projectcreate">
                                    <div class="row">
                                        <input type="hidden" name="id" value="<?=$id?>">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label>Team Member Name</label>
                                                <input class="form-control" type="text" name="name"
                                                       value="<?= $team['name']?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label>Job TITLE</label>
                                                <input class="form-control" type="text" name="job"
                                                       value="<?= $team['job']?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="mb-3">
                                                <label>Facebook Url</label>
                                                <input class="form-control" type="text" name="facebook"
                                                       value="<?= $team['facebook']?>">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="mb-3">
                                                <label>Twitter Url</label>
                                                <input class="form-control" type="text" name="twitter"
                                                       value="<?= $team['twitter']?>">
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
                                                <button type="submit" name="submit" class="btn btn-danger" href="#">Save</button>
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