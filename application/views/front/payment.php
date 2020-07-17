<link href="<?php echo base_url(); ?>assets/css/pages.css" rel="stylesheet">
<?php
include ('navbar.php');
?>

<body>

        <div class="container text-center" style="padding-top: 250px;">
			<?php
			$status=$this->session->flashdata('payment_status');
			if( $status == 1 || $status == 2 || $status == 3 ){
			switch ($this->session->flashdata('payment_status')) {
				case 1:
						?>
						<div class="alert alert-success">
						<strong>Success!</strong>
						Register & Payment is done successfully.
						<br>
						 <a class="btn btn-info btn-md" id="btn_see"
						 href="<?php echo base_url(); ?>/Courses/listcourse">SEE LIST OF COURSES</a>
						</div>
						<?php
					break;
				case 2:
				?>
				<div class="alert alert-dandanger">
				<strong>Error!</strong>
				<?php echo $this->session->flashdata('error'); ?>
				<br>
				<a class="btn btn-info btn-md" id="btn_see"
				 href="<?php echo base_url(); ?>/Courses/listcourse">SEE LIST OF COURSES</a>
				</div>
				<?php
					break;
				case 3:
				?>
				<div class="alert alert-warning">
				<strong>Error!</strong>
				<br><?php echo $this->session->flashdata('error'); ?>
				<br>
				<a class="btn btn-info btn-md" id="btn_see"
				 href="<?php echo base_url(); ?>/Courses/listcourse">SEE LIST OF COURSES</a>
				</div>
				<?php
					break;

				default:
					# code...
					break;
			}
		}




			?>
			</div>

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
        <script src="https://rawgit.com/oriongunning/gridder/master/dist/js/jquery.gridder.min.js"></script>

    </body>
</html>
