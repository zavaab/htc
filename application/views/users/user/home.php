<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">داشبورد کاربر</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="<?= site_url("users") ?>">خانه</a></li>
              <li class="breadcrumb-item active">داشبورد کاربر</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box adm-info-box">
              <!-- <span class="info-box-icon bg-info elevation-1"><i class="fa fa-plus"></i></span> -->

              <div class="info-box-content">
              <?php if($usrlogin['user_type']=="admin"){ ?>  
              <a href="<?= site_url("nadmin/ncourse") ?>" class="btn btn-block btn-success btn-sm btn-white"><i class="fa fa-plus myicon"></i>ایجاد درس جدید</a>
              <?php } ?>
                <!-- <a type="button" class="btn btn-block btn-success btn-sm">ایجاد درس جدید</a> -->
                <!-- <span class="info-box-text">ایجاد درس جدید</span> -->
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <!-- <span class="info-box-icon bg-danger elevation-1"><i class="fa fa-google-plus"></i></span> -->

              <div class="info-box-content">
              <?php if($usrlogin['user_type']=="admin"){ ?>
                <a  href="<?= site_url("nadmin/nprog") ?>" class="btn btn-block btn-danger btn-sm btn-white"><i class="fa fa-plus myicon"></i>ایجاد برنامه جدید</a>
                <?php } ?>
                <!-- <span class="info-box-text">لایک‌ها</span>
                <span class="info-box-number">41,410</span> -->
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <!-- <span class="info-box-icon bg-success elevation-1"><i class="fa fa-shopping-cart"></i></span> -->

              <div class="info-box-content">
              <?php if($usrlogin['user_type']=="admin"){ ?>
                <a href="<?= site_url("nadmin/list_progs") ?>"  class="btn btn-block btn-primary  btn-sm btn-white"><i class="fa fa-list myicon"></i>لیست برنامه ها</a>
                <?php }else if($usrlogin['user_type']=="user"){?>
                  <a href="<?= site_url("users/list_progs") ?>"  class="btn btn-block btn-primary  btn-sm btn-white"><i class="fa fa-list myicon"></i>لیست برنامه ها</a>
                <?php } ?>
                <!-- <span class="info-box-text">فروش</span>
                <span class="info-box-number">760</span> -->
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <div class="info-box-content">
                <!-- <span class="info-box-text">اعضای جدید</span> -->
                <?php if($usrlogin['user_type']=="admin"){ ?>
                <a href="<?= site_url("nadmin/list_user") ?>" class="btn btn-block bg-warning elevation-1 btn-sm "><i class="fa fa-users myicon"></i> لیست کاربران</a>
                <!-- <span class="info-box-number">2,000</span> -->
                 <?php } ?>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

      

      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->