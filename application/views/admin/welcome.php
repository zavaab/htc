<?php
include("menu_left.php");
?>



<!-- Modal  Add slider-->
<div id="myModal_add" class="modal fade " role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add welcome</h4>
      </div>
      <div class="modal-body">

	<form id="addSlider_Form" action="<?php echo base_url()?>Admin/addwelcome" method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<label for="recipient-name" class="col-form-label">Title1_en :</label>
						<input type="text" class="form-control" id="recipient-name" name="title1_en" >
					</div>
					<div class="form-group">
						<label for="recipient-name" class="col-form-label">Title2_en :</label>
						<input type="text" class="form-control" id="recipient-name" name="title2_en" >
					</div>

					<div class="form-group">
						<label for="message-text" class="col-form-label">Text_en :</label>
						<textarea class="form-control" id="text_download" name="text_en"></textarea>
					</div>
					
					<div class="form-group">
						<label for="recipient-name" class="col-form-label">Title1_fa :</label>
						<input type="text" class="form-control" id="recipient-name" name="title1_fa" >
					</div>
					<div class="form-group">
						<label for="recipient-name" class="col-form-label">Title2_fa :</label>
						<input type="text" class="form-control" id="recipient-name" name="title2_fa" >
					</div>

					<div class="form-group">
						<label for="message-text" class="col-form-label">Text_fa :</label>
						<textarea class="form-control" id="text_download" name="text_fa"></textarea>
					</div>

					<div class="form-group">

						<span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span>
						<span class="fileinput-exists">Change</span>
						<input type="file" name="welcome_image" >

						</div>




					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-primary" id="addslider"	data-loading-text="Please Wait..">
<i class="fa fa-plus" aria-hidden="true"></i> Add welcome </button>
					</form>



      </div>

    </div>

  </div>
</div>
<!-- end add downloads -->



        <!-- page content -->
        <div class="right_col" role="main">
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal_add">
						<i class="fa fa-plus" aria-hidden="true"></i> Add Welcome</button>


	<!-- tables -->
	<table class="table table-sm table-dark">
									<thead>
									<tr>
										<th>#</th>
										<th>Title1_en</th>
										<th>Title2_en</th>
										<th>Image</th>
										<th>Your Text_en</th>
										
										<th>Title1_fa</th>
										<th>Title2_fa</th>
										<th>Your Text_fa</th>

										<!-- <th>Link Download</th> -->

									</tr>
									</thead>
									<tbody>
									<tr>
										<td>1</td>
										<td><?= $welcome[0]->title1_en;?></td>
										<td><?= $welcome[0]->title2_en;?></td>
										<td>

			<a class="btn" rel="popover"
			data-img="<?php echo base_url();?>assets/img/welcome/<?= $welcome[0]->image;?> " >Show Image</a>
			</td>

										<td><?= $welcome[0]->text_en;?></td>
										
										
										<td><?= $welcome[0]->title1_fa;?></td>
										<td><?= $welcome[0]->title2_fa;?></td>
										<td><?= $welcome[0]->text_fa;?></td>

										</tr>


									</tbody>
								</table>
						<!-- tables -->










        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">

          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url(); ?>assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- jasny-bootstrap.min -->
    <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js"></script> -->
    <!-- FastClick -->
    <script src="<?php echo base_url(); ?>assets/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url(); ?>assets/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="<?php echo base_url(); ?>assets/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="<?php echo base_url(); ?>assets/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?php echo base_url(); ?>assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url(); ?>assets/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="<?php echo base_url(); ?>assets/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="<?php echo base_url(); ?>assets/vendors/Flot/jquery.flot.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/Flot/jquery.flot.time.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="<?php echo base_url(); ?>assets/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="<?php echo base_url(); ?>assets/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="<?php echo base_url(); ?>assets/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo base_url(); ?>assets/vendors/moment/min/moment.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url(); ?>assets/build/js/custom.min.js"></script>

<script>
	// Add custom JS here
$('a[rel=popover]').popover({
  html: true,
  trigger: 'click',
  placement: 'bottom',
  content: function(){return '<img src="'+$(this).data('img') + '" style="width:150px;height:150px;" />';}
});
</script>


<script>

	$(function() {
                $("#addSlider_Forms").on("submit", function(event) {

                    event.preventDefault();
										$("#addslider").button('loading').queue(function() {
											$("#addslider").css("color","#ffffff");
											$("#addslider").css("background-color","#5b94a5");
												});
                    $.ajax({
                        url: "<?php echo base_url()?>Admin/addSldier",
                        type: "post",
                        data: $(this).serialize(),
                        success: function(result) {
													// console.log(result);
                          if(result=="uploaded"){

												$("#addslider").button('reset');
												$("#addslider").dequeue();


													}else if(result=="error_uploaded"){
												$("#addslider").dequeue();
												$("#addslider").button('reset');

																	//window.location.assign("Ci_login");


													}

                        }
                    });
                });
            });

</script>


<script>
	function show(d_id) {
				$.ajax({
							url: "<?php echo base_url()?>Admin/show",
							type: "POST",
							data:{d_id:d_id},
							success: function(result) {
								// console.log(result);
								if(result=="success"){
									$("#btn_not"+d_id).show();
									$("#btn_sho"+d_id).hide();
								}else if(result=="error_uploaded"){

								}

							}
					});


	}
	function notshow(d_id) {
			$.ajax({
							url: "<?php echo base_url()?>Admin/notshow",
							type: "POST",
							data:{d_id:d_id},
							success: function(result) {
								// console.log(result);
								if(result=="success"){
									$("#btn_not"+d_id).hide();
									$("#btn_sho"+d_id).show();
								}else if(result=="error_uploaded"){

								}

							}
					});


	}
	function removee(d_id) {
		$("#tr_"+d_id).remove();
	}


</script>

  </body>
</html>
