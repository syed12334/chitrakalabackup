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
  <style type="text/css">
      .alert{
  width:100%;
  margin:20px auto;
  padding:30px;
  position:relative;
  border-radius:5px;
  box-shadow:0 0 15px 5px #ccc;
}
.alert h3 {
    font-size: 25px!important;
}
.close{
  position:absolute;
  width:30px;
  height:30px;
  opacity:1;
  border-width:1px;
  border-style:solid;
  border-radius:50%;
  right:15px;
  top:25px;
  text-align:center;
  font-size:1.6em;
  cursor:pointer;
  line-height: 25px;
}
label {
    cursor: pointer!important;
}
.success-alert {
    background-color: #a8f0c6;
    border-left: 5px solid #178344!important;
}
.danger-alert {
    background-color: #f7a7a3;
    border-left: 5px solid #8f130c!important;
}
.warning-alert {
    background-color: #ffd48a;
    border-left: 5px solid #8a5700!important;
}
  </style>
</head>

<body>




  <div class="br-logo"><a href=""><img src="assets/images/logo.png" alt="" width="50px"><span></span>Chitra
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