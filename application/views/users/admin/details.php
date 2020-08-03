<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">

          
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="<?= site_url("users") ?>">خانه</a></li>
              <li class="breadcrumb-item active"> جزییات</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->



    <section class="content padding-27">

    <div class="row">
    <div class="col-md-6">
        <div class="callout callout-info">
        <h5 class="m-0 text-dark">کاربر : <?=$session_user_info->first_name." ".$session_user_info->last_name?></h5>    
        <h5 class="m-0 text-dark">برنامه : <?=$session_user_info->session_title?></h5>
          
            </div>
            </div>
    <div class="col-md-6">
        <div class="callout callout-info">
       
                    <?php if($permit_edit==1){
                    echo '<h5 class="m-0 text-dark"> <span class="badge badge-success">امکان ویرایش وجود دارد</span></h5>';
                           }else if($permit_edit==0){
                            echo '<h5 class="m-0 text-dark"><span class="badge badge-danger"> ویرایش 10 صبح تا 22 شب در تاریخ مشخص</span></h5>';
                          }else if($permit_edit==2){
                            echo '<h5 class="m-0 text-dark"><span class="badge badge-success">تکمیل شده، غ ق ویرایش</span></h5>';
                          } ?>
                          <h5 class="m-0 text-dark">&nbsp;</h5>
            </div>

    </div>
 
            
      </div>





    <div class="col-md-12">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active show" href="#timeline" data-toggle="tab">تاریخچه</a></li>
                  
                  
                  <?php if($permit_edit==1){ ?>
                    <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">جدید</a></li>
                          <?php } ?>


                  
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
      
                  <!-- /.tab-pane -->
                  <div class="tab-pane active show" id="timeline">
                     <!-- The timeline -->
                  <ul class="timeline timeline-inverse">
                   <?php foreach ($session_details as $details) {
                     ?>
                        <li class="time-label">
                          <span <?= ($details->session_owner=='admin' ? 'class="bg-success"' : 'class="bg-danger"'  ) ?>>
                            <?=$details->session_date_fa?>
                          </span>
                        </li>

                        <li>
                        <i 
                        <?= ($details->session_owner=='admin' ? 'class="fa fa-envelope bg-success"' : 'class="fa fa-envelope bg-danger"'  ) ?>></i>

                        <div class="timeline-item">
                          <span class="time"><i class="fa fa-clock-o"></i> <?=explode(' ',$details->session_date_en)[1]?></span>

                          <h3 class="timeline-header"><?=$details->session_title?></h3>

                          <div class="timeline-body">
                            <?= $details->session_comment?>
                          </div>
                          <hr>

                          <div class="timeline-body">
                            <?= $details->session_editor1?>
                          </div>


                          <div class="timeline-footer">

                          <?php
                          $badge[0]="success";$badge[1]="info";$badge[2]="warning";$badge[3]="primary";$badge[4]="secondary";$badge[5]="light";$badge[6]="dark";
                          $badge[7]="info";$badge[8]="warning";$badge[9]="danger";$badge[10]="secondary";$badge[11]="light";$badge[12]="dark";$badge[13]="info";
                          $badge[14]="success";$badge[15]="primary";$badge[16]="danger";
                           $files=explode('||',$details->session_files_names);
                           $i=1;
                           foreach ($files as $file) {
                          ?>

                            <a href="<?=base_url().$file?>" class="btn btn-<?=$badge[$i]?> btn-sm" download >فایل شماره <?=$i; ?></a>
                            <!-- <a href="#" class="btn btn-danger btn-sm">فایل دوم</a>
                            <a href="#" class="btn btn-warning btn-sm">فایل سوم</a> -->
                           <?php $i++;} ?>
                          </div>
                        </div>
                      </li>
                      <!-- END timeline item -->



                     <?php
                   } ?>
                   </ul>
                  </div>
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="settings">
                    <form class="form-horizontal" action="<?= site_url("nadmin/mysession/add_details") ?>"
                    enctype="multipart/form-data"
                    method="post" >

                      <input type="hidden" name="session_code" value="<?=$session_code?>" >

                      
                        <!-- text input -->
                        <div class="form-group">
                          <label>عنوان</label>
                          <input type="text" name="title" class="form-control" placeholder="عنوان را وارد کنید ...">
                        </div>
             
      
                        <!-- textarea -->
                        <div class="form-group">
                          <label>توضیحات</label>
                          <textarea name="comment" class="form-control" rows="3" placeholder="توضیحات را وارد کنید ..."></textarea>
                        </div>



                             <!-- textarea -->
                             <div class="form-group">
                              <label>ویرایشگر</label>

                              <div class="mb-3">
                                <textarea id="editor1" name="editor1" style="width: 100%">لطفا متن مورد نظر خودتان را وارد کنید</textarea>
                              </div>
                              

                            </div>


         
               
                        <hr>
                        <!-- textarea -->
                        <div class="form-group">
                          <label>فایل ها جهت بارگزاری</label>
                        <div>
                          <!--To give the control a modern look, I have applied a stylesheet in the parent span.-->
                          <span class="btn btn-primary btn-sm  fileinput-button">
                              <span>انتخاب فایل ها</span>
                              <input type="file" name="files[]" id="files" multiple ><br />
                          </span>
                          <output id="Filelist"></output>
                      </div>
                        </div>


      
            
               
      
               
      
           
      
              




                      <div class="form-group">
                        <div class=" col-sm-12 text-left">
                          <button type="submit" class="btn btn-danger">ارسال</button>
                        </div>
                     </div>

                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
       
 

     

    
  
      </section>
   


  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->