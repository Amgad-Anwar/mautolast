<?php include ("inc/header.php")?>
<?php
use Elhawra\Classes\Models\CategoryArabic;
$data = new CategoryArabic();
$categories = $data->selectAll();
?>
        <div class="page-body">
            <div class="container-fluid">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <h3>Blog Create</h3>
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
                                <form method="post" action="<?=URL ?>admin/handlers/handle-createblog-ar.php" enctype="multipart/form-data" class="form theme-form projectcreate">
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label>Blog Name</label>
                                                <input class="form-control" type="text" name="title" placeholder="project name *">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="form-label" for="validationCustom04">Blog Category</label>
                                        <select class="form-select" name="cat_id" id="validationCustom04" required="">
                                            <option selected="" disabled="" value="">Choose...</option>
                                            <?php foreach ($categories as $index => $category) { ?>
                                            <option value="<?= $category['id'] ?>"><?= $category['blog_cat'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="row">
                                        <div class="mb-3">
                                            <label class="form-label" for="validationTextarea">Short Description</label>
                                            <textarea name="s_description" class="form-control" id="validationTextarea"
                                                      placeholder="Required example textarea" required=""></textarea>
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
                                            <div id="editor_container">
                                                <textarea name="l_description" id="editable">Lorem ipsum dolor lis cubilia leo vehicula ligula sodales cursus. Curabitur laoreet augue leo morbi nulla magnis facilisis penatibus, eget in quis duis mi sodales nunc erat gravida, tempor dis fermentum potenti hendrerit congue aenean. Torquent quis class e</textarea>
                                            </div>
                                            <div id="html_container"></div>
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
                                                <button type="submit" class="btn btn-danger" href="#" name="submit">Add</button>
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