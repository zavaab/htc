
<?php
// include ('navbar.php');
?>
<style>
.btn-outline-dark{
   border-color: #bdbdbd;
}
.card-img-top{
   max-height: 133px !important;
   min-height: 133px !important;
}
.card-title{
   max-height:80px;
   min-height:80px;
}
.br_top{
   border-top: 1px solid #e8e8e8;
    padding-top: 5px;
}
.shadow-lg{box-shadow:0 1rem 3rem rgba(0,0,0,.175)!important}
.card-text{
font-size:13px;
}
.card-body{
   border-bottom: 3px solid #ff7878;
}
.about{
	cursor: pointer;
    background-color: #fdfdfd;
    color: #373a41;
    /* padding-top: 20px; */
    /* padding-bottom: 30px; */
    margin-top: 60px;
    /* border-radius: 37%;*/
}
.about h1 {
	padding: 10px 0;
	margin-bottom: 20px;
}
.about h2 {
	opacity: .8;
}
.about span {
	display: block;
	width: 100px;
	height: 100px;
	line-height: 100px;
	margin:auto;
	border-radius:50%;  
	font-size: 40px;
	color: #FFFFFF;
	opacity: 0.7;
	background-color: #4C0822;
	border: 2px solid #4C0822;

	webkit-transition:all .5s ease;
 	moz-transition:all .5s ease;
 	os-transition:all .5s ease;
 	transition:all .5s ease;

}
.about-item:hover span{
	opacity: 1;	
	border: 2px solid #CC0039;
	font-size: 42px;
	-webkit-transform: scale(1.1,1.1) rotate(360deg) ;
	-moz-transform: scale(1.1,1.1) rotate(360deg) ;
	-o-transform: scale(1.1,1.1) rotate(360deg) ;
	transform: scale(1.1,1.1) rotate(360deg) ;
}
.about-item:hover h2{
	opacity: 1;
	-webkit-transform: scale(1.1,1.1)  ;
	-moz-transform: scale(1.1,1.1)  ;
	-o-transform: scale(1.1,1.1)  ;
	transform: scale(1.1,1.1) ;
}
.about .lead{
	color: #CC0039;
	font-size: 14px;
	font-weight: bold;
}





</style>
<body>

<!-- Design inspired from https://www.hotjar.com/ -->
<div class="jumbotron">
  <div class="container text-center text-lg-left">
    
    <div class="row">
      <div class="col-lg-8">
          <h1 class="display-4"><?php echo $this->lang->line('ABOUT_US'); ?></h4>
  <p class="lead">
  گروه تخصصی تافل و تسول حدادیان به همت و کوشش تعدادی از نخبگان و فارغ التحصیلان ممتاز دانشگاه های شریف و تهران در سال 1395  ابتدا به صورت ُانلاین و در سال ۱۳۹۷ به طور رسمی با هدف ارائه خدمات آموزشی در صدد پاسخگویی به نیاز های عام و خاص زبان آموزان و مدرسان زبان انگلیسی تاسیس شد
  <h5>اساتید مجموعه</h5>
	گروه تخصصی تافل و تسول حدادیان همواره تلاش نموده در واحد جذب مدرسین، با پشتوانه علمی و آموزشی مرکز تربیت مدرس تسول ونکوور VTTC، در راستای تربیت مدرسان زبان در کشور قدم بر دارد. این مجموعه منحصرا با اساتید نخبه آموزش زبان انگلیسی که موفق به دریافت مدرک بین المللی TESOL گردیده‌اند همکاری دارد و همواره در حال تلاش برای ارتقاء سطح کیفی اساتید است.
  </p>

        <span class="text-center d-inline-block">
          <a class="btn btn-warning btn-lg w-100" href="#" role="button">صفحه اصلی</a>
        <a class="text-muted" href="">علاقه مند هستید مربی شوید؟</a>
        </span>
        
      </div>
      <div class="col-lg-4 align-items-center d-flex">
        <img src="http://elalg/assets/img/slider_bottom/Linked1_(2).jpg" alt="" style="max-width: 141%;border-radius: 5% 30% 5% 5%">
      </div>
    </div>

 
    </div>
</div>

<style>
.lead{
	padding-top:15px;
	font-size: 1rem;
}

