<link rel="stylesheet" href="<?php echo base_url(); ?>assets/register/normalize.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/register/jquery.idealforms.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@9/dist/sweetalert2.min.css" id="theme-styles">



<style>
  body {
    margin: 2em auto;
    font: normal 14px/1.5 Yekan, sans-serif;
    color: #353535;
    overflow-y: scroll;
  }

  .content {
    margin: 0 30px;
  }

  .field.buttons button {
    margin-left: .5em;
  }

  #invalid {
    display: none;
    float: right;
    width: 290px;
    margin-right: 120px;
    margin-top: .5em;
    color: #CC2A18;
    font-size: 130%;
    font-weight: bold;
  }

  .idealforms.adaptive #invalid {
    margin-right: 0 !important;
  }

  .idealforms.adaptive .field.buttons label {
    height: 0;
  }

  form.idealforms .field .group label {
    float: right;
  }
</style>
<link href="<?php echo base_url(); ?>assets/register/jquerysctipttop.css" rel="stylesheet" type="text/css">

<style>
  /* .idealsteps-nav li{
  float:right;
} */
  form.idealforms .field {
    float: right;
  }

  /* rtl */
  form.idealforms label.main,
  form.idealforms .field>input,
  form.idealforms select,
  form.idealforms button,
  form.idealforms textarea,
  form.idealforms .field .group {
    float: right;
  }

  form.idealforms label.main {
    /* width: 78px; */
  }

  form.idealforms .error {
    right: 100%;
    margin-right: 10px;
    width: 157.333px;
  }

  form.idealforms .error::after {
    right: -.7em;
  }
  form.idealforms .ideal-check, form.idealforms .ideal-radio{
    margin-left: 10px !important;
  }

  /*  */
  blockquote {
  background: #ffffff;
  border-right: 4px solid #026474;
  margin: 1.5em 10px;
  padding: 0.5em 10px;
  quotes: "\201C""\201D""\2018""\2019";
  padding: 23px;
  
}
blockquote:before {
  color: #ccc;
  content: open-quote;
  font-size: 4em;
  line-height: 0.1em;
  margin-right: 0.25em;
  vertical-align: -0.4em;
}
blockquote p {
  display: inline;
}
.blue{
  color:blue;
}

form.idealforms .field .group label{
  float: left;
}
form.idealforms .field .group label , form.idealforms .field .group label:last-of-type{
  margin-left: 5em !important;
}
form.idealforms .field{
  margin: 0.1em;
}
form.idealforms .error{
  background: linear-gradient(#bc113f, #82213b);
  border: 1px solid #bc113f;
}
form.idealforms .error:after{
  border-top-color: #bc113f;
     left: 0em;
    }

    form.idealforms label.main, form.idealforms 
    , form.idealforms select,  form.idealforms textarea, form.idealforms .field .group{
      background: transparent;
    }
    .btn-get-started{
      font-size: 0.9em;
      letter-spacing: 0px;
      padding: 5px 16px;
      border-radius: 3px;      
    }
    .btn_signup {
    background: #158722;
    background: #086a7e;
    border-radius: 8px;
    padding: 3px 41px 5px 41px;
    
    }
    .btn-get-started:hover {
    background: #16551d;
      color: #ffffff;
    }

    .btn-primary:hover {
    color: #fff;
    background-color: #73003e;
    border-color: #ffffff;
}
form.idealforms input, form.idealforms textarea, form.idealforms select, form.idealforms .field .group{
  padding: .20em;
}

.border_bottom{
  border-bottom: 7px solid #7f2853;
}
.idealsteps-nav{
  margin-bottom: 1em;
    border-left: 4px solid #7f2853;
}


/* verification */
#wrapper {

  font-size: 1rem;
  text-align: center;
  box-sizing: border-box;
  color: #333;
}
#wrapper #dialog {
  border: solid 1px #ccc;
  margin: 10px auto;
  padding: 20px 30px;
  display: inline-block;
  box-shadow: 0 0 4px #ccc;
  background-color: #FAF8F8;
  overflow: hidden;
  position: relative;
  max-width: 450px;
}
#wrapper #dialog h3 {
  margin: 0 0 10px;
  padding: 0;
  line-height: 1.25;
}
#wrapper #dialog span {

}
#wrapper #dialog #form {
  max-width: 240px;
  margin: 25px auto 0;
  direction:ltr;
}
#wrapper #dialog #form input {
  margin: 0 5px;
  text-align: center;
  line-height: 80px;
  font-size: 30px;
  border: solid 1px #ccc;
  box-shadow: 0 0 5px #ccc inset;
  outline: none;
  width: 20%;
  -webkit-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
  border-radius: 3px;
}
#wrapper #dialog #form input:focus {
  border-color: purple;
  box-shadow: 0 0 5px purple inset;
}
#wrapper #dialog #form input::-moz-selection {
  background: transparent;
}
#wrapper #dialog #form input::selection {
  background: transparent;
}
#wrapper #dialog #form button {
  margin: 25px 0 25px;
  width: 100%;
  padding: 6px;
  background-color: #B85FC6;
  border: none;
  text-transform: uppercase;
}
#wrapper #dialog button.close {
  border: solid 2px;
  border-radius: 30px;
  line-height: 19px;
  font-size: 120%;
  width: 22px;
  position: absolute;
  right: 5px;
  top: 5px;
}
#wrapper #dialog div {
  position: relative;
  z-index: 1;
}
#wrapper #dialog img {
  position: absolute;
  bottom: -70px;
  right: -63px;
}

