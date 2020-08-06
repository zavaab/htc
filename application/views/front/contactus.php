
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

body {
  /* background: #333f59; */
}

p {
  margin: 0px;
}

a:focus, a:hover {
  text-decoration: none;
}

.btn {
  border: none;
}

.container {
  position: absolute;
  top: 50%;
  -webkit-transform: translateY(-50%);
  transform: translateY(-50%);
  left: 0px;
  right: 0px;
  margin: 0 auto;
}

.circle-container {
  position: relative;
  width: 20em;
  height: 20em;
  padding: 0;
  border-radius: 50%;
  list-style: none;
  box-sizing: content-box;
  margin: 0;
  border: solid 2px #70D6FE;
}
.circle-container > * {
  display: block;
  position: absolute;
  top: 50%;
  left: 50%;
  margin: -2em;
}
.circle-container > *:nth-of-type(1) {
  -webkit-transform: rotate(0deg) translate(9.5em) rotate(0deg);
  transform: rotate(0deg) translate(9.5em) rotate(0deg);
}
.circle-container > *:nth-of-type(2) {
  -webkit-transform: rotate(45deg) translate(9.5em) rotate(-45deg);
  transform: rotate(45deg) translate(9.5em) rotate(-45deg);
}
.circle-container > *:nth-of-type(3) {
  -webkit-transform: rotate(90deg) translate(9.5em) rotate(-90deg);
  transform: rotate(90deg) translate(9.5em) rotate(-90deg);
}
.circle-container > *:nth-of-type(4) {
  -webkit-transform: rotate(135deg) translate(9.5em) rotate(-135deg);
  transform: rotate(135deg) translate(9.5em) rotate(-135deg);
}
.circle-container > *:nth-of-type(5) {
  -webkit-transform: rotate(180deg) translate(9.5em) rotate(-180deg);
  transform: rotate(180deg) translate(9.5em) rotate(-180deg);
}
.circle-container > *:nth-of-type(6) {
  -webkit-transform: rotate(225deg) translate(9.5em) rotate(-225deg);
  transform: rotate(225deg) translate(9.5em) rotate(-225deg);
}
.circle-container > *:nth-of-type(7) {
  -webkit-transform: rotate(270deg) translate(9.5em) rotate(-270deg);
  transform: rotate(270deg) translate(9.5em) rotate(-270deg);
}
.circle-container > *:nth-of-type(8) {
  -webkit-transform: rotate(315deg) translate(9.5em) rotate(-315deg);
  transform: rotate(315deg) translate(9.5em) rotate(-315deg);
}
.circle-container a {
  display: block;
  border-radius: 50%;
  box-shadow: 0 0 0 2px #70D6FE;
  background: #FFF;
  height: 64px;
  width: 64px;
  font-size: 250%;
}
.circle-container i {
  display: block;
  padding: 10px;
  box-sizing: border-box;
  vertical-align: middle;
  text-align: center;
  border-radius: 50%;
}
.circle-container .active i {
  color: #F9A732;
}
.circle-container:before {
  content: '<?php echo $this->lang->line('CONTACT_US'); ?>';
  position: absolute;
  z-index: 100;
  top: 50%;
  text-align: center;
  width: 70%;
  font-size: 27px;
  margin: 0 auto;
  left: 0;
  right: 0;
  line-height: 1;
  display: block;
  margin-top: -10px;
  color: #000;
  font-weight: 300;
}

.services-container li {
  display: none;
}
.services-container li.active {
  display: block;
}

.service-item {
  background: rgba(255, 255, 255, 0.34);
  padding: 0;
  margin-top: 11.26%;
  width: 100%;
  -webkit-background-clip: padding-box;
  background-clip: padding-box;
  border: 1px solid #ccc;
  border: 1px solid rgba(0, 0, 0, 0.2);
  border-radius: 6px;
  line-break: auto;
}
.service-item .header {
  background: #345342;
  padding: 10px 20px;
  border-radius: 4px 4px 0 0;
}
.service-item .body {
  padding: 20px 20px;
  color: #094825;
}
.service-item .header .icon {
  float: left;
  display: table;
}
.service-item .header .icon i {
  width: 40px;
  height: 40px;
  background: rgba(255, 255, 255, 0.3);
  border-radius: 100%;
  position: relative;
  top: -7px;
  left: -10px;
  display: table-cell;
  color: #fff;
  font-size: 200%;
  vertical-align: bottom;
  text-align: center;
}
.service-item .header h4 {
  margin: 0px;
  color: #FFF;
}
.service-item .footer {
  background: rgba(255, 255, 255, 0.3);
  padding: 10px 20px;
  border-radius: 0 0 4px 4px;
  border-top: 1px solid #5CC2EA;
}

@media screen and (max-width: 480px) {
  .circle-container {
    -webkit-transform: scale(0.5);
            transform: scale(0.5);
  }
}



</style>
<body>


