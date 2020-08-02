<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">درس جدید</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="<?= site_url("users") ?>">خانه</a></li>
              <li class="breadcrumb-item active"> درس جدید</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->



    <section class="content padding-27">

       
        
        
        <!-- list course -->

        <!-- Default box -->
        <div class="card collapsed-card ">
          <div class="card-header">
            <h3 class="card-title">لیست دروس</h3>
  
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse">
                <i class="fa fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-widget="remove" data-toggle="tooltip" title="" data-original-title="Remove">
                <i class="fa fa-times"></i></button>
            </div>
          </div>

          <div class="card-body" style="display: none;" >
            

            <div class="row">
            <div class="col-md-6">
                <div class="card card-info">


                    <div class="table-responsive">
                        <table class="table m-0">
                          <thead>
                          <tr>
                              <th>#</th>
                            <th>عنوان درس</th>
                            <th>عملیات</th>
                          </tr>
                          </thead>
                          <tbody>
                              <?php
                              $count=1;
                              $edit_course_name=null;
                              foreach ($list_courses as $course) {

                                if(isset($edit_course_code) && $edit_course_code !="" ){
                                    if($course->course_code==$edit_course_code){
                                        $edit_course_name=$course->course_name;
                                    }
                                }
                                
                              ?>
                          <tr>
                              <td><?php echo $count;?></td>
                            <td><?php echo $course->course_name ?></td>
                            <td><div class="tools">
                            <a href="<?= site_url("nadmin/course/edit/").$course->course_code ?>"><i class="fa fa-edit"></i> </a>
                            <a href="<?= site_url("nadmin/course/delete/").$course->course_code ?>"><i class="fa fa-trash-o"></i></a>
      
                          </div></td>
                      
                          </tr>
                              <?php $count++; } ?>
                   
                         
                          </tbody>
                        </table>
                      </div>
                      <!-- /.table-responsive -->


                </div>
    
                <!-- /.card -->
            </div>
            </div>




          </div>
          <!-- /.card-body -->
          <div class="card-footer" style="display: none;">
            ****
          </div>
          <!-- /.card-footer-->
        </div>
        <!-- /.card -->
      


         <!-- Default box -->
         <div class="card ">
          <div class="card-header">

            <?php if(isset($edit_course_code)){
                echo '<h3 class="card-title">به روز رسانی</h3>';
            }else{
                echo '<h3 class="card-title">درس جدید</h3>';
            }
            ?>
  
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse">
                <i class="fa fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-widget="remove" data-toggle="tooltip" title="" data-original-title="Remove">
                <i class="fa fa-times"></i></button>
            </div>
          </div>
          <div class="card-body">
            

            <div class="row">

            <div class="col-md-6">
              
                
                <div class="card card-info">
                
                    <!-- /.card-header -->
                    <!-- form start -->
                    <?php if(isset($edit_course_code) && $edit_course_code !="" ){?>
                    <form class="form-horizontal" action="<?= site_url("nadmin/course/update/") ?>" method="post">
                      <div class="card-body">
                        <div class="form-group">
                          <label for="inputEmail3" class="col-sm-3 control-label">عنوان درس</label>
      
                          <div class="col-sm-10">
                            <input type="text" class="form-control" name="update_course" id="update_course" value="<?php echo $edit_course_name;?>" >
                            <input type="hidden" class="form-control" name="course_code" id="course_code" value="<?php echo $edit_course_code;?>" >
                          </div>
                        </div>
                  
                      </div>
                      <!-- /.card-body -->
                      <div class="card-footer">
                        <button type="submit" class="btn btn-info float-left">به روز رسانی</button>
                      </div>
                      <!-- /.card-footer -->
                    </form>
                    <?php }else{
                        ?>
                         <form class="form-horizontal" action="<?= site_url("nadmin/course/new/") ?>" method="post"     >
                      <div class="card-body">
                        <div class="form-group">
                          <label for="inputEmail3" class="col-sm-3 control-label">عنوان درس</label>
      
                          <div class="col-sm-10">
                            <input type="text" class="form-control" name="new_course" id="new_course" placeholder="عنوان درس را وارد کنید">
                          </div>
                        </div>
                  
                      </div>
                      <!-- /.card-body -->
                      <div class="card-footer">
                        <button type="submit" class="btn btn-info float-left">ثبت درس جدید</button>
                      </div>
                      <!-- /.card-footer -->
                    </form>
                        <?php
                    } ?>
                  </div>
    
                <!-- /.card -->
              </div>
              </div>




          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            ****
          </div>
          <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    
  
      </section>
   


  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->