/* verification */

#timer{
  background: #7f2853;
    padding: 0px 2px 0px 2px;
    color: #ffffff;
    border-radius: 10px;
    font-size: 13px;
}

.not_show {
  display:none;
}



</style>

<body>

  <h1 style="margin-top:100px;" align="center">
    <!-- <h5 align="center">فرم ثبت نام</h5> -->
    <p align="center">مرکز تخصصی تافل و تربیت مدرس حدادیان</p>
  </h1>



  
  <div class="container" style="background: #f4f4f4" id="sms">
    <div class="row" >
      <div class="col-md-12 border_bottom" >
        <div class="content" >

          <div id="wrapper">
            <div id="dialog">
          
          <div id="get_code">
          <div><i class="fa fa-lock" style="font-size: 45px;color: #7f2853;"  aria-hidden="true"></i></div>
              <h5>لطفا شماره همراه خود را وارد نمایید</h5>
              
           
            <input id="mobile_verify"  style="border: solid 1px #ccc;box-shadow: 0 0 5px #ccc inset;direction:ltr;    padding: 4px;warning"
            minlength="11" maxlength="11"
             name="mobile_verify" type="text" autocomplete="off">
             <button class="btn btn-warning btn-embossed" onclick="getCode();" > ارسال کد</button>
                          
          </div>
                
  
          
              <div id="form" class="not_show">
              <h5>کد ارسال شده به موبایل خود را در کادر زیر وارد نمایید</h5>
                <input type="text" maxLength="1" size="1" min="0" max="9" pattern="[0-9]{1}" id="num1" /><input id="num2"   type="text" maxLength="1" size="1" min="0" max="9" pattern="[0-9]{1}" /><input id="num3" type="text" maxLength="1" size="1" min="0" max="9" pattern="[0-9]{1}" /><input id="num4" type="text" maxLength="1" size="1" min="0" max="9" pattern="[0-9]{1}" />
                <button class="btn btn-primary btn-embossed" onclick="check_sms()" >بررسی</button>
  
                 <div id="timer_dv" ><span>منقضی شدن کد: </span><span id="timer"></span> </div>
              </div>
              
              <div class="not_show" id="resend">
                <span>کد 5 رقمی را دریافت نکرده اید؟</span><br />
                <a href="#" style="    color: #7f2853;font-weight: 900;" onclick="getCode()" >ارسال مجدد کد</a><br />
                <a href="#">تغییر شماره موبایل</a>
              </div>
              
            </div>
          </div>
          </div>
      </div>
    </div>
  </div>


  <div class="container" style="background: #f4f4f4" id="register_panel">
    <div class="row" >

      <div class="col-md-12 border_bottom" >

        <div  class="content">
          <div class="idealsteps-container">
            <nav class="idealsteps-nav"></nav>
            <form action="" novalidate autocomplete="off" class="idealforms">
              <div class="idealsteps-wrap" id="all">

                <!-- Step 1 -->

                <section class="idealsteps-step">




                  <div class="row">
                    <div class="col-md-6">
                      <div class="field">
                        <label class="main">نام:</label>
                        <input id="firstname" minlength="30" maxlength="30" name="firstname" type="text" autocomplete="off" v-model="v_firstname">
                        <span class="error"></span> </div>
                    </div>
                    <div class="col-md-6">
                      <div class="field">
                        <label class="main">نام خانوادگی:</label>
                        <input  id="lastname" minlength="30" maxlength="30" name="lastname" autocomplete="off" type="text" v-model="v_lastname">
                        <span class="error"></span> </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                      <div class="field">
                        <label class="main">نام پدر:</label>
                        <input id="fathername" minlength="30" maxlength="30" name="fathername" type="text" autocomplete="off" data-idealforms-ajax="ajax.php">
                        <span class="error"></span> </div>
                    </div>
                    <div class="col-md-6">
                      <div class="field">
                        <label class="main">شماره شناسنامه:</label>
                        <input id="sh_number" name="sh_number" minlength="10" maxlength="10" autocomplete="off" type="text">
                        <span class="error"></span> </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                      <div class="field">
                        <label class="main">کد ملی:</label>
                        <input name="national" id="national" minlength="10" maxlength="10" type="text" autocomplete="off" data-idealforms-ajax="ajax.php">
                        <span class="error"></span> </div>
                    </div>
                    <div class="col-md-6">
                      <div class="field">
                        <label class="main">سال تولد:</label>
                        <input name="bdate" minlength="4" maxlength="4" id="bdate" type="text">
                        <span class="error"></span> </div>
                    </div>
                  </div>




                  <div class="row">
                    <div class="col-md-6">

                      <div class="field">
                        <label class="main">وضعیت تآهل:</label>
                        <label>
                          <input name="marital" type="radio" value="مجرد">
                          مجرد</label>
                        <label>
                          <input name="marital" type="radio" value="متاهل">
                          متاهل</label>

                        <span class="error"></span> </div>
                    </div>

                    <div class="col-md-6">
                      <div class="field">
                        <label class="main" >موبایل:</label>
                        <input name="mobile" minlength="11" maxlength="11"  id="mobile" type="text" autocomplete="off">
                        <span class="error"></span> </div>
                    </div>

                  </div>


                  <div class="row">
                    <div class="col-md-6">
                      <div class="field">
                        <label class="main">شغل:</label>
                        <input name="job" type="text" minlength="50" maxlength="50"  id="job" autocomplete="off" data-idealforms-ajax="ajax.php">
                        <span class="error"></span> </div>
                    </div>
                    <div class="col-md-6">
                      <div class="field">
                        <label class="main">ایمیل:</label>
                        <input name="email" id="email" type="email" autocomplete="off">
                        <span class="error"></span> </div>
                    </div>
                  </div>
               


                   <div class="row">
              <div class="col-md-6">
      
                <div class="field">
                  <label class="main">کلمه عبور:</label>
                  <input name="password" id="password" type="password" minlength="30" maxlength="30" autocomplete="off">
                  <span class="error"></span> </div>

              </div>

              <div class="col-md-6">
                <div class="field">
                  <label class="main">تکرار کلمه عبور:</label>
                  <input name="confirmpass" id="confirmpass" minlength="30" maxlength="30" type="password" autocomplete="off">
                  <span class="error"></span> </div>

            </div>
            </div> 
            
                  <div class="row">
                
                    <div class="col-md-6">
                      <div class="field">
                        <label class="main">رشته تحصیلی:</label>
                        <input name="major" id="major" type="text" minlength="50" maxlength="50" autocomplete="off">
                        <span class="error"></span> </div>

                    </div>

                  </div>






                  <!-- <div class="col-md-6">
              <div class="field">
                <label class="main">شغل:</label>
                <textarea name="job" cols="30" rows="10"></textarea>
                <span class="error"></span> </div>
            </div>
             -->
                  <!-- <div class="row">
              <div class="col-md-6">
      
                <div class="field">
                  <label class="main">Password:</label>
                  <input name="password" type="password">
                  <span class="error"></span> </div>

              </div>

              <div class="col-md-6">
                <div class="field">
                  <label class="main">Confirm:</label>
                  <input name="confirmpass" type="password">
                  <span class="error"></span> </div>

            </div>
            </div> -->

                  <!-- <div class="row">
              <div class="col-md-6">
      
            
                <div class="field">
                  <label class="main">Date:</label>
                  <input name="date" type="text" placeholder="mm/dd/yyyy" class="datepicker">
                  <span class="error"></span> </div>

              </div>

              <div class="col-md-6">
                <div class="field">
                  <label class="main">Picture:</label>
                  <input id="picture" name="picture" type="file" multiple>
                  <span class="error"></span> </div>

            </div>
            </div> -->

                  <div class="row text-left" style="float: left;">
                    <!-- <div class="col-md-6">
                <div class="field">
                  <label class="main">Website:</label>
                  <input name="website" type="text">
                  <span class="error"></span> </div>
              </div> -->

                    <div class="col-md-4">

                      <div class="field buttons">
                        <label class="main">&nbsp;</label>
                        <button type="button"
                          class="next btn btn-lg btn-primary btn-block btn_signup btn-get-started ">بعدی</button>
                      </div>

                    </div>
                  </div>







                </section>

                <!-- Step 2 -->

                <section class="idealsteps-step">

                  <div class="row">
                    <div class="col-md-6">
                     
                      <div class="field">
                        <label class="main">تحصیلات:</label>
                       
                          <p class="group" style="border: none;">
                            <label>
                              <input name="education" type="radio" value="زیر دیپلم">
                              زیر دیپلم</label>
                            <label>
                              <input name="education" type="radio" value="دیپلم">
                              دیپلم</label>
                            <label>
                              <input name="education" type="radio" value="لیسانس">
                              لیسانس</label>
                            <label>
                              <input name="education" type="radio" value="فوق لیسانس">
                              فوق لیسانس</label>
                            <label>
                              <input name="education" type="radio" value="دکتری و بالاتر">
                              دکتری و بالاتر</label>
                          </p>
                        
                        <span class="error"></span>
                      </div>

                    </div>
                    <div class="col-md-6">

                      <div class="field">
                        <label class="main">چگونه با موسسه ما آشنا شدید؟</label>
                        <p class="group" style="border: none;">
                          <label>
                            <input name="depart" type="radio" value="وب سایت موسسه">
                            وب سایت موسسه</label>
                          <label>
                            <input name="depart" type="radio" value="دوستان و آشنایان">
                            دوستان و آشنایان</label>
                          <label>
                            <input name="depart" type="radio" value="اینستاگرام">
                            اینستاگرام</label>
                          <label>
                            <input name="depart" type="radio" value="سرچ گوگل">
                            سرچ گوگل</label>
                          <label>
                            <input name="depart" type="radio" value="دیگر">
                            دیگر</label>
                            </p>
                        
                        <span class="error"></span>
                      </div>

                    </div>
                  </div>

                

                  <hr>
                  <label class="main">نام دوره درخواستی </label>
                  <div class="row">
            
                  <div class="col-md-6">

                  <div class="field">
                    
                    <p class="group" style="border: none;">
                      <label>
                        <input name="ch1" id="ch1" type="checkbox" value="TOEFL فشرده انلاين">
                        TOEFL فشرده انلاين</label>
                      <label>
                        <input name="ch2" id="ch2" type="checkbox" value="TOEFL فشرده حضورى">
                        TOEFL فشرده حضورى</label>
                      <label>
                        <input name="ch3" id="ch3" type="checkbox" value="TOEFL خصوصى">
                        TOEFL خصوصى</label>
                      <label>
                        <input name="ch4" id="ch4" type="checkbox" value="TESOL انلاين">
                        TESOL انلاين</label>
                      <label>
                        <input name="ch5" id="ch5" type="checkbox" value="TESOL حضورى">
                        TESOL حضورى</label>
                        <label>
                        <input name="ch6" id="ch6" type="checkbox" value="منحصرا Speaking حضورى">
                        منحصرا Speaking حضورى</label>
                        </p>
                    
                    <span class="error"></span>
                  </div>

                  </div>
                  <div class="col-md-6">

                  <div class="field">
                    <p class="group" style="border: none;">
                      <label>
                        <input name="ch7" id="ch7" type="checkbox" value="TESOL غير حضورى">
                        TESOL غير حضورى</label>
                      <label>
                        <input name="ch8" id="ch8" type="checkbox" value="GRE آنلاين">
                        GRE آنلاين</label>
                      <label>
                        <input name="ch9" id="ch9" type="checkbox" value="GRE حضورى">
                        GRE حضورى</label>
                      <label>
                        <input name="ch10" id="ch10" type="checkbox" value="زبان General آنلاين">
                        زبان General آنلاين</label>
                      <label>
                        <input name="ch11" id="ch11" type="checkbox" value="زبان General حضورى">
                        زبان General حضورى</label>
                      <label>
                        <input name="ch12" id="ch12" type="checkbox" value="منحصرا Speaking آنلاين">
                        منحصرا Speaking آنلاين</label>
                        </p>
                    
                    <span class="error"></span>
                  </div>

                  </div>


                  </div>


                  <!-- <hr>
                  <div class="row">
                    <div class="col-md-12">
                     
                      <div class="field">
                        
                       
                        <div class="field">
                          <label class="main" style="width: 661px;">لطفا تصویر رسید واریزی خود را در این محل آپلود بفرمایید</label>
                          <input id="pay" name="pay" type="file" multiple>
                          <span class="error"></span> </div>
              
                      </div>

                    </div>
             
                  </div> -->
                  <!-- <hr>
                  <div class="row">
                    <div class="col-md-12">
                     
                      <div class="field">
                        
                       
                        <div class="field">
                          <label class="main" style="width: 661px;">لطفا تصویر شناسنامه یا کارت ملی خود را در این محل وارد بفرمایید</label>
                          <input id="card" name="card" type="file" multiple>
                          <span class="error"></span> </div>
              
                      </div>

                    </div>
             
                  </div> -->
                



                  

