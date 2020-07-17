<!DOCTYPE html>
<html>
<head>
  <title>Login-elalg</title>

  <link href="<?php echo base_url(); ?>assets/css/login.css" rel="stylesheet">
  <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/vendors/jquery/dist/jquery.min.js"></script>
</head>
<body>


<div class="background-wrap">
  <div class="background"> 
    <?php
    if($this->session->flashdata('error_userpass')) {
      ?>
      <p>UserName/Password Error</p>
      <?php
    }
    ?>
   </div>
</div>

<form id="accesspanel1" action="<?php echo base_url()?>Admin/login" method="post">
  <h1 id="litheader">elalg</h1>
  <div class="inset">
    <p>
      <input type="text" name="username" id="username" placeholder="UserName">
    </p>
    <p>
      <input type="password" name="password" id="password" placeholder="Password">
    </p>
    <input class="loginLoginValue" type="hidden" name="service" value="login" />
  </div>
  <p class="p-container">
    <input type="submit" name="Login" id="go" value="Login">
  </p>
</form>


<script>
  $(document).ready(function() {

    var state = false;
   



    $('#accesspanel').on('submit', function(e) {
       document.getElementById("litheader").className = "poweron";
    document.getElementById("go").className = "";
    document.getElementById("go").value = "Initializing...";
        e.preventDefault();
        var username=($("#username").val());
        var password=($("#password").val());
                        $.ajax({
                          type: "POST",
                            url: "<?php echo base_url()?>Admin/login",
                          data: {
                              username: username,
                              password: password
                          },
                          success: function(response) {
                            if(response==1){
                              window.location.href = "<?php echo base_url()?>Admin";
                            }else{
                              document.getElementById("litheader").className = "";
                          document.getElementById("go").className = "denied";
                          document.getElementById("go").value = "UserName/Password Error";
                            }

                              
                          },
                          error: function(response) {
                           
                          }
                            
                  });

    });

});
</script>



</body>
</html>
