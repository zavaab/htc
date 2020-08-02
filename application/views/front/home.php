<body>





	<!-- contact us -->
	<div class="modal fade" id="form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
		<div class="modal-header" id="mdl_header">
		<h4 class="modal-title" id="myModalLabel">Contact US</h5>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		</div>
		

	<form enctype="multipart/form-data" id="submit_contactus" method="post" v-on:submit="validateForm" style="font-size:12px;">
        <div class="modal-body">
          <div class="form-group">
            <label for="email1">Email address</label>
            <input type="email" class="form-control" name="email" id="email1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">Your information is safe with us.</small>
          </div>
          <div class="form-group">
            <label for="firstname">FirstName</label>
            <input type="text" class="form-control" name="firstname" id="firstname" placeholder="FirstName">
          </div>
          <div class="form-group">
            <label for="password1">Message</label>
						<textarea class="form-control" rows="5" name="message" id="message" ></textarea>
          </div>
        </div>
				<div class="alert alert-success" role="alert" id="alert_contact" style="display: none">
      <strong>done!</strong>Submit successfully.
    </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary mybtn1">Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>
	<!-- contact us -->


  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

				<?php
					$i=0;
					foreach ($sliders as $slider) {
						if ($i==0) echo '<div class="carousel-item active">';
						else echo '<div class="carousel-item">';
						$img= $slider->s_img;
					?>

            <div class="carousel-background"><img src="<?php echo base_url(); ?>assets/img/intro-carousel/<?=$img?> " alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="head_slider"> <?= ($this->session->userdata('site_lang') == 'persian') ? $slider->s_title_fa : $slider->s_title_en ?> </h2>
                <p class="head_slider"><?= ($this->session->userdata('site_lang') == 'persian') ? $slider->s_body_fa : $slider->s_body_en ?> </p>
                <a href="<?= site_url("Pages/reg") ?>" target="_blank"  class="btn-get-started scrollto"><?php echo $this->lang->line('REGISTER'); ?></a>
                <a href="<?= site_url("login") ?>" target="_blank"  class="btn-get-started scrollto"><?php echo $this->lang->line('LOGIN'); ?></a>
              </div>
            </div>
          </div>

<?php
$i++;
					}
