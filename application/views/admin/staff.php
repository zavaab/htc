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
        <h4 class="modal-title">Add Master</h4>
      </div>
      <div class="modal-body">

							<form id="addSlider_Form" action="<?php echo base_url()?>Admin/addMaster" method="POST" enctype="multipart/form-data">
											<div class="form-group">
												<label for="recipient-name" class="col-form-label">FirstName EN :</label>
												<input type="text" class="form-control" id="recipient-name" name="FirstName_en" >
											</div>
											<div class="form-group">
												<label for="recipient-name" class="col-form-label">LastName EN :</label>
												<input type="text" class="form-control" id="recipient-name" name="LastName_en" >
											</div>
											
											<div class="form-group">
												<label for="recipient-name" class="col-form-label">FirstName FA :</label>
												<input type="text" class="form-control" id="recipient-name" name="FirstName_fa" >

												</div>
											<div class="form-group">
												<label for="recipient-name" class="col-form-label">LastName FA :</label>
												<input type="text" class="form-control" id="recipient-name" name="LastName_fa" >
											</div>
											
											<div class="form-group">
												<label for="recipient-name" class="col-form-label">Email :</label>
												<input type="text" class="form-control" id="recipient-name" name="Email" >
											</div>
											<div class="form-group">
												<label for="recipient-name" class="col-form-label">Mobile :</label>
												<input type="text" class="form-control" id="recipient-name" name="Mobile" >
											</div>
											<div class="form-group">
												<label for="message-text" class="col-form-label">Affiliation EN:</label>
												<textarea class="form-control" id="text_download" name="Affiliation_en"></textarea>
											</div>
											<div class="form-group">
												<label for="message-text" class="col-form-label">Affiliation FA:</label>
												<textarea class="form-control" id="text_download" name="Affiliation_fa"></textarea>
											</div>
											
											<div class="form-group">
											<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-instagram" aria-hidden="true"></i></span>
											<input id="email" type="text" class="form-control" name="instagram" placeholder="instagram">
											</div>
											</div>
											<div class="form-group">
											<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-facebook" aria-hidden="true"></i></span>
											<input id="email" type="text" class="form-control" name="facebook" placeholder="facebook">
											</div>
											</div>
											<div class="form-group">
											<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-twitter" aria-hidden="true"></i></span>
											<input id="email" type="text" class="form-control" name="twitter" placeholder="twitter">
											</div>
											</div>
											<div class="form-group">
											<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-linkedin" aria-hidden="true"></i></span>
											<input id="email" type="text" class="form-control" name="linkedin" placeholder="linkedin">
											</div>
											</div>


											<div class="form-group">
											<div class="fileinput fileinput-new" data-provides="fileinput">

											<div>
												<span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span>
												<span class="fileinput-exists">Change</span>
												<input type="file" name="master_image" >
											</span>
											</div>

											
										</div>

										
											</div>


											<div class="form-group">
												<label for="message-text" class="col-form-label">Show/Not Show :</label>

												<input type="checkbox" checked name="m_show" id="">

											</div>

											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary" id="addslider"	data-loading-text="Please Wait..">
					<i class="fa fa-plus" aria-hidden="true"></i> Add Master </button>
											</form>



      </div>

    </div>

  </div>
</div>
<!-- end add Staff -->





        <!-- page content -->
        <div class="right_col" role="main">
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal_add">
						<i class="fa fa-plus" aria-hidden="true"></i> Add Master</button>


	<!-- tables -->
	<table class="table table-sm table-dark">
									<thead>
									<tr>
									<th>#</th>
									<th>FirstName En</th>
									<th>FirstName Fa</th>
									<th>LastName En</th>
									<th>LastName Fa</th>
									<th>Email</th>
									<th>Mobile</th>
									<th>Image</th>
									<th>Affiliation En</th>
									<th>Affiliation Fa</th>

									<th>Show</th>

										<!-- <th>Link Download</th> -->

									</tr>
									</thead>
									<tbody>

									<?php $i=0;
									foreach ($staff as $master) {
										$i++;
									 ?>
									<tr <?php if ($master->m_deleted==1) echo "style='background: #f6ffa3;' ";  ?> id="tr_<?=  $master->m_id  ?>">
										<td><?= $i?></td>
										<td><?= $master->m_firstname_en;?></td>
										<td><?= $master->m_firstname_fa;?></td>
										<td><?= $master->m_lastname_en;?></td>
										<td><?= $master->m_lastname_fa;?></td>
										<td><?= $master->m_email;?></td>
										<td><?= $master->m_mobile;?></td>

										<td>

<a class="btn" rel="popover" data-img="<?php echo base_url();?>assets/img/masters/<?= $master->m_image;?> " >Show Image</a>
</td>
										<td><?= $master->m_affiliation_en;?></td>
										<td><?= $master->m_affiliation_fa;?></td>
										<td>
											<!-- remove -->
										<button type="button" class="btn btn-sm btn-danger"  onclick="remove('<?= $master->m_id?>')">
										<i class="fa fa-trash"></i></button>


										<button type="button" id="btn_not<?= $master->m_id;?>"
											<?php if($master->m_show){?> style="display:inline;" <?php } else {?>
										style="display:none;" <?php }?>
											class="btn btn-sm btn-danger"
											onclick="notshow('<?= $master->m_id?>')" ><i id="eye_'<?= $master->m_id?>'"
												class="fa fa-eye" aria-hidden="true"></i></button>


											<button type="button" id="btn_sho<?= $master->m_id;?>"
											<?php if(!$master->m_show){?> style="display:inline;" <?php } else {?>
										style="display:none;" <?php }?>
											class="btn btn-sm btn-success"
												 onclick="show('<?= $master->m_id?>')" ><i id="eye_'<?= $master->m_id?>'"
													  class="fa fa-eye" aria-hidden="true"></i></button>


										</td>



									</tr>

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
	function show(m_id) {
				$.ajax({
							url: "<?php echo base_url()?>Admin/showM",
							type: "POST",
							data:{m_id:m_id},
							success: function(result) {
								// console.log(result);
								if(result=="success"){
									$("#btn_not"+m_id).show();
									$("#btn_sho"+m_id).hide();
								}else if(result=="error_uploaded"){

								}

							}
					});


	}
	function notshow(m_id) {
			$.ajax({
							url: "<?php echo base_url()?>Admin/notshowM",
							type: "POST",
							data:{m_id:m_id},
							success: function(result) {
								// console.log(result);
								if(result=="success"){
									$("#btn_not"+m_id).hide();
									$("#btn_sho"+m_id).show();
								}else if(result=="error_uploaded"){

								}

							}
					});


	}


	function remove(m_id) {

			$.ajax({
							url: "<?php echo base_url()?>Admin/deleteM",
							type: "POST",
							data:{m_id:m_id},
							success: function(result) {
								// console.log(result);
								if(result=="deleted"){
									$("#tr_"+m_id).remove();
								}else if(result=="notdeleted"){

								}

							}
					});


	}


</script>

  </body>
</html>