<!-- 
                  <div class="field">
                    <label class="main">نام دوره درخواستی (مثال: تافل آنلاین|حضوری، تربیت مدرس بین المللی تیسول آنلاین|حضوری،جی آر ای، زبان عمومی، زبان بازرگانی، مکالمه و ...):</label>
                    <p class="group">
                      <label>
                        <input name="sex" type="radio" value="male">
                        Male</label>
                      <label>
                        <input name="sex" type="radio" value="female">
                        Female</label>
                    </p>
                    <span class="error"></span>
                  </div> -->
                  <!-- <div class="field">
                    <label class="main">Hobbies:</label>
                    <p class="group">
                      <label>
                        <input name="hobbies[]" type="checkbox" value="football">
                        Football</label>
                      <label>
                        <input name="hobbies[]" type="checkbox" value="basketball">
                        Basketball</label>
                      <label>
                        <input name="hobbies[]" type="checkbox" value="dancing">
                        Dancing</label>
                      <label>
                        <input name="hobbies[]" type="checkbox" value="dancing">
                        Parkour</label>
                      <label>
                        <input name="hobbies[]" type="checkbox" value="dancing">
                        Videogames</label>
                    </p>
                    <span class="error"></span>
                  </div> -->

                  <div class="row text-left" style="float: left;">
                    <div class="col-md-8">
                  <div class="field buttons">
                    <label class="main">&nbsp;</label>
                    <button type="button"  class="btn btn-lg btn-primary btn-block btn_signup btn-get-started prev">قبلی</button>
                    <button type="button"  class="btn btn-lg btn-primary btn-block btn_signup btn-get-started next">بعدی </button>
                  </div>
                </div>
                </div>
                </section>

                <!-- Step 3 -->

                <section class="idealsteps-step">
          


                  <blockquote>
                    <strong style="color: #db018d;">دانشجوی گرامی، جهت فراهم آوردن محیطی مناسب برای آموزش و یادگیری و ارتقا دانش زبان انگلیسی شما، مرکز تخصصی تافل و تربیت مدرس حدادیان افتخار دارد در خدمت شما عزیزان باشد و برای رسیدن به این هدف رعایت نکات زیراز جانب شما دانشجویان گرامی الزامی است.</strong>


  <h5>الف) مقررات عمومی:</h5>
