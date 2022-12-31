<?php include ("inc/header.php")?>
<?php
use Elhawra\Classes\Models\ServiceArabic;
if($request->getHas('id')){
    $id = $request->get('id');
}
else{
    $id = 1;
}
$data = new ServiceArabic();
$service = $data->selectId($id);
?>
        <div class="page-body">
            <div class="container-fluid">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <h3>
                                Service Update</h3>
                        </div>
                        <div class="col-12 col-sm-6">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="index.php"><i data-feather="home"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item">Service</li>
                                <li class="breadcrumb-item active">Service Create</li>
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
                                <form method="post" action="<?=URL?>admin/handlers/editservice-ar.php?id=<?=$service['id'] ?>" enctype="multipart/form-data" class="form theme-form projectcreate">
                                    <input type="hidden" name="id" value="<?=$service['id'] ?>">
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label>Service Name</label>
                                                <input class="form-control" type="text" value="<?=$service['title'] ?>" name="title">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label>Service Image</label>
                                                <input class="form-control" type="file" name="img">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-3">
                                            <label class="form-label" for="validationTextarea">Service
                                                Description</label>
                                            <textarea class="form-control" id="validationTextarea"
                                                      placeholder="Required example textarea" required="" name="description"><?=$service['description'] ?></textarea>
                                            <div class="invalid-feedback">Please enter a message in the textarea.</div>
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