<div class="container">

  <div class="row">
		<div class="col-md-4 col-sm-5 col-xs-5">
			<div class="g-content">
				<ul class='circle-container'>
					<li data-id="0" class="active">
						<a href='#'>
                  <i class="fa fa-telegram" aria-hidden="true"></i>
						</a>
					</li>
					<li data-id="1">
						<a href='#'>
                  <i class="fa fa-instagram" aria-hidden="true"></i>
						</a>
					</li>
					<li data-id="2">

						<a href='#'>
                  <i class="fa fa-envelope-open" aria-hidden="true"></i>
						</a>
					</li>
					<li data-id="3">

						<a href='#'>
                  <i class="fa fa-phone-square" aria-hidden="true"></i>
						</a>
					</li>
					<li data-id="4">

						<a href='#'>
                  <i class="fa fa-mobile" aria-hidden="true"></i>

						</a>
					</li>
					<li data-id="5">

						<a href='#'>
                  <i class="fa fa-whatsapp" aria-hidden="true"></i>
						</a>
					</li>
					<li data-id="6">

						<a href='#'>
                  <i class="fa fa-facebook" aria-hidden="true"></i>
						</a>
					</li>
					<li data-id="7">

						<a href='#'>
                  <i class="fa fa-twitter-square" aria-hidden="true"></i>
						</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="col-md-8 col-sm-7 col-xs-7 ">
			<div class="g-content">
				<ul class="services-container">
					<li class="active">
						<div class="service-item" data-id="0">
							<div class="header">

								<h4>تلگرام ما</h4>
							</div>
							<div class="body">
								<p> با تلگرام با ما در ارتباط باشید.
                        </p>
							</div>
							<div class="footer text-right">
								<a class="btn btn-success" href="https://telegram.me/haddadianTC">haddadianTC</a>
								
							</div>
						</div>
					</li>
					<li>
						<div class="service-item" data-id="1">
							<div class="header">

								<h4>اینستاگرام</h4>
							</div>
							<div class="body">
								<p>از صفحات ما در اینستاگرام دیدن فرمایید.</p>
							</div>

							<div class="footer text-right">
								<a class="btn btn-success" href="https://www.instagram.com/Haddadian_toefl/">Haddadian_toefl</a>
							</div>

						</div>
					</li>
					<li>
						<div class="service-item" data-id="1">
							<div class="header">

								<h4>ایمیل موسسه</h4>
							</div>
							<div class="body">
								<p>با ایمیل هم با ما می توانید در ارتباط باشید</p>
							</div>

							<div class="footer text-right">
								<a class="btn btn-success" href="">info@haddadiantc.com</a>
							</div>

						</div>
					</li>
					<li>
						<div class="service-item" data-id="1">
							<div class="header">

								<h4>تلفن های ثابت</h4>
							</div>
							<div class="body">
								<p>با موسسه در ارتباط باشید</p>
							</div>

							<div class="footer text-right">
								<a class="btn btn-success" href="">02144477423</a>
							</div>

						</div>
					</li>
					<li>
						<div class="service-item" data-id="1">
							<div class="header">

								<h4>همراه</h4>
							</div>
							<div class="body">
								<p>.</p>
							</div>
							
							<div class="footer text-right">
								<a class="btn btn-success" href="">09127096629</a>
							</div>

							<!-- <div class="footer">

								<a class="btn btn-primary" href="https://www.facebook.com/EnUnChasquido">فیسبوک</a>
								<a class="btn btn-primary" href="#">More information</a>
							</div> -->
						</div>
					</li>
					<li>
						<div class="service-item" data-id="1">
							<div class="header">

								<h4>واستپ</h4>
							</div>
							<div class="body">
								<p>با واتسپ با ما در ارتباط باشید.</p>
							</div>
							<div class="footer text-right">
								<a class="btn btn-success" href="https://web.whatsapp.com/send?phone=+989127096629&text=%D8%A8%D8%A7%20%D8%B3%D9%84%D8%A7%D9%85">09127096629</a>
							</div>
						</div>
					</li>
					<li>
						<div class="service-item" data-id="1">
							<div class="header">

							<h4>فیسبوک</h4>
							</div>
							<div class="body">
								<p>با فیسبوک با ما در ارتباط باشید</p>
							</div>
							<div class="footer text-right">
								<a class="btn btn-success" href="https://www.facebook.com/haddadian Tc">haddadian Tc</a>
							</div>
						</div>
					</li>
					<li>
						<div class="service-item" data-id="1">
							<div class="header">

								<h4>تویتر</h4>
							</div>
							<div class="body">
								<p>با تویتر با ما در ارتباط باشید.</p>

							</div>
							<div class="footer text-right">
								<a class="btn btn-success" href="https://twitter.com/@haddadianTC">@haddadianTC</a>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>



  
</div>
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

<script>
$(document).ready(function() {
  $('.circle-container').find('a').click(function(event) {
    event.preventDefault();
  });
  $('.circle-container').find('li').hover(function() {
    $('.circle-container').find('li').removeClass('active');
    $(this).addClass('active');
    $('.services-container').find('li.active').removeClass('active animated fadeIn');

    $(".services-container").find('li').eq($(this).data('id')).addClass('active animated fadeIn');

  });

});
</script>
   
</body>
</html>

