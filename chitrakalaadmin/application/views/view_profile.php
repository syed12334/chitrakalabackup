<?php
  //echo "<pre>";print_r($profile);exit;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Chitra Santhe</title>

  <!-- vendor css -->
  <link href="<?= base_url();?>assets/css/all.min.css" rel="stylesheet">
  <link href="<?= base_url();?>assets/css/ionicons.min.css" rel="stylesheet">
  <link href="<?= base_url();?>assets/lib/highlightjs/styles/github.css" rel="stylesheet">
  <link href="<?= base_url();?>assets/lib/datatables.net-dt/css/jquery.dataTables.min.css" rel="stylesheet">
  <link href="<?= base_url();?>assets/lib/datatables.net-responsive-dt/css/responsive.dataTables.min.css" rel="stylesheet">

  <link rel="stylesheet" href="<?= base_url();?>assets/css/style.css">
</head>

<body>




  <div class="br-logo"><a href=""><img src="<?= base_url();?>assets/images/logo.png" alt="" width="50px"><span></span>Chitra
      <i>Santhe</i><span></span></a></div>
  <div class="br-sideleft sideleft-scrollbar">
    <label class="sidebar-label pd-x-10 mg-t-20 op-3">Navigation</label>
    <ul class="br-sideleft-menu">

      <li class="br-menu-item">
        <a href="<?= base_url(); ?>" class="br-menu-link">
          <i class="fa fa-chart-pie"></i>
          <span class="menu-item-label">Dashboard</span>
        </a>
      </li>

      <li class="br-menu-item">
        <a href="<?= base_url().'profile'; ?>" class="br-menu-link">
          <i class="fa fa-user"></i>
          <span class="menu-item-label">Profile List</span>
        </a>
      </li>


    </ul><!-- br-sideleft-menu -->



    <br>
  </div>
  <div class="br-header">
    <div class="br-header-left">
      <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="fas fa-bars"></i></a>
      </div>
      <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="fas fa-bars"></i></a></div>
      <div class="input-group hidden-xs-down wd-170 transition">
        <input id="searchbox" type="text" class="form-control" placeholder="Search">
        <span class="input-group-btn">
          <button class="btn btn-secondary" type="button"><i class="fa fa-search"></i></button>
        </span>
      </div><!-- input-group -->
    </div><!-- br-header-left -->
    <div class="br-header-right">
      <nav class="nav">

        <div class="dropdown">
          <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
            <span class="logged-name hidden-md-down">Katherine</span>
            <img src="https://via.placeholder.com/500" class="wd-32 rounded-circle" alt="">
            <span class="square-10 bg-success"></span>
          </a>
          <div class="dropdown-menu dropdown-menu-header wd-250">
            <div class="tx-center">
              <a href=""><img src="https://via.placeholder.com/500" class="wd-80 rounded-circle" alt=""></a>
              <h6 class="logged-fullname">Katherine P. Lumaad</h6>
              <p>youremail@domain.com</p>
            </div>


            <hr>
            <ul class="list-unstyled user-profile-nav">

              <li><a href=""><i class="icon ion-power"></i> Sign Out</a></li>
            </ul>
          </div><!-- dropdown-menu -->
        </div><!-- dropdown -->
      </nav>

    </div><!-- br-header-right -->
  </div><!-- br-header -->
  <!-- ########## END: HEAD PANEL ########## -->



