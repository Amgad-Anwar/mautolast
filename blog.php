<?php
include("inc/header.php");
use Elhawra\Classes\Models\Blog;
use Elhawra\Classes\Models\Category;
$data_blog = new Blog();
$blogs = $data_blog->selectAll();

$data_cat = new Category();
$categories = $data_cat->selectAll();

$blogs_Limit = $data_blog->selectAllWithLimit();
?>
    <!--=================================
     inner-intro  -->

    <section class="inner-intro bg-1 bg-overlay-black-70">
        <div class="container">
            <div class="row text-center intro-title">
                <div class="col-md-6 text-md-start d-inline-block">
                    <h1 class="text-white">blog </h1>
                </div>
                <div class="col-md-6 text-md-end float-end">
                    <ul class="page-breadcrumb">
                        <li><a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i>
                        </li>
                        <li><span>blog  </span></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--=================================
     inner-intro  -->


    <!--=================================
     blog  -->

    <section class="blog blog-right-sidebar page-section-ptb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <span>Read what we say in our blog</span>
                        <h2>Our blog</h2>
                        <div class="separator"></div>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-md-8">
                    <?php foreach ($blogs as $blog) {?>
                    <div class="blog-entry">
                        <div class="blog-entry-image  clearfix">
                            <div class="portfolio-item">
                                <img class="img-fluid" src="<?php URL?>uploads/<?= $blog['main_img']?>" alt="">
                            </div>
                        </div>
                        <div class="entry-title">
                            <a href="<?php URL ?>blog-single.php?id=<?=$blog['id']?>"><?= $blog['title']?></a>
                        </div>
                        <div class="entry-meta">
                            <ul>
                                <li><a href="#"><i class="fa fa-user"></i> By Admin </a> /</li>
                                <li><a href="#"><i class="fa fa-folder-open"></i> <?= date('Y-m-d', strtotime($blog['created_at'])); ?></a></li>
                            </ul>
                        </div>
                        <div class="entry-content">
                            <p><?= $blog['s_description']?></p>
                        </div>
                        <div class="entry-share clearfix">
                            <a class="button red float-start" href="<?php URL ?>blog-single.php?id=<?=$blog['id']?>"> Read More </a>
                            <div class="share float-end"><a href="#"> <i class="fa fa-share-alt"></i> </a>
                                <div class="blog-social">
                                    <ul class="list-style-none">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="gray">
                    <?php } ?>
                    <!-- ============================================ -->
                    <div class="pagination-nav  d-flex justify-content-center">
                        <ul class="pagination">
                            <li><a href="#">«</a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">»</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="blog-sidebar">
                        <div class="sidebar-widget">
                            <h6>Search here</h6>
                            <div class="widget-search">
                                <i class="fa fa-search"></i>
                                <input type="search" class="form-control placeholder" placeholder="Search....">
                            </div>
                        </div>
                        <div class="sidebar-widget">
                            <h6>categories</h6>
                            <div class="widget-link">
                                <ul>
                                    <?php foreach ($categories as $category) { ?>
                                    <li><a href="#"> <i class="fa fa-angle-right"></i> <?= $category["blog_cat"]?> </a></li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-widget">
                            <h6>Recent Posts</h6>
                            <?php foreach ($blogs_Limit as $blog){ ?>
                            <div class="recent-post">
                                <div class="recent-post-image">
                                    <img src="<?php URL?>uploads/<?= $blog['main_img']?>" alt="">
                                </div>
                                <div class="recent-post-info">
                                    <a href="<?php URL ?>blog-single.php?id=<?=$blog['id']?>"><?= $blog['title']?> </a>
                                    <span><i class="fa fa-calendar"></i> <?= date('Y-m-d', strtotime($blog['created_at'])); ?></span>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--=================================
    blog -->

<?php
include("inc/footer.php");
?>