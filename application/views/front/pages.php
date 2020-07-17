
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
</style>
<body>


<div class="container" style="margin-top: 125px;">
  <h3><span style="border-bottom: 3px solid #ff7878;"><?=$title ?></span></h3>
  <h3 class="pb-3 mb-4 border-bottom"> </h3>


         <?php
         if($this->session->userdata('site_lang') == 'persian') {
            $d_text=$d_text_fa;
         }else{
            $d_text=$d_text_en;
         }
         
         

         $i=0;
      foreach ($data as $dat) {
         $i++;
            $break=" ";
            $d_title="";

            if($this->session->userdata('site_lang') == 'persian') {
               if(strlen($dat->d_title_fa) <= 50){$d_title=$dat->d_title_fa;}
               else{
                  $d_title=substr($dat->d_title_fa,0,50);
                  $d_title=$d_title_fa."...";
               }
               $d_text=$dat->d_text_fa;
            }else{
               if(strlen($dat->d_title_en) <= 50){$d_title=$dat->d_title_en;}
               else{
                  $d_title=substr($dat->d_title_en,0,50);
                  $d_title=$d_title."...";
               }
               $d_text=$dat->d_title_en;
            }

            
            ?>

   
  <?php if($i==1 || $i==5 || $i==9 ||  $i==13 || $i==17 || $i==21 || $i==25 || $i==29 ||
  $i==33 || $i==37 || $i==41 || $i==45 || $i==49 || $i==53 || $i==57
  ){ ?>
   <div class="card-deck" style="margin-bottom: 25px;" >
   <?php } ?>



   <div class="card" style="max-width: 254px;">
      <img class="card-img-top" src="<?php echo base_url(); ?>assets/img/downloads/<?=$dat->d_img?>" alt="Card image cap">
      <div class="card-body">
         <h5 class="card-title"><?=$d_title?></h5>
         <p class="card-text"><?= $d_text?></p>
         <p class="card-text"><small class="text-muted">
         <a id="file_dpwnload" href="<?php echo base_url()?>assets/img/downloads/<?=$dat->d_file_name;?>" onclick="file_dpwnload(<?=$dat->d_id;?>)" download="<?=$dat->d_file_name;?>" class="btn btn-outline-dark  btn-sm">
               <i class="fa fa-download" style="font-size:18px;color:red"></i> </a>
         </small></p>
         <!-- <div class="counting" data-count="<?=$dat->file_download;?>" id="download_count_<?=$dat->d_id;?>">0</div> -->



      </div>
   </div>

  
        
  

   <?php if($i==4 || $i==8 || $i==12 || $i==16 || $i==20 || $i==24 || $i==28 || $i==32 ||
   $i==36 || $i==40 || $i==44 || $i==48 || $i==52
   ){ ?>
      </div>
      <h3 class="pb-3 mb-4 border-bottom"> </h3>
   <?php } ?>



<?php } ?>
  
</div>
<!-- /.container -->






<!-- <textarea name="editor1"></textarea>
		<script>
			CKEDITOR.replace( 'editor1' );
		</script> -->


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
   
   function file_dpwnload(d_id) {
      alert(d_id);
				$.ajax({
							url: "<?php echo base_url()?>Admin/file_dpwnload",
							type: "POST",
							data:{d_id:d_id},
							success: function(result) {
                     $("#download_count_"+d_id).text(result);
							}
					});

	}


   
   // number count for stats, using jQuery animate

            $('.counting').each(function() {
            var $this = $(this),
                  countTo = $this.attr('data-count');
            
            $({ countNum: $this.text()}).animate({
               countNum: countTo
            },

            {

               duration: 2000,
               easing:'linear',
               step: function() {
                  $this.text(Math.floor(this.countNum));
               },
               complete: function() {
                  $this.text(this.countNum);
                  //alert('finished');
               }

            });  
            

            });


   </script>

   <script>
   // hove card
   $(document).ready(function() {
 // executes when HTML-Document is loaded and DOM is ready
      console.log("document is ready");
      

      $( ".card" ).hover(
      function() {
         $(this).addClass('shadow-lg').css('cursor', 'pointer'); 
      }, function() {
         $(this).removeClass('shadow-lg');
      }
      );
      
      // document ready  
      });



   </script>
</body>
</html>

