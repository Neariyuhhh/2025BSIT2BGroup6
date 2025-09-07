<?php
  $is_login_page = true;
  $body_class = "login-page-body"; 
  $pageTitle = "MEDIGAP Login";
  $page_css = "assets/css/pages/login.css";
  $pathToRoot = '';

  require 'view/header.php';
  require 'view/login-content.php';
  require 'view/footer.php';
?>