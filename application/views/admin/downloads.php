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
        <h4 class="modal-title">Downloads</h4>
      </div>
      <div class="modal-body">

							<form id="addSlider_Form" action="<?php echo base_url()?>Admin/addDownload" method="POST" enctype="multipart/form-data">
											<div class="form-group">
												<label for="recipient-name" class="col-form-label">Title Download En:</label>
												<input type="text" class="form-control" id="recipient-name" name="title_download_en" >
											</div>
											<div class="form-group">
												<label for="recipient-name" class="col-form-label">Title Download Fa:</label>
												<input type="text" class="form-control" id="recipient-name" name="title_download_fa" >
											</div>

											<div class="form-group">
											<div class="fileinput fileinput-new" data-provides="fileinput">

											<div>
											<span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span>
												
												<input type="file" name="download_image" >
											</span>
											</div>
											
										</div>

											</div>

<hr>

											<div class="form-group">
											<div class="fileinput fileinput-new" data-provides="fileinput">

											<div>
											<span class="btn btn-default btn-file"><span class="fileinput-new">Select File</span>
												
												<input type="file" name="pdffile1" >
											</span>
											</div>
											
										</div>

											</div>

											
											<div class="form-group">
												<label for="message-text" class="col-form-label">Text download En :</label>
												<textarea class="form-control" id="text_download" name="text_download_en"></textarea>
											</div>
											<div class="form-group">
												<label for="message-text" class="col-form-label">Text download Fa :</label>
												<textarea class="form-control" id="text_download" name="text_download_fa"></textarea>
											</div>
											<div class="form-group">
											<label for="message-text" class="col-form-label">Category Type :</label>
											<select class="form-control" id="d_category" name="d_category">
												<option value="TOEFL">TOEFL</option>
												<option value="IELTSIELTS">IELTSIELTS</option>
												<option value="GRE">GRE</option>
												<option value="GENERAL">GENERAL</option>
											</select>
										</div>
											<div class="form-group">
												<label for="message-text" class="col-form-label">Show/Not Show :</label>

												<input type="checkbox" checked name="s_visible" id="">

											</div>

											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary" id="addslider"	data-loading-text="Please Wait..">
					<i class="fa fa-plus" aria-hidden="true"></i> add </button>
											</form>



      </div>

    </div>

  </div>
