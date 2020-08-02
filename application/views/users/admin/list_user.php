<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">لیست کابران</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="<?= site_url("users") ?>">خانه</a></li>
              <li class="breadcrumb-item active"> لیست کابران</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->



    <section class="content">

      <div class="row" style="padding: 0px 27px 27px 27px;">
          <div class="col-md-12">
                <!-- Default box -->
 
                
                <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">لیست کاربران</h3>
                    </div>
                    <!-- /.card-header -->
             
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                          <thead>
                          <tr>
                            <th>نام و نام خانوادگی</th>
                            <th>تاریخ ثبت نام</th>
                            <th>وضعیت</th>
                            <th>عملیات</th>
                          </tr>
                          </thead>
                          <tbody>
                            <?php foreach ($users as $user) {
                            ?>
                        <tr>
                          <td><?=$user->first_name." ".$user->last_name?></td>
                          <td><?=$user->date_fa?></td>
                          <td>
                            <?php echo ($user->status==1 ?  '<span class="badge badge-success">تایید شده</span>' : '<span class="badge badge-warning">معلق</span>' ) ?>  
                            </td>
                          <td><div class="tools">
                          <a href="<?= site_url("nadmin/user/info/").$user->username ?>"><i class="fa fa-edit"></i> </a>
                          <a href="<?= site_url("nadmin/user/delete/").$user->username ?>"><i class="fa fa-trash-o"></i></a>
                          <a href="<?= site_url("nadmin/user/new_sesson/").$user->username ?>"><i class="fa fa-hourglass"></i></a>
                          
                          
    
                        </div></td>
                    
                        </tr>
                            <?php } ?>
                       
                       
                        </tbody>
                    
                          <th>نام و نام خانوادگی</th>
                          <th>تاریخ ثبت نام</th>
                          <th>وضعیت</th>
                          <th>عملیات</th>
                          </tr>
                          </tfoot>
                        </table>
                      </div>

                    <!-- /.card-body -->
                  </div>

      
          </div>
      </div>
    
  
      </section>
   


  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->