?>



        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      Featured Services Section
    ============================-->
    <section id="featured-services">
      <div class="container">
        <div class="row text-center">

       

          <div class="col-lg-4 box ">
          <i class="fa fa-user-o" aria-hidden="true"></i>
            <h4 class="title"><a href="<?= site_url("Courses/ielts") ?>" target="_blank"><?php echo $this->lang->line('text_menu_Ielts_header'); ?></a></h4>
            <!-- <p class="description"><?php echo $this->lang->line('Do_what_you_can_use_what_you_have'); ?></p> -->
          </div>

          <div class="col-lg-4 box box-bg">
          <i class="fa fa-university" aria-hidden="true"></i>
            <h4 class="title"><a href="<?= site_url("Courses/toefl") ?>" target="_blank"><?php echo $this->lang->line('text_menu_Toefl_header'); ?></a></h4>
            <!-- <p class="description"><?php echo $this->lang->line('text_menu_Toefl_header'); ?></p> -->
          </div>

          <div class="col-lg-4 box">
          <i class="fa fa-calculator" aria-hidden="true"></i>
            <h4 class="title"><a href=""><?php echo $this->lang->line('text_menu_GRE_header'); ?></a></h4>
            <!-- <p class="description"><?php echo $this->lang->line('start_where_you_are'); ?></p> -->
          </div>

        </div>
      </div>
    </section><!-- #featured-services -->

        <link href="<?php echo base_url(); ?>assets/css/news/animate.min.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/news/bwlJqueryNewsTicker.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/news/prism.css">   


    <!--==========================
      Scrolling Breaking News Ticker
		============================-->
    <div id="rtl_ticker" class="bwl_news_ticker">

        <ul class="bwl_news_lists">

        <?php foreach ($news as $one_news) {
          if($one_news->news_show==1){
      if($this->session->userdata('site_lang') == 'english'){
        ?>
        <li>
          <a title="" href="#"><?php echo $one_news->news_title_en; ?></a>
          </li>
        <?php
      }else{
        ?>
        <li>
        <a title="" href="#"><?php echo $one_news->news_title_fa; ?></a>
        </li>
        <?php
      }
    }
    } ?>

        </ul> <!--  End .bwl_news_lists  -->

        </div> <!-- End .bwl_news_ticker  -->
    <!--==========================
     Scrolling Breaking News Ticker
    ============================-->
    

    <!--==========================
      Welcome To Learn
		============================-->
		<section class="how-section1 wow fadeInUp" data-wow-delay="0.2s" id="welcome">
		<div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h4><?= ($this->session->userdata('site_lang') == 'persian') ? $welcome[0]->title1_fa : $welcome[0]->title1_en ?></h4>
                                        <h4 class="subheading"><?= ($this->session->userdata('site_lang') == 'persian') ? $welcome[0]->title2_fa : $welcome[0]->title2_en ; ?></h4>
                        <p class="text-muted"><?= ($this->session->userdata('site_lang') == 'persian') ?  $welcome[0]->text_fa : $welcome[0]->text_en; ?></p>
												</div>
												<div class="col-md-6 how-img">
                            <img src="<?php echo base_url(); ?>assets/img/welcome/<?= $welcome[0]->image; ?>" class="img-fluid" alt=""/>
                        </div>
										</div>
				</div>
			</section>

    <!--==========================
      Welcome Learn
		============================-->


		<!--==========================
      STUDY WITH GROUP OF PROFESSIONALS
    ============================-->
    <section id="study_with" class="wow fadeInUp" data-wow-delay="0.2s">
      <div class="container text-center">
						<div class="row">
                        <div class="col-md-4">
														<h3 class="study_text"><b><?php echo $this->lang->line('STUDY_WITH'); ?></b></h3>
														<h3 class="study_text"><b><?php echo $this->lang->line('GROUP_OF'); ?></b></h3>
														<h3 class="study_text"><b><?php echo $this->lang->line('PROFESSIONALS'); ?></b></h3>
														<a class="btn btn-info btn-md" id="btn_see" href="<?php echo base_url(); ?>/Courses/listcourse"><?php echo $this->lang->line('SEE_LIST_OF_COURSES'); ?></a>
												</div>
												<div class="col-md-8 how-img">
                            <img src="<?php echo base_url(); ?>assets/img/study_with.jpg " class="img-fluid" alt=""/>
                        </div>
						</div>
      </div>
		</section><!-- #STUDY WITH GROUP OF PROFESSIONALS -->


		<!--==========================
      Register section
    ============================-->

		<section id="register_reg" class="wow fadeInUp" data-wow-delay="0.2s"  >
		<div class="container text-center">
						<div class="row">
                        <div class="col-md-7" style="padding: 50px;">
																<!-- <div class="agileits-timer">
																	<div class="clock">
																	<h4 style="color: #fff;padding:0px;margin:0px;"> <b> <?= ($this->session->userdata('site_lang') == 'persian') ? $date["text_fa"] : $date["text_en"] ?> </b> </h4>
																	<h1 style="color: #fff;"> <b><?php echo $this->lang->line('REGISTER_NOW'); ?> </b> </h1>

																		<div class="column days">
																			<div class="timer" id="days"></div>
																			<div class="text"><?php echo $this->lang->line('DAYS'); ?></div>
																		</div>
																		<div class="column">
																			<div class="timer" id="hours"></div>
																			<div class="text"><?php echo $this->lang->line('HOURS'); ?></div>
																		</div>
																		<div class="column">
																			<div class="timer" id="minutes"></div>
																			<div class="text"><?php echo $this->lang->line('MINUTES'); ?></div>
																		</div>
																		<div class="column">
																			<div class="timer" id="seconds"></div>
																			<div class="text"><?php echo $this->lang->line('SECONDS'); ?></div>
																		</div>
																	</div>
																</div> -->

												</div>
												<div class="col-md-5 " style="padding: 20px;">


												<div class="card card-body mycard-body">
													<div class="mycard-header">
														<p>
														<?php echo $this->lang->line('SIGN_UP_PART1'); ?> <br>
                            <?php echo $this->lang->line('SIGN_UP_PART2'); ?>
                            <?php echo $this->lang->line('SIGN_UP_PART3'); ?>
														</p>
													</div>

					<div class="card-bodyy">
								<fieldset>
									<form method="POST"  id="frm_signup" >
									
         
                  <div class="form-group">
												<input class="form-control input-lg" placeholder="<?php echo $this->lang->line('FIRST_NAME_EN'); ?>" name="firstname_en"  id="firstname_en" value="" type="text">
										</div>
               
               
                  <div class="form-group">
												<input class="form-control input-lg" placeholder="<?php echo $this->lang->line('LAST_NAME_EN'); ?>" name="lastname_en" id="lastname_en" value="" type="text">
										</div>
                	
										<div class="form-group">
												<input class="form-control input-lg" placeholder="<?php echo $this->lang->line('FIRST_NAME_FA'); ?>" name="firstname_fa"  id="firstname_fa" value="" type="text">
										</div>
            
         
                  <div class="form-group">
												<input class="form-control input-lg" placeholder="<?php echo $this->lang->line('LAST_NAME_FA'); ?>" name="lastname_fa" id="lastname_fa" value="" type="text">
										</div>
              
            
   
                	
										
                  <div class="form-group">
												<input class="form-control input-lg" placeholder="<?php echo $this->lang->line('MOBILE'); ?>" name="mobile" id="mobile" value="" type="text">
										</div>
           
        
                  <div class="form-group has-error">
												<input class="form-control input-lg" placeholder="<?php echo $this->lang->line('EMAIL'); ?>" id="email" name="email" type="text">
										</div>
           
         

                  <div class="row">
                  <div class="col-md-12">
                  

                  <div class="form-group">
                  
                  <textarea class="form-control" rows="3" id="comment" placeholder="چطور می توانیم به شما کمک کنیم؟"></textarea>
                </div>


                  </div>
                  </div>


						
            <div class="row">
            <div class="col-md-12 text-center">
            <div class="alert alert-danger alert-dismissible col-md-4" id="message_error" style="display:none" >
                    <button type="button" class="close col-md-4" data-dismiss="alert">&times;</button>
                    <strong><?php echo $this->lang->line('ERROR'); ?></strong> <?php echo $this->lang->line('EMAIL_ALREADY_EXSIST'); ?>
                    </div>
            </div>
            </div>
            <div class="row">
            <div class="col-md-12 text-center">
            
            <div class="alert alert-success alert-dismissible" id="message_success" style="display:none">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <strong><?php echo $this->lang->line('SUCCESS'); ?></strong> <?php echo $this->lang->line('MSG_SUCCESS'); ?>
            </div>

            </div>
            </div>
            
            <div class="row">
            <div class="col-md-12">
            
            <button type="button" class="btn btn-lg btn-primary btn-block btn_signup btn-get-started col-md-6" ><?php echo $this->lang->line('REQUEST'); ?></button>

            </div>
            </div>
									
									



										 

										</form>
								</fieldset>
					</div>


                </div>



                        </div>
						</div>






				</div>
    </section><!-- #Register section -->


