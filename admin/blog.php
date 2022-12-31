<?php include ("inc/header.php")?>
<?php
use Elhawra\Classes\Models\Blog;
$data = new Blog();
$blogs = $data->selectAll();
?>
        <div class="page-body">
            <div class="container-fluid">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <h3>Blog</h3>
                        </div>
                        <div class="col-12 col-sm-6">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php"> <i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item active">Blogs</li>
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
                                    <a class="btn btn-primary" href="blogcreate.php"> <i
                                            data-feather="plus-square"> </i>Create New Project</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 xl-100">
                        <div class="row">
                            <?php foreach ($blogs as $blog) { ?>
                            <div class="col-xl-12 col-sm-6">
                                <div class="card">
                                    <div class="blog-box blog-list row">
                                        <div class="col-xl-5 col-12"><img class="img-fluid sm-100-w" src="<?=URL ?>uploads/<?=$blog['main_img'] ?>" alt=""></div>
                                        <div class="col-xl-7 col-12">
                                            <div class="blog-details">
                                                <div class="blog-date"><?= date('Y-m-d', strtotime($blog['created_at'])); ?></div>
                                                <a href="#">
                                                    <h6><?=$blog['title'] ?> </h6></a>
                                                <div class="blog-bottom-content">
                                                    <ul class="blog-social">
                                                        <li><?=$blog['s_description'] ?></li>
                                                    </ul>
                                                    <hr>
                                                    <div>
                                                        <a href="<?=URL ?>admin/blogedit.php?id=<?=$blog['id']?>" class="btn btn-primary">Edit</a>
                                                        <a href="<?=URL ?>admin/handlers/deleteblog.php?id=<?=$blog['id']?>" class="btn btn-danger">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
<?php include ("inc/footer.php")?>