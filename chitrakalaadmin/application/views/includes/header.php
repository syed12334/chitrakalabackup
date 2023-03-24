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
  <link href="<?= base_url();?>assets/lib/select2/css/select2.min.css" rel="stylesheet">
  <link href="<?= base_url();?>assets/lib/timepicker/jquery.timepicker.css" rel="stylesheet">
  <link href="<?= base_url();?>assets/lib/spectrum-colorpicker/spectrum.css" rel="stylesheet">
  <link href="<?= base_url();?>assets/lib/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">
  <link href="<?= base_url();?>assets/lib/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet">
  <link href="<?= base_url();?>assets/lib/ion-rangeslider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url();?>assets/css/style.css">
</head>

<body>

  <div class="br-logo"><a href="<?= base_url();?>"><img src="<?= base_url();?>assets/images/logo.png" alt="" width="50px"><span></span>Chitra 
      <i>Santhe</i><span></span></a></div>
  <div class="br-sideleft sideleft-scrollbar">
    <label class="sidebar-label pd-x-10 mg-t-20 op-3">Navigation</label>
    <ul class="br-sideleft-menu">

      <li class="br-menu-item">
        <a href="<?= base_url().'home';?>" class="br-menu-link">
          <i class="fa fa-chart-pie"></i>
          <span class="menu-item-label">Dashboard</span>
        </a>
      </li>

      <li class="br-menu-item">
        <a href="<?= base_url().'profile';?>" class="br-menu-link">
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
      <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i
            class="fas fa-bars"></i></a></div>
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

              <li><a href="<?= base_url().'login/logout';?>"><i class="icon ion-power"></i> Sign Out</a></li>
            </ul>
          </div><!-- dropdown-menu -->
        </div><!-- dropdown -->
      </nav>

    </div><!-- br-header-right -->
  </div><!-- br-header -->
  <!-- ########## END: HEAD PANEL ########## -->



  <!-- ########## START: MAIN PANEL ########## -->
  <div class="br-mainpanel">
    
   