</div>
<!-- end add downloads -->



        <!-- page content -->
        <div class="right_col" role="main">
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal_add">
						<i class="fa fa-plus" aria-hidden="true"></i> Add Downloads</button>
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
										<th>Title Download</th>
										<th>Your Text</th>
										<!-- <th>Link Download</th> -->
										<th>Operation</th>
										<th>Image Download</th>
										<th>Details</th>
									</tr>
									</thead>
									<tbody>
									<?php $i=0;
									foreach ($downloads as $download) {
										$i++;
									 ?>
									<tr id="tr_<?= $download->d_id;?>">
										<td><?= $i;?></td>
										<td><?= $download->d_title;?></td>
										<td>

											<button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#bodytext_<?= $i;?>"
											data-whatever="@mdo"><i class="fa fa-binoculars" aria-hidden="true"></i></button>

										<div class="modal fade" id="bodytext_<?= $i;?>" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
										<div class="modal-header ">
										<h5 class="modal-title text-muted" id="exampleModalLabel" >Your Text</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
										<p class="text-muted"><?= $download->d_text;?> </p>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
										</div>
										</div>
									</div>
									</div>

										</td>



										<td>


											<button type="button" id="btn_not<?= $download->d_id;?>"
											<?php if($download->d_visible){?> style="display:inline;" <?php } else {?>
										style="display:none;" <?php }?>
											class="btn btn-sm btn-danger"
											onclick="notshow('<?= $download->d_id?>')" ><i id="eye_'<?= $download->d_id?>'"
												class="fa fa-eye" aria-hidden="true"></i></button>


											<button type="button" id="btn_sho<?= $download->d_id;?>"
											<?php if(!$download->d_visible){?> style="display:inline;" <?php } else {?>
										style="display:none;" <?php }?>
											class="btn btn-sm btn-success"
												 onclick="show('<?= $download->d_id?>')" ><i id="eye_'<?= $download->d_id?>'"
													  class="fa fa-eye" aria-hidden="true"></i></button>

										<!-- remove -->
										<button type="button" class="btn btn-sm btn-warning"  onclick="removee('<?= $download->d_id?>')"><i class="fa fa-trash"     aria-hidden="true"></i></button>
										<!-- edit -->
										<button type="button" class="btn btn-sm btn-primary" data-toggle="modal" disabled data-target="#exampleModal_<?= $i;?>"
										data-whatever="@mdo"><i class="fa fa-pencil" aria-hidden="true"></i></button>
										</td>
										<td>

										<a class="btn" rel="popover" data-img="<?php echo base_url();?>assets/img/downloads/<?= $download->d_img;?> " >Show Image</a>
										</td>

										<td>
										<!-- Details -->
										<button type="button" class="btn btn-sm btn-warning"
										onclick="details('<?= $download->d_id?>')">متن اصلی  </button>

										<!-- <button type="button" class="btn btn-sm btn-warning"
										onclick="showdetails('<?= $download->d_id?>')"> متن اصلی </button>
 -->
										</td>


									</tr>
									<div class="modal fade" id="exampleModal_<?= $i;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">Edit Download</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<form>
											<div class="form-group">
												<label for="recipient-name" class="col-form-label">Title :</label>
												<input type="text" class="form-control" id="recipient-name" value="<?= $download->d_title;?>" >
											</div>
											<div class="form-group">
												<label for="recipient-name" class="col-form-label">Image :</label>
												<input type="text" class="form-control" id="recipient-name" value="<?= $download->d_img;?>" disabled>
												<input type="file" class="form-control" id="recipient-name">
											</div>
											<div class="form-group">
												<label for="message-text" class="col-form-label">Text Download :</label>
												<textarea class="form-control" id="message-text"><?= $download->d_text;?></textarea>
											</div>
											<div class="form-group">
											<label for="message-text" class="col-form-label">Category Type :</label>
											<select class="form-control" id="d_category" value="<?=$download->d_category;?>">
												<option value="TOEFL">TOEFL</option>
												<option value="IELTSIELTS">IELTSIELTS</option>
												<option value="GRE">GRE</option>
												<option value="GENERAL">GENERAL</option>
											</select>
										</div>
											<div class="form-group">
												<label for="message-text" class="col-form-label">Show/Not Show :</label>
												<?php
												if($download->d_visible) echo '<input type="checkbox" checked name="" id="">';
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






					<div class="container" id="detail"  >

						<div class="col-md-12">
						<form id="" action="<?php echo base_url()?>Admin/details"
						 method="POST" enctype="multipart/form-data">
						 <input type="hidden" id="d_id" name="d_id"  >
						 <textarea name="details" id="details" class="details" cols="30" rows="10">

										</textarea>

				<button type="submit" class="btn btn-primary" >
					<i class="fa fa-plus" aria-hidden="true"></i> Update </button>

								</form>

						</div>
					</div>






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
	<!-- <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script> -->
	<script src="<?php echo base_url(); ?>assets/js/tinymce/tiny_mce.js"></script>


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
				$.ajax({
							url: "<?php echo base_url()?>Admin/removeD",
							type: "POST",
							data:{d_id:d_id},
							success: function(result) {
								// console.log(result);
								if(result=="success"){
									$("#tr_"+d_id).remove();
								}else if(result=="error_uploaded"){

								}

							}
					});

	}


</script>

<script>
	// tinymce.init({
	// 	selector:'#details',
	// 	plugins : 'advlist autolink link image lists charmap print preview'
	// });

</script>


<script type="text/javascript">
				  	tinyMCE.init({
						mode : "exact",
						elements: "details",
						theme : "advanced",
						browser_spellcheck: true,
						language : "en",
						directionality : "ltr",
						plugins : "spellchecker,safari,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",

						// Theme options
						theme_advanced_buttons1 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,formatselect,fontselect,fontsizeselect",
						theme_advanced_buttons2 : "bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,code,|,preview,|,forecolor,backcolor,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking",
						theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen,|,spellchecker",
						theme_advanced_toolbar_location : "top",
						theme_advanced_toolbar_align : "left",
						theme_advanced_statusbar_location : "bottom",
						file_browser_callback : "ajaxfilemanager",
						theme_advanced_resizing : true,

						// Example content CSS (should be your site CSS)
						content_css : "inc/css/editor/content.css",
						relative_urls : false,
						//remove_script_host : false,
						// Drop lists for link/image/media/template dialogs
						template_external_list_url : "lists/template_list.js",
						external_link_list_url : "lists/link_list.js",
						external_image_list_url : "lists/image_list.js",
						media_external_list_url : "lists/media_list.js"

					});
				</script>
				<script language="javascript" type="text/javascript" src="<?php echo base_url(); ?>assets/js/tinymce/editor_config.js"></script>

<script>
	function details(d_id){
		$("#d_id").val(d_id);
	}
</script>


  </body>
</html>