<ul>
  <li>	رعایت شئونات اسلامی، اخلاقی و اجتماعی و حضور در مؤسسه با پوشش مناسب محیط آموزشی الزامی است وهرگونه خسارت که به علت عدم رعایت شئونات و اخلاق اسلامی متوجه موسسه گردد، موسسه حق پیگرد قانونی دارد. کلیه موارد فوق در مورد کلیه کلاس های آنلاین نیز صادق است.</li>
  <li>	 به همراه آوردن دوستان و آشنایان و فرزندان خود به کلاس به هر علت و عنوانی ممنوع است.</li>
  <li>	خودداری از آوردن اشیاء گران بها و وسایل غیر مرتبط با امور تحصیلی به آموزشگاه، درصورت مفقود شدن هرگونه وسیله شخصی هیچ گونه مسئولیتی متوجه آموزشگاه نخواهد بود.</li>
  <li>	در صورت نقض ضوابط انضباطی و اخلاقی موسسه و پس از سه تذکر شفاهی دانشجو از کلاس اخراج شده و هیچ وجهی به وی تعلق نمی گیرد .</li>
  <li>	خواهشمندیم در طول ساعات آموزشی از تجمع در راهرو ها و حیاط خودداری فرمایید.</li>
  <li>	از پذیرفتن زبان آموز با تاخیر بیش از یک ربع معذوریم مگر با هماهنگی قبلی و موجه بودن تاخیر. در کلاس های آنلاین نیز اگر دانشجو به هر علتی بیش از ۱۵ دقیقه تاخیر داشته باشد، کلاس از جانب موسسه کنسل و ۱ جلسه  حساب میشود. </li>
  <li>	کادر اداری اموزشگاه، غیر از دو شماره تلفن ( ثابت و همراه) متعلق به موسسه  اطلاعات شما را از هیچ طریقی درخواست نمی نمایند. درصورتیکه فردی با این عنوان درخواست اطلاعات از شما نمود، موارد را به مدیریت گزارش فرمایید.</li>