<?php
    if(count($profile) >0) {
      ?>
          <!-- ########## START: MAIN PANEL ########## -->
  <div class="br-mainpanel br-profile-page">





    <div class="card shadow-base bd-0 rounded-0 widget-4">
      <div class="card-header ht-75">
        <div class="hidden-xs-down">
          <?php
            if(!empty($profile[0]->profileimg)) {
              ?>
              <a href="<?= app_url().$profile[0]->profileimg;?>"><span class="tx-medium">Profile View</span></a>
              <?php
            }
          ?>
          
        </div>

        <div class="tx-24 hidden-xs-down">
          <?php
            if(!empty($profile[0]->pdf) && $profile[0]->pdf !='') {
              ?>
              <a href="<?= app_url().$profile[0]->pdf;?>" target='_blank' class="btn btn-info"><i class="fa fa-eye"></i> Application View </a>
              <?php
            }
          ?>
          <?php
            if($profile[0]->astatus ==1) {
              ?>
              <button class="btn btn-danger" id="statusview" title="Accept" onclick="updateStatus(<?= $profile[0]->pro_id;?>, 2,2)"><i class="fa fa-times"></i> Reject</button>
              <?php
            }else {
              ?>
              <button class="btn btn-primary" id="statusview" title="Reject" onclick="updateStatus(<?= $profile[0]->pro_id;?>, 1,2)"><i class="fa fa-check"></i> Approve</button>
              <?php
            }
          ?>
           
        </div>

      </div><!-- card-header -->
      <div class="card-body">
        <div class="card-profile-img">
          <img src="assets/images/profile.jpeg" alt="">
        </div><!-- card-profile-img -->
        <h4 class="tx-normal tx-roboto tx-white"><?= ucfirst($profile[0]->name);?></h4>
        <p class="mg-b-25"> Phone No. : <?= $profile[0]->mphone;?> &nbsp; &nbsp; | &nbsp; &nbsp; Email Id : <?= $profile[0]->emailid;?></p>




        <p> <?= $profile[0]->about;?></p>

      
      </div><!-- card-body -->
    </div>






  </div>






  <div class="br-mainpanel">
    <div class="container">

      <div class="row">
        <?php 
          if(count($profileimg) >0) {
            foreach ($profileimg as $pro) {
              ?>
                <div class="col-md-4"><div class="card shadow-base bd-0 mg-0 mb-4">
          <figure class="card-item-img rounded-top">
            <img class="img-fluid rounded-top" src="<?= app_url().$pro->profileimg; ?>" alt="Image">
          </figure>
          <div class="card-body pd-25">
            <h5 class="tx-normal tx-roboto lh-3 mg-b-15"><a href="" class="tx-inverse hover-info"><?= ucfirst($pro->title);?></a></h5>

            <h3 class="price"><i class="fas fa-rupee-sign"></i> <?= number_format($pro->amount);?>  <button class="btn btn-sm btn-danger float-right" title="Remove" onclick="return deleteProfile(<?= $pro->imgid;?>)"><i class="fa fa-trash"></i></button></h3>

          </div><!-- card-body -->
        </div><!-- card -->
        </div>
              <?php
            }
          }
        ?>
      

       
       

         
        
      </div>

      

 

    </div>
    <div class="footer bg-white text-center pt-4 pb-4">
       <?php
            if($profile[0]->astatus ==1) {
              ?>
              <button class="btn btn-danger" id="statusview" title="Accept" onclick="updateStatus(<?= $profile[0]->pro_id;?>, 2,2)"><i class="fa fa-times"></i> Reject</button>
              <?php
            }else {
              ?>
              <button class="btn btn-primary" id="statusview" title="Reject" onclick="updateStatus(<?= $profile[0]->pro_id;?>, 1,2)"><i class="fa fa-check"></i> Approve</button>
              <?php
            }
          ?>
   
    </div>
  </div>
      <?php
    }else {
      redirect(base_url().'profile');
    }
?>

  
  </div><!-- br-mainpanel -->






  <!-- ########## END: MAIN PANEL ########## -->

  <script src="<?= base_url();?>assets/lib/jquery/jquery.min.js"></script>
  <script src="<?= base_url();?>assets/lib/jquery-ui/ui/widgets/datepicker.js"></script>
  <script src="<?= base_url();?>assets/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url();?>assets/lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>
  <script src="<?= base_url();?>assets/lib/moment/min/moment.min.js"></script>
  <script src="<?= base_url();?>assets/lib/peity/jquery.peity.min.js"></script>
  <script src="<?= base_url();?>assets/lib/highlightjs/highlight.pack.min.js"></script>
  <script src="<?= base_url();?>assets/lib/select2/js/select2.min.js"></script>
  <script src="<?= base_url();?>assets/lib/timepicker/jquery.timepicker.min.js"></script>
  <script src="<?= base_url();?>assets/lib/spectrum-colorpicker/spectrum.js"></script>
  <script src="<?= base_url();?>assets/lib/jquery.maskedinput/jquery.maskedinput.js"></script>
  <script src="<?= base_url();?>assets/lib/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
  <script src="<?= base_url();?>assets/lib/ion-rangeslider/js/ion.rangeSlider.min.js"></script>

  <script src="<?= base_url();?>assets/lib/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="<?= base_url();?>assets/lib/datatables.net-dt/js/dataTables.dataTables.min.js"></script>
  <script src="<?= base_url();?>assets/lib/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
  <script src="<?= base_url();?>assets/lib/datatables.net-responsive-dt/js/responsive.dataTables.min.js"></script>
  <script src="<?= base_url();?>assets/lib/select2/js/select2.min.js"></script>
  <script>
     function updateStatus(id,st,pri)  {
              $.ajax({
                    url :"<?= base_url().'profile/updateStatus';?>",
                    method:"post",
                    data:{
                        id:id,
                        st:st,
                        pri:pri
                    },
                    success:function(data) {
                       location.reload();
                    }
              });
            }
            function deleteProfile(id) {
              $.ajax({
                  url :"<?= base_url().'profile/deleteProfile';?>",
                  method:"post",
                  data : {
                    id :id
                  },
                  dataType :"json",
                  cache:false,
                  success:function(data) {
                    if(data.status ==true) {
                      location.reload();
                    }
                  }
              });
            }
  </script>
</body>

</html>