<style>
/* Embedded content with flexible width and proportional height. */

.rwd-media {
  position: relative;
  width: 100%;
  height: 0;
  padding-bottom: 56.25%; /* 16:9 */
}

.rwd-media iframe,
.rwd-media video {
  position: absolute;
  width: 100%;
  height: 100%;  
}

.content { width: 50%; padding: 2em; background: #fff; }

</style>
		<div class="section-header" style="margin-top:20px;">
		<h3>Video Bottom</h3>
				</div>

		<!--==========================
      Video
    ============================-->
    <section id="" class="wow fadeInUp" data-wow-delay="0.2s" style="margin-top:35px">


    
    <div class="row" style="margin: 0px;;">

<div class="col-md-6 content">
      <div class="rwd-media">
        <!-- <iframe src="https://player.vimeo.com/video/60814695?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="448" height="252" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe> -->
      </div>
  
      </div>
<div class="col-md-6 content">
      <div class="rwd-media">
        <!-- <iframe src="https://player.vimeo.com/video/60814695?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="448" height="252" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe> -->
      </div>
  
      </div>
    
    </div>


		</section><!-- #Video -->


<style>
@media (min-width: 768px) {
  .multi-item-carousel .carousel-inner .carousel-item {
    margin-right: inherit;
  }
  .multi-item-carousel .carousel-inner .carousel-item.active + .carousel-item,
  .multi-item-carousel .carousel-inner .carousel-item.active + .carousel-item + .carousel-item {
    display: block;
  }
  .multi-item-carousel .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left),
  .multi-item-carousel .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item,
  .multi-item-carousel .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item + .carousel-item {
    -webkit-transition: none;
    transition: none;
  }
  .multi-item-carousel .carousel-inner .carousel-item.active + .carousel-item + .carousel-item + .carousel-item {
    position: absolute;
    top: 0;
    right: -33.33333333%;
    z-index: -1;
    display: block;
    visibility: visible;
  }
  .multi-item-carousel .carousel-inner .carousel-item-next,
  .multi-item-carousel .carousel-inner .carousel-item-prev {
    position: relative;
    -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
  }
  .multi-item-carousel .carousel-inner .carousel-item-prev.carousel-item-right {
    position: absolute;
    top: 0;
    left: 0;
    z-index: -1;
    display: block;
    visibility: visible;
  }
  .multi-item-carousel .active.carousel-item-left + .carousel-item-next.carousel-item-left,
  .multi-item-carousel .carousel-item-next.carousel-item-left + .carousel-item,
  .multi-item-carousel .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item,
  .multi-item-carousel .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item + .carousel-item {
    position: relative;
    -webkit-transform: translate3d(-100%, 0, 0);
            transform: translate3d(-100%, 0, 0);
    visibility: visible;
  }
  .multi-item-carousel .active.carousel-item-right + .carousel-item-prev.carousel-item-right,
  .multi-item-carousel .carousel-item-prev.carousel-item-right + .carousel-item,
  .multi-item-carousel .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item,
  .multi-item-carousel .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item + .carousel-item {
    position: relative;
    -webkit-transform: translate3d(100%, 0, 0);
            transform: translate3d(100%, 0, 0);
    display: block;
    visibility: visible;
  }
}