.card {
  position: relative;
  width: 100%;
  height: 100%;
  max-width: 360px;
  max-height: 200px;
  min-width: 250px;
  margin: 16px;
  padding: 20px;
  background: #fff;
}
.card--loading,
.card__title:empty,
.card__paragraph:empty {
  border-radius: 4px;
  background: -webkit-gradient(linear, right top, left top, from(#d1d1d1), color-stop(#f1f1f1), to(#d1d1d1)) no-repeat;
  background: linear-gradient(-90deg, #d1d1d1, #f1f1f1, #d1d1d1) no-repeat;
  background-size: 200% 200%;
  -webkit-animation: card--loading 1.5s infinite;
          animation: card--loading 1.5s infinite;
}
.card__title {
  text-transform: uppercase;
  text-align: center;
  font-weight: 300;
}
.card__title:empty {
  width: 100%;
  height: 10px;
  margin-bottom: 10px;
}
.card__paragraph {
  text-align: center;
  font-weight: 300;
}
.card__paragraph:empty {
  width: 100%;
  height: 10px;
}
.shadow {
  position: relative;
  -webkit-transition: -webkit-transform 0.2s ease-in-out;
  transition: -webkit-transform 0.2s ease-in-out;
  transition: transform 0.2s ease-in-out;
  transition: transform 0.2s ease-in-out, -webkit-transform 0.2s ease-in-out;
  will-change: transform;
}
.shadow:before,
.shadow:after {
  content: '';
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  -webkit-transition: opacity 0.2s ease-in-out;
  transition: opacity 0.2s ease-in-out;
  pointer-events: none;
  will-change: opacity;
}
.shadow:before {
  box-shadow: 0 35px 50px -30px rgba(0,0,0,0.2);
}
.shadow:after {
  opacity: 0;
  box-shadow: 0 55px 50px -17px rgba(0,0,0,0.22);
}
.shadow:hover {
  -webkit-transform: translateY(-5%);
          transform: translateY(-5%);
}
.shadow:hover:before {
  opacity: 0;
}
.shadow:hover:after {
  opacity: 1;
}
.shadow:active {
  -webkit-transform: translateY(5%) scale(0.9);
          transform: translateY(5%) scale(0.9);
}
.shadow:active:before {
  opacity: 1;
}
.shadow:active:after {
  opacity: 0;
}
@-webkit-keyframes card--loading {
  0% {
    background-position: 100% 50%;
  }
  50% {
    background-position: 0 50%;
  }
  100% {
    background-position: 100% 50%;
  }
}
@keyframes card--loading {
  0% {
    background-position: 100% 50%;
  }
  50% {
    background-position: 0 50%;
  }
  100% {
    background-position: 100% 50%;
  }
}

blockquote {
  text-indent: 10px;
  border-right: 5px solid #d3c94c;
  font-size: 1em;
  padding: 10px;
}
.card__title > .fa{
font-size: 50px;;
color: #ffc107;
}
</style>


<main class="container">
<div class="row">

<div class="col-md-4">
<article class="card shadow">
    <h4 class="card__title"><i class="fa fa-university" aria-hidden="true"></i></h4>
	<blockquote>
    فراهم نمودن محیط آموزشی با کیفیت و مطابق با استاندارد های بین المللی 
  </blockquote>

  </article>
</div>
<div class="col-md-4">

<article class="card shadow">
    <h4 class="card__title"><i class="fa fa-graduation-cap" aria-hidden="true"></i> </h4>
	<blockquote>
  ارايه مدرك معتبر بين المللى و قابل استعلام به صورت آنلاين، ويژه دوره هاى ترميك و تسول از VTTC كانادا و اينترتسول آمريكا
  </blockquote>

  </article>

</div>
<div class="col-md-4">
<article class="card shadow">
    <h4 class="card__title"><i class="fa fa-language" aria-hidden="true"></i> </h4>
	<blockquote>
    توجه به علم زبانشناسی و جنبه های کاربردی آن در آموزش
  </blockquote>

  </article>
</div>
</div>
<br>
<div class="row">

<div class="col-md-4">
<article class="card shadow">
    <h4 class="card__title"><i class="fa fa-diamond" aria-hidden="true"></i></h4>
	<blockquote>
    بکارگیری جدیدترین روشها و نظریه های آموزشی زبان انگلیسی در دنیا و بهره گیری از روشهای نوین آموزش
  </blockquote>

  </article>
</div>
<div class="col-md-4">
<article class="card shadow">
    <h4 class="card__title"><i class="fa fa-graduation-cap" aria-hidden="true"></i></h4>
	<blockquote>
    به کار گیری هیأت علمی و پژوهشی نخبه در امر آموزش زبان
  </blockquote>

  </article>
</div>
<div class="col-md-4">
<article class="card shadow">
    <h4 class="card__title"><i class="fa fa-th" aria-hidden="true"></i> </h4>
	<blockquote>
    تنوع در ارائه خدمات آموزشی به شکل گروهی و خصوصی-آنلاین و حضوری- مکاتبه ای و تلفنی 
  </blockquote>

  </article>
</div>

</div>

<br>
<div class="row">

<div class="col-md-4">
<article class="card shadow">
    <h4 class="card__title"><i class="fa fa-globe" aria-hidden="true"></i></h4>
	<blockquote>
    به روز کردن مطالب علمی و سیلابس های درسی به صورت دائمی 
  </blockquote>

  </article>
</div>
<div class="col-md-4">
<article class="card shadow">
    <h4 class="card__title"><i class="fa fa-check-square" aria-hidden="true"></i>	</h4>
	<blockquote>
	ارزشیابی مستمر چگونگی تعامل بین معلم و شاگرد و کنترل کیفیت کلاسها
  </blockquote>

  </article>
</div>
<div class="col-md-4">
<article class="card shadow">
    <h4 class="card__title"><i class="fa fa-users" aria-hidden="true"></i> </h4>
	<blockquote>
    به کارگیری افراد کارشناس در کادر اداری آموزشی، آشنا به اصول روانشناسی برخورد و روابط عمومی
  </blockquote>

  </article>
</div>

</div>

</main>

<!-- /.container -->








<!-- JavaScript Libraries -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- <script src="<?php echo base_url(); ?>assets/lib/jquery/jquery.min.js"></script> -->
  <script src="<?php echo base_url(); ?>assets/lib/jquery/jquery-migrate.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/lib/easing/easing.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/lib/superfish/hoverIntent.js"></script>
  <script src="<?php echo base_url(); ?>assets/lib/superfish/superfish.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/lib/wow/wow.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/lib/waypoints/waypoints.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/lib/counterup/counterup.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/lib/isotope/isotope.pkgd.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/lib/lightbox/js/lightbox.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/lib/touchSwipe/jquery.touchSwipe.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
	<script src="<?php echo base_url(); ?>assets/js/main.js"></script>


   
</body>
</html>

