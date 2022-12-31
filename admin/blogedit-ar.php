<?php include ("inc/header.php")?>
<?php
use Elhawra\Classes\Models\BlogArabic;
use Elhawra\Classes\Models\CategoryArabic;
if($request->getHas('id')){
    $id = $request->get('id');
}
else{
    $id = 1;
}
$data_blog = new BlogArabic();
$blogs = $data_blog->selectId($id);


$data = new CategoryArabic();
$categories = $data->selectAll();
?>

<div class="page-body">
            <div class="container-fluid">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <h3>Blog Edit</h3>
                        </div>
                        <div class="col-12 col-sm-6">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="index.php"><i data-feather="home"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item">Blog</li>
                                <li class="breadcrumb-item active">Blog Create</li>
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
                                <?php include ("inc/errors.php")?>
                                <form method="post" action="<?=URL?>admin/handlers/editblog-ar.php?id=<?=$blogs['id']?>" enctype="multipart/form-data" class="form theme-form projectcreate">
                                    <input type="hidden" name="id" value="<?=$id?>">
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label>Blog Name</label>
                                                <input class="form-control" type="text" value="<?=$blogs['title']?>" name="title">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="form-label" for="validationCustom04">Blog Category</label>
                                        <select class="form-select" id="validationCustom04" required="" name="cat_id">
                                            <option selected="" disabled="" value="">Choose...</option>
                                            <?php foreach ($categories as $index => $category) { ?>
                                                <option value="<?= $category['id'] ?>" <?php if($blogs['cat_id'] == $category['id']){echo "selected";} ?>><?= $category['blog_cat'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="row">
                                        <div class="mb-3">
                                            <label class="form-label" for="validationTextarea">Short Description</label>
                                            <textarea class="form-control" id="validationTextarea" required="" name="s_description"><?=$blogs['s_description']?></textarea>
                                            <div class="invalid-feedback">Please enter a message in the textarea.</div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label>Blog External Image</label>
                                                <input class="form-control" type="file" name="img">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-3">
                                            <label class="form-label" for="validationTextarea">Long Description</label>
                                            <textarea class="form-control" id="validationTextarea"
                                                      placeholder="Required example textarea" required="" name="l_description"><?=$blogs['l_description']?></textarea>
                                            <div class="invalid-feedback">Please enter a message in the textarea.</div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label>Blog Internal Image</label>
                                                <input class="form-control" type="file" name="imgtwo">
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