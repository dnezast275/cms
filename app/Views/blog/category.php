<?= $this->extend('template/layout-archive') ?>

<?= $this->section('content') ?>
<!-- ##### Breadcrumb Area Start ##### -->
<section class="breadcrumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/41.jpg);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <!-- <h2>Travel</h2> -->
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
                        <li class="breadcrumb-item"><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Category</a></li>
                        <li class="breadcrumb-item"><a href="#"><?= $breadcumb ?></a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- ##### Breadcrumb Area End ##### -->

<!-- ##### Archive Post Area Start ##### -->
<div class="archive-post-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-xl-8">
                <div class="archive-posts-area bg-white p-30 mb-30 box-shadow">

                    <!-- Single Catagory Post -->
                    <?php foreach ($allPost as $p) : ?>
                        <div class="single-catagory-post d-flex flex-wrap">
                            <!-- Thumbnail -->

                            <a href="<?= base_url('/post') . '/' . $p['slug'] ?>" class="post-thumbnail bg-img single-trending-post" style="background-image: url(<?= base_url() . '/' . $p['md_img'] ?>);"><img src="<?= base_url() . '/' . $p['md_img'] ?>" alt=""></a>


                            <!-- Post Contetnt -->
                            <div class="post-content">
                                <div class="post-meta">
                                    <?php $date = date_create($p['updated_at']); ?>
                                    <?= date_format($date, "l, d F Y"); ?>
                                    <a href="<?= base_url('/category') . '/' . $p['category_slug'] ?>"><?= $p['category_slug'] ?></a>
                                </div>
                                <a href="<?= base_url('/post') . '/' . $p['slug'] ?>" class="post-title"><?= $p['title'] ?></a>
                                <!-- Post Meta -->
                                <div class="post-meta-2">
                                    <a href="javascript:void(0)"><i class="fa fa-eye" aria-hidden="true"></i> <?= $p['watched'] ?></a>
                                    <a href="javascript:void(0)"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> <?= $p['liked'] ?></a>
                                    <a href="#comment"><i class="fa fa-comments-o" aria-hidden="true"></i> <?= $p['comment'] ?></a>
                                </div>
                                <?= substr($p['content'], 0, 200) . '...' ?>
                            </div>
                        </div>
                    <?php endforeach; ?>

                    <!-- Pagination -->
                    <nav>
                        <ul class="pagination">
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i class="ti-angle-right"></i></a></li>
                        </ul>
                    </nav>

                </div>
            </div>

            <?= $this->endSection() ?>