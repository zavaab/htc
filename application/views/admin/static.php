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


                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                    <th>#</th>
                    <th>Page Name</th>
                    <th>Edit</th>
                    <th>delete</th>
                    <th>show</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php 
                    $i=1;
                    foreach ($pages as $page) {
                        ?>
                        <tr id="tr_<?php echo $page['id']?>">
                        <td><?php echo $i; ?></td>
                        <td><?php echo $page['page_title']; ?></td>
                        
                        <td> <a href="<?php echo site_url("Admin/editpage/").$page['id']; ?>"> Edit </a> </td>
                        <td> 
                        <button type="button" class="btn btn-sm btn-danger"  onclick="remove('<?= $page['id']?>')">
                                <i class="fa fa-trash"></i></button>
                    </td>

                        <td> 
                        
                        <button type="button" id="btn_not<?= $page["id"];?>"
                        <?php if($page["show"]){?> style="display:inline;" <?php } else {?>
                    style="display:none;" <?php }?>
                        class="btn btn-sm btn-danger"
                        onclick="notshowMenu('<?= $page['id']?>')" ><i id="eye_'<?= $page["id"]?>'"
                            class="fa fa-eye" aria-hidden="true"></i></button>


                        <button type="button" id="btn_sho<?= $page["id"];?>"
                        <?php if(!$page["show"]){?> style="display:inline;" <?php } else {?>
                    style="display:none;" <?php }?>
                        class="btn btn-sm btn-success"
                                onclick="showMenu('<?= $page['id']?>')" ><i id="eye_'<?= $page["id"]?>'"
                                    class="fa fa-eye" aria-hidden="true"></i></button>

                    </td>

                        </tr>
                        <?php
                        $i++;
                    }
                    ?>
                    </tbody>
                </table>
                



                <div class="panel panel-default">
                    <div class="panel-heading">Add New Page</div>
                    <div class="panel-body">



