<?php
include("menu_left.php");
?>

        <!-- page content -->
        
        <div class="right_col" role="main">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal_add">
                        <i class="fa fa-plus" aria-hidden="true"></i> Add Course</button>
<!-- tables -->
<table class="table table-striped table-bordered">
									<thead>
									<tr>
										<th>#</th>
										<th>Code</th>
										<th>Name of the course</th>
										<th>Days/Hours</th>
										<th>Start Date</th>
										<th>End Date</th>
										<th>Name of instructor</th>
										<th>Capacity</th>
										<th>Fee</th>
                                        <th>Descreption</th>
                                        <th>Course imge</th>
                                        
                                        
                                        <th>Delete</th>
									</tr>
									</thead>
									<tbody>
									   
                                       <?php 
                                       $i=0;
                                       foreach ($courses as $course) {
                                        $i++;
                                        ?>

                                           <tr id="tr_<?= $course->id;?>">
                                        <td><?= $i;?></td>
                                        <td><?= $course->Code;?></td>
                                        <td><?= $course->Name;?></td>
                                        <td>
                                            <?php 
                                            $days=$course->Days;
                                            $days=explode(';', $days);
                                            $Hours=$course->Hours;
                                            $Hours=explode(';', $Hours);
                                            $j=0;
                                            foreach ($days as $day) {
                                               switch ($day) {
                                                    case 1:
                                                    $dy="Saturday";
                                                    $h=$Hours[$j];
                                                    break;  
                                                    case 2:
                                                    $dy="Sunday";
                                                    $h=$Hours[$j];
                                                    # code...
                                                    break;
                                                    case 3:
                                                    $dy="Monday";
                                                    $h=$Hours[$j];
                                                    # code...
                                                    break;
                                                    case 4:
                                                    $dy="Tuesday";
                                                    $h=$Hours[$j];
                                                    # code...
                                                    break;
                                                    case 5:
                                                    $dy="Wednesday";
                                                    $h=$Hours[$j];
                                                    # code...
                                                    break;
                                                    case 6:
                                                    $dy="Thursday";
                                                    $h=$Hours[$j];
                                                    # code...
                                                    break;
                                                    case 7:
                                                    $dy="Friday";
                                                    $h=$Hours[$j];
                                                    # code...
                                                    break;
                                                    
                                                    default:
                                                        # code...
                                                        break;
                                                }
                                                $j++; 
                                                echo "<p style='border-bottom:1px solid #c1bbbb'>".$dy." ".$h."</p>   ";
                                            }
                                        
                                            ?>
                                        </td>
                                        <td><?= $course->SDate;?></td>
                                        <td><?= $course->EDate;?></td>
                                        <td><?= $course->instructor;?></td>
                                        <td><?= $course->Capacity;?></td>
                                        <td><?= $course->Fee;?></td>
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
                                        <p class="text-muted"><?= $course->course_descreption;?> </p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                        </td>

                                        <td>



                                            <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#bodyimg_<?= $i;?>"
                                            data-whatever="@mdo"><i class="fa fa-binoculars" aria-hidden="true"></i></button>

                                        <div class="modal fade" id="bodyimg_<?= $i;?>" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header ">
                                        <h5 class="modal-title text-muted" id="exampleModalLabel" >Your Image</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                        
                                        <div class="card-img">
                        <img style="width: 100%;height: 100%;" src="<?php echo base_url(); ?>/assets/img/list/<?= $course->course_img ?>" alt="">
                    </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                        </td>


                                        <td>
                                           <button type="button" class="btn btn-sm btn-danger" 
                                           onclick="removee('<?= $course->id?>')">
                                        <i class="fa fa-trash"></i></button> 
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





<!-- Modal  Add slider-->
<div id="myModal_add" class="modal fade " role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Course</h4>
      </div>
      <div class="modal-body">

                            
                                         


                                         <section>
  <div class="container">
    <div class="row">
      <div class="col-sm-12">



        <form action="<?php echo base_url()?>Admin/addCourse"
        method="POST"  enctype="multipart/form-data">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Code</label>
      <input type="text" class="form-control" name="Code" id="Code" placeholder="Code">
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Name of instructor</label>
      <input type="text" class="form-control" name="instructor" id="instructor" placeholder="Name of instructor">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Name of the course</label>
      <input type="text" class="form-control" id="course" name="course" placeholder="Name of the course">
    </div>
  </div>

   <div class="form-row">
    <div class="form-group col-md-3">
      <label for="inputEmail4">Start Date</label>
      <input type="date" class="form-control" name="sdate" id="sdate" placeholder="Start Date">
    </div>
    <div class="form-group col-md-3">
      <label for="inputPassword4">End Date</label>
      <input type="date" class="form-control" id="edate" name="edate" placeholder="End Date">
    </div>
    <div class="form-group col-md-3">
      <label for="inputPassword4">Capacity</label>
      <input type="text" class="form-control" id="Capacity" name="Capacity" placeholder="Capacity">
    </div>
    <div class="form-group col-md-3">
      <label for="inputPassword4">Fee</label>
      <input type="text" class="form-control" id="Fee" name="Fee" placeholder="Fee">
    </div>
  </div>

     <div class="form-row">
    <div class="form-group col-md-2">
      <label for="inputEmail4">Saturday Start</label>
      <input type="time" class="form-control" name="Saturday_Start" id="Saturday_Start">
    </div>
    <div class="form-group col-md-2">
      <label for="inputEmail4">Saturday End</label>
      <input type="time" class="form-control" name="Saturday_End" id="Saturday_End">
    </div>
    <div class="form-group col-md-2">
      <label for="inputEmail4">Sunday Start</label>
      <input type="time" class="form-control" name="Sunday_Start" id="Sunday_Start">
    </div>
    <div class="form-group col-md-2">
      <label for="inputEmail4">Sunday End</label>
      <input type="time" class="form-control" name="Sunday_End" id="Sunday_End">
    </div>

    <div class="form-group col-md-2">
      <label for="inputEmail4">Monday Start</label>
      <input type="time" class="form-control" name="Monday_Start" id="Monday_Start">
    </div>
    <div class="form-group col-md-2">
      <label for="inputEmail4">Monday End</label>
      <input type="time" class="form-control" name="Monday_End" id="Monday_End">
    </div>

  </div>

  <div class="form-row">
    <div class="form-group col-md-2">
      <label for="inputEmail4">Tuesday Start</label>
      <input type="time" class="form-control" name="Tuesday_Start" id="Tuesday_Start">
    </div>
    <div class="form-group col-md-2">
      <label for="inputEmail4">Tuesday End</label>
      <input type="time" class="form-control" name="Tuesday_End" id="Tuesday_End">
    </div>
    <div class="form-group col-md-2">
      <label for="inputEmail4">Wednesday Start</label>
      <input type="time" class="form-control" name="Wednesday_Start" id="Wednesday_Start">
    </div>
    <div class="form-group col-md-2">
      <label for="inputEmail4">Wednesday_End</label>
      <input type="time" class="form-control" name="Wednesday_End" id="Wednesday_End">
    </div>

    <div class="form-group col-md-2">
      <label for="inputEmail4">Thursday Start</label>
      <input type="time" class="form-control" name="Thursday_Start" id="Thursday_Start">
    </div>
    <div class="form-group col-md-2">
      <label for="inputEmail4">Thursday End</label>
      <input type="time" class="form-control" name="Thursday_End" id="Thursday_End">
    </div>

  </div>

<div class="form-row">
     <div class="form-group col-md-2">
      <label for="inputEmail4">Friday Start</label>
      <input type="time" class="form-control" name="Friday_Start" id="Friday_Start">
    </div>
    <div class="form-group col-md-2">
      <label for="inputEmail4">Friday End</label>
      <input type="time" class="form-control" name="Friday_End" id="Friday_End">
    </div>
    </div>

    <div class="form-row">
   <div class="form-group col-md-12">
    <label for="exampleFormControlTextarea1">Descreption</label>
    <textarea class="form-control" name="Descreption" id="Descreption" rows="3"></textarea>
  </div>
    </div>

    <div class="form-row">
   <div class="form-group col-md-12">
   <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span>
    <span class="fileinput-exists">Change</span>
    <input type="file" name="course_image" >
</span>
  </div>
    </div>





<div class="form-row">

<div class=" col-md-12">
  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" id="addslider"    data-loading-text="Please Wait..">
                    <i class="fa fa-plus" aria-hidden="true"></i> Add Download </button>
</div>
</div>

</form>


            
      </div>
    </div>
  </div>
</section>

                                          

                                            



      </div>

    </div>

  </div>
</div>
<!-- end add downloads -->


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
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
<script src="https://unpkg.com/gijgo@1.9.11/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.11/css/gijgo.min.css" rel="stylesheet" type="text/css" />


<script>
        $('#Saturday_Start').timepicker({
            uiLibrary: 'bootstrap4'
        });
        $('#Sunday_Start').timepicker({
            uiLibrary: 'bootstrap4'
        });
        $('#Monday_Start').timepicker({
            uiLibrary: 'bootstrap4'
        });
        $('#Tuesday_Start').timepicker({
            uiLibrary: 'bootstrap4'
        });
        $('#Wednesday_Start').timepicker({
            uiLibrary: 'bootstrap4'
        });
        $('#Thursday_Start').timepicker({
            uiLibrary: 'bootstrap4'
        });
        $('#Friday_Start').timepicker({
            uiLibrary: 'bootstrap4'
        });

        $('#Saturday_End').timepicker({
            uiLibrary: 'bootstrap4'
        });
        $('#Sunday_End').timepicker({
            uiLibrary: 'bootstrap4'
        });
        $('#Monday_End').timepicker({
            uiLibrary: 'bootstrap4'
        });
        $('#Tuesday_End').timepicker({
            uiLibrary: 'bootstrap4'
        });
        $('#Wednesday_End').timepicker({
            uiLibrary: 'bootstrap4'
        });
        $('#Thursday_End').timepicker({
            uiLibrary: 'bootstrap4'
        });
        $('#Friday_End').timepicker({
            uiLibrary: 'bootstrap4'
        });
    </script>
<script>
    function removee(id) {
        $("#tr_"+id).remove();
                        $.ajax({
                            url: "<?php echo base_url()?>Admin/removeC",
                            type: "POST",
                            data:{id:id},
                            success: function(result) {
                                    
                                }

                            });

    }
</script>
  </body>
</html>