</style>






    <style>
      #team .card {
    border: none;
    background: #ffffff;
}

.image-flip:hover .backside,
.image-flip.hover .backside {
    -webkit-transform: rotateY(0deg);
    -moz-transform: rotateY(0deg);
    -o-transform: rotateY(0deg);
    -ms-transform: rotateY(0deg);
    transform: rotateY(0deg);
    border-radius: .25rem;
}

.image-flip:hover .frontside,
.image-flip.hover .frontside {
    -webkit-transform: rotateY(180deg);
    -moz-transform: rotateY(180deg);
    -o-transform: rotateY(180deg);
    transform: rotateY(180deg);
}

.mainflip {
    -webkit-transition: 1s;
    -webkit-transform-style: preserve-3d;
    -ms-transition: 1s;
    -moz-transition: 1s;
    -moz-transform: perspective(1000px);
    -moz-transform-style: preserve-3d;
    -ms-transform-style: preserve-3d;
    transition: 1s;
    transform-style: preserve-3d;
    position: relative;
}

.frontside {
    position: relative;
    -webkit-transform: rotateY(0deg);
    -ms-transform: rotateY(0deg);
    z-index: 2;
    margin-bottom: 30px;
}

.backside {
    position: absolute;
    top: 0;
    left: 0;
    background: white;
    -webkit-transform: rotateY(-180deg);
    -moz-transform: rotateY(-180deg);
    -o-transform: rotateY(-180deg);
    -ms-transform: rotateY(-180deg);
    transform: rotateY(-180deg);
    -webkit-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
    -moz-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
    box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
}