<form action="<?php echo base_url()?>Admin/addpage" method="post" enctype="multipart/form-data">
        <div class="container" style="padding: 40px;">

                <div class="row">

                        <div class="col-md-4">
                                <div class="form-row">
                                <div class="form-group">
                                <label for="inputEmail4">Title Of Page</label>
                                <input type="text" class="form-control" name="title" id="title" placeholder="Title Of Page">
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
                                    <input type="text" class="form-control" name="title1" id="title1" placeholder="First Title">
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
                                                <p>با توجه به پیشرفت تکنولوژی آموزشی و همچنین استفاده روز افزون افراد از گوشی های هوشمند و همچنین نیاز به وجود سیستمی که در بین مشغله روزانه بتوان از آن برای یادگیری بهینه استفاده کرد ما را بر آن داشت که از Learning Management System به همراه کلاسهای Online در ارائه دوره های GRE خود استفاده نماییم. در حال حاضر کلاسهای ما با اتکاء به تحلیل سئوالات Actual و آزمونهای آزمایشی تحلیلی منظم GRE که همه آنها از امکانات سیستم آموزش آنلاین نیز بهره مندند ارائه میگردد.</p>
                                                <ul>
                                                        <li>کلاس اصلی وربال و رایتینگ GRE Verbal &amp; Writing</li>
                                                        <li>کلاس اصلی ریاضی GRE Quantitative</li>
                                                        <li>کارگاه تخصصی رایتینگ GRE Writing Workshop</li>
                                                        <li>کارگاه تخصصی رایتینگ GRE Writing Workshop</li>
                                                        <li>کارگاه تخصصی رایتینگ GRE Writing Workshop</li>
                                                      </ul>

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
                                    <input type="text" class="form-control" name="title2" id="title2" placeholder="Secend Title">
                                    </div>
                                    </div>
                                </div>
                    
                                <div class="col-md-12">
                                        <div class="form-row">
                                        <div class="form-group">
                                        <label for="inputEmail4">Secend Body</label>
                                        <textarea id="body2" name="body2">
                                                <table class="table table-bordered table-striped table-hover">
                                                        <thead>
                                                          <tr>
                                                            <th>نام دوره</th>
                                                            <th>تعداد جلسات</th>
                                                            <th>مجموع ساعات</th>
                                                            <th>روزهای برگزاری</th>
                                                            <th>	ساعات برگزاری</th>
                                                          </tr>
                                                        </thead>
                                                        <tbody>
                                                          <tr>
                                                            <td>Verbal &amp; Writing</td>
                                                            <td>9</td>
                                                            <td>27</td>
                                                            <td>یکشنبه و سه شنبه</td>
                                                            <td>18:00 الی 21:00</td>
                                                          </tr>
                                                          <tr>
                                                                  <td>Verbal &amp; Writing</td>
                                                                  <td>9</td>
                                                                  <td>27</td>
                                                                  <td>یکشنبه و سه شنبه</td>
                                                                  <td>18:00 الی 21:00</td>
                                                                </tr>
                                                        
                                                      </tbody></table>



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
                                    <input type="text" class="form-control" name="title3" id="title3" placeholder="Third Title">
                                    </div>
                                    </div>
                            </div>
                    

                                <div id="collapse">

                                        <div class="col-md-12">
                                    <div class="form-group">
                                    <div class="col-sm-12"><label>title</label>
                                        <input class="form-control" name="collapse_title_1" id="collapse_title_1" placeholder="title" type="text">
                                    </div>

                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-12" for="TextArea">Value</label>
                                        <div class="col-sm-12"><textarea class="form-control" name="collapse_body_1" id="collapse_body_1"></textarea></div>
                                    </div>
                                        
                                </div>
                                
                                <div class="col-md-12">
                                    <div class="form-group">
                                    <div class="col-sm-12"><label>title</label>
                                        <input class="form-control" name="collapse_title_2" id="collapse_title_2" placeholder="title" type="text">
                                    </div>

                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-12" for="TextArea">Value</label>
                                        <div class="col-sm-12"><textarea class="form-control" name="collapse_body_2" id="collapse_body_2"></textarea></div>
                                    </div>
                                        
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                    <div class="col-sm-12"><label>title</label>
                                        <input class="form-control" name="collapse_title_3" id="collapse_title_3" placeholder="title" type="text">
                                    </div>

                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-12" for="TextArea">Value</label>
                                        <div class="col-sm-12"><textarea class="form-control" name="collapse_body_3" id="collapse_body_3"></textarea></div>
                                    </div>
                                        
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                    <div class="col-sm-12"><label>title</label>
                                        <input class="form-control" name="collapse_title_4" id="collapse_title_4" placeholder="title" type="text">
                                    </div>

                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-12" for="TextArea">Value</label>
                                        <div class="col-sm-12"><textarea class="form-control" name="collapse_body_4" id="collapse_body_4"></textarea></div>
                                    </div>
                                        
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                    <div class="col-sm-12"><label>title</label>
                                        <input class="form-control" name="collapse_title_5" id="collapse_title_5" placeholder="title" type="text">
                                    </div>

                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-12" for="TextArea">Value</label>
                                        <div class="col-sm-12"><textarea class="form-control" name="collapse_body_5" id="collapse_body_5"></textarea></div>
                                    </div>
                                        
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                    <div class="col-sm-12"><label>title</label>
                                        <input class="form-control" name="collapse_title_6" id="collapse_title_6" placeholder="title" type="text">
                                    </div>

                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-12" for="TextArea">Value</label>
                                        <div class="col-sm-12"><textarea class="form-control" name="collapse_body_6" id="collapse_body_6"></textarea></div>
                                    </div>
                                        
                                </div>
                                
                            </div>

                        </div>


                    </div>
                   

            



            </div>
            <!-- PART1 -->
        </div>
        <input type="submit" class="btn btn-info" value="Add" />
    </form>

    </div>
    </div>


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



    
    <script>
    function showMenu(m_id) {
				$.ajax({
							url: "<?php echo base_url()?>Admin/showMenu",
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
	function notshowMenu(m_id) {
			$.ajax({
							url: "<?php echo base_url()?>Admin/notshowMenu",
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
                url: "<?php echo base_url()?>Admin/delpage/",
                type: "POST",
                data:{id:m_id},
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