</ul>



<h5>ب) مقررات آموزشی:</h5>
<ul>
  <li>دکلاس های عمومی:‌ عدم غیبت بیش از چهار جلسه در طول ترم ; غیبت بیش از چهار جلسه، حتی موجه، باعث محرومیت زبان آموز از شرکت در امتحان پایان ترم خواهد شد.  در موارد استثناُ، این امکان وجود دارد که جلسات از دست رفته از طریق جلسات خصوصی جبران گردد و دانشجو به کلاس بازگردد.</li>
  <li>	جهت حفظ نظم کلاس و تمرکزاستاد و زبان آموزان، عدم تاخیر در ورود به کلاس و همچنین عدم تعجیل در خروج از کلاس(لطفا در مواقع ضروری با دفتر اموزشگاه هماهنگ فرمایید). توجه داشته باشید که هر سه مورد تاخیر یک جلسه غیبت محسوب می شود.</li>
  <li>	در صورت غیبت در امتحانات کلاسی و پایان ترم ، نمره مربوطه صفر منظور می گردد و دانشجو مشمول تکرار دوره مورد نظر میگردد.</li>
  <li>	حضور در کلیه جلسات فوق العاده و جبرانی تعیین شده از سوی اموزشگاه الزامی است. </li>
  <li>	موسسه می تواند حداکثر تا جلسه سوم کلاس، به علت تعیین سطح دقیق تر و بالا بردن کیفیت کلاس ها، کلاس زبان آموز را تغییر دهد و دانشجو نسبت به تعیین سطح جدید خود اعتراضی ندارد.</li>
  <li>	زبان آموزان مجاز به شرکت در کلاسهای گروه های دیگر نمی باشند. </li>
  <li>	در صورت داشتن وقفه تحصیلی (حتی به مدت یک ترم) ، شرکت در آزمون تعیین سطح، جهت ادامه تحصیل الزامی است.</li>
  <li>	هنگام شروع کلاس ( عمومی یا خصوصی ) پرداخت شهریه توسط دانشجو باید تکمیل شده باشد و شهریه کلاس ها به صورت کامل و در تاریخ مشخص شده توسط آموزشگاه دریافت می گردد. در غیر این صورت آموزشگاه هیچگونه مسئولیتی در قبال ثبت نام ارایه خدمات زبان آموز نخواهد داشت.</li>
  <li>	تغییر روز و ساعت کلاس به هیچ عنوان امکان پذیر نمی باشد مگر با موافقت کتبی کلیه دانشجویان و استاد و تایید موسسه.</li>
  <li>	در کلاس های آنلاین، دانشجو موظف به انجام دقیق تکالیف تعیین شده و کسب رضایت کامل استاد میباشد. در غیر این صورت موسسه هیچ مسولیتی نخواهد داشت.</li>
  <li>	در کلاس های آنلاین مدرس فایل ها و اطلاعات دوره را در اختیار دانشجو قرار میدهد و دانشجو در خصوص رعایت حق کپی رایت مسولیت دارد .</li>
</ul>


<h5>شرایط قبولی درکلاس های ترمیک:</h5>
<p>کسب حداقل نمره 75 از 100 در امتحان پایان ترم و کسب حداقل نمره میانگین 75 از 100 در فعالیت کلاسی </p>


