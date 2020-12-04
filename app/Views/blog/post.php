<?= $this->extend('template/layout') ?>

<?= $this->section('content') ?>
<!-- ##### Breadcrumb Area Start ##### -->
<section class="breadcrumb-area bg-img bg-overlay" style="background-image: url(<?= base_url('') . '/' . $postData['head_img'] ?>);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <!-- <h2>Single Post</h2> -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Breadcrumb Area End ##### -->

<!-- ##### Breadcrumb Area Start ##### -->
<div class="mag-breadcrumb py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url(); ?>"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url() . '/' . $postData['category_slug'] ?>"><?= $breadcat; ?></a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?= $postData['title'] ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- ##### Breadcrumb Area End ##### -->



<!-- ##### Post Details Area Start ##### -->
<section class="post-details-area">
    <div class="container">
        <div class="row justify-content-center">
            <!-- Post Details Content Area -->
            <div class="col-12 col-xl-8">
                <div class="post-details-content bg-white mb-30 p-30 box-shadow">
                    <div class="blog-thumb mb-30">
                        <img src="<?= base_url() . '/' . $postData['bg_img'] ?>" alt="">
                    </div>
                    <div class="blog-content">
                        <div class="post-meta">
                            <?php $date = date_create($postData['updated_at']); ?>
                            <?= date_format($date, "l, d F Y"); ?>
                            <a href="<?= base_url('/category') . '/' . $postData['category_slug'] ?>"><?= $postData['category_slug'] ?></a>
                        </div>
                        <h4 class="post-title"><?= $postData['title'] ?></h4>
                        <!-- Post Meta -->
                        <div class="post-meta-2">
                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> <?= $postData['watched'] ?></a>
                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> <?= $postData['liked'] ?></a>
                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> <?= $postData['comment'] ?></a>
                        </div>

                        <?= $postData['content'] ?>

                        <!-- Like Dislike Share -->
                        <div class="like-dislike-share my-5">
                            <h4 class="share">240<span>Share</span></h4>
                            <a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i> Share on Facebook</a>
                            <a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i> Share on Twitter</a>
                        </div>

                        <!-- Post Author -->
                        <div class="post-author d-flex align-items-center">
                            <div class="post-author-thumb">
                                <img src="img/bg-img/52.jpg" alt="">
                            </div>
                            <div class="post-author-desc pl-4">
                                <a href="#" class="author-name"><?= $postData['author'] ?></a>
                                <p>Duis tincidunt turpis sodales, tincidunt nisi et, auctor nisi. Curabitur vulputate sapien eu metus ultricies fermentum nec vel augue. Maecenas eget lacinia est.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Related Post Area -->
                <div class="related-post-area bg-white mb-30 px-30 pt-30 box-shadow">
                    <!-- Section Title -->
                    <div class="section-heading">
                        <h5>Related Post</h5>
                    </div>

                    <div class="row">
                        <!-- Single Blog Post -->
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="single-blog-post style-4 mb-30">
                                <div class="post-thumbnail">
                                    <img src="img/bg-img/29.jpg" alt="">
                                </div>
                                <div class="post-content">
                                    <a href="single-post.html" class="post-title">Dentists Are Smiling Over Painless Veneer</a>
                                    <div class="post-meta d-flex">
                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="single-blog-post style-4 mb-30">
                                <div class="post-thumbnail">
                                    <img src="img/bg-img/30.jpg" alt="">
                                    <a href="video-post.html" class="video-play"><i class="fa fa-play"></i></a>
                                    <span class="video-duration">09:27</span>
                                </div>
                                <div class="post-content">
                                    <a href="single-post.html" class="post-title">Will The Democrats Be Able To Reverse</a>
                                    <div class="post-meta d-flex">
                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="single-blog-post style-4 mb-30">
                                <div class="post-thumbnail">
                                    <img src="img/bg-img/28.jpg" alt="">
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
                        </div>

                    </div>
                </div>

                <!-- Comment Area Start -->
                <div class="comment_area clearfix bg-white mb-30 p-30 box-shadow">
                    <!-- Section Title -->
                    <div class="section-heading">
                        <h5>COMMENTS</h5>
                    </div>

                    <ol>
                        <?php foreach ($comment as $com) : ?>
                            <?php if ($com['parent_comment'] == NULL) : ?>
                                <li class="single_comment_area" id="comment<?= $com['id'] ?>">
                                    <!-- Comment Content -->
                                    <div class="comment-content d-flex">
                                        <!-- Comment Author -->
                                        <div class="comment-author">
                                            <img src="<?= base_url() ?>/img/bg-img/53.jpg" alt="author">
                                        </div>
                                        <!-- Comment Meta -->
                                        <div class="comment-meta">
                                            <a href="#" class="comment-date">
                                                <?php $date = date_create($com['created_at']); ?>
                                                <?= date_format($date, "l, d F Y"); ?>
                                            </a>
                                            <h6><?= $com['author_comment'] ?></h6>
                                            <p><?= $com['comment'] ?></p>
                                            <div class="d-flex align-items-center">
                                                <a href="#" class="reply" id="reply<?= $com['id'] ?>"><span class="parent_comment" style="display:none" value="<?= $com['id'] ?>"><?= $com['id'] ?></span>Reply</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Post A Comment Area -->
                                    <div class="post-a-comment-area<?= $com['id'] ?> bg-white mb-30 p-30 box-shadow clearfix comment-form">
                                        <!-- Section Title -->
                                        <div class="section-heading">
                                            <span>Balas ke </span> <span style="font-style: italic; font-weight:600;">"<?= $com['comment'] ?>"</span>
                                        </div>

                                        <!-- Reply Form -->
                                        <div class="contact-form-area">
                                            <form action="<?= base_url('/comment/addcomment') ?>" method="post">
                                                <input type="hidden" name="parent_comment" id="parent_comment" value="<?= $com['id'] ?>">
                                                <input type="hidden" name="slug_post" id="parent_comment" value="<?= $postData['slug'] ?>">
                                                <div class="row">
                                                    <div class="col-12 col-lg-6">
                                                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name*" required>
                                                    </div>
                                                    <div class="col-12 col-lg-6">
                                                        <input type="email" name="email" class="form-control" id="email" placeholder="Your Email*" required>
                                                    </div>
                                                    <div class="col-12">
                                                        <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Message*" required></textarea>
                                                    </div>
                                                    <div class="col-12">
                                                        <button class="btn mag-btn mt-30" type="submit">Balas</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <script>
                                        $id = <?= $com['id'] ?>;
                                        $replyBtn = document.querySelector("a#reply" + <?= $com['id'] ?>);
                                        $replyBtn.addEventListener("click", function() {
                                            document.querySelector("div.post-a-comment-area" + <?= $com['id'] ?>).classList.toggle("show-reply");
                                        });
                                    </script>

                                    <?php
                                    $this->commentModel = new \App\Models\CommentModel();
                                    $childComment = $this->commentModel->getChildComment($com['id']);
                                    ?>
                                    <?php foreach ($childComment as $cc) : ?>
                                        <ol class="children">
                                            <li class="single_comment_area">
                                                <!-- Comment Content -->
                                                <div class="comment-content d-flex">
                                                    <!-- Comment Author -->
                                                    <div class="comment-author">
                                                        <img src="<?= base_url() ?>/img/bg-img/54.jpg" alt="author">
                                                    </div>
                                                    <!-- Comment Meta -->
                                                    <div class="comment-meta">
                                                        <a href="#" class="comment-date">
                                                            <?php $date = date_create($cc['created_at']); ?>
                                                            <?= date_format($date, "l, d F Y"); ?>
                                                        </a>
                                                        <h6><?= $cc['author_comment'] ?></h6>
                                                        <p><?= $cc['comment'] ?></p>
                                                        <div class="d-flex align-items-center">
                                                            <a href="#" class="reply" id="replyChild<?= $cc['id'] ?>"><span class="parent_comment" style="display:none" value="<?= $cc['id'] ?>"><?= $cc['id'] ?></span>Reply</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Post A Comment Area -->
                                                <div class="post-a-comment-area<?= $com['id'] . '-' . $cc['id'] ?> bg-white mb-30 p-30 box-shadow clearfix comment-form">
                                                    <!-- Section Title -->
                                                    <div class="section-heading">
                                                        <span>Balas ke </span> <span style="font-style: italic; font-weight:600;">"<?= $cc['comment'] ?>"</span>
                                                    </div>

                                                    <!-- Reply Form -->
                                                    <div class="contact-form-area">
                                                        <form action="<?= base_url('/comment/addcomment') ?>" method="post">
                                                            <input type="hidden" name="parent_comment" id="parent_comment" value="<?= $cc['parent_comment'] ?>">
                                                            <input type="hidden" name="slug_post" id="parent_comment" value="<?= $postData['slug'] ?>">
                                                            <div class="row">
                                                                <div class="col-12 col-lg-6">
                                                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name*" required>
                                                                </div>
                                                                <div class="col-12 col-lg-6">
                                                                    <input type="email" name="email" class="form-control" id="email" placeholder="Your Email*" required>
                                                                </div>
                                                                <div class="col-12">
                                                                    <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Message*" required></textarea>
                                                                </div>
                                                                <div class="col-12">
                                                                    <button class="btn mag-btn mt-30" type="submit">Balas</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>

                                                <script>
                                                    $id = <?= $cc['parent_comment'] ?>;
                                                    $replyChild = document.querySelector("a#replyChild" + <?= $cc['id'] ?>);
                                                    $replyChild.addEventListener("click", function() {
                                                        document.querySelector("div.post-a-comment-area" + <?= $com['id'] ?> + "-" + <?= $cc['id'] ?>).classList.toggle("show-reply");
                                                    });
                                                </script>

                                            </li>
                                        </ol>
                                    <?php endforeach; ?>
                                </li>
                            <?php endif; ?>
                        <?php endforeach; ?>

                    </ol>

                </div>

                <!-- Post A Comment Area -->
                <div class="post-a-comment-area bg-white mb-30 p-30 box-shadow clearfix">
                    <!-- Section Title -->
                    <div class="section-heading">
                        <h5>LEAVE A COMMENT</h5>
                    </div>

                    <!-- Reply Form -->
                    <div class="contact-form-area">
                        <form action="<?= base_url('/comment/addcomment') ?>" method="post">
                            <input type="hidden" name="parent_comment" id="parent_comment" value="">
                            <input type="hidden" name="slug_post" id="parent_comment" value="<?= $postData['slug'] ?>">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name*" required>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Your Email*" required>
                                </div>
                                <div class="col-12">
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Message*" required></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn mag-btn mt-30" type="submit">Submit Comment</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


            <!-- ##### Post Details Area End ##### -->
            <?= $this->endSection() ?>