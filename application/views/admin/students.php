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
										<th>FirstName</th>
										<th>LastName</th>
										<th>Mobile</th>
										<!-- <th>Birthdate</th> -->
										<th>Email</th>
										<th>DateRegister</th>
										<th>Delete/Reset</th>
										<!-- <th>Student</th>
										<th>Graduated</th>
										<th>Grade</th>
										<th>Field</th>
										<th>University</th>
										<th>Email</th>
										<th>Mobile</th>
										<th>Phone</th>
										<th>picture</th> -->
									</tr>
									</thead>
									<tbody>
									<?php $i=0;
									foreach ($students as $student) {
										$i++;
									 ?>
									<tr>
										<td><?= $student->s_id;?></td>
										<td><?= $student->s_firstname;?></td>
										<td><?= $student->s_lastname;?></td>
										<td><?= $student->s_mobile;?></td>
										<td><?= $student->s_email;?></td>
										<td><?= $student->s_date;?></td>
										<td>
											<!-- remove -->
										<button type="button" class="btn btn-sm btn-danger"  onclick="delete('<?= $student->s_id?>')"><i class="fa fa-trash"
										aria-hidden="true"></i></button>
										<!-- edit -->
										<button type="button" onclick="reset('<?= $student->s_id?>')" class="btn btn-sm btn-info">
										<i class="fa fa-eye-slash" aria-hidden="true"></i></button>
										</td>


										<!-- <td><?= $student->s_birthdate_fa;?></td>
										<td><?= $student->s_student;?></td>
										<td><?= $student->s_graduated;?></td>
										<td><?= $student->s_grade;?></td>
										<td><?= $student->s_field;?></td>
										<td><?= $student->s_university;?></td>
										<td><?= $student->s_email;?></td>
										<td><?= $student->s_mobile;?></td>
										<td><?= $student->s_phone;?></td> -->


									<!-- <td>
									<img id="myImg_<?= $i;?>" src="<?php echo base_url();
									?>assets/img/students/<?= $student->s_image;?>" alt="Snow" style="width:100%;max-width:150px" onclick="dispImage(<?= $i;?>)">
									<div id="myModal_<?= $i;?>" class="modal1">
									<span class="close" id="close_<?= $i;?>"  >&times;</span>

									<img class="modal-content" id="img01_<?= $i;?>">
									<div id="caption"></div>
									</div>
									</td> -->
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

  </body>
</html>