.frontside,
.backside {
    -webkit-backface-visibility: hidden;
    -moz-backface-visibility: hidden;
    -ms-backface-visibility: hidden;
    backface-visibility: hidden;
    -webkit-transition: 1s;
    -webkit-transform-style: preserve-3d;
    -moz-transition: 1s;
    -moz-transform-style: preserve-3d;
    -o-transition: 1s;
    -o-transform-style: preserve-3d;
    -ms-transition: 1s;
    -ms-transform-style: preserve-3d;
    transition: 1s;
    transform-style: preserve-3d;
}

.frontside .card,
.backside .card {
    min-height: 312px;
}

.backside .card a {
    font-size: 18px;
    color: #007b5e !important;
}

.frontside .card .card-title,
.backside .card .card-title {
    color: #007b5e !important;
}

.frontside .card .card-body img {
    width: 120px;
    height: 120px;
    border-radius: 50%;
}
#team {
    background: #f7f7f7 !important;
}

    </style>


<div class="">
    <!-- Team -->
<section id="team" class="pb-5">
    <div class="container">
      
    

    <div class="section-header wow fadeInUp">
      <h3><?php echo $this->lang->line('STAFF'); ?></h3>
      <p><?php echo $this->lang->line('STAFF_TEXT'); ?> </p>
    </div>


        <div class="row">

          <?php
          foreach ($masters as $master) {
            // print_r($st_comment);
              ?>


            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="<?php echo base_url(); ?>assets/img/masters/<?= $master->m_image ?>" alt="card image"></p>
                                    <h4 class="card-title"><?= ($this->session->userdata('site_lang') == 'persian') ? $master->m_firstname_fa." ".$master->m_lastname_fa : $master->m_firstname_en." ".$master->m_lastname_en ?></h4>
                                    <p class="card-text"><?= ($this->session->userdata('site_lang') == 'persian') ? $master->m_affiliation_fa : $master->m_affiliation_en ?></p>
                                    <!-- <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a> -->
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card" style="margin-bottom: 0px; margin-top: 0px;">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title"><?= ($this->session->userdata('site_lang') == 'persian') ? $master->m_firstname_fa." ".$master->m_lastname_fa : $master->m_firstname_en." ".$master->m_lastname_en ?></h4>
                                    <p class="card-text">
                                      
                                      <?= ($this->session->userdata('site_lang') == 'persian') ? $master->m_affiliation_fa : $master->m_affiliation_en ?>
                                    </p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="<?php echo $master->facebook; ?>">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="<?php echo $master->twitter; ?>">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="<?php echo $master->instagram; ?>">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="<?php echo $master->linkedin; ?>">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
           <?php } ?>
           

        </div>
    </div>
</section>
</div>
	<!--==========================
      Team Section
    ============================-->





		<!--==========================
      Clients Section
    ============================-->
    <section id="testimonials" class="section-bg wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3><?php echo $this->lang->line('STUDENT_SAY'); ?></h3>
          <h5><?php echo $this->lang->line('WANNA_HER'); ?></h5>

        </header>

        <div class="owl-carousel testimonials-carousel" >

        <?php
      
				foreach ($students_comment as $st_comment) {
					?>
	
		  
		  
		  <div class="testimonial-item">
            <img src="<?= base_url(); ?>assets/img/students/<?= $st_comment->s_image ?>  " class="testimonial-img" alt="">
            <h3>
			<?= ($this->session->userdata('site_lang') == 'persian') ? $st_comment->s_firstname_fa." ".$st_comment->s_lastname_fa : $st_comment->s_firstname_en." ".$st_comment->s_lastname_en ?>
			
			</h3>
          
            <p>
						<i class="fa fa-quote-left" aria-hidden="true"></i>
						<?= ($this->session->userdata('site_lang') == 'persian') ? $st_comment->sc_comment_fa : $st_comment->sc_comment_en ?>
             
              <i class="fa fa-quote-right" aria-hidden="true"></i>
            </p>
          </div>
		  

	<?php
				}
				?>




        </div>

      </div>
    </section><!-- #testimonials -->



		<!--==========================
      Call To Action Section
    ============================-->
    <section id="call-to-action" class="wow fadeIn">
      <div class="container text-center">
      <h3><?php echo $this->lang->line('INSTRAUCTOR'); ?></h3>
      <a class="btn cta-btn" data-toggle="modal" data-target="#basicModal" ><?php echo $this->lang->line('UPLOAD_RESUME'); ?></a>
    </div>
    </section><!-- #call-to-action -->

    <!-- basic modal -->