<h5>ج) مقررات استرداد و رزرو شهریه:</h5>
<ul>
  <li>	طبق ماده 32 آیین نامه آموزشگاه علمی آزاد چنانچه داوطلب پس از ثبت نام قطعی، قبل ا ز شروع ترم در هر زمان و به هر علتی ( موجه و غیر موجه) از شرکت در کلاس های آموزشگاه منصـرف گردد 20% از کل شهريه کسر و الباقـــي وجـه پس از تاییـد رسید پرداخت توسـط مدیـریت ، در انتهای ماه مستــرد خواهــد شـــد. لازم به ذکر است دانشجو میباسیت انصراف خود را حتما تا 72 ساعت قبل از شروع کلاسها (بدون نظر گرفتن روزهای تعطیل) به موسسه اعلام نماید و در صورتی که دیرتر از این زمان اعلام شود، هیچ وجهی در هیچ شرایطی مسترد نخواهد شد.</li>
  <li>	شرایط فوق برای برخی دوره های خاص که در آن پرداخت اقساط برای رفاه دانشجویان فراهم شده، نیز صادق است  و در این شرایط، مبلغ 20 درصد از کل مقدار شهریه کسر میگردد و مابقی عودت داده میشود.</li>
  <li>	در صورت ثبت نام در دوره های خاص و استفاده از شرایط پرداخت، یا پیش ثبت نام در دوره برای گرفتن پیش برنامه درسی و غیره، اگر دانشجو به هر علتی ( موجه و غیر موجه)، پس از شروع کلاس، از ادامه شرکت در کلاس منصرف گردد، اقساط وی میبایست تا انتها به طور کامل پرداخت گردد و هزینه عودت داده نمیشود. اگر کلاس شروع نشده باشد، با توجه به ماده ۱ رفتار خواهد شد</li>
  <li>	با توجه به محدودیت تعداد دانشجویان در هر کلاس جهت افزایش کیفیت دوره ها ، شهریه پرداختی منحصرا مختص همان دوره بوده و هیچگونه امکان جابجایی و انتقال به دوره های دیگر و یا حتی زمان های دیگر وجود ندارد.</li>
  <li>	لطفا به تاریخ پایان دوره و شروع کلاس جدید و امتحانات دقت نمایید. موسسه در قبال فراموشی و عدم دقت زبان آموزان مسولیتی ندارد.</li>
  <li>	قبض های رسید ثبت نام خود را (آنلاین یا مکتوب) تا پایان هر دوره نزد خود نگه دارید. </li>
</ul>
<p>نکته: جهت استرداد شهریه، قبض نامنویسی یا رسید بانکی نسخه پرداخت کننده و کارت شناسایی عکس دار الزامیست. </p>


