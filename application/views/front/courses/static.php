<style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
    @import url(http://fonts.googleapis.com/css?family=Open+Sans);
#circle-shape-example { 
  margin: 2rem; 
}
#circle-shape-example p { 
  line-height: 1.8; 
}
#circle-shape-example .curve { 
  width: 33%; height: auto;
  min-width: 150px;
  float: left;
  margin-right:2rem; 
  border-radius: 50%;
  -webkit-shape-outside:circle();
  shape-outside:circle();
}
    </style>
<div class="container-fluid" style="margin-top:100px;">
<div class="row">

    <div class="col-md-12">

            <div id="circle-shape-example">
                    <img src="<?php echo base_url(); ?>assets/static/<?php echo $body["image1"]; ?>" 
                    alt="" class="curve" />
                    <h3 style="color: #ff6dd2;">
                    <i class="fa fa-check-square-o" aria-hidden="true" ></i>
                    <?php echo $body["title1"]; ?>
                    </h3>
                    
                  
                    <?php echo $body["body1"]; ?>
                  </div>

    </div>

</div>
</div>
<style>
.hr-text {
  line-height: 1em;
  position: relative;
  outline: 0;
  border: 0;
  color: black;
  text-align: center;
  height: 1.5em;
  opacity: 1;
  font-size: 21px;
}
.hr-text:before {
  content: '';
  background: linear-gradient(to right, transparent, #818078, transparent);
  position: absolute;
  left: 0;
  top: 50%;
  width: 100%;
  height: 1px;
}
.hr-text:after {
  content: attr(data-content);
  position: relative;
  display: inline-block;
  color: black;
  padding: 0 .5em;
  line-height: 1.5em;
  color: #ff0000;
  background-color: #FFFFFF;
}
</style>


<hr class="hr-text" data-content="<?php echo $body["title2"]; ?>" />

<div class="container text-center">
  <div class="row ">
      <div class="col-md-1"></div>
    <div class="col-md-10 ">
      <div class="table-responsive">
      <?php echo $body["body2"]; ?>
      </div><!--end of .table-responsive-->
    </div>
  </div>
</div>



<hr class="hr-text" data-content="<?php echo $body["title3"]; ?>" />
<style>
.template_faq {
    background: #edf3fe none repeat scroll 0 0;
}
.panel-group {
    background: #fff none repeat scroll 0 0;
    border-radius: 3px;
    box-shadow: 0 5px 30px 0 rgba(0, 0, 0, 0.04);
    margin-bottom: 0;
    padding: 30px;
}
#accordion .panel {
    border: medium none;
    border-radius: 0;
    box-shadow: none;
    margin: 0 0 15px 10px;
}
#accordion .panel-heading {
    border-radius: 30px;
    padding: 0;
}
#accordion .panel-title a {
    background: #ffb900 none repeat scroll 0 0;
    border: 1px solid transparent;
    border-radius: 30px;
    color: #fff;
    display: block;
    font-size: 18px;
    font-weight: 600;
    padding: 12px 50px 12px 20px;
    position: relative;
    transition: all 0.3s ease 0s;
}
#accordion .panel-title a.collapsed {
    background: #fff none repeat scroll 0 0;
    border: 1px solid #ddd;
    color: #333;
}
#accordion .panel-title a::after, #accordion .panel-title a.collapsed::after {
    background: #ffb900 none repeat scroll 0 0;
    border: 1px solid transparent;
    border-radius: 50%;
    box-shadow: 0 3px 10px rgba(0, 0, 0, 0.58);
    color: #fff;
    content: "";
    font-family: fontawesome;
    font-size: 25px;
    height: 55px;
    right: -20px;
    line-height: 55px;
    position: absolute;
    text-align: center;
    top: -5px;
    transition: all 0.3s ease 0s;
    width: 55px;
}
#accordion .panel-title a.collapsed::after {
    background: #fff none repeat scroll 0 0;
    border: 1px solid #ddd;
    box-shadow: none;
    color: #333;
    content: "";
}
#accordion .panel-body {
    background: transparent none repeat scroll 0 0;
    border-top: medium none;
    padding: 20px 25px 10px 9px;
    position: relative;
}
#accordion .panel-body p {
    border-right: 1px dashed #8c8c8c;
    padding-right: 25px;
}
</style>
<div class="container">
        
        <div class="row">				
            <div class="col-md-12">
            <?php $collapses= json_decode($body["body3"]); 
            ?>

            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
              <?php
              $i=1;
                foreach ($collapses as $key => $value) {
                  if(isset($value[0]) && isset($value[1])){
              ?>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne<?php echo $i ?>">
                        <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne<?php echo $i ?>" aria-expanded="true" aria-controls="collapseOne<?php echo $i ?>">
                              <?php echo $value[0]; ?>
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne<?php echo $i ?>" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne<?php echo $i ?>">
                        <div class="panel-body">
                            <p><?php echo $value[1]; ?></p>
                        </div>
                    </div>
                </div>
                <?php $i++;}} ?>
                
               
              
            </div>


        </div><!--- END ROW -->			
  </div>
  </div>

    <script>
    /*
Author       : Theme_ocean.
Template Name: Fury - Product Landing Page
Version      : 1.0
*/
(function($) {
	'use strict';
	
	jQuery(document).on('ready', function(){
	
			$('a.page-scroll').on('click', function(e){
				var anchor = $(this);
				$('html, body').stop().animate({
					scrollTop: $(anchor.attr('href')).offset().top - 50
				}, 1500);
				e.preventDefault();
			});		

	}); 	

				
})(jQuery);

    </script>


<?php echo $body["title4"]; ?>
<style>
/* display this row with flex and use wrap (= respect columns' widths) */

.row-flex {
  display: flex;
  flex-wrap: wrap;
}


/* vertical spacing between columns */

[class*="col-"] {
  margin-bottom: 30px;
}

.content {
  height: 100%;
  padding: 20px 20px 10px;
  color: #fff;
}


/* Demo backgrounds and styling*/

.colour-1 {
  background: #483C46;
  color: #fff;
}

.colour-2 {
  background: #3C6E71;
}

.colour-3 {
  background: #70AE6E;
}

.colour-4 {
  background: #82204A;
}

.colour-5 {
  background: #558C8C;
}

.colour-6 {
  background: #917C78;
}


.content h3 {
  margin-top: 0px;
  font-weight: 300;
}
.content img {
  max-width: 100%;
}

h1 {
  font-weight: 300;
  margin-bottom: 40px;
}
</style>
      <div class="container">
        <div class="row row-flex">
          <?php echo $body["body4"]; ?>
        </div>
      </div>


      

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
                  <li><i class="ion-ios-arrow-right"></i> <a href="https://www.ets.org/toefl">ETS Website</a></li>
                  <li><i class="ion-ios-arrow-right"></i> <a href="https://www.britishcouncil.org">British Council</a></li>
                  <li><i class="ion-ios-arrow-right"></i> <a href="https://idp.com/global/ielts/">IELTS/IDP Global</a></li>
                  <li><i class="ion-ios-arrow-right"></i> <a href="https://cambridgeenglish.org">Cambridge Assessment English</a></li>
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
                  <strong><?php echo $this->lang->line('EMAIL'); ?>:</strong> info@elalg.com<br>
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
            &copy; <?php echo $this->lang->line('COPYRIGHT'); ?> <strong>Enlearnia</strong>. <?php echo $this->lang->line('AllR'); ?>  <br/>
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
    


<script>
  $(document).ready(function(){
    $("table").addClass("table table-bordered table-striped table-hover");
  });



  
  
</script>