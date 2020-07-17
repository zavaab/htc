<style type="text/css">
  /***********************************************/
/***************** Accordion ********************/
/***********************************************/
@import url('https://fonts.googleapis.com/css?family=Tajawal');
@import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

.bottom_line{
  border-bottom: 1px solid #307d11;
}


.footer {
  /*position: fixed;*/
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: red;
  color: white;
  text-align: center;
  }

/* card details start  */
@import url('https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Roboto+Condensed:400,400i,700,700i');
section{
    padding: 100px 0;
}

.card-content {
  background: #ffffff;
  border: 4px;
  box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);
}

.card-img {
  position: relative;
  overflow: hidden;
  border-radius: 0;
  z-index: 1;
}

.card-img img {
  width: 100%;
  height: auto;
  display: block;
}

.card-img span {
  position: absolute;
    top: 15%;
    left: 6%;
    background: #1ABC9C;
    padding: 6px;
    color: #fff;
    font-size: 12px;
    border-radius: 4px;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    -ms-border-radius: 4px;
    -o-border-radius: 4px;
    transform: translate(-50%,-50%);
}
.card-img span h4{
        font-size: 12px;
        margin:0;
        padding:10px 5px;
         line-height: 0;
}
.card-desc {
  padding: 1.25rem;
  min-height: 250px;
max-height: 335px;
height: 335px
}

.card-desc h3 {
  color: #000000;
    font-weight: 600;
    font-size: 1.5em;
    line-height: 1.3em;
    margin-top: 0;
    margin-bottom: 5px;
    padding: 0;
}

.card-desc p {
  color: #747373;
    font-size: 14px;
  font-weight: 400;
  font-size: 1em;
  line-height: 1.5;
  margin: 0px;
  margin-bottom: 20px;
  padding: 0;
  font-family: 'Raleway', sans-serif;
}
.btn-card{
  background-color: #1ABC9C;
  color: #fff;
  box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);
    padding: .84rem 2.14rem;
    font-size: .81rem;
    -webkit-transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
    -o-transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
    margin: 0;
    border: 0;
    -webkit-border-radius: .125rem;
    border-radius: .125rem;
    cursor: pointer;
    text-transform: uppercase;
    white-space: normal;
    word-wrap: break-word;
    color: #fff;
}
.btn-card:hover {
    background: orange;
}
a.btn-card {
    text-decoration: none;
    color: #fff;
}
/* End card section */
.date1{
color: darkred;
}

.card-content{
  font-size: 13px;
}

</style>