<p>مرکز تخصصی تافل و تربیت مدرس حدادیان امیدوار است بتواند با همکاری شما دانشجویان عزیز و با رعایت شئونات و موازین اخلاقی و احترام متقابل فضای آموزشی دلپذیر و سالمی را فراهم آورد.</p>
                  </blockquote>


                  <blockquote>
                    <p> اینجانب <strong class="blue"> <span id="fname"></span> <span id="lname"></span> </strong> فرزند <strong class="blue" id="ffname"> علیرضا </strong> به شماره شناسنامه <strong class="blue" id="ssh_number"> 2560096994 </strong>  در تاریخ <strong class="blue"> <?= $date ?> </strong> پس از مطالعه با دقت کلیه موارد فوق (۷ مورد مقررات عمومی، ۱۱ مورد مقررات آموزشی و ۶ مورد مقررات استرداد و رزرو شهریه همراه یک نکته) تمامی موارد ذکر شده را میپذیرم و با قبول شرایط تمایل به ثبت نام دارم.</p>
                    
                    <br>
                    <br>
                    <label>
                      <input name="agree" type="radio" id="agree" value="agreement">
                      بله. میپذیرم و انتخاب این گزینه به منزله امضا من میباشد</label>
                    <label>
                      <input name="agree" type="radio" id="disagree"  value="disagreement">
                      خیر نمیپذریم و از ثبت نام انصراف می دهم</label>
                    <label>


                  </blockquote>

              
     
                  <div class="field buttons">
                    <label class="main">&nbsp;</label>
                     <button type="button"  class="btn btn-lg btn-primary btn-block btn_signup btn-get-started prev">قبلی</button>
                    <button type="submit" class="btn btn-lg btn-success btn-block btn_signup btn-get-started submit" id="btn_submit" disabled="disabled">ثبت نام</button>
                  </div>
                </section>




              </div>
              <span id="invalid"></span>
            </form>
          </div>
        </div>


      </div>

    </div>
  </div>

  <div style="height:50px;">
  </div>

  
  <script src="<?php echo base_url(); ?>assets/register/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/register/jquery-ui.min.js"></script>
  
  <script src="<?php echo base_url(); ?>assets/register/jquery.idealforms.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9/dist/sweetalert2.min.js"></script>
  

  <!-- <script src="<?php echo base_url(); ?>assets/js/vue.js"></script> -->
  
  <!--<script src="js/out/jquery.idealforms.min.js"></script>-->
  <script>

    $('form.idealforms').idealforms({

      silentLoad: false,

      rules: {
        'firstname': 'required',
        'lastname': 'required',
        'fathername': 'required',
        'sh_number': 'required',
        'national': 'required code_meli',
        'bdate': 'required min:4 max:4',
        'job': 'required',
        'major': 'required',
        'marital': 'required',
        'education': 'required',
        'depart': 'required',
        'period': 'required',
        // 'card': 'required',
        // 'username': 'required username ajax',
        'email': 'required email',
        'password': 'required pass',
        'confirmpass': 'required equalto:password',
        // 'date': 'required date',
        // 'picture': 'required extension:jpg:png',
        // 'website': 'url',
        // 'hobbies[]': 'minoption:2 maxoption:3',
        'mobile': 'required mobile',
        'agree': 'required',
        // 'zip': 'required zip',
        // 'options': 'select:default',
      },

      errors: {
        'username': {
          ajaxError: 'Username not available'
        }
      },

      onSubmit: function (invalid, e) {
        e.preventDefault();
        $('#invalid')
          .show()
          .toggleClass('valid', !invalid)
          .text(invalid ? error() : run());
      }
    });



    function run(){
      var base_url = '<?php echo base_url();?>';
      var marital = $("input:radio[name=marital]:checked").val();
      var education = $("input:radio[name=education]:checked").val();
      var depart = $("input:radio[name=depart]:checked").val();

  var period="";

      var ch1=$('#ch1').is(':checked');
      if(ch1==true){ ch1=$('#ch1').val();period=period+";"+ch1; }
      
      var ch2=$('#ch2').is(':checked');
      if(ch2==true){ ch1=$('#ch2').val();period=period+";"+ch2; }
      var ch3=$('#ch3').is(':checked');
      if(ch3==true){ ch3=$('#ch3').val();period=period+";"+ch3; }
      var ch4=$('#ch4').is(':checked');
      if(ch4==true){ ch4=$('#ch4').val();period=period+";"+ch4; }
      var ch5=$('#ch5').is(':checked');
      if(ch5==true){ ch5=$('#ch5').val();period=period+";"+ch5; }
      var ch6=$('#ch6').is(':checked');
      if(ch6==true){ ch6=$('#ch6').val();period=period+";"+ch6; }
      var ch7=$('#ch7').is(':checked');
      if(ch7==true){ ch7=$('#ch7').val();period=period+";"+ch7; }
      var ch8=$('#ch8').is(':checked');
      if(ch8==true){ ch8=$('#ch8').val();period=period+";"+ch8; }
      var ch9=$('#ch9').is(':checked');
      if(ch9==true){ ch9=$('#ch9').val();period=period+";"+ch9; }
      var ch10=$('#ch10').is(':checked');
      if(ch10==true){ ch10=$('#ch10').val();period=period+";"+ch10; }
      var ch11=$('#ch11').is(':checked');
      if(ch11==true){ ch11=$('#ch11').val();period=period+";"+ch11; }
      var ch12=$('#ch12').is(':checked');
      if(ch12==true){ ch12=$('#ch12').val();period=period+";"+ch12; }
      
      

      $.ajax({
								url: base_url + "Register/reg_users",
								dataType: "text",
								type: "POST",
								data:{
                  firstname:$("#firstname").val() ,
                  lastname:$("#lastname").val(),
                  fathername:$("#fathername").val(),
                  sh_number:$("#sh_number").val(),
                  national:$("#national").val(),
                  bdate:$("#bdate").val(),
                  mobile:$("#mobile").val(),
                  job:$("#job").val(),
                  email:$("#email").val(),
                  password:$("#password").val(),
                  confirmpass:$("#confirmpass").val(),
                  major:$("#major").val(),
                  marital:marital,
                  education:education,
                  depart:depart,
                  period:period,
								
                },
								cache:false,
								 success: function(result){
                  

									switch (result) {
										case 'insert':
                      Swal.fire({
                      icon: 'success',
                      title: 'موفقیت آمیز',
                      text: 'ثبت نام شما با موفقیت انجام شد',
                      footer: '',
                      confirmButtonText:'متوجه شدم'
                    })
											break;
										case 'duplicate':
                      Swal.fire({
                      icon: 'error',
                      title: 'خطا',
                      text: 'کاربری با این مشخصات قبلا ثبت شده است',
                      footer: '',
                      confirmButtonText:'متوجه شدم'
                    })
											break;
										case 'error':
                      alert("error")
											break;

										default:

											break;
									}

								}});





    };

    function error(){
      
      
      Swal.fire({
        icon: 'error',
        title: 'خطا',
        text: ' فیلد های اجباری را باید پر کنید',
        footer: '',
        confirmButtonText:'متوجه شدم'
      })
    };

    $('form.idealforms').find('input, select, textarea').on('change keyup', function () {
      $('#invalid').hide();
    });

    $('form.idealforms').idealforms('addRules', {
      'comments': 'required minmax:50:200'
    });

    $('.prev').click(function () {
      $('.prev').show();
      $('form.idealforms').idealforms('prevStep');
      $("#fname").text($("#firstname").value());
      $("#lname").text($("#lastname").value());
      $("#ffname").text($("#fathername").value());
      $("#ssh_number").text($("#sh_number").value());
    });
    $('.next').click(function () {
      $('.next').show();
      $('form.idealforms').idealforms('nextStep');
      $("#fname").text($("#firstname").val());
      $("#lname").text($("#lastname").val());
      $("#ffname").text($("#fathername").val());
      $("#ssh_number").text($("#sh_number").val());
    });



    $(document).ready(function() {
        //set initial state.
        // $('#textbox1').val($(this).is(':checked'));

        $('#agree').change(function() {
          var check= $(this).is(':checked');
          $("#btn_submit").prop("disabled" , false);
        });

        $('#disagree').click(function() {
          if ($(this).is(':checked')) {
            $("#btn_submit").prop("disabled" , true);
          }
        });

        $("#register_panel").addClass("not_show");;



        
      });


