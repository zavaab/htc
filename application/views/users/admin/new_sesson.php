<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">برنامه جدید</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="<?= site_url("users") ?>">خانه</a></li>
              <li class="breadcrumb-item active"> برنامه جدید</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    <?php
    // print_r($user);die;
    ?>

    <section class="content">

     
        <div class="row" style="padding: 0px 27px 27px 27px;">
            <div class="col-md-12">
                  <!-- Default box -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title"> برنامه جدید برای  <span class="badge badge-success"><?= $user->first_name." ".$user->last_name; ?></span></h3>
    
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-widget="remove" data-toggle="tooltip" title="" data-original-title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
              </div>
          
            <div class="card-body p-0">

                <div style="padding: 30px 33px 33px 33px;">
            
                  <form class="form-horizontal" action="<?= site_url("nadmin/msession/new") ?>" method="post">

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                        <label>عنوان برنامه</label>
                        <input type="text" class="form-control" id="title_session" name="title_session" placeholder="عنوان برنامه را وارد نمایید">
                        </div>
                    </div>
                </div>

                
                <input class="" type="hidden" name="natioanl_id" value="<?=$natioanl_id?>" />
                    
    <!-- /.col -->
 
    <div class="row">
        <div class="col-md-6">
       
        <div class="form-group">
            <label>تاریخ شروع:</label>
    
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="fa fa-calendar"></i>
                </span>
              </div>
              <input class="start_date_date form-control pwt-datepicker-input-element auto-close-example" name="start_date" id="start_date">
              <input class="start_date" type="hidden" name="start_date_ob" />
            </div>
            <!-- /.input group -->
          </div>
        
    
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>تاریخ پایان :</label>
            
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="fa fa-calendar"></i>
                </span>
              </div>
              <input class="end_date_date form-control pwt-datepicker-input-element auto-close-example" name="end_date" id="end_date">
              <input class="end_date" type="hidden"  name="end_date_ob"/>
            </div>
            <!-- /.input group -->
          </div>
    
          </div>
        </div>



        <div class="row">
            <div class="col-md-6"></div>
            <div class="col-md-6 text-left">
              <input type="submit" class="btn btn-app"  value="ذخیره" style=" background: #eef2f0;color: #8a2bff;">
              
        </div>
        </div>


                    
                </div>
          </form>
                


  
            </div>

            <!-- /.card-body -->
            <div class="card-footer">
              <div class="col-sm-offset-2 col-sm-10">
                    <div class="form-check">
                    
                    <!-- <label class="form-check-label" for="exampleCheck2">توضیحات توضیحات توضیحات</label> -->
                    </div>
                </div>
            </div>
            <!-- /.card-footer-->
          </div>
          <!-- /.card -->
        
            </div>
        </div>
      

        <!-- old program -->

        <div class="row" style="padding: 0px 27px 27px 27px;">
            <div class="col-md-12">
                  <!-- Default box -->
          <div class="card collapsed-card">
            <div class="card-header">
              <h3 class="card-title"> لیست برنامه های قبل </h3>
    
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-widget="remove" data-toggle="tooltip" title="" data-original-title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
            </div>
          
            <div class="card-body p-0" style="display: none;">


                <div class="table-responsive">
                    <table class="table m-0">
                      <thead>
                        
                        <tr>
                          <th>#</th>
                        <th>عنوان برنامه</th>
                        <th>تاریخ شروع</th>
                        <th>تاریخ پایان</th>
                        <th>وضعیت</th>
                        <th>عملیات</th>
                      </tr>
                      </thead>
                      <tbody>
                      <?php $count=1; foreach ($list_session as $list) {?>
                      <tr>
                        <td><?=$count;?></td>
                        <td><?= $list->session_title?></td>
                        <td><?= $list->session_start_date_fa?></td>
                        <td><?= $list->session_end_date_fa?></td>
                        <td><?= ($list->session_status==1 ? '<span class="badge badge-success">تکمیل شده</span>' : '<span class="badge badge-warning">درحال انجام</span>' ) ?></td>
                        <td><div class="tools">
                        <a href="<?= site_url("nadmin/mysession/details/").$list->session_code ?>"><i class="fa fa-edit"></i> </a>
                        
                        <a href="<?= site_url("nadmin/mysession/delete/").$list->session_code ?>" >  <i class="fa fa-trash-o"></i> </a>

                        <a href="#" onclick="change_status('<?php echo $list->session_code; ?>')" > <i class="fa fa-cog" aria-hidden="true"></i> </a>
  
                      </div></td>
                  
                      </tr>
                        <?php $count++; } ?>
                     
                      </tbody>
                    </table>
                  </div>
                  <!-- /.table-responsive -->
                


  
            </div>

            <!-- /.card-body -->
            <div class="card-footer" style="display: none;">
              <div class="col-sm-offset-2 col-sm-10">
                    <div class="form-check">
                    
                    <label class="form-check-label" for="exampleCheck2">توضیحات توضیحات توضیحات</label>
                    </div>
                </div>
            </div>
            <!-- /.card-footer-->
          </div>
          <!-- /.card -->
        
            </div>
        </div>
        <!-- old program -->
      
       
      
    
  
      </section>
   


  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->