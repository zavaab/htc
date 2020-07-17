
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
              <!-- <li><i class="ion-ios-arrow-right"></i> <a href="https://cambridgeenglish.org">Cambridge Assessment English</a></li> -->
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





	</script>



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
						var loadingText = '<i class="fa fa-circle-o-notch fa-spin"></i> Registration Now...';
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


							$.ajax({
								url: base_url + "Register/register",
								dataType: "text",
								type: "POST",
								data:{firstname_en:firstname_en , lastname_en:lastname_en ,
								firstname_fa:firstname_fa,lastname_fa:lastname_fa,
								mobile:mobile , email:email  },
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