<div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" id="mdl_header">
        <h4 class="modal-title" id="myModalLabel"><?php echo $this->lang->line('UPLOAD_RESUME'); ?></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="alert alert-success" role="alert" id="alert_upload" style="display: none">
      <strong>done!</strong>Upload successfully.
    </div>
    <div class="loading" style="display: none">Loading&#8230;</div>

        <div class="container mt-3 mt-sm-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <form enctype="multipart/form-data" id="submit" method="post" v-on:submit="validateForm">
        <div class="form-group">
          <label class="form-control-label" for="name"><?php echo $this->lang->line('NAME'); ?></label>
          <input id="name" name="name" class="form-control" type="text" v-model="name" v-bind:class="{ 'is-invalid': attemptSubmit && missingName }">
          <div class="invalid-feedback">This field is required.</div>
        </div><!-- /form-group -->

        <div class="form-group">
          <label class="form-control-label" for="number"><?php echo $this->lang->line('EMAIL'); ?></label>
          <input id="email" name="email" class="form-control" type="email" v-model="number" v-bind:class="{ 'is-invalid': attemptSubmit && wrongNumber }">
        </div><!-- /form-group -->
        <div class="form-group">
          <label class="form-control-label" for="number"><?php echo $this->lang->line('MOBILE'); ?></label>
          <input id="phone" name="phone" class="form-control" type="text" v-model="number" v-bind:class="{ 'is-invalid': attemptSubmit && wrongNumber }">
        </div><!-- /form-group -->
        <div class="form-group">
          <label class="custom-file btn btn-info mybtn1" id="customFile" style="    padding: 5px 5px 5px 60px;"> <?php echo $this->lang->line('SELECT_FILE'); ?>
        <input type="file" class="custom-file-input" name="file_resume"  id="exampleInputFile" aria-describedby="fileHelp">
        <span class="custom-file-control form-control-file"></span>
    </label>
          </div>

    </div><!-- /col -->
  </div><!-- /row -->
</div><!-- /container -->



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $this->lang->line('CLOSE'); ?></button>
        <button type="submit" class="btn btn-primary mybtn1"><?php echo $this->lang->line('SUBMIT_BTN'); ?></button>
      </div>
    </form>
    </div>
  </div>
