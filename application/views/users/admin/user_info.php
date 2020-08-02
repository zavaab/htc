<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">اطلاعات کاربر</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="<?= site_url("users") ?>">خانه</a></li>
              <li class="breadcrumb-item active"> اطلاعات کاربر</li>
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
              <h3 class="card-title">اطلاعات کاربر</h3>
    
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-widget="remove" data-toggle="tooltip" title="" data-original-title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
            </div>
          
            <div class="card-body p-0">


                
  <div class="row">
          
    <!-- /.col -->
    <div class="col-6">

      <div class="table-responsive">
        <table class="table">
          <tbody><tr>
            <th style="width:50%">نام و نام خانوادکی :</th>
            <td><?= $user->first_name." ".$user->last_name  ?></td>
          </tr>
          <tr>
            <th>نام پدر</th>
            <td><?= $user->father_name  ?></td>
          </tr>
          <tr>
            <th>شماره شناسنامه</th>
            <td><?= $user->sh_number  ?></td>
          </tr>
          <tr>
            <th>کد ملی:</th>
            <td><?= $user->natioanl_numbr  ?></td>
          </tr>
        </tbody></table>
      </div>
      
    </div>
    <!-- /.col -->
    <div class="col-6">

      <div class="table-responsive">
        <table class="table">
          <tbody><tr>
            <th style="width:50%">سال تولد :</th>
            <td><?= $user->b_date  ?></td>
          </tr>
          <tr>
            <th>وضعیت تآهل</th>
            <td><?= $user->marride  ?></td>
          </tr>
          <tr>
            <th>موبایل :</th>
            <td><?= $user->mobile  ?></td>
          </tr>
          <tr>
            <th>شغل:</th>
            <td><?= $user->job  ?></td>
          </tr>
        </tbody></table>
      </div>

    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->

  <div class="row">

    <!-- /.col -->
    <div class="col-6">

      <div class="table-responsive">
        <table class="table">
          <tbody><tr>
            <th style="width:50%">ایمیل :</th>
            <td><?= $user->email  ?></td>
          </tr>
          <tr>
            <th>کلمه عبور</th>
            <td><?= $user->password  ?></td>
          </tr>
          <tr>
            <th>شماره شناسنامه</th>
            <td><?= $user->sh_number  ?></td>
          </tr>
          <tr>
            <th>رشته تحصیلی:</th>
            <td><?= $user->major  ?></td>
          </tr>
        </tbody></table>
      </div>
      
    </div>
    <!-- /.col -->
    <div class="col-6">

      <div class="table-responsive">
        <table class="table">
          <tbody><tr>
            <th style="width:50%">تحصیلات :</th>
            <td><?= $user->education  ?></td>
          </tr>
          <tr>
            <th>نحوه آشنایی با موسسه</th>
            <td><?= $user->depart  ?></td>
          </tr>
          <tr>
            <th>نام دوره درخواستی :</th>
            <td>
            <p class="text-muted">
                <?php
                $badge[0]="success";$badge[1]="info";$badge[2]="warning";$badge[3]="primary";$badge[4]="secondary";$badge[5]="light";$badge[6]="dark";
                $badge[7]="info";$badge[8]="warning";$badge[9]="danger";$badge[10]="secondary";$badge[11]="light";$badge[12]="dark";$badge[13]="info";
                $badge[14]="success";$badge[15]="primary";$badge[16]="danger";
                $requested_course=explode(';' ,$user->requested_course );
                $i=0;
                foreach ($requested_course as $course) {
                    ?>
            <span class="badge badge-<?=$badge[$i]?>"><?=$course?></span>
                    <?php
                $i++;}
                ?>
    </p>
            </td>
          </tr>
      
        </tbody></table>
      </div>

    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->

  
            </div>

            <!-- /.card-body -->
            <div class="card-footer">
              <div class="col-sm-offset-2 col-sm-10">
                    <div class="form-check">
                    <input type="checkbox" class="form-check-input" name="chk_approve" id="chk_approve" 
                    <?php if($user->status==1) echo 'checked' ?>
                    >
                    <input type="hidden" id="natioanl_numbr" name="natioanl_numbr" value="<?=$user->natioanl_numbr?>"  >
                    <label class="form-check-label" for="exampleCheck2">مورد تایید می باشد</label>
                    </div>
                </div>
            </div>
            <!-- /.card-footer-->
          </div>
          <!-- /.card -->
        
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