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

     
       
      

        <!-- old program -->

        <div class="row" style="padding: 0px 27px 27px 27px;">
            <div class="col-md-12">
                  <!-- Default box -->
          <div class="card collapsed-card">
            <div class="card-header">
              <h3 class="card-title">لیست برنامه های  <span class="badge badge-success"><?= $usrlogin['user']->first_name." ".$usrlogin['user']->last_name; ?></span></h3>
              
    
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse">
                  <i class="fa fa-plus"></i></button>
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
                          <?php if($list->permit_edit==1){ ?>
                        
                          <?php }else if(1==0){
                            echo '<span class="badge badge-danger"> ویرایش 10 صبح تا 22 شب در تاریخ مشخص</span>';
                          }else if(0==2){
                            echo '<span class="badge badge-success">تکمیل شده، غ ق ویرایش</span>';
                          } ?>
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