</div>

  </main>



  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <!-- <div class="col-lg-3 col-md-6 footer-info">
            <h3>Hadadian</h3>
            <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
          </div> -->

          <div class="col-lg-4 col-md-6 footer-links">
            <h4><?php echo $this->lang->line('USEFUL_LINKS'); ?></h4>
            <ul>
            <li><i class="ion-ios-arrow-left"></i> <a href="https://www.ets.org/toefl">ETS Website</a></li>
              <li><i class="ion-ios-arrow-left"></i> <a href="https://andishehmoein.academy/">موسسه آموزش عالی اندیشه معین</a></li>
              <li><i class="ion-ios-arrow-left"></i> <a href="http://sanjesh.org/group.aspx?gid=7">سازمان سنجش و آموزش کشور</a></li>
              <!-- <li><i class="ion-ios-arrow-right"></i> <a href="#">Privacy policy</a></li> -->
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-contact">
            <h4><?php echo $this->lang->line('text_menu_Contact_header'); ?></h4>
            <p>
            <?php echo $this->lang->line('ADDRSS_PART1'); ?> <br>
            <?php echo $this->lang->line('ADDRSS_PART2'); ?><br>
            <?php echo $this->lang->line('ADDRSS_PART3'); ?> <br>
              <strong><?php echo $this->lang->line('MOBILE'); ?>:</strong> <span class="text-left">09127096629</span><br>
              <strong><?php echo $this->lang->line('EMAIL'); ?>:</strong> info@haddadiantc.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter" style="    background: #0f59ff;"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook" style="    background: #3d4c6f;"><i class="fa fa-facebook"></i></a>
              <a href="https://www.instagram.com/enlearnia" target="_blank" class="instagram" style="    background: #d60448;"><i class="fa fa-instagram"></i></a>
               <a href="https://t.me/haddadianTOEFLGRE" target="_blank" class="telegram" style="    background: #4545ff;"><i class="fa fa-telegram"></i></a>
              <a href="https://www.linkedin.com/company/enlearnia-language-academy/about/" target="_blank" class="linkedin" style="    background: #223979;"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4><?php echo $this->lang->line('OUR_NEWSLETTER'); ?></h4>
            <p><?php echo $this->lang->line('OUR_NEWSLETTER_TEXT'); ?></p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit"  value="<?php echo $this->lang->line('SUBSCRIBE'); ?>">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; <?php echo $this->lang->line('COPYRIGHT'); ?> <strong>مركز اموزشي حداديان</strong>. <?php echo $this->lang->line('AllR'); ?>  <br/>
        <strong><?php echo $this->lang->line('DESIGN_BY'); ?> </strong><span style="">zadougani@gmail.com </span><br/>
      </div>
      <div class="credits">
        <!--
          All thNeed somebody to talk to? e links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
        -->
        <!--Designed by <a href="#">Mr.dougani</a>-->
      </div>
    </div>
  </footer><!-- #footer -->




	<div class="modal fade" id="contact" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header border-bottom-0">
        <h5 class="modal-title" id="exampleModalLabel">Create Account</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
			<div class="modal-body">
        <div class="alert alert-success" role="alert" id="alert_submit" style="display: none">
      <strong>done!</strong>Submit successfully.
    </div>
      <form>
        <div class="modal-body">
          <div class="form-group">
            <label for="email1">Email address</label>
            <input type="email" class="form-control" id="email1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">Your information is safe with us.</small>
          </div>
          <div class="form-group">
            <label for="password1">Password</label>
            <input type="password" class="form-control" id="password1" placeholder="Password">
          </div>
          <div class="form-group">
            <label for="password1">Confirm Password</label>
            <input type="password" class="form-control" id="password2" placeholder="Confirm Password">
          </div>
        </div>
        <div class="modal-footer border-top-0 d-flex justify-content-center">
          <button type="submit" class="btn btn-success">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>


<input type="hidden" id="news" value="<?php echo $this->lang->line('NEWS');  ?>">
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
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




  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<!-- 
	<script>
    var base_url1 = '<?php echo base_url();?>';
    var current_lang = '<?php echo $this->session->userdata('site_lang');?>';
    var month = '<?php echo $date['month'] ;?>';
    var day = '<?php echo $date['day'] ;?>';
    var year = '<?php echo $date['year'] ;?>';
    var clock = '<?php echo $date['clock'] ;?>';
    setInterval(function() { makeTimer(month,day,year,clock); }, 1000);
    // var obj=null;
// var date='';
//     $.ajax({
//         url: base_url1 + "Admin/getTimer",
//         type: 'GET',
//         dataType: 'json', // added data type
//         success: function(res) {
//            // var obj = JSON.parse(res);
//            alert("asas");
//            // alert(res);

//            // alert(res['month']);
//            // setInterval(function() { makeTimer(obj); }, 1000);


//         }
//     });

    function makeTimer(month,day,year,clock) {
      // alert(obj);
      // var endTime = new Date("31 January 2019 13:00:00 GMT+30:30");

      var endTime = new Date(day+" "+month+" "+year +" "+clock + " GMT+3:30");

      endTime = (Date.parse(endTime) / 1000);

      var now = new Date();
      now = (Date.parse(now) / 1000);

      var timeLeft = endTime - now;

      var days = Math.floor(timeLeft / 86400);
      var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
      var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600 )) / 60);
      var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));

      if (hours < "10") { hours = "0" + hours; }
      if (minutes < "10") { minutes = "0" + minutes; }
      if (seconds < "10") { seconds = "0" + seconds; }

      $("#days").html(days);
      $("#hours").html(hours);
      $("#minutes").html(minutes);
      $("#seconds").html(seconds);

  }





	</script> -->



