<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">

<head>

  <meta charset="utf-8" />
  <title>Blog | NN Shop</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
  <meta content="Themesbrand" name="author" />

  <!-- CSS -->
  <?php
  require_once "views/layouts/libs_css.php";
  ?>
  <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/43.3.0/ckeditor5.css" />
  <script type="importmap">
    {
      "imports": {
          "ckeditor5": "https://cdn.ckeditor.com/ckeditor5/43.3.0/ckeditor5.js",
          "ckeditor5/": "https://cdn.ckeditor.com/ckeditor5/43.3.0/"
          }
      }
  </script>
</head>

<body>

  <!-- Begin page -->
  <div id="layout-wrapper">
    <!-- HEADER -->
    <?php
    require_once "views/layouts/header.php";
    require_once "views/layouts/siderbar.php";
    ?>

    <!-- Left Sidebar End -->
    <!-- Vertical Overlay-->
    <div class="vertical-overlay"></div>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">
      <div class="page-content">
        <div class="container-fluid">
          <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
            <h4 class="mb-sm-0">Thêm sản phẩm</h4>
            <div class="page-title-right">
              <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="http://localhost/seven-store/admin/">Dashboard</a></li>
                <li class="breadcrumb-item active">Thêm sản phẩm</li>
              </ol>
            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <div class="live-preview">
                <form class="row g-3 needs-validation" action="?act=addProduct" method="POST" enctype="multipart/form-data" novalidate>
                  <div class="col-md-12">
                    <label for="ten-sp" class="form-label">Tên sản phẩm</label>
                    <input type="text" class="form-control" id="ten-sp" name="name" placeholder="Nhập tên sản phẩm" required>
                    <div class="invalid-feedback">
                      Vui lòng nhập tên sản phẩm.
                    </div>
                  </div>
                  <div class="col-md-3">
                    <label for="danh-muc" class="form-label">Danh mục</label>
                    <select class="form-select" name="category" id="danh-muc" required>
                      <?php foreach ($categories as $category): ?>
                        <option value="<?= $category['id'] ?>"><?= $category['ten_danh_muc'] ?></option>
                      <?php endforeach ?>
                    </select>
                    <div class="invalid-feedback">
                      Vui lòng chọn danh mục sản phẩm.
                    </div>
                  </div>

                  <div class="col-md-3">
                    <label for="gia-nhap" class="form-label">Giá nhập</label>
                    <div class="input-group">
                      <span class="input-group-text">$</span>
                      <input type="number" name="priceInput" class="form-control" id="gia-nhap" aria-label="Amount (to the nearest dollar)">
                    </div>
                    <div class="invalid-feedback">
                      Vui lòng nhập giá nhập của sản phẩm.
                    </div>
                  </div>
                  <div class="col-md-3">
                    <label for="gia-ban" class="form-label">Giá bán</label>
                    <div class="input-group">
                      <span class="input-group-text">$</span>
                      <input type="number" name="priceSell" class="form-control" id="gia-ban" aria-label="Amount (to the nearest dollar)">
                    </div>
                    <div class="invalid-feedback">
                      Vui lòng nhập giá bán của sản phẩm
                    </div>
                  </div>
                  <div class="col-md-3">
                    <label for="khuyen-mai" class="form-label">Giá khuyến mãi</label>
                    <div class="input-group">
                      <span class="input-group-text">$</span>
                      <input type="number" name="priceDiscount" class="form-control" id="khuyen-mai" aria-label="Amount (to the nearest dollar)">
                    </div>
                    <div class="invalid-feedback">
                      Vui lòng nhập giá khuyến mãi.
                    </div>
                  </div>
                  <div class="col-md-3">
                    <label for="ngay-nhap" class="form-label">Ngày nhập</label>
                    <input type="date" name="inputDate" class="form-control" id="ngay-nhap">
                    <div class="invalid-feedback">
                      Vui lòng chọn ngày nhập
                    </div>
                  </div>

                  <div class="col-md-3">
                    <label for="so-luong" class="form-label">Số lượng</label>
                    <input type="number" name="total" class="form-control" id="so-luong" placeholder="Nhập số lượng" required>
                    <div class="invalid-feedback">
                      Vui lòng nhập số lượng
                    </div>
                  </div>
                  <div class="col-md-3">
                    <label for="trang-thai" class="form-label">Trạng thái</label>
                    <select class="form-select" name="status" id="trang-thai" required>
                      <option selected value="1">Hiển thị</option>
                      <option value="0">Ẩn</option>
                    </select>
                    <div class="invalid-feedback">
                      Vui lòng chọn trạng thái.
                    </div>
                  </div>

                  <div class="col-md-3">
                    <label for="formFile" class="form-label">Chọn ảnh đại diện</label>
                    <input class="form-control" name="file" type="file" id="formFile" required>
                    <div class="invalid-feedback">
                      Vui lòng chọn ảnh đại diện.
                    </div>
                  </div>

                  <div class="col-md-3">
                    <label for="formMultipleFile" class="form-label">Chọn ảnh khác</label>
                    <input class="form-control" name="fileMultiple[]" type="file" id="formMultipleFile" multiple required>
                    <div class="invalid-feedback">
                      Vui lòng chọn ảnh khác.
                    </div>
                  </div>

                  <div class="col-md-12">
                    <label for="content-short" class="form-label">Mô tả ngắn sản phẩm</label>
                    <textarea class="form-control" name="contentShort" id="content-short" maxlength="255" rows="1" placeholder="Nhập mô tả sản phẩm" required></textarea>
                    <div class="invalid-feedback">
                      Vui lòng nhập mô tả ngắn sản phẩm.
                    </div>
                  </div>


                  <div class="col-md-12">
                    <label for="content" class="form-label">Mô tả chi tiết sản phẩm</label>
                    <textarea class="form-control" name="contentdetail" id="content" rows="12" placeholder="Nhập mô tả sản phẩm" required></textarea>
                    <div class="invalid-feedback">
                      Vui lòng nhập mô tả sản phẩm.
                    </div>
                  </div>

                  <div class="col-12">
                    <input class="btn btn-primary" type="submit" name="save" value="Thêm sản phẩm" />
                    <button class="btn btn-outline-primary" type="reset">Xóa</button>
                    <a class="btn" href="?act=listProduct" type="reset">Hủy</a>
                  </div>
                </form>
              </div>
            </div>
          </div>


          <script type="module">
            import {
              ClassicEditor,
              Essentials,
              Paragraph,
              Bold,
              Italic,
              Underline,
              Strikethrough,
              Superscript,
              Link,
              List,
              Font,
              Alignment,
              Subscript,
              Indent,
              BlockQuote,
              Image,
              ImageUpload,
              MediaEmbed,
              Table,
              Code,
              Highlight,
              HorizontalLine,
              PageBreak,
              SpecialCharacters,
              CodeBlock,
              TodoList,
              FontSize,
              FontBackgroundColor,
              FontColor
            } from 'ckeditor5'

            ClassicEditor
              .create(document.querySelector('#content'), {
                plugins: [
                  Essentials,
                  Paragraph,
                  Bold,
                  Italic,
                  Alignment,
                  Underline,
                  Strikethrough,
                  Subscript,
                  Superscript,
                  Link,
                  List,
                  Font,
                  Indent,
                  BlockQuote,
                  Image,
                  ImageUpload,
                  MediaEmbed,
                  Table,
                  Code,
                  Highlight,
                  HorizontalLine,
                  PageBreak,
                  SpecialCharacters,
                  CodeBlock,
                  TodoList,
                  FontSize,
                  FontBackgroundColor,
                  FontColor
                ],
                toolbar: {
                  items: [
                    'heading', '|',
                    'bold', 'italic', 'underline', 'strikethrough', 'subscript', 'superscript', '|',
                    'link', 'bulletedList', 'numberedList', 'todoList', '|',
                    'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', '|',
                    'alignment', 'indent', 'outdent', '|',
                    'blockQuote', 'insertTable', 'mediaEmbed', 'imageUpload', '|',
                    'undo', 'redo', '|',
                    'code', 'codeBlock', 'highlight', '|',
                    'horizontalLine', 'pageBreak', '|',
                    'removeFormat', 'specialCharacters'
                  ]
                },
                image: {
                  toolbar: [
                    'imageTextAlternative', 'imageStyle:full', 'imageStyle:side'
                  ]
                },
                imageUpload: {
                  // Endpoint xử lý tải lên hình ảnh
                  uploadUrl: '../config/upload.php',
                },
                table: {
                  contentToolbar: [
                    'tableColumn', 'tableRow', 'mergeTableCells'
                  ]
                },
                alignment: {
                  options: ['left', 'center', 'right', 'justify']
                },
                fontFamily: {
                  options: [
                    'default',
                    'Ubuntu, Arial, sans-serif',
                    'Ubuntu Mono, Courier New, Courier, monospace'
                  ]
                },
                fontSize: {
                  options: [9, 11, 13, 17, 19, 21]
                },
                fontColor: {
                  colors: [{
                      color: 'hsl(0, 0%, 0%)',
                      label: 'Đen'
                    },
                    {
                      color: 'hsl(0, 0%, 50%)',
                      label: 'Xám'
                    },
                    {
                      color: 'hsl(0, 100%, 100%)',
                      label: 'Trắng'
                    },
                    {
                      color: 'hsl(0, 100%, 60%)',
                      label: 'Đỏ'
                    },
                    {
                      color: 'hsl(120, 100%, 40%)',
                      label: 'Xanh lá cây'
                    },
                    {
                      color: 'hsl(240, 100%, 50%)',
                      label: 'Xanh dương'
                    },
                  ]
                },
              })
              .catch(error => {
                console.error(error);
              });
          </script>


          <script>
            (() => {
              'use strict';
              const form = document.querySelector('.needs-validation');
              form.addEventListener('submit', (event) => {
                // Kiểm tra tính hợp lệ của form
                if (!form.checkValidity()) {
                  event.preventDefault();
                  event.stopPropagation();
                }
                // Thêm lớp 'was-validated' để Bootstrap tự động áp dụng CSS cho các input không hợp lệ
                form.classList.add('was-validated');
              }, false);
            })();
          </script>
        </div>
        <!-- container-fluid -->
      </div>
      <!-- End Page-content -->

      <footer class="footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <script>
                document.write(new Date().getFullYear())
              </script> © Velzon.
            </div>
            <div class="col-sm-6">
              <div class="text-sm-end d-none d-sm-block">
                Design & Develop by Themesbrand
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- end main content-->
  </div>
  <!-- END layout-wrapper -->



  <!--start back-to-top-->
  <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
    <i class="ri-arrow-up-line"></i>
  </button>
  <!--end back-to-top-->

  <!--preloader-->
  <div id="preloader">
    <div id="status">
      <div class="spinner-border text-primary avatar-sm" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
    </div>
  </div>

  <div class="customizer-setting d-none d-md-block">
    <div class="btn-info rounded-pill shadow-lg btn btn-icon btn-lg p-2" data-bs-toggle="offcanvas" data-bs-target="#theme-settings-offcanvas" aria-controls="theme-settings-offcanvas">
      <i class='mdi mdi-spin mdi-cog-outline fs-22'></i>
    </div>
  </div>

  <!-- JAVASCRIPT -->
  <?php
  require_once "views/layouts/libs_js.php";
  ?>

</body>

</html>
