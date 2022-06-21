<?php


$action = "home";
if (isset($_GET['action'])) {
  $action = $_GET['action']; //$action=khuyenmai
}

switch ($action) {
  case 'home':
    include 'Views/home.php';
    break;
  case 'sanpham':
    include 'Views/sanpham.php';
    break;
  case 'khuyenmai':
    include 'Views/khuyenmai.php';
    break;
  case 'detail':
    include 'Views/detail.php';
    break;
  case 'login':
    include 'Views/login.php';
    break;
    case 'search':
    include 'Views/search.php';
    break;
  default:
    include 'Views/404.php';
}
