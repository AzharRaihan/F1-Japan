<?php
function siteURL()
{
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
//    $protocol = stripos($_SERVER['REQUEST_SCHEME'],'https') === true ? 'https://' : 'http://';
    $domainName = $_SERVER['HTTP_HOST'] . '/';
    return $protocol . $domainName;
}

define('SITE_URL', siteURL());

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- <link rel="stylesheet" href="assets/css/responsive.css"> -->
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <link rel="stylesheet" href="../assets/css/print.css">
    <title>F1</title>
    <style>
    
    </style>
  </head>
  <body>
    <!-- Header Start -->
    <header>
      <div class="container">
        <div class="menu">
          <div class="logo">
            <img src="../assets/img/logo.png" alt="">
          </div>
          <div class="call">
            <div class="phone">
              <a href="tel:0352464710"><img src="../assets/img/ph_icon.png" alt=""><span>03-5246-4710</span> <span>平日10：00 ~19：00</span></a>
            </div>
            <div class="header-btn">
              <a href="#inquery"><span>無料相談・</span><span>資料請求する</span></a>
            </div>
          </div>
        </div>
      </div>
    </header>