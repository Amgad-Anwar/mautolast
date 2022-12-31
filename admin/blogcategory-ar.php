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
                        <h3>Blog Category</h3>
                    </div>
                    <div class="col-12 col-sm-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php"><i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item">Blog</li>
                            <li class="breadcrumb-item active">Categories</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="email-wrap bookmark-wrap">
                <div class="row">
                    <div class="col-xl-3 box-col-3 xl-30">
                        <div class="email-sidebar">
                            <div class="email-left-aside">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="email-app-sidebar left-bookmark custom-scrollbar">
                                            <ul class="nav main-menu" role="tablist">
                                                <li class="nav-item">
                                                    <button class="btn-primary badge-light btn-block btn-mail w-100"
                                                            type="button" data-bs-toggle="modal"
                                                            data-bs-target="#exampleModal"><i class="me-2"
                                                                                              data-feather="bookmark"></i>
                                                        New Category
                                                    </button>
                                                    <div class="modal fade modal-bookmark" id="exampleModal"
                                                         tabindex="-1" role="dialog"
                                                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">
                                                                        Add New Category</h5>
                                                                    <button class="btn-close" type="button"
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form method="post" action="<?= URL?>admin/handlers/createcategory-ar.php" class="form-bookmark needs-validation"
                                                                          id="bookmark-form" novalidate="">
                                                                        <div class="form-row">
                                                                            <div class="form-group col-md-12 m-b-20">
                                                                                <label for="bm-title">Category
                                                                                    Name</label>
                                                                                <input class="form-control"
                                                                                       id="bm-title" type="text"
                                                                                       required=""
                                                                                       autocomplete="off" name="blog_cat">
                                                                            </div>
                                                                        </div>
                                                                        <input id="index_var" type="hidden"
                                                                               value="6">
                                                                        <button class="btn btn-secondary"
                                                                                id="Bookmark"
                                                                                name="submit"
                                                                                type="submit">Save
                                                                        </button>
                                                                        <button class="btn btn-primary"
                                                                                type="button"
                                                                                data-bs-dismiss="modal">Cancel
                                                                        </button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-md-12 box-col-9 xl-70">
                        <div class="email-right-aside bookmark-tabcontent">
                            <div class="card email-body radius-left">
                                <div class="ps-0">
                                    <div class="tab-content">
                                        <div class="tab-pane fade active show" id="pills-created" role="tabpanel"
                                             aria-labelledby="pills-created-tab">
                                            <div class="card mb-0">
                                                <div class="card-body pb-0">
                                                    <div class="details-bookmark text-center">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div class="card">
                                                                    <div class="table-responsive">
                                                                        <table class="table">
                                                                            <thead>
                                                                            <tr>
                                                                                <th scope="col">#</th>
                                                                                <th scope="col">Category Name</th>
                                                                                <th scope="col">Action</th>
                                                                            </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                            <?php foreach ($categories as $index => $category) { ?>
                                                                                <tr>
                                                                                    <th scope="row"><?= $index + 1 ?></th>
                                                                                    <td><?= $category['blog_cat'] ?></td>
                                                                                    <td>
                                                                                        <a href="<?=URL?>admin/handlers/deletecategory-ar.php?id=<?= $category['id'] ?>" class="btn btn-danger">
                                                                                            Delete
                                                                                        </a>
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
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->
    </div>
<?php include ("inc/footer.php")?>