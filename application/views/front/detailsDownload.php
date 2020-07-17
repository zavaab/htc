<link href="<?php echo base_url(); ?>assets/css/pages.css" rel="stylesheet">
<?php
include ('navbar.php');
?>
<body>
<div class="container" style="margin-top:120px;">
   <h3 class="pb-3 mb-4 border-bottom">
	 <!-- <?=$title ?> -->
   </h3>



   <div class="row">


	 <?php
	 echo $detailsDownload[0]->d_details;

	 ?>


   </div>

   <hr>

</div>

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
</body>
</html>

