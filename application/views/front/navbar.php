<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?php echo $title; ?></title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="<?php echo base_url(); ?>assets/img/favicon1.png" rel="icon">
  <link href="<?php echo base_url(); ?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">



  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="<?php echo base_url(); ?>assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?php echo base_url(); ?>assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/lib/animate/animate.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>



  <!-- Main Stylesheet File -->
<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/pages.css" rel="stylesheet">
  </head>

  <!--==========================
    Header
  ============================-->
  <header id="header" style="padding-top: 0px;">
    <div class="container-fluid">

      <div id="logo" class="pull-left" style="padding-top: 0px;">
        <img src="<?php echo base_url();?>assets/img/Logo-sefid.png" alt="" style="height: 70px;padding: 0;">
      </div>

      <nav id="nav-menu-container" style="padding-top: 30px;">
        <ul class="nav-menu">

          <li class="menu-active"><a href="<?php echo base_url();?>">HOME</a></li>
          <li class="menu-has-children"><a href="">COURSES</a>
            <ul>
              <li><a  href="<?= site_url("Courses/toefl") ?>"  target="_blank">TOEFL</a></li>
              <li><a  href="<?= site_url("Courses/ielts") ?>"  target="_blank">IELTS</a></li>
              <!-- <li><a href="#">GRE</a></li>
              <li><a href="#">Free discussion</a></li>
              <li><a href="#">Business English</a></li>
              <li><a href="#">Intensive courses</a></li>
              <li><a href="#">Online Classes</a></li>
              <li><a href="#">TESOL Classes</a></li>
              <li><a href="#">Article Writing</a></li> -->
            </ul>
          </li>
          <li class="menu-has-children"><a href="#">DOWNLOAD</a>
            <ul>
              <li><a href="<?= site_url("Pages/toefl") ?>">TOEFL</a></li>
              <li><a href="<?= site_url("Pages/ielts") ?>">IELTS</a></li>
              <li><a href="<?= site_url("Pages/gre") ?>">GRE</a></li>
              <li><a href="<?= site_url("Pages/general") ?>">General</a></li>

            </ul>
          </li>
          <li class="menu-has-children"><a href="">Services</a>
            <ul>
             <li><a href="#">Proofreading</a></li>
              <li><a href="#">Translation</a></li>
            </ul>
          </li>

          <li class="menu-has-children"><a href="">ABOUT US</a>
            <ul>
						<li><a href="" data-toggle="modal" data-target="#form" >Contact</a></li>
            <li><a href="<?= site_url("Pages/gallery") ?>" target="_blank">Gallery</a></li>
            </ul>
          </li>
          <li><a href="http://elaportal.ir/Dashboard/login.aspx" target="_blank"  class=" btn btn-info btn-get-started"
        style="padding: 3px;"
        >Login</a></li>
        </ul>


      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->
