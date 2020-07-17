<link href="<?php echo base_url(); ?>assets/css/pages.css" rel="stylesheet">
<?php
include ('navbar.php');
?>


<link href='http://fonts.googleapis.com/css?family=Open+Sans:700,800,400,300' rel='stylesheet' type='text/css'>
        <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
        <link href="http://www.oriongunning.com/demo/gridder/css/jquery.gridder.min.css" rel="stylesheet">
        <link href="http://www.oriongunning.com/demo/gridder/css/demo.css" rel="stylesheet">
				<style>
				.gridder-show .description h2{
					background: #656565;
					color: #f7edf0;
				}
				.gridder-show .description h3{
					background: #656565;
					color: #f7edf0;
				}
				.gridder-navigation a{
					background: #948f94;
    border-radius: 50px;
				}
				</style>
<body>


        <div class="container">
            <h1>Gallery</h1>
            <hr>
        </div>

        <div class="container container-big">

            <ul class="gridder">

<?php  foreach ($gallery as $gall) {  if($gall->g_visible<>0 ) { ?>

					<li class="gridder-list" data-griddercontent="#gridder-content-<?php echo $gall->id ?>">
				<!-- <div class="image" style="background-image: url('http://ddragon.leagueoflegends.com/cdn/img/champion/splash/Jax_0.jpg');"> -->
				<div class="image"
				style="background-image: url('<?php echo base_url();?>assets/img/gallaery/<?php echo $gall->image ?>');">
						<div class="overlay">
								<span class="title"><?php echo $gall->title1 ?></span><br>
								<span class="description"><?php echo $gall->title2 ?></span>
						</div>
				</div>
				<?php } }?>

                                    </ul>
				<?php  foreach ($gallery as $gall1) {   if($gall->g_visible<>0 ) { ?>
				<div id="gridder-content-<?php echo $gall1->id ?>" class="gridder-content">
				<img src="<?php echo base_url();?>assets/img/gallaery/<?php echo $gall1->image ?>">
				<div class="description">
						<h2><?php echo $gall1->title1 ?></h2><br />
						<h3><?php echo $gall1->title2 ?></h3>
				</div>
		</div>
		<?php } }?>




                            </div>

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
        <script src="https://rawgit.com/oriongunning/gridder/master/dist/js/jquery.gridder.min.js"></script>
        <script>
            jQuery(document).ready(function ($) {

                // Call Gridder
                $(".gridder").gridderExpander({
                    scroll: true,
                    scrollOffset: 60,
                    scrollTo: "panel", // panel or listitem
                    animationSpeed: 400,
                    animationEasing: "easeInOutExpo",
                    showNav: true,
                    nextText: "<i class=\"fa fa-arrow-right\"></i>",
                    prevText: "<i class=\"fa fa-arrow-left\"></i>",
                    closeText: "<i class=\"fa fa-times\"></i>",
                    onStart: function () {
                        console.log("Gridder Inititialized");
                    },
                    onContent: function () {
                        console.log("Gridder Content Loaded");
                        $(".carousel").carousel();
                    },
                    onClosed: function () {
                        console.log("Gridder Closed");
                    }
                });
            });
        </script>
    </body>
</html>

