<?php
include("menu_left.php");
?>

<script src="http://cdn.tinymce.com/4/tinymce.min.js" referrerpolicy="origin"></script>
<script>
tinymce.init({
    selector: '#body1,#body2',
    theme: 'modern',
    plugins: [
    'advlist autolink lists link image charmap print preview anchor',
    'searchreplace visualblocks code fullscreen',
    'insertdatetime table contextmenu paste code directionality'
    ],
    toolbar1: 'insertfile undo redo | styleselect | bold italic | bullist numlist outdent indent | fontsizeselect  | ltr rtl',
	setup: function (editor)
	{
		editor.on ('init', function()
		{
			this.execCommand ('fontsize', false, '24pt');
			this.getBody().style.fontSize = '24pt';
		})
		//this.formatter.apply ('fontsize', {value: '24pt'});
	}
});



  </script>

        <!-- page content -->
        <div class="right_col" role="main">

<hr style="border-top: 2px solid #b9aeae;">

<form action="<?php echo base_url()?>Admin/updatepage" method="post" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?php echo $page['id']; ?>">
        <div class="container" style="padding: 40px;">

                <div class="row">

                        <div class="col-md-4">
                                <div class="form-row">
                                <div class="form-group">
                                <label for="inputEmail4">Title Of Page</label>
                                <input type="text" class="form-control" name="title" id="title" placeholder="Title Of Page" value="<?php echo $page["page_title"]; ?>">
                                </div>
                                </div>
                            </div>

                    </div>
            <!-- PART1 -->
            <div class="row">
            <div class="panel panel-default">
                    <div class="panel-heading">PART1</div>
                    <div class="panel-body">
                        
                            <div class="col-md-12">
                                    <div class="form-row">
                                    <div class="form-group">
                                    <label for="inputEmail4">First Title</label>
                                    <input type="text" class="form-control" name="title1" id="title1" placeholder="First Title" value="<?php echo $page["title1"]; ?>">
                                    </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                    <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span>
                                        <span class="fileinput-exists">Change</span>
                                        <input type="file" name="image1" >
                                    </span>
                                    </div>
                                        </div>
                                </div>
                    
                                <div class="col-md-12">
                                        <div class="form-row">
                                        <div class="form-group">
                                        <label for="inputEmail4">First Body</label>
                                        <textarea id="body1" name="body1">
                                        <?php echo $page["body1"]; ?>

                                        </textarea>
                                        </div>
                                        </div>
                                    </div>


                    </div>
                    </div>

            



            </div>
            <!-- PART1 -->
            <!-- PART1 -->
            <div class="row">
            <div class="panel panel-default">
                    <div class="panel-heading">PART2</div>
                    <div class="panel-body">
                        
                            <div class="col-md-12">
                                    <div class="form-row">
                                    <div class="form-group">
                                    <label for="inputEmail4">Secend Title</label>
                                    <input type="text" class="form-control" name="title2" id="title2" placeholder="Secend Title" value=" <?php echo $page["title2"]; ?>">
                                    </div>
                                    </div>
                                </div>
                    
                                <div class="col-md-12">
                                        <div class="form-row">
                                        <div class="form-group">
                                        <label for="inputEmail4">Secend Body</label>
                                        <textarea id="body2" name="body2">
                                        <?php echo $page["body2"]; ?>



                                        </textarea>
                                        </div>
                                        </div>
                                    </div>


                    </div>
                    </div>

            



            </div>
            <!-- PART1 -->
            <!-- PART1 -->
            <div class="row">
            <div class="panel panel-default">
                    <div class="panel-heading">PART3</div>
                    <div class="panel-body">
                        
                            <div class="col-md-12">
                                    <div class="form-row">
                                    <div class="form-group">
                                    <label for="inputEmail4">Third Title</label>
                                    <input type="text" class="form-control" name="title3" id="title3" placeholder="Third Title" value="<?php echo $page["title3"]; ?>">
                                    </div>
                                    </div>
                            </div>
                    
                            <?php $collapses= json_decode($page["body3"]); ?>

                                <div id="collapse">

                                <?php $i=1; foreach ($collapses as $key => $value) {  ?>
                                        <div class="col-md-12">
                                    <div class="form-group">
                                    <div class="col-sm-12"><label>title</label>
                                        <input class="form-control" name="collapse_title_<?php echo $i; ?>" id="collapse_title_<?php echo $i; ?>" placeholder="title" type="text" value="<?php echo $value[0] ?>">
                                    </div>

                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-12" for="TextArea">Value</label>
                                        <div class="col-sm-12"><textarea class="form-control" name="collapse_body_<?php echo $i; ?>" id="collapse_body_<?php echo $i; ?>"><?php echo $value[1] ?></textarea></div>
                                    </div>
                                        
                                </div>
                                <?php $i++; } ?>
                                
                               
                            
                              
                                
                            </div>

                        </div>


                    </div>
                   

            



            </div>
            <!-- PART1 -->
        </div>
        <input type="submit" class="btn btn-info" value="Update this Page" />
    </form>


                        <!-- tables -->
    <!-- <form method="post">
        <textarea id="mytextarea" name="mytextarea">Hello, World!</textarea>
    </form>
                        
          </div>               -->
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
