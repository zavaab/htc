<?php
include("menu_left.php");
?>

					<div id="myModal" class="modal fade" role="dialog">
				<div class="modal-dialog ">
					<!-- Modal content-->
					<div class="modal-content" style="border-radius: 10px;">
						<div class="modal-header" id="myModal_modal_header"
							style="height: 40px; color: #0043ff; border-radius: 10px 10px 0px 0px;">
							<button type="button" class="close" data-dismiss="modal"
								style="line-height: 0.5">&times</button>
							<h4 id="myModal_modal_title" class="modal-title"
								style="line-height: 0.5">Modal Header</h4>
						</div>
						<div class="modal-body ">
							<p id="myModal_modal_message" style="color: darkblue">Some text in
								the modal.</p>
							<p id="myModal_type_file" style="color: darkred"></p>
							<p id="myModal_size_file" style="color: darkred"></p>
							<p id="myModal_value_of_price"
								style="display: none; color: green;">

							</p>
					</div>
				</div>
			</div>
			</div>
        <!-- en myModal mesagebox -->




				<!-- Modal  Add slider-->
<div id="myModal_add" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Slider</h4>
      </div>
      <div class="modal-body">

							<form id="addSlider_Form" action="<?php echo base_url()?>Admin/addSldier" method="POST" enctype="multipart/form-data">
											<div class="form-group">
												<label for="recipient-name" class="col-form-label">Title English Slider :</label>
												<input type="text" class="form-control" id="recipient-name" name="title_slider_en" >
											</div>
											<div class="form-group">
												<label for="recipient-name" class="col-form-label">Title Persian Slider :</label>
												<input type="text" class="form-control" id="recipient-name" name="title_slider_fa" >
											</div>
											<div class="form-group">
											<div class="fileinput fileinput-new" data-provides="fileinput">

											<div>
												<span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span>
												<span class="fileinput-exists">Change</span>
												<input type="file" name="slider_image" >
											</span>
											</div>
										</div>
											</div>
											<div class="form-group">
												<label for="message-text" class="col-form-label">Text English Slider :</label>
												<textarea class="form-control" id="message-text" name="text_slider_en"></textarea>
											</div>
											<div class="form-group">
												<label for="message-text" class="col-form-label">Text Persian Slider :</label>
												<textarea class="form-control" id="message-text" name="text_slider_fa"></textarea>
											</div>
											<div class="form-group">
												<label for="message-text" class="col-form-label">Show/Not Show :</label>

												<input type="checkbox" checked name="s_visible" id="">

											</div>
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary" id="addslider"	data-loading-text="Please Wait..">
					<i class="fa fa-plus" aria-hidden="true"></i> Add Slider </button>
											</form>



      </div>

    </div>

  </div>