<script>
	function deferVideo() {


$("video source").each(function() {
var sourceFile = $(this).attr("data-src");
$(this).attr("src", sourceFile);
var video = this.parentElement;
video.load();
});

}
window.onload = deferVideo;



</script>




<script>

$('#carousel-1').carousel({
      interval: 4000,
      wrap: true,
      keyboard: true
 });

</script>







<script>

$(document).ready(function() {
	var base_url = '<?php echo base_url();?>';

  $('.btn_signup').on('click', function() {
		var $this = $(this);
						var loadingText = '<i class="fa fa-circle-o-notch fa-spin"></i> درحال ثبت درخواست...';
						if ($(this).html() !== loadingText) {
							$this.data('original-text', $(this).html());
							$this.html(loadingText);
    }
								var firstname_en=$("#firstname_en").val();
								var lastname_en=$("#lastname_en").val();
								var firstname_fa=$("#firstname_fa").val();
								var lastname_fa=$("#lastname_fa").val();
								var mobile=$("#mobile").val();
								var email=$("#email").val();
								var comment=$("#comment").val();


							$.ajax({
								url: base_url + "Register/register",
								dataType: "text",
								type: "POST",
								data:{firstname_en:firstname_en , lastname_en:lastname_en ,
								firstname_fa:firstname_fa,lastname_fa:lastname_fa,
								mobile:mobile , email:email , comment:comment  },
								cache:false,
								 success: function(result){

									switch (result) {
										case 'success':
										$("#message_success").css("display","block");
										$("#message_error").css("display","none");
										$this.html($this.data('original-text'));
											break;
										case 'duplicate':
										$("#message_success").css("display","none");
										$("#message_error").css("display","block");
										$this.html($this.data('original-text'));
											break;

										default:

											break;
									}

								}});




  });
})

</script>

<script type="text/javascript">
  /* show file value after file select */
$('.custom-file-input').on('change',function(){
  var fileName = document.getElementById("exampleInputFile").files[0].name;
  $(this).next('.form-control-file').addClass("selected").html(fileName);
})

/* method 2 - change file input to text input after selection
$('.custom-file-input').on('change',function(){
    var fileName = $(this).val();
    $(this).next('.form-control-file').hide();
    $(this).toggleClass('form-control custom-file-input').attr('type','text').val(fileName);
})
*/
</script>

<script>
  $('#submit').submit(function(e){
    // $("#alert_upload").hide();
    $("#alert_upload").css("display", "none");
    e.preventDefault();
         $.ajax({
            url: "<?php echo base_url()?>Admin/upload_resume",
             type:"post",
             data:new FormData(this),
             processData:false,
             contentType:false,
             cache:false,
             async:true,
              complete: function(){
                $(".loading").css("display", "none");
                $("#alert_upload").css("display", "block");
            // $("#alert_upload").show();
           },
           beforeSend: function() {
              $(".loading").css("display", "block");


            }
         });

    });
</script>
<script>
  $('#submit_contactus').submit(function(e){
    // $("#alert_upload").hide();
    $("#alert_contact").css("display", "none");
    e.preventDefault();
         $.ajax({
            url: "<?php echo base_url()?>Admin/contactus",
             type:"post",
             data:new FormData(this),
             processData:false,
             contentType:false,
             cache:false,
             async:true,
              complete: function(){
                $(".loading").css("display", "none");
                $("#alert_contact").css("display", "block");
            // $("#alert_upload").show();
           },
           beforeSend: function() {
              $(".loading").css("display", "block");


            }
         });

    });
</script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/news/bwlJqueryNewsTicker.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/news/prism.js"></script>
        <script>
          var title=$("#news").val();
          if(current_lang=="persian"){direction=true;}else{direction=false;}
        $("#rtl_ticker").bwlJqueryNewsTicker({
            interval: 3500,
            position: 'footer',
            animation: "faderight",
            title: title,
            theme: 'red',
            rtl: direction
        }); 
        </script>

</body>
</html>
