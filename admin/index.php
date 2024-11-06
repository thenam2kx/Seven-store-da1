<?php
// Require file config
require_once '../config/env.php'; // Config env
require_once '../config/helper.php'; // Helper function
require_once '../config/connect.php'; // Connect to database

// Require toàn bộ file Controllers
require_once 'controllers/DashboardController.php';
require_once 'controllers/BlogController.php';
require_once 'controllers/CategoryController.php';
require_once 'controllers/BannerController.php';
require_once 'controllers/ContactController.php';

// Require toàn bộ file Models
require_once 'models/BlogModel.php';
require_once 'models/CategoryModel.php';
require_once 'models/BannerModel.php';
require_once 'models/ContactModel.php';


// Route
$act = $_GET['act'] ?? '/';


// Để bảo bảo tính chất chỉ gọi 1 hàm Controller để xử lý request thì mình sử dụng match

match ($act) {
  // Dashboards
  '/' => (new DashboardController())->index(),

  // Blogs
  'blog' => (new BlogController())->getAll(),
  'addBlog' => (new BlogController())->add(),
  'editBlog' => (new BlogController())->loadEditView(),
  'handleEditBlog' => (new BlogController())->handleEdit(),
  'deleteBlog' => (new BlogController())->delete(),

  // Category
  'listCategory' => (new CategoryController())->getAll(),
  'addCategory' => (new CategoryController())->add(),
  'editCategory' => (new CategoryController())->loadEditView(),
  'handleEditCategory' => (new CategoryController())->handleEdit(),
  'deleteCategory' => (new CategoryController())->delete(),

  //Banner
  'banners' => (new BannerController())->getAll(),
  'addBanner' => (new BannerController())->addBanner(),
  'editBanner' => (new BannerController())->loadEditView(),
  'handleDditBanner' => (new BannerController())->handleEditBanner(),
  'deleteBanner' => (new BannerController())->delete(),

  //Contact
  'Contacts' => (new ContactController())->getAll(),
  // 'editContact' => (new ContactController())->loadEditView(),
  // 'handleDditContact' => (new ContactController())->handleEditContact(),
  'deleteContact' => (new ContactController())->delete(),
};
