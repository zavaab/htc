<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?php echo $this->lang->line('text_TITLE_header'); ?></title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="<?php echo base_url(); ?>assets/img/favicon.png" rel="icon">
  <link href="<?php echo base_url(); ?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">



  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  

  <?php if($this->session->userdata('site_lang') == 'persian') {
   ?>
   <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.0.0/css/bootstrap.min.css" 
   integrity="sha384-P4uhUIGk/q1gaD/NdgkBIl3a6QywJjlsFJFk7SPRdruoGddvRVSwv5qFnvZ73cpz" crossorigin="anonymous">

   <style>
   html{
     direction:rtl !important;
 
   }
   .nav-menu > li{
    float: right  !important;
   }

   #footer .footer-top h4::before, #footer .footer-top h4::after {
    content: "";
    position: absolute;
    right: 0px;
    bottom: 0px;
    height: 2px;
}

.testimonials-carousel{
	direction:ltr;
}
.testimonials-carousel h3,p{
	direction:rtl;
}
   </style>

   <?php 
  }else{
    ?>
    <!-- Bootstrap CSS File -->
  <link href="<?php echo base_url(); ?>assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <?php
  } ?>

  <!-- Libraries CSS Files -->
  <link href="<?php echo base_url(); ?>assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/lib/animate/animate.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
  

  <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
  <?php if($this->session->userdata('site_lang') == 'persian') {
   ?>

   
<script src="<?php echo base_url(); ?>assets/js/popper.min.js"  crossorigin="anonymous"></script>
<script src="<?php echo base_url(); ?>assets/js/rtlbootstrap.min.js"  crossorigin="anonymous"></script>


   <?php
}else{
  ?>

  <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
  <?php
}
?>




  

  <!-- Main Stylesheet File -->
