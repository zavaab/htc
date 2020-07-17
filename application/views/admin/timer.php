<?php
include("menu_left.php");
?>

<link href="<?php echo base_url(); ?>assets/css/datetimepicker.css" rel="stylesheet" type="text/css"/>
 <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">






        <!-- page content -->
        <div class="right_col" role="main">


        	<form class="form-inline" method="post" action="<?php echo base_url()?>Admin/SetTimer" >
				  
				  <!-- <input type="text" id="result" value="" class="form-control mb-2 mr-sm-2" > -->
				  <div id="picker">   </div>
					Time
					<input type="text" id="result" name="timer"  class="form-control mb-2 mr-sm-2" >

<label for="email" class="mr-sm-2">Text english</label>
<textarea rows="4" cols="50" name="text_en">

</textarea>

<label for="email" class="mr-sm-2">Text Persian</label>
<textarea rows="4" cols="50" name="text_fa">

</textarea>

				

				  <input type="submit" class="btn btn-primary" value="Add Countdown" >
						
				</form>



               <div class="container-fluid">


              <hr>
                <div class="row">

                   <div class="form-group col-md-12">
                        <!-- tables -->
                        <table class="table table-sm table-dark">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>End Time</th>
                                        <th>Text Time english</th>
										<th>Text Time Persian</th>
                                        <th>Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i=0;  foreach ($timers as $timer) {
                                            $i++;
                                            ?>
                                            <tr id="tr_<?= $timer->id?>">
                                        <td><?= $i;?></td>
                                        <td><?= $timer->date;?> <?= $timer->clock;?></td>
                                        <td><?= $timer->text_en;?></td>
										<td><?= $timer->text_fa;?></td>
                                        <td>
                                                <button type="button" id="btn_not<?= $timer->id;?>"
                                            <?php if($timer->state){?> style="display:inline;" <?php } else {?>
                                        style="display:none;" <?php }?>
                                            class="btn btn-sm btn-danger"
                                            onclick="notshow('<?= $timer->id?>')" ><i id="eye_'<?= $timer->id?>'"
                                                class="fa fa-eye" aria-hidden="true"></i></button>

                                                <button type="button" id="btn_sho<?= $timer->id;?>"
                                            <?php if(!$timer->state){?> style="display:inline;" <?php } else {?>
                                        style="display:none;" <?php }?>
                                            class="btn btn-sm btn-success"
                                                 onclick="show('<?= $timer->id?>')" ><i id="eye_'<?= $timer->id?>'"
                                                      class="fa fa-eye" aria-hidden="true"></i></button>

                            <button type="button" class="btn btn-sm btn-danger"  onclick="remove('<?= $timer->id?>')">
                                        <i class="fa fa-trash"></i></button>

                                        </td>
                                            <?php
                                        } ?>
                                    </tr>
                                    </tbody>


                                </table>

                               
                          
                  </div>

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
    <script src="<?php echo base_url(); ?>assets/js/moment-with-locales.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/datetimepicker.js"></script>
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











<script type="text/javascript">
	$('#picker').dateTimePicker({
  dateFormat: "YYYY-MM-DD HH:mm:ss"
});
</script>


<script>
    function show(m_id) {
                $.ajax({
                            url: "<?php echo base_url()?>Admin/showT",
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
                            url: "<?php echo base_url()?>Admin/notshowT",
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
                            url: "<?php echo base_url()?>Admin/deleteT",
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