<div class="container-fluid">


    <section class="details-card">
    <div class="container">
        <div class="row">
          <?php 
          foreach ($list as $list) {
            ?>
            <div class="col-md-4" style="padding: 5px;">
                <div class="card-content">
                    <div class="card-img">
                        <img src="<?php echo base_url(); ?>/assets/img/list/<?= $list->course_img ?>" alt="">
                        <span><h4><?= $list->Code ?></h4></span>
                    </div>
                    <div class="card-desc">
                        <h3><?= $list->Name ?></h3>
                        <span class="date1">Start Date: </span><span class="date2"><?= $list->SDate ?></span>
                        <br>
                        <span class="date1">End Date: </span><span class="date2"><?= $list->EDate ?></span>
                        <br>
                    <span class='date1'>Days: </span>
                          <?php 
                                            $days=$list->Days;
                                            $days=explode(';', $days);
                                            $Hours=$list->Hours;
                                            $Hours=explode(';', $Hours);
                                            $j=0;

                                            foreach ($days as $day) {
                                               switch ($day) {
                                                    case 1:
                                                    $dy="Saturday";
                                                    $h=$Hours[$j];
                                                    break;  
                                                    case 2:
                                                    $dy="Sunday";
                                                    $h=$Hours[$j];
                                                    # code...
                                                    break;
                                                    case 3:
                                                    $dy="Monday";
                                                    $h=$Hours[$j];
                                                    # code...
                                                    break;
                                                    case 4:
                                                    $dy="Tuesday";
                                                    $h=$Hours[$j];
                                                    # code...
                                                    break;
                                                    case 5:
                                                    $dy="Wednesday";
                                                    $h=$Hours[$j];
                                                    # code...
                                                    break;
                                                    case 6:
                                                    $dy="Thursday";
                                                    $h=$Hours[$j];
                                                    # code...
                                                    break;
                                                    case 7:
                                                    $dy="Friday";
                                                    $h=$Hours[$j];
                                                    # code...
                                                    break;
                                                    
                                                    default:
                                                        # code...
                                                        break;
                                                }
                                                $j++;
                                    echo "<span >".$dy." ".$h."</span><br/>";
                                  }
                                                ?>


                        <span class="date1">Capacity: </span> <span class="date2"> <?= $list->Capacity ?> </span> <br>
                        <span class="date1">Name of instructor: </span> <span class="date2"> <?= $list->instructor ?> </span>
                        <br>
                        <span class="date1"><b >Fee : </b></span> <span style="font-size: 11px;" class="badge badge-success"><?= $list->Fee ?>(تومان)</span>
                        <p style="min-height: 72px;max-height: 72px;">
                          <?= $list->course_descreption ?></p>
                            <a data-toggle="modal" data-target="#basicModal_<?= $list->Code ?>"
                            class="btn-card">Pay & REGISTER</a>   
                    </div>
                </div>
            </div>


    <!-- modal -->
    <div class="modal fade" id="basicModal_<?= $list->Code ?>" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form enctype="multipart/form-data" id="submit" method="post" v-on:submit="validateForm">
      <div class="modal-header" id="mdl_header">
        <h4 class="modal-title" id="myModalLabel">PAY & REGISTER</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <div class="container">
  <div class="row ">
    <div class="col-md-4" style="    border-right: 1px solid #ece4e4;">
      
        <div class="form-group">
          <label class="form-control-label" for="name">Course Name</label>
          <input   class="form-control" disabled type="text" placeholder="<?= $list->Name ?>" >
          <div class="invalid-feedback">This field is required.</div>
        </div><!-- /form-group -->
        
        <div class="form-group">
          <label class="form-control-label" for="number">Course Code</label>
          <input disabled class="form-control" type="text" placeholder="<?= $list->Code ?>">
        </div><!-- /form-group -->
        <div class="form-group">
          <label class="form-control-label" for="number">Fee</label>
          <input disabled class="form-control" type="text" placeholder="<?= $list->Fee ?>">
        </div><!-- /form-group -->
    </div><!-- /col -->

<div class="col-md-6">
      
        <div class="form-group">
          <label class="form-control-label" for="name">Full Name</label>
          <input id="name" name="name" class="form-control" type="text" v-model="name" v-bind:class="{ 'is-invalid': attemptSubmit && missingName }">
          <div class="invalid-feedback">This field is required.</div>
        </div><!-- /form-group -->
        
        <div class="form-group">
          <label class="form-control-label" for="number">Email</label>
          <input id="email" name="email" class="form-control" type="email" v-model="number" v-bind:class="{ 'is-invalid': attemptSubmit && wrongNumber }">
        </div><!-- /form-group -->
        <div class="form-group">
          <label class="form-control-label" for="number">Phone</label>
          <input id="phone" name="phone" class="form-control" type="text" v-model="number" v-bind:class="{ 'is-invalid': attemptSubmit && wrongNumber }">
        </div><!-- /form-group -->

        
    </div><!-- /col -->


  </div><!-- /row -->
</div><!-- /container -->


        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <!-- <button type="submit" class="btn btn-primary mybtn1">Upload</button> -->
        <a class="btn btn-primary mybtn1" href="<?php echo base_url(); ?>pay_register/register/<?= $list->Code ?>" 
                            class="btn-card">Pay & REGISTER</a>
      </div>
    </form>
    </div>
  </div>
</div>
            <!-- modal -->





            <?php
          }
          ?>
            

        </div>
    </div>
</section>
<!-- details card section starts from here -->




</div>
 
 <div class="container">
      <div class="row">
        <div class="col-xs-12" style="">
          <!--Footer Bottom-->
                            <!-- <h3 class="study_text" style="    color: rgb(60,90,118);"><b>STUDY WITH GROUP OF PROFESSIONALS</b></h3> -->
                            
                            <a class="btn btn-info btn-md mybtn1" style="
    padding: 15px;" id="btn_see" href="<?php echo base_url(); ?>/Courses/listcourse">SEE LIST OF COURSES</a>
                        


        </div>
      </div>
    </div>

  
  <hr>








