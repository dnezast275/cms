<?= $this->extend('template/layout-home') ?>

<?= $this->section('content') ?>
<!-- ##### Hero Area Start ##### -->
<div class="hero-area owl-carousel">
    <!-- Single Blog Post -->
    <?php foreach ($postData as $p) : ?>
        <div class="hero-blog-post bg-img bg-overlay" style="background-image: url(<?= $p['bg_img'] ?>);">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <!-- Post Contetnt -->
                        <div class="post-content text-center">
                            <div class="post-meta" data-animation="fadeInUp" data-delay="100ms">
                                <a href="#">
                                    <?php $date = date_create($p['created_at']); ?>
                                    <?= date_format($date, "l, d F Y"); ?>
                                </a>
                                <a href="archive.html">lifestyle</a>
                            </div>
                            <a href="<?= base_url('/post') . '/' . $p['slug'] ?>" class="post-title" data-animation="fadeInUp" data-delay="300ms"><?= $p['title']; ?></a>
                            <a href="<?= base_url('/post') . '/' . $p['slug'] ?>" class="video-play" data-animation="bounceIn" data-delay="500ms">Read more...</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>


</div>
<!-- ##### Hero Area End ##### -->

<!-- ##### Mag Posts Area Start ##### -->
<section class="mag-posts-area d-flex flex-wrap">



    <!-- >>>>>>>>>>>>>>>>>>>>
             Main Posts Area
        <<<<<<<<<<<<<<<<<<<<< -->
    <div class="mag-posts-content mt-30 mb-30 p-30 box-shadow">
        <!-- Trending Now Posts Area -->
        <div class="trending-now-posts mb-30">
            <!-- Section Title -->
            <div class="section-heading">
                <h5>BERITA TERBARU</h5>
            </div>

            <div class="trending-post-slides owl-carousel">

                <!-- Single Trending Post -->
                <?php $this->categoryModel = new \App\Models\CategoryModel(); ?>
                <?php foreach ($postData as $p) : ?>
                    <?php
                    $categorySlug = $p['category_slug'];
                    $categoryPost = $this->categoryModel->getCategoryBySlug($categorySlug);
                    ?>
                    <div class="single-trending-post">
                        <a href="<?= base_url() . '/post/' . $p['slug'] ?>">
                            <img src="<?= $p['md_img'] ?>" alt="">
                        </a>
                        <div class="post-content">
                            <a href="<?= base_url() . '/category/' . $p['category_slug'] ?>" class="post-cata"><?= $categoryPost['category_name'] ?></a>
                            <a href="<?= base_url() . '/post/' . $p['slug'] ?>" class="post-title"><?= $p['title'] ?></a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Feature Video Posts Area -->
        <div class="feature-video-posts mb-30">
            <!-- Section Title -->
            <div class="section-heading">
                <h5>Featured Videos</h5>
            </div>

            <div class="featured-video-posts">
                <div class="row">
                    <div class="col-12 col-lg-7">
                        <!-- Single Featured Post -->
                        <div class="single-featured-post">
                            <!-- Thumbnail -->
                            <div class="post-thumbnail mb-50">
                                <img src="img/bg-img/22.jpg" alt="">
                                <a href="video-post.html" class="video-play"><i class="fa fa-play"></i></a>
                            </div>
                            <!-- Post Contetnt -->
                            <div class="post-content">
                                <div class="post-meta">
                                    <a href="#">MAY 8, 2018</a>
                                    <a href="archive.html">lifestyle</a>
                                </div>
                                <a href="video-post.html" class="post-title">A Closer Look At Our Front Porch Items From Lowe’s</a>
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
                            </div>
                            <!-- Post Share Area -->
                            <div class="post-share-area d-flex align-items-center justify-content-between">
                                <!-- Post Meta -->
                                <div class="post-meta pl-3">
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                    <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                                </div>
                                <!-- Share Info -->
                                <div class="share-info">
                                    <a href="#" class="sharebtn"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                                    <!-- All Share Buttons -->
                                    <div class="all-share-btn d-flex">
                                        <a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                        <a href="#" class="google-plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                        <a href="#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-5">
                        <!-- Featured Video Posts Slide -->
                        <div class="featured-video-posts-slide owl-carousel">

                            <div class="single--slide">
                                <!-- Single Blog Post -->
                                <div class="single-blog-post d-flex style-3">
                                    <div class="post-thumbnail">
                                        <img src="img/bg-img/23.jpg" alt="">
                                    </div>
                                    <div class="post-content">
                                        <a href="single-post.html" class="post-title">Global Resorts Network Grn Putting Timeshares To Shame</a>
                                        <div class="post-meta d-flex">
                                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Blog Post -->
                                <div class="single-blog-post d-flex style-3">
                                    <div class="post-thumbnail">
                                        <img src="img/bg-img/24.jpg" alt="">
                                    </div>
                                    <div class="post-content">
                                        <a href="single-post.html" class="post-title">A Guide To Rocky Mountain Vacations</a>
                                        <div class="post-meta d-flex">
                                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Blog Post -->
                                <div class="single-blog-post d-flex style-3">
                                    <div class="post-thumbnail">
                                        <img src="img/bg-img/25.jpg" alt="">
                                    </div>
                                    <div class="post-content">
                                        <a href="single-post.html" class="post-title">American Standards And European Culture How To Avoid</a>
                                        <div class="post-meta d-flex">
                                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Blog Post -->
                                <div class="single-blog-post d-flex style-3">
                                    <div class="post-thumbnail">
                                        <img src="img/bg-img/26.jpg" alt="">
                                    </div>
                                    <div class="post-content">
                                        <a href="single-post.html" class="post-title">Mother Earth Hosts Our Travels</a>
                                        <div class="post-meta d-flex">
                                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Blog Post -->
                                <div class="single-blog-post d-flex style-3">
                                    <div class="post-thumbnail">
                                        <img src="img/bg-img/27.jpg" alt="">
                                    </div>
                                    <div class="post-content">
                                        <a href="single-post.html" class="post-title">From Wetlands To Canals And Dams Amsterdam Is Alive</a>
                                        <div class="post-meta d-flex">
                                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="single--slide">
                                <!-- Single Blog Post -->
                                <div class="single-blog-post d-flex style-3">
                                    <div class="post-thumbnail">
                                        <img src="img/bg-img/23.jpg" alt="">
                                    </div>
                                    <div class="post-content">
                                        <a href="single-post.html" class="post-title">Global Resorts Network Grn Putting Timeshares To Shame</a>
                                        <div class="post-meta d-flex">
                                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Blog Post -->
                                <div class="single-blog-post d-flex style-3">
                                    <div class="post-thumbnail">
                                        <img src="img/bg-img/24.jpg" alt="">
                                    </div>
                                    <div class="post-content">
                                        <a href="single-post.html" class="post-title">A Guide To Rocky Mountain Vacations</a>
                                        <div class="post-meta d-flex">
                                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Blog Post -->
                                <div class="single-blog-post d-flex style-3">
                                    <div class="post-thumbnail">
                                        <img src="img/bg-img/25.jpg" alt="">
                                    </div>
                                    <div class="post-content">
                                        <a href="single-post.html" class="post-title">American Standards And European Culture How To Avoid</a>
                                        <div class="post-meta d-flex">
                                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Blog Post -->
                                <div class="single-blog-post d-flex style-3">
                                    <div class="post-thumbnail">
                                        <img src="img/bg-img/26.jpg" alt="">
                                    </div>
                                    <div class="post-content">
                                        <a href="single-post.html" class="post-title">Mother Earth Hosts Our Travels</a>
                                        <div class="post-meta d-flex">
                                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Blog Post -->
                                <div class="single-blog-post d-flex style-3">
                                    <div class="post-thumbnail">
                                        <img src="img/bg-img/27.jpg" alt="">
                                    </div>
                                    <div class="post-content">
                                        <a href="single-post.html" class="post-title">From Wetlands To Canals And Dams Amsterdam Is Alive</a>
                                        <div class="post-meta d-flex">
                                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Most Viewed Videos -->
        <div class="most-viewed-videos mb-30">
            <!-- Section Title -->
            <div class="section-heading">
                <h5>Most Viewed Videos</h5>
            </div>

            <div class="most-viewed-videos-slide owl-carousel">

                <!-- Single Blog Post -->
                <div class="single-blog-post style-4">
                    <div class="post-thumbnail">
                        <img src="img/bg-img/28.jpg" alt="">
                        <a href="video-post.html" class="video-play"><i class="fa fa-play"></i></a>
                        <span class="video-duration">09:27</span>
                    </div>
                    <div class="post-content">
                        <a href="single-post.html" class="post-title">A Guide To Rocky Mountain Vacations</a>
                        <div class="post-meta d-flex">
                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                        </div>
                    </div>
                </div>

                <!-- Single Blog Post -->
                <div class="single-blog-post style-4">
                    <div class="post-thumbnail">
                        <img src="img/bg-img/29.jpg" alt="">
                        <a href="video-post.html" class="video-play"><i class="fa fa-play"></i></a>
                        <span class="video-duration">09:27</span>
                    </div>
                    <div class="post-content">
                        <a href="single-post.html" class="post-title">Dentists Are Smiling Over Painless Veneer Alternative</a>
                        <div class="post-meta d-flex">
                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                        </div>
                    </div>
                </div>

                <!-- Single Blog Post -->
                <div class="single-blog-post style-4">
                    <div class="post-thumbnail">
                        <img src="img/bg-img/30.jpg" alt="">
                        <a href="video-post.html" class="video-play"><i class="fa fa-play"></i></a>
                        <span class="video-duration">09:27</span>
                    </div>
                    <div class="post-content">
                        <a href="single-post.html" class="post-title">Become A Travel Pro In One Easy Lesson</a>
                        <div class="post-meta d-flex">
                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                        </div>
                    </div>
                </div>

                <!-- Single Blog Post -->
                <div class="single-blog-post style-4">
                    <div class="post-thumbnail">
                        <img src="img/bg-img/28.jpg" alt="">
                        <a href="video-post.html" class="video-play"><i class="fa fa-play"></i></a>
                        <span class="video-duration">09:27</span>
                    </div>
                    <div class="post-content">
                        <a href="single-post.html" class="post-title">A Guide To Rocky Mountain Vacations</a>
                        <div class="post-meta d-flex">
                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                        </div>
                    </div>
                </div>

                <!-- Single Blog Post -->
                <div class="single-blog-post style-4">
                    <div class="post-thumbnail">
                        <img src="img/bg-img/29.jpg" alt="">
                        <a href="video-post.html" class="video-play"><i class="fa fa-play"></i></a>
                        <span class="video-duration">09:27</span>
                    </div>
                    <div class="post-content">
                        <a href="single-post.html" class="post-title">Dentists Are Smiling Over Painless Veneer Alternative</a>
                        <div class="post-meta d-flex">
                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                        </div>
                    </div>
                </div>

                <!-- Single Blog Post -->
                <div class="single-blog-post style-4">
                    <div class="post-thumbnail">
                        <img src="img/bg-img/30.jpg" alt="">
                        <a href="video-post.html" class="video-play"><i class="fa fa-play"></i></a>
                        <span class="video-duration">09:27</span>
                    </div>
                    <div class="post-content">
                        <a href="single-post.html" class="post-title">Become A Travel Pro In One Easy Lesson</a>
                        <div class="post-meta d-flex">
                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Sports Videos -->
        <div class="sports-videos-area">
            <!-- Section Title -->
            <div class="section-heading">
                <h5>Sports Videos</h5>
            </div>

            <div class="sports-videos-slides owl-carousel mb-30">
                <!-- Single Featured Post -->
                <div class="single-featured-post">
                    <!-- Thumbnail -->
                    <div class="post-thumbnail mb-50">
                        <img src="img/bg-img/22.jpg" alt="">
                        <a href="video-post.html" class="video-play"><i class="fa fa-play"></i></a>
                    </div>
                    <!-- Post Contetnt -->
                    <div class="post-content">
                        <div class="post-meta">
                            <a href="#">MAY 8, 2018</a>
                            <a href="archive.html">lifestyle</a>
                        </div>
                        <a href="video-post.html" class="post-title">A Closer Look At Our Front Porch Items From Lowe’s</a>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
                    </div>
                    <!-- Post Share Area -->
                    <div class="post-share-area d-flex align-items-center justify-content-between">
                        <!-- Post Meta -->
                        <div class="post-meta pl-3">
                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                        </div>
                        <!-- Share Info -->
                        <div class="share-info">
                            <a href="#" class="sharebtn"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                            <!-- All Share Buttons -->
                            <div class="all-share-btn d-flex">
                                <a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#" class="google-plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                <a href="#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Featured Post -->
                <div class="single-featured-post">
                    <!-- Thumbnail -->
                    <div class="post-thumbnail mb-50">
                        <img src="img/bg-img/22.jpg" alt="">
                        <a href="video-post.html" class="video-play"><i class="fa fa-play"></i></a>
                    </div>
                    <!-- Post Contetnt -->
                    <div class="post-content">
                        <div class="post-meta">
                            <a href="#">MAY 8, 2018</a>
                            <a href="archive.html">lifestyle</a>
                        </div>
                        <a href="video-post.html" class="post-title">A Closer Look At Our Front Porch Items From Lowe’s</a>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
                    </div>
                    <!-- Post Share Area -->
                    <div class="post-share-area d-flex align-items-center justify-content-between">
                        <!-- Post Meta -->
                        <div class="post-meta pl-3">
                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                        </div>
                        <!-- Share Info -->
                        <div class="share-info">
                            <a href="#" class="sharebtn"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                            <!-- All Share Buttons -->
                            <div class="all-share-btn d-flex">
                                <a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#" class="google-plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                <a href="#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Featured Post -->
                <div class="single-featured-post">
                    <!-- Thumbnail -->
                    <div class="post-thumbnail mb-50">
                        <img src="img/bg-img/22.jpg" alt="">
                        <a href="video-post.html" class="video-play"><i class="fa fa-play"></i></a>
                    </div>
                    <!-- Post Contetnt -->
                    <div class="post-content">
                        <div class="post-meta">
                            <a href="#">MAY 8, 2018</a>
                            <a href="archive.html">lifestyle</a>
                        </div>
                        <a href="video-post.html" class="post-title">A Closer Look At Our Front Porch Items From Lowe’s</a>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
                    </div>
                    <!-- Post Share Area -->
                    <div class="post-share-area d-flex align-items-center justify-content-between">
                        <!-- Post Meta -->
                        <div class="post-meta pl-3">
                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                        </div>
                        <!-- Share Info -->
                        <div class="share-info">
                            <a href="#" class="sharebtn"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                            <!-- All Share Buttons -->
                            <div class="all-share-btn d-flex">
                                <a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#" class="google-plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                <a href="#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Blog Post -->
                <div class="col-12 col-lg-6">
                    <div class="single-blog-post d-flex style-3 mb-30">
                        <div class="post-thumbnail">
                            <img src="img/bg-img/31.jpg" alt="">
                        </div>
                        <div class="post-content">
                            <a href="single-post.html" class="post-title">From Wetlands To Canals And Dams Amsterdam Is Alive</a>
                            <div class="post-meta d-flex">
                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Blog Post -->
                <div class="col-12 col-lg-6">
                    <div class="single-blog-post d-flex style-3 mb-30">
                        <div class="post-thumbnail">
                            <img src="img/bg-img/32.jpg" alt="">
                        </div>
                        <div class="post-content">
                            <a href="single-post.html" class="post-title">From Wetlands To Canals And Dams Amsterdam Is Alive</a>
                            <div class="post-meta d-flex">
                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Blog Post -->
                <div class="col-12 col-lg-6">
                    <div class="single-blog-post d-flex style-3 mb-30">
                        <div class="post-thumbnail">
                            <img src="img/bg-img/33.jpg" alt="">
                        </div>
                        <div class="post-content">
                            <a href="single-post.html" class="post-title">From Wetlands To Canals And Dams Amsterdam Is Alive</a>
                            <div class="post-meta d-flex">
                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Blog Post -->
                <div class="col-12 col-lg-6">
                    <div class="single-blog-post d-flex style-3 mb-30">
                        <div class="post-thumbnail">
                            <img src="img/bg-img/34.jpg" alt="">
                        </div>
                        <div class="post-content">
                            <a href="single-post.html" class="post-title">From Wetlands To Canals And Dams Amsterdam Is Alive</a>
                            <div class="post-meta d-flex">
                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- >>>>>>>>>>>>>>>>>>>>
         Post Right Sidebar Area
        <<<<<<<<<<<<<<<<<<<<< -->
    <div class="post-sidebar-area right-sidebar mt-30 mb-30 box-shadow">
        <!-- Sidebar Widget -->
        <div class="single-sidebar-widget p-30">
            <!-- Social Followers Info -->
            <div class="social-followers-info">
                <!-- Facebook -->
                <a href="#" class="facebook-fans"><i class="fa fa-facebook"></i> 4,360 <span>Fans</span></a>
                <!-- Twitter -->
                <a href="#" class="twitter-followers"><i class="fa fa-twitter"></i> 3,280 <span>Followers</span></a>
                <!-- YouTube -->
                <a href="#" class="youtube-subscribers"><i class="fa fa-youtube"></i> 1250 <span>Subscribers</span></a>
                <!-- Google -->
                <a href="#" class="google-followers"><i class="fa fa-google-plus"></i> 4,230 <span>Followers</span></a>
            </div>
        </div>

        <!-- Sidebar Widget -->
        <div class="single-sidebar-widget p-30">
            <!-- Section Title -->
            <div class="section-heading">
                <h5>Categories</h5>
            </div>

            <!-- Catagory Widget -->
            <ul class="catagory-widgets">
                <?php foreach ($category as $cat) : ?>
                    <li><a href="<?= base_url() . '/category/' . $cat['category_slug'] ?>"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> <?= $cat['category_name'] ?></span> <span>35</span></a></li>
                <?php endforeach; ?>
            </ul>
        </div>

        <!-- Sidebar Widget -->
        <div class="single-sidebar-widget">
            <a href="#" class="add-img"><img src="img/bg-img/add2.png" alt=""></a>
        </div>

        <!-- Sidebar Widget -->
        <div class="single-sidebar-widget p-30">
            <!-- Section Title -->
            <div class="section-heading">
                <h5>Hot Channels</h5>
            </div>

            <!-- Single YouTube Channel -->
            <div class="single-youtube-channel d-flex">
                <div class="youtube-channel-thumbnail">
                    <img src="img/bg-img/14.jpg" alt="">
                </div>
                <div class="youtube-channel-content">
                    <a href="single-post.html" class="channel-title">TV Show</a>
                    <a href="#" class="btn subscribe-btn"><i class="fa fa-play-circle-o" aria-hidden="true"></i> Subscribe</a>
                </div>
            </div>

            <!-- Single YouTube Channel -->
            <div class="single-youtube-channel d-flex">
                <div class="youtube-channel-thumbnail">
                    <img src="img/bg-img/15.jpg" alt="">
                </div>
                <div class="youtube-channel-content">
                    <a href="single-post.html" class="channel-title">Game Channel</a>
                    <a href="#" class="btn subscribe-btn"><i class="fa fa-play-circle-o" aria-hidden="true"></i> Subscribe</a>
                </div>
            </div>

            <!-- Single YouTube Channel -->
            <div class="single-youtube-channel d-flex">
                <div class="youtube-channel-thumbnail">
                    <img src="img/bg-img/16.jpg" alt="">
                </div>
                <div class="youtube-channel-content">
                    <a href="single-post.html" class="channel-title">Sport Channel</a>
                    <a href="#" class="btn subscribe-btn"><i class="fa fa-play-circle-o" aria-hidden="true"></i> Subscribe</a>
                </div>
            </div>

            <!-- Single YouTube Channel -->
            <div class="single-youtube-channel d-flex">
                <div class="youtube-channel-thumbnail">
                    <img src="img/bg-img/17.jpg" alt="">
                </div>
                <div class="youtube-channel-content">
                    <a href="single-post.html" class="channel-title">Travel Channel</a>
                    <a href="#" class="btn subscribe-btn"><i class="fa fa-play-circle-o" aria-hidden="true"></i> Subscribe</a>
                </div>
            </div>

            <!-- Single YouTube Channel -->
            <div class="single-youtube-channel d-flex">
                <div class="youtube-channel-thumbnail">
                    <img src="img/bg-img/18.jpg" alt="">
                </div>
                <div class="youtube-channel-content">
                    <a href="single-post.html" class="channel-title">LifeStyle Channel</a>
                    <a href="#" class="btn subscribe-btn"><i class="fa fa-play-circle-o" aria-hidden="true"></i> Subscribe</a>
                </div>
            </div>

        </div>

        <!-- Sidebar Widget -->
        <div class="single-sidebar-widget p-30">
            <!-- Section Title -->
            <div class="section-heading">
                <h5>Newsletter</h5>
            </div>

            <div class="newsletter-form">
                <p>Subscribe our newsletter gor get notification about new updates, information discount, etc.</p>
                <form action="#" method="get">
                    <input type="search" name="widget-search" placeholder="Enter your email">
                    <button type="submit" class="btn mag-btn w-100">Subscribe</button>
                </form>
            </div>

        </div>
    </div>
</section>
<!-- ##### Mag Posts Area End ##### -->
<?= $this->endSection() ?>