<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/pages.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/home.css?v=2.0" rel="stylesheet">
<?php if($this->session->userdata('site_lang') == 'persian') {
   ?>
   <link href="<?php echo base_url(); ?>assets/css/rtlfont.css" rel="stylesheet">
   <link href="<?php echo base_url(); ?>assets/css/news/tesol_toefl.css" rel="stylesheet">
   <style>
.nav-menu ul{
  right:0 !important;
}
</style>
   <?php
}
   ?>
  </head>

  <!--==========================
    Header
  ============================-->
  <header id="header" style="padding-top: 0px;">
    <div class="container-fluid">

      <div id="logo" class="pull-left" style="padding-top: 0px;">
        <img src="<?php echo base_url();?>assets/img/Logo-sefid.png" alt="" style="height: 65px;padding: 0;">
        <?php if($this->session->userdata('site_lang') == 'english') {  ?>
        <a href="<?php echo base_url(); ?>MultiLanguageSwitcher/Lswitch/persian" style="float: left;padding: 5px;color: white;font-size: medium;">FA</a>
        <?php }else if($this->session->userdata('site_lang') == 'persian'){ ?>
          <a href="<?php echo base_url(); ?>MultiLanguageSwitcher/Lswitch/english" style="float: left;padding: 5px;color: white;font-size: medium;">EN</a>
        <?php }else{?>
          <a href="<?php echo base_url(); ?>MultiLanguageSwitcher/Lswitch/persian" style="float: left;padding: 5px;color: white;font-size: medium;">FA</a>
        <?php } ?>
      </div>

      <nav id="nav-menu-container" style="padding-top: 17px;">
        <ul class="nav-menu">

          <li class="menu-active"><a href="<?php echo base_url();?>"><?php echo $this->lang->line('text_menu_Home_header'); ?></a></li>
          <li class="menu-has-children"><a href=""><?php echo $this->lang->line('text_menu_Courses_header'); ?></a>
            <ul>
              <li><a  href="<?= site_url("Courses/toefl") ?>"  target="_blank"><?php echo $this->lang->line('text_menu_Toefl_header'); ?></a></li>
              <li><a  href="<?= site_url("Courses/tesol") ?>"  target="_blank"><?php echo $this->lang->line('text_menu_TESOL_header'); ?></a></li>
              <li><a  href="<?= site_url("Courses/gre") ?>"  target="_blank"><?php echo $this->lang->line('text_menu_GRE_header'); ?></a></li>
              <!-- <li><a  href="<?= site_url("Courses/ielts") ?>"  target="_blank"><?php echo $this->lang->line('text_menu_Ielts_header'); ?></a></li> -->
              <!-- <li><a href="#">IELTS</a></li>
              <li><a href="#">GRE</a></li>
              <li><a href="#">Free discussion</a></li>
              <li><a href="#">Business English</a></li>
              <li><a href="#">Intensive courses</a></li>
              <li><a href="#">Online Classes</a></li>
              <li><a href="#">TESOL Classes</a></li>
              <li><a href="#">Article Writing</a></li> -->
            </ul>
          </li>
          <li class="menu-has-children"><a href="#"><?php echo $this->lang->line('text_menu_DOWNLOAD_header'); ?></a>
            <ul>
              <li><a href="<?= site_url("Pages/toefl") ?>"><?php echo $this->lang->line('text_menu_Toefl_header'); ?></a></li>
              <li><a href="<?= site_url("Pages/ielts") ?>"><?php echo $this->lang->line('text_menu_Ielts_header'); ?></a></li>
              <li><a href="<?= site_url("Pages/gre") ?>"><?php echo $this->lang->line('text_menu_GRE_header'); ?></a></li>
              <li><a href="<?= site_url("Pages/general") ?>"><?php echo $this->lang->line('text_menu_General_header'); ?></a></li>

            </ul>
          </li>
          <li class="menu-has-children"><a href=""><?php echo $this->lang->line('text_menu_Services_header'); ?></a>
            <ul>
              <li><a href="#"><?php echo $this->lang->line('text_menu_Proofreading_header'); ?></a></li>
              <li><a href="#"><?php echo $this->lang->line('text_menu_Translation_header'); ?></a></li>
            </ul>
          </li>


          

          <li class="menu-has-children"><a href="">صفحات ایستا</a>
          <ul>
          <?php  foreach ($statics_menus as $menu) {
        ?>
        <li><a href="<?= site_url("Courses/static/").$menu['id']; ?>"> <?php echo $menu['page_title']; ?> </a></li>
          <?php
          } ?>
           </ul>
          </li>
          <li ><a href="<?php echo site_url("Pages/about_us")?> "> <?php echo $this->lang->line('text_menu_ABOUT_US_header'); ?></a></li>
          <li ><a href="<?php echo site_url("Pages/contact_us")?> "> <?php echo $this->lang->line('text_menu_Contact_header'); ?></a></li>
          <!-- <li class="btn-get-started scrollto" style="border: 0;padding: 0px;margin: 0px 5px 0px 8px;background: #812a54;" ><a href="https://elavst.ir/" target="_blank" style="padding: 4px;color: #d7e90e;" > <?php echo $this->lang->line('text_menu_word_header'); ?></a></li> -->
          <li class="btn-get-started scrollto" style="border: 0;padding: 0px;margin: 0px 5px 0px 8px;background: #9a2727;" ><a href="https://elavst.ir/" target="_blank" style="padding: 4px;color: #ffffff;" > <?php echo $this->lang->line('text_menu_level_header'); ?></a></li>
        <!-- <li>
        <select class="form-control" onchange="javascript:window.location.href='<?php echo base_url(); ?>MultiLanguageSwitcher/Lswitch/'+this.value;" style="height: 29px;">
    <option value="english" <?php if($this->session->userdata('site_lang') == 'english') echo 'selected="selected"'; ?>>English</option>
    <option value="persian" <?php if($this->session->userdata('site_lang') == 'persian') echo 'selected="selected"'; ?>>فارسی</option>
    </select>
    </li> -->


        
        </ul>


      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->
