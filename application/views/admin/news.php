<?php
include("menu_left.php");
?>

        <!-- page content -->
        <div class="right_col" role="main">
<!-- tables -->
<table class="table table-hover table-bordered">
									<thead>
									<tr>
										<th>#</th>
										<th>title en</th>
										<th>title fa</th>
										<th>show</th>
									</tr>
									</thead>
									<tbody>
									<?php $i=0;
									foreach ($news as $one_new) {
										$i++;
									 ?>
									<tr id="news_<?php echo $one_new->id;?>">
										<td><?= $i; ?></td>
										<td><?= $one_new->news_title_en;?></td>
										<td><?= $one_new->news_title_fa;?></td>
										<td>
                                        <button type="button" id="btn_not<?= $one_new->id;?>"
											<?php if($one_new->news_show){?> style="display:inline;" <?php } else {?>
										style="display:none;" <?php }?>
											class="btn btn-sm btn-danger"
												 onclick="notshow('<?= $one_new->id?>')" ><i id="eye_'<?=$one_new->id?>'"
														class="fa fa-eye" aria-hidden="true"></i></button>


											<button type="one_new" id="btn_sho<?= $one_new->id;?>"
											<?php if(!$one_new->news_show){?> style="display:inline;" <?php } else {?>
										style="display:none;" <?php }?>
											class="btn btn-sm btn-success"
												 onclick="show('<?= $one_new->id?>')" ><i id="eye_'<?= $one_new->id?>'"
                                                      class="fa fa-eye" aria-hidden="true"></i></button>


                                                      <!-- remove -->
										<button type="button" class="btn btn-sm btn-warning" onclick="trash(<?= $one_new->id?>)" ><i class="fa fa-trash" aria-hidden="true"></i></button>
                                                      
                                        </td>
									</tr>

								<?php
									}
								?>

									</tbody>
								</table>
                        <!-- tables -->
                        

                        <style>
                                            
                    .form-box {
                    max-width: 700px;
                    margin: auto;
                    padding: 50px;
                    background: #ffffff;
                    border: 10px solid #f2f2f2;
                    }

                    h1, p {
                    text-align: center;
                    }

                    input, textarea {
                    width: 100%;
                    }
                        </style>

                        <hr>

                        <div class="form-box">
                    <h1>Add News</h1>
                    
                    <form action="<?php echo base_url()?>Admin/addNews" method="POST">
                        <div class="form-group">
                        <label for="name">Title Persian</label>
                        <input class="form-control"  id="news_title_fa" type="text" name="news_title_fa" style="direction: rtl">
                        </div>
                        <div class="form-group">
                        <label for="email">Title English</label>
                        <input class="form-control" id="news_title_en" type="text" name="news_title_en">
                        </div>

                        <div class="text-left">
                        <label for="message-text" class="col-form-label">Show/Not Show :</label>
                        <input type="checkbox"  checked name="news_show" id="" style="width:auto">
                        </div>
                                            
                        <input class="btn btn-primary" type="submit" value="Submit" />
                        </div>
                    </form>
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



    
    <script>
    function trash(id){
        $.ajax({
            url: "<?php echo base_url()?>Admin/trashNews",
            type: "POST",
            data:{id:id},
            success: function(result) {
                // console.log(result);
                if(result=="success"){
                    $("#news_"+id).remove();
                }else{

                }

            }
    });
        }
    </script>

<script>
	function show(s_id) {
				$.ajax({
							url: "<?php echo base_url()?>Admin/showNews",
							type: "POST",
							data:{id:s_id},
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
							url: "<?php echo base_url()?>Admin/notshowNews",
							type: "POST",
							data:{id:s_id},
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
