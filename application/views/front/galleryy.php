<link href="<?php echo base_url(); ?>assets/css/pages.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/css_gallary/demo.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/css_gallary/style.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/css_gallary/elastislide.css" />
<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow&v1' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css' />
<?php
include ('navbar.php');
?>

		<noscript>
			<style>
				.es-carousel ul{
					display:block;
				}
			</style>
		</noscript>
		<script id="img-wrapper-tmpl" type="text/x-jquery-tmpl">
			<div class="rg-image-wrapper">

					<div class="rg-image-nav">
						<a href="#" class="rg-image-nav-prev">Previous Image</a>
						<a href="#" class="rg-image-nav-next">Next Image</a>
					</div>

				<div class="rg-image"></div>
				<div class="rg-loading"></div>
				<div class="rg-caption-wrapper">
					<div class="rg-caption" style="display:none;">
						<p></p>
					</div>
				</div>
			</div>
		</script>
    </head>
    <body>
		<div class="container">


			<div class="content">

				<div id="rg-gallery" class="rg-gallery">

					<div class="rg-thumbs">
						<!-- Elastislide Carousel Thumbnail Viewer -->
						<div class="es-carousel-wrapper">
							<div class="es-nav">
								<span class="es-nav-prev">Previous</span>
								<span class="es-nav-next">Next</span>
							</div>
							<div class="es-carousel">
								<ul>
								<?php

									$gallerys=explode("_||_" , $gallery[0]->img);
									$title=$gallery[0]->title;
									foreach ($gallerys as $gall) {
								?>
									<li><a href="#"><img src="<?php echo base_url(); ?>assets/img/images_gallary/<?php echo $gall; ?>"
									data-large="<?php echo base_url(); ?>assets/img/images_gallary/<?php echo $gall; ?>" alt="<?php echo $title; ?>"
									data-description="<?php echo $title; ?>" /></a></li>
								<?php } ?>


								</ul>
							</div>
						</div>
						<!-- End Elastislide Carousel Thumbnail Viewer -->
					</div><!-- rg-thumbs -->
				</div><!-- rg-gallery -->

			</div><!-- content -->
		</div><!-- container -->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/js_gallary/jquery.tmpl.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/js_gallary/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/js_gallary/jquery.elastislide.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/js_gallary/gallery.js"></script>
    </body>
</html>