function viewnext(){
  $('.next').show();
      $('form.idealforms').idealforms('nextStep');
      $("#fname").text($("#firstname").val());
      $("#lname").text($("#lastname").val());
      $("#ffname").text($("#fathername").val());
      $("#ssh_number").text($("#sh_number").val());
}



function check_sms(){
  var base_url = '<?php echo base_url();?>';
  var num1=$("#num1").val();
  var num2=$("#num2").val();
  var num3=$("#num3").val();
  var num4=$("#num4").val();

  var otp=num1+num2+num3+num4;

  $.ajax(
            {
            type: 'post',
            url: base_url + "Register/check_sms",
            data: { 
                "otp": otp,
            },
            success: function (response) {
              // alert(response);
              switch (response) {
										case "success":
                    myStopFunction(interval);
                      $("#sms").addClass("not_show");
                      $("#register_panel").removeClass("not_show");
											break;
										case 'error':
                      Swal.fire({
                      icon: 'error',
                      title: 'خطا',
                      text: 'کد وارد شما صحیح نمی باشد، لطفا مجدد تلاش فرمایید',
                      footer: '',
                      confirmButtonText:'متوجه شدم'
                    })
											break;
			
					

										default:
                      alert("default")
											break;
                  }
                  

            },
            error: function () {
                Swal.fire({
                    icon: 'error',
                    title: 'خطا',
                    text: 'خطایی رخ داده است، لطفا دقایقی دیکر دوباره تلاش فرمایید',
                    confirmButtonText:'متوجه شدم'
                    // footer: '<a href>Why do I have this issue?</a>'
                  })
            }

            });

  
 


}

var interval;

function getCode(){
  var base_url = '<?php echo base_url();?>';
  var mobile=$("#mobile_verify").val();
        var regex = new RegExp(/^0(9)\d{9}$/);
        if(regex.test( mobile )==false){
          Swal.fire({
        icon: 'error',
        title: 'خطا',
        text: ' موبایل معتبر وارد نمایید',
        footer: '',
        confirmButtonText:'متوجه شدم'
      })
        }else{


          $.ajax(
            {
            type: 'post',
            url: base_url + "Register/sent_code",
            data: { 
                "mobile": mobile,
            },
            success: function (response) {
              // alert(response);
              switch (response) {
										case "success":
                      Swal.fire({
                      icon: 'success',
                      title: 'موفقیت آمیز',
                      text: 'کد 4 رقمی به شماره موبایل وارد شده ارسال شد، لطفا کد دریافتی را در کادر نمایش داده شده وارد نمایید',
                      footer: '',
                      confirmButtonText:'متوجه شدم'
                    });

                    $("#get_code").addClass("not_show");
                    $("#mobile_verify").removeClass("not_show");
                    $("#form").removeClass("not_show");
                    $("#timer_dv").removeClass("not_show");
                    $("#resend").addClass("not_show");

                    
                    var counter = 60;
                    interval = setInterval(function() {
                        counter--;
                        // Display 'counter' wherever you want to display it.
                        if (counter <= 0) {
                            clearInterval(interval);
                            // $('#timer').html("<h3>Count down complete</h3>");  
                            $("#resend").removeClass("not_show");
                            $('#timer_dv').addClass("not_show");
                            $('#timer').text(counter);
                            return;
                        }else{
                          $('#timer').text(counter);
                          
                        }
                    }, 1000);


                    
                    
               



											break;
										case 'error':
                      Swal.fire({
                      icon: 'error',
                      title: 'خطا',
                      text: 'کد 4 رقمی ارسال نشد، لطفا لحظاتی دیگر برای ثبت نام اقدام نمایید',
                      footer: '',
                      confirmButtonText:'متوجه شدم'
                    })
											break;
										case 'error':
                      alert("error")
											break;
										case ' ':
                      alert("error")
											break;

										default:
                      alert("default")
											break;
                  }
                  

            },
            error: function () {
                Swal.fire({
                    icon: 'error',
                    title: 'خطا',
                    text: 'خطایی رخ داده است، لطفا دقایقی دیکر دوباره تلاش فرمایید',
                    confirmButtonText:'متوجه شدم'
                    // footer: '<a href>Why do I have this issue?</a>'
                  })
            }

            });





        }

}


function myStopFunction(idVar) {
  clearInterval(idVar);
}



$(function() {
  'use strict';

  var body = $('#form');

  function goToNextInput(e) {
    var key = e.which,
      t = $(e.target),
      sib = t.next('input');

    if (key != 9 && (key < 48 || key > 57)) {
      e.preventDefault();
      return false;
    }

    if (key === 9) {
      return true;
    }

    if (!sib || !sib.length) {
      sib = body.find('input').eq(0);
    }
    sib.select().focus();
  }

  function onKeyDown(e) {
    var key = e.which;

    if (key === 9 || (key >= 48 && key <= 57)) {
      return true;
    }

    e.preventDefault();
    return false;
  }
  
  function onFocus(e) {
    $(e.target).select();
  }

  body.on('keyup', 'input', goToNextInput);
  body.on('keydown', 'input', onKeyDown);
  body.on('click', 'input', onFocus);

})

// var regex = new RegExp(/[0-9]|\./);
//         if(regex.test( key )==false){
          
//         e.preventDefault();
//         return false;
//         }else{
//           return true;
//         }

  </script>
</body>

</html>