</div>




        <!-- page content -->
        <div class="right_col" role="main">
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal_add">
						<i class="fa fa-plus" aria-hidden="true"></i> Add Slider</button>
						<?php 	if(isset($result_upload) && $result_upload=='uploaded'){ ?>
						<div class="alert alert-success alert-dismissible fade in">
						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						<strong>Success!</strong> Uploaded Successfully.
					</div>
					<?php
					}

					if(isset($result_upload) && ($result_upload=='error_uploaded')){
						?>
						<div class="alert alert-danger alert-dismissible fade in" >
						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					<strong>Error!</strong> PLease try agin...
					</div>
						<?php
					}
					?>
						<!-- tables -->
						<table class="table table-sm table-dark">
									<thead>
									<tr>
										<th>#</th>
										<th>Title EN Slider</th>
										<th>Text EN Slider</th>
										<th>Title FA Slider</th>
										<th>Text FA Slider</th>
										<th>Image Slider</th>
										<th>Operation</th>
									</tr>
									</thead>
									<tbody>
									<?php $i=0;$j=0;
									foreach ($sliders as $slider) {
										$i++;
									 ?>
									<tr>
										<td><?= $i;?></td>
										<td><?= $slider->s_title_en;?></td>
										<td>

											<button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#bodytext_<?= $i;?>"
											data-whatever="@mdo"><i class="fa fa-binoculars" aria-hidden="true"></i></button>

										<div class="modal fade" id="bodytext_<?= $i;?>" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
										<div class="modal-header ">
										<h5 class="modal-title text-muted" id="exampleModalLabel" >Slider text</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
										<p class="text-muted"><?= $slider->s_body_en;?> </p>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
										</div>
										</div>
									</div>
									</div>

										</td>
										
										<td><?= $slider->s_title_fa;?></td>
										
										<td>

											<button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#bodytext_<?= $j;?>"
											data-whatever="@mdo"><i class="fa fa-binoculars" aria-hidden="true"></i></button>

										<div class="modal fade" id="bodytext_<?= $j;?>" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
										<div class="modal-header ">
										<h5 class="modal-title text-muted" id="exampleModalLabel" >Slider text</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
										<p class="text-muted"><?= $slider->s_body_fa;?> </p>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
										</div>
										</div>
											</div>
											</div>

										</td>

										<td nowrap>

										<button type="button" id="btn_not<?= $slider->s_id;?>"
											<?php if($slider->s_visible){?> style="display:inline;" <?php } else {?>
										style="display:none;" <?php }?>
											class="btn btn-sm btn-danger"
												 onclick="notshow('<?= $slider->s_id?>')" ><i id="eye_'<?=$slider->s_id?>'"
														class="fa fa-eye" aria-hidden="true"></i></button>


											<button type="button" id="btn_sho<?= $slider->s_id;?>"
											<?php if(!$slider->s_visible){?> style="display:inline;" <?php } else {?>
										style="display:none;" <?php }?>
											class="btn btn-sm btn-success"
												 onclick="show('<?= $slider->s_id?>')" ><i id="eye_'<?= $slider->s_id?>'"
													  class="fa fa-eye" aria-hidden="true"></i></button>


										<!-- edit -->
										<button type="button" disabled class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal_<?= $i;?>"
										data-whatever="@mdo"><i class="fa fa-pencil" aria-hidden="true"></i></button>
										<!-- remove -->
										<button type="button" class="btn btn-sm btn-warning" ><i class="fa fa-trash" aria-hidden="true"></i></button>
										</td>

										<td>

										<a class="btn" rel="popover" data-img="<?php echo base_url();?>assets/img/intro-carousel/<?= $slider->s_img;?> " >Show Image</a>
										</td>


									</tr>
									<div class="modal fade" id="exampleModal_<?= $i;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">Edit Slider</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<form>
											<div class="form-group">
												<label for="recipient-name" class="col-form-label">Title Slider :</label>
												<input type="text" class="form-control" id="recipient-name" value="<?= $slider->s_title;?>" >
											</div>
											<div class="form-group">
												<label for="recipient-name" class="col-form-label">Image :</label>
												<input type="text" class="form-control" id="recipient-name" value="<?= $slider->s_img;?>" disabled>
												<input type="file" class="form-control" id="recipient-name">
											</div>
											<div class="form-group">
												<label for="message-text" class="col-form-label">Text Slider :</label>
												<textarea class="form-control" id="message-text"><?= $slider->s_body;?></textarea>
											</div>
											<div class="form-group">
												<label for="message-text" class="col-form-label">Show/Not Show :</label>
												<?php
												if($slider->s_visible) echo '<input type="checkbox" checked name="" id="">';
												else echo '<input type="checkbox" name="" id="">';
												?>

											</div>
											</form>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
											<button type="button" class="btn btn-primary">Update Change</button>
										</div>
										</div>
									</div>
									</div>
								<?php
									}
								?>

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
	function show(s_id) {
				$.ajax({
							url: "<?php echo base_url()?>Admin/showS",
							type: "POST",
							data:{s_id:s_id},
							success: function(result) {
								// console.log(result);
								if(result=="success"){
									$("#btn_not"+s_id).show();
									$("#btn_sho"+s_id).hide();
								}else if(result=="error_uploaded"){

								}

							}
					});


	}
	function notshow(s_id) {
			$.ajax({
							url: "<?php echo base_url()?>Admin/notshowS",
							type: "POST",
							data:{s_id:s_id},
							success: function(result) {
								// console.log(result);
								if(result=="success"){
									$("#btn_not"+s_id).hide();
									$("#btn_sho"+s_id).show();
								}else if(result=="error_uploaded"){

								}

							}
					});


	}
	</script>


  </body>
</html>
