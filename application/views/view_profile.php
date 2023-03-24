<?php
  echo "<pre>";print_r($profile);exit;
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




  <div class="br-logo"><a href=""><img src="assets/images/logo.png" alt="" width="50px"><span></span>Chitra
      <i>Santhe</i><span></span></a></div>
  <div class="br-sideleft sideleft-scrollbar">
    <label class="sidebar-label pd-x-10 mg-t-20 op-3">Navigation</label>
    <ul class="br-sideleft-menu">

      <li class="br-menu-item">
        <a href="dashboard.html" class="br-menu-link">
          <i class="fa fa-chart-pie"></i>
          <span class="menu-item-label">Dashboard</span>
        </a>
      </li>

      <li class="br-menu-item">
        <a href="profile_list.html" class="br-menu-link">
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



  <!-- ########## START: MAIN PANEL ########## -->
  <div class="br-mainpanel br-profile-page">





    <div class="card shadow-base bd-0 rounded-0 widget-4">
      <div class="card-header ht-75">
        <div class="hidden-xs-down">

          <a href=""><span class="tx-medium">Profile View</span></a>
        </div>

        <div class="tx-24 hidden-xs-down">
          <a href="assets/images/CKP.pdf" class="btn btn-info"><i class="fa fa-eye"></i> Application View </a> <a href="" class="btn btn-primary"><i class="fa fa-check"></i> Approve</a>
        </div>

      </div><!-- card-header -->
      <div class="card-body">
        <div class="card-profile-img">
          <img src="assets/images/profile.jpeg" alt="">
        </div><!-- card-profile-img -->
        <h4 class="tx-normal tx-roboto tx-white">Sadananda M R</h4>
        <p class="mg-b-25">BFA &nbsp;&nbsp; | &nbsp; &nbsp; Phone No. : 9900599005 &nbsp; &nbsp; | &nbsp; &nbsp; Email Id : sadananda@gmail.com</p>




        <p> I am an artist based in Pune. Though I did not pursue it as a part of curriculum and majored in Chartered
          Accountancy, it’s the childhood passion that makes me paint regularly.</p>

        <p>I used to do sketching and poster color paintings since childhood when I was 6-7 years old. Post my
          education, I started pursuing Art along with my job since 2016. Currently I am learning from my Guru Vilas
          Kulkarni, who is also a renowned artist in India.</p>

        <p>I paint in watercolor. The transparency and simplicity of the medium appeals me a lot, athough I like and
          have painted in other mediums too such as Oil Pastels and Acrylic.</p>
      </div><!-- card-body -->
    </div>






  </div>






  <div class="br-mainpanel">
    <div class="container">

      <div class="row">
        <div class="col-md-4"><div class="card shadow-base bd-0 mg-0 mb-4">
          <figure class="card-item-img rounded-top">
            <img class="img-fluid rounded-top" src="assets/images/event01.jpg" alt="Image">
          </figure>
          <div class="card-body pd-25">
            <h5 class="tx-normal tx-roboto lh-3 mg-b-15"><a href="" class="tx-inverse hover-info">Artemisia Gentileschi
                talk with Maria</a></h5>

            <h3 class="price"><i class="fas fa-rupee-sign"></i> 15000  <button class="btn btn-sm btn-danger float-right" title="Remove"><i class="fa fa-trash"></i></button></h3>

          </div><!-- card-body -->
        </div><!-- card -->
        </div>

        <div class="col-md-4"><div class="card shadow-base bd-0 mg-0 mb-4">
          <figure class="card-item-img rounded-top">
            <img class="img-fluid rounded-top" src="assets/images/event02.jpg" alt="Image">
          </figure>
          <div class="card-body pd-25">
            <h5 class="tx-normal tx-roboto lh-3 mg-b-15"><a href="" class="tx-inverse hover-info">Artemisia Gentileschi
                talk with Maria</a></h5>

            <h3 class="price"><i class="fas fa-rupee-sign"></i> 15000  <button class="btn btn-sm btn-danger float-right" title="Remove"><i class="fa fa-trash"></i></button></h3>

          </div><!-- card-body -->
        </div><!-- card -->
        </div>

        <div class="col-md-4"><div class="card shadow-base bd-0 mg-0 mb-4">
          <figure class="card-item-img rounded-top">
            <img class="img-fluid rounded-top" src="assets/images/event03.jpg" alt="Image">
          </figure>
          <div class="card-body pd-25">
            <h5 class="tx-normal tx-roboto lh-3 mg-b-15"><a href="" class="tx-inverse hover-info">Artemisia Gentileschi
                talk with Maria</a></h5>

            <h3 class="price"><i class="fas fa-rupee-sign"></i> 15000  <button class="btn btn-sm btn-danger float-right" title="Remove"><i class="fa fa-trash"></i></button></h3>

          </div><!-- card-body -->
        </div><!-- card -->
        </div>

        <div class="col-md-4"><div class="card shadow-base bd-0 mg-0 mb-4">
          <figure class="card-item-img rounded-top">
            <img class="img-fluid rounded-top" src="assets/images/event04.jpg" alt="Image">
          </figure>
          <div class="card-body pd-25">
            <h5 class="tx-normal tx-roboto lh-3 mg-b-15"><a href="" class="tx-inverse hover-info">Artemisia Gentileschi
                talk with Maria</a></h5>

            <h3 class="price"><i class="fas fa-rupee-sign"></i> 15000  <button class="btn btn-sm btn-danger float-right" title="Remove"><i class="fa fa-trash"></i></button></h3>

          </div><!-- card-body -->
        </div><!-- card -->
        </div>

        <div class="col-md-4"><div class="card shadow-base bd-0 mg-0 mb-4">
          <figure class="card-item-img rounded-top">
            <img class="img-fluid rounded-top" src="assets/images/event05.jpg" alt="Image">
          </figure>
          <div class="card-body pd-25">
            <h5 class="tx-normal tx-roboto lh-3 mg-b-15"><a href="" class="tx-inverse hover-info">Artemisia Gentileschi
                talk with Maria</a></h5>

            <h3 class="price"><i class="fas fa-rupee-sign"></i> 15000  <button class="btn btn-sm btn-danger float-right" title="Remove"><i class="fa fa-trash"></i></button></h3>

          </div><!-- card-body -->
        </div><!-- card -->
        </div>

        <div class="col-md-4"><div class="card shadow-base bd-0 mg-0 mb-4">
          <figure class="card-item-img rounded-top">
            <img class="img-fluid rounded-top" src="assets/images/event06.jpg" alt="Image">
          </figure>
          <div class="card-body pd-25">
            <h5 class="tx-normal tx-roboto lh-3 mg-b-15"><a href="" class="tx-inverse hover-info">Artemisia Gentileschi
                talk with Maria</a></h5>

            <h3 class="price"><i class="fas fa-rupee-sign"></i> 15000  <button class="btn btn-sm btn-danger float-right" title="Remove"><i class="fa fa-trash"></i></button></h3>

          </div><!-- card-body -->
        </div><!-- card -->
        </div>



        <div class="col-md-4"><div class="card shadow-base bd-0 mg-0 mb-4">
          <figure class="card-item-img rounded-top">
            <img class="img-fluid rounded-top" src="assets/images/event07.jpg" alt="Image">
          </figure>
          <div class="card-body pd-25">
            <h5 class="tx-normal tx-roboto lh-3 mg-b-15"><a href="" class="tx-inverse hover-info">Artemisia Gentileschi
                talk with Maria</a></h5>

            <h3 class="price"><i class="fas fa-rupee-sign"></i> 15000  <button class="btn btn-sm btn-danger float-right" title="Remove"><i class="fa fa-trash"></i></button></h3>

          </div><!-- card-body -->
        </div><!-- card -->
        </div>


        <div class="col-md-4"><div class="card shadow-base bd-0 mg-0 mb-4">
          <figure class="card-item-img rounded-top">
            <img class="img-fluid rounded-top" src="assets/images/event08.jpg" alt="Image">
          </figure>
          <div class="card-body pd-25">
            <h5 class="tx-normal tx-roboto lh-3 mg-b-15"><a href="" class="tx-inverse hover-info">Artemisia Gentileschi
                talk with Maria</a></h5>

            <h3 class="price"><i class="fas fa-rupee-sign"></i> 15000  <button class="btn btn-sm btn-danger float-right" title="Remove"><i class="fa fa-trash"></i></button></h3>

          </div><!-- card-body -->
        </div><!-- card -->
        </div>

        <div class="col-md-4"><div class="card shadow-base bd-0 mg-0 mb-4">
          <figure class="card-item-img rounded-top">
            <img class="img-fluid rounded-top" src="assets/images/event09.jpg" alt="Image">
          </figure>
          <div class="card-body pd-25">
            <h5 class="tx-normal tx-roboto lh-3 mg-b-15"><a href="" class="tx-inverse hover-info">Artemisia Gentileschi
                talk with Maria</a></h5>

            <h3 class="price"><i class="fas fa-rupee-sign"></i> 15000  <button class="btn btn-sm btn-danger float-right" title="Remove"><i class="fa fa-trash"></i></button></h3>

          </div><!-- card-body -->
        </div><!-- card -->
        </div>

         
        
      </div>

      

 

    </div>
    <div class="footer bg-white text-center pt-4 pb-4">
      <a href="" class="btn btn-primary"><i class="fa fa-check"></i> Approve</a>
    </div>
  </div>

  
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
    $(function () {
      'use strict';

      $('#datatable1').DataTable({
        responsive: false,
        language: {
          searchPlaceholder: 'Search...',
          sSearch: '',
          lengthMenu: '_MENU_ items/page',
        }
      });

      $('#datatable2').DataTable({
        bLengthChange: false,
        searching: false,
        responsive: true
      });

      // Select2
      $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

    });
  </script>
</body>

</html>