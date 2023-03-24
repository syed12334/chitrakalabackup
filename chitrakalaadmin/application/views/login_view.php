<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  
    <title>Chitra Santhe</title>
    <link href="<?= base_url();?>assets/css/all.min.css" rel="stylesheet">
    <link href="<?= base_url();?>assets/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url();?>assets/css/style.css">
  </head>

  <body>

    <div class="d-flex align-items-center justify-content-center ht-100v">
      <video id="headVideo" class="pos-absolute a-0 wd-100p ht-100p object-fit-cover" autoplay muted loop>
        <source src="assets/video/video1.mp4" type="video/mp4">
      </video>
      <div class="overlay-body bg-black-7 d-flex align-items-center justify-content-center">
        <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 rounded bg-black-6">
          <div class="signin-logo tx-center tx-28 tx-bold tx-white"><img src="<?= base_url();?>assets/images/logo.png" width="150px" /></div>

         <div id="processing"></div>

           <form method="post" id="userLogin" enctype="multipart/form-data">

                        <input type="hidden" name="<?= $this->security->get_csrf_token_name();?>" value="<?= $this->security->get_csrf_hash();?>" class="csrf_tkn">

                        <div class="form-group ">

                            <input type="text" class="form-control fc-outline-dark" name="name" id="name" placeholder="Enter Your Username" style="border:1px solid #ccc!important;color:#fff" >
                            <span id="name_error" class="text-danger"></span>
                        </div>

                        <div class="form-group ">

                            <input type="password" class="form-control fc-outline-dark" name="password" id="password" placeholder="Enter Your Password" style="border:1px solid #ccc!important;color:#fff" >
                            <span id="pass_error" class="text-danger"></span>
                        </div>

                        <button id="submit" type="submit" class="btn btn-primary btn-lg btn-block" >Sign In</button>

                        </form>

        </div><!-- login-wrapper -->
      </div><!-- overlay-body -->
    </div><!-- d-flex -->

    <script src="<?= base_url();?>assets/js/jquery.min.js"></script>
    <script src="<?= base_url();?>assets/js/datepicker.js"></script>
    <script src="<?= base_url();?>assets/js/bootstrap.bundle.min.js"></script>
     <script type="text/javascript">
$(document).ready(function() {
       $("#userLogin").on("submit",function(e) {
        e.preventDefault();
          var formdata =new FormData(this);
          $.ajax({
              url :"<?= base_url().'login/checklogin'; ?>",
              method :"post",
              dataType:"json",
              data :formdata,
              contentType: false,
                cache: false,
                processData:false,
                success:function(data) {
                if(data.formerror ==false) {
                  $(".csrf_token").val(data.csrf_token);
                  if(data.name_error !='') {
                    $("#name_error").html(data.name_error);
                  }else {
                    $("#name_error").html('');
                  }
                  if(data.pass_error !='') {
                    $("#pass_error").html(data.pass_error);
                  }else {
                    $("#pass_error").html('');
                  }
                   
                   
                }
                else if(data.status ==false) {
                  $(".csrf_token").val(data.csrf_token);
                  $("#processing").html('<div class="alert alert-danger alert-dismissible"><i class="fas fa-ban"></i> '+data.msg+'</div>').show().fadeOut(3500);
                }
                else if(data.status ==true) {
                   $(".csrf_token").val(data.csrf_token);
                   $("#name_error").html('');
                   $("#pass_error").html('');
                
                   setTimeout(function() {window.location.href="<?= base_url().'home';?>"}, 500);
                }
              }
          });
      });
  });

       </script>

  </body>
</html>
