<?php include ('inc/header.php') ?>
<?php
use Elhawra\Classes\Models\BlogArabic;
$data = new BlogArabic();
$blogs = $data->selectAll();
$blogsLimit = $data->selectAllWithLimit();

use Elhawra\Classes\Models\CategoryArabic;
$dataCat = new CategoryArabic();
$categories = $dataCat->selectAll();
?>

<!--=================================
 inner-intro  -->

 <section class="inner-intro bg-1 bg-overlay-black-70">
  <div class="container">
     <div class="row text-center intro-title">
           <div class="col-md-6 text-md-start d-inline-block">
             <h1 class="text-white">اخر الاخبار </h1>
           </div>
           <div class="col-md-6 text-md-end float-end">
             <ul class="page-breadcrumb">
                <li><a href="#"><i class="fa fa-home"></i> الرئيسيه</a> <i class="fa fa-angle-double-right"></i></li>
                <li><span>اخر الاخبار  </span> </li>
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
           <h2>اخر اخبارنا</h2>
           <div class="separator"></div>
         </div>
      </div>
    </div>
    <div class="row">
        <div style="direction: rtl" class="col-md-4">
            <div class="blog-sidebar">
                <div class="sidebar-widget">
                    <h6>ابحث هنا</h6>
                    <div class="widget-search">
                        <i class="fa fa-search"></i>
                        <input type="search" class="form-control placeholder" placeholder="Search....">
                    </div>
                </div>
                <div class="sidebar-widget">
                    <h6>التصنيفات</h6>
                    <div class="widget-link">
                        <ul>
                            <?php foreach ($categories as $category) {?>
                            <li><a href="#"> <?= $category['blog_cat'] ?>  <i class="fa fa-angle-left"></i></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <div class="sidebar-widget">
                    <h6>اخر اخبارنا</h6>
                    <?php foreach ($blogsLimit as $blogLimit){ ?>
                    <div class="recent-post">
                        <div class="recent-post-image">
                            <img src="<?=URL?>uploads/<?=$blogLimit['main_img']?>" alt="">
                        </div>
                        <div style="padding-right: 10px" class="recent-post-info">
                            <a href="<?=URL?>ar/blog-single.php?id=<?=$blogLimit['id']?>"><?=$blogLimit['title']?></a>
                            <span><i class="fa fa-calendar"></i> <?= date('Y-m-d', strtotime($blogLimit['created_at'])); ?></span>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div style="direction: rtl" class="col-md-8">
            <?php foreach ($blogs as $blog) {?>
            <div class="blog-entry">
              <div class="blog-entry-image  clearfix">
                 <div class="portfolio-item">
                   <img class="img-fluid" src="<?=URL?>uploads/<?=$blog['main_img']?>" alt="">
                  </div>
                </div>
              <div class="entry-title">
                 <a href="<?=URL?>ar/blog-single.php?id=<?=$blog['id']?>"><?=$blog['title']?></a>
              </div>
              <div class="entry-meta">
                <ul>
                  <li><a href="#"><i class="fa fa-user"></i> By Admin </a> /</li>
                  <li><a href="#"><i class="fa fa-folder-open"></i><?= date('Y-m-d', strtotime($blog['created_at'])); ?></a></li>
                </ul>
              </div>
              <div class="entry-content">
                <p><?=$blog['s_description']?></p>
              </div>
               <div class="entry-share clearfix">
                 <a class="button red float-start" href="<?=URL?>blog-single.php?id=<?=$blog['id']?>"> قراءه المزيد </a>
                 <div class="share float-end"><a href="#"> <i class="fa fa-share-alt"></i> </a>
                      <div class="blog-social">
                       <ul class="list-style-none">
                        <li> <a href="#"><i class="fa fa-facebook"></i></a> </li>
                        <li> <a href="#"><i class="fa fa-twitter"></i></a> </li>
                        <li> <a href="#"><i class="fa fa-instagram"></i></a> </li>
                        <li> <a href="#"><i class="fa fa-pinterest-p"></i></a> </li>
                       </ul>
                       </div>
                     </div>
                 </div>
              </div>
            <hr class="gray">
            <?php } ?>
         </div>

     </div>
   </div>
</section>

<!--=================================
blog -->

<?php include ('inc/footer.php')?>