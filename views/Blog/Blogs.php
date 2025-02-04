<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">

<head>

  <meta charset="utf-8" />
  <title>Tin tức</title>
  <link rel="shortcut icon" href="assets/images/custom/logo2.png" type="image/x-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
  <meta content="Themesbrand" name="author" />

  <!-- CSS -->
  <?php
  require_once "./views/layouts/libs_css.php";
  ?>
</head>

<body>

  <!-- HEADER -->
  <?php
  require_once "views/layouts/header.php";
  ?>

  <!-- CONTENT -->

  <!-- MAIN -->
  <div class="tt-breadcrumb">
    <div class="container">
      <ul>
        <li><a href="index.html">Trang chủ</a></li>
        <li>Tin tức</li>
      </ul>
    </div>
  </div>
  <div id="tt-pageContent">
    <div class="container-indent">
      <div class="container container-fluid-custom-mobile-padding">
        <h1 class="tt-title-subpages noborder">Bài viết</h1>
        <div class="row">
          <div class="col-12">
            <div class="tt-listing-post tt-half">
              <?php foreach ($viewBlog as $blog) : if ($blog['trang_thai'] == 1) { ?>
                  <div class="d-flex mb-4">
                    <div class="col-3">
                      <a href="?act=blog-post&id=<?= $blog['id'] ?>">
                        <img src="<?= BASE_URL_ADMIN . '/' . $blog['anh_avt'] ?>" alt="anh 1" class="w-100" style="heigh: auto;">
                      </a>
                    </div>
                    <div class="w-100">
                      <h2 class="w-100">
                        <a href="?act=blog-post&id=<?= $blog['id'] ?>" style="font-size: 20px; line-height: 1; letter-spacing: 0"><?= $blog['tieu_de'] ?></a>
                      </h2>
                      <div class="tt-meta">
                        <div class="tt-autor">
                          <?= $blog['ngay_tao'] ?>
                        </div>
                      </div>
                      <div class="tt-btn">
                        <a href="?act=blog-post&id=<?= $blog['id'] ?>" class="btn">READ MORE</a>
                      </div>
                    </div>
                  </div>
              <?php }
              endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END MAIN -->

  <!-- FOOTER -->
  <?php
  require_once "views/layouts/footer.php";
  ?>
  <!-- JAVASCRIPT -->
  <?php
  require_once "views/layouts/libs_js.php";
  ?>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

  <a href="#" class="tt-back-to-top tt-show" id="js-back-to-top" style="right: 0px;">BACK TO TOP</a>

</body>

</html>
