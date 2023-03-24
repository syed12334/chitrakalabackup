<?= $header;?>
 <div class="br-pagetitle">
      <div>
        <h4 class="pl-0">Dashboard</h4>
        <p class="mg-b-0"></p>
      </div>
    </div><!-- d-flex -->
<div class="container-fluid">
        <div class="row row-sm mg-t-20">
          <div class="col-lg-6">
            <div class="card bd-0 shadow-base widget-16">
              <div class="row no-gutters">
                <div class="col-md-5 ht-200 ht-xs-300 ht-md-100p">
                  <img src="<?= base_url();?>assets/images/new.jpg" class="img-fit-cover" alt="">
                </div><!-- col-5 -->
                <div class="col-md-7 d-flex align-items-start flex-column pd-25-force">
                  
                  <h5 class="tx-normal mg-y-5"><a href="" class="tx-inverse">No. of Artist Registration</a></h5>
                  
                  <h1 class="mg-y-20 lh-7 mg-b-30 mg-md-b-auto text-primary"><?= count($noofartist);?></h1>

                  <a href="<?= base_url().'profile';?>" class="btn btn-info btn-lg"><i class="fa fa-eye"></i>  View</a>
                </div><!-- col-7 -->
              </div><!-- row -->
            </div><!-- card -->
          </div><!-- col-6 -->

          <div class="col-lg-6 mg-t-20 mg-lg-t-0">
            <div class="card bd-0 shadow-base widget-17">
              <div class="row flex-row-reverse no-gutters">
                <div class="col-md-5 ht-200 ht-xs-300 ht-md-100p">
                  <img src="<?= base_url();?>assets/images/new1.jpg" class="img-fit-cover" alt="">
                </div><!-- col-5 -->
                <div class="col-md-7 d-flex align-items-start flex-column pd-25-force">
                  
                  <h5 class="tx-normal mg-y-5"><a href="" class="tx-inverse">No. of Artist Registration Approved</a></h5>
                  

                  <h1 class="mg-y-20 lh-7 mg-b-30 mg-md-b-auto text-success"><?= count($noofartistappr);?></h1>

                  <a href="<?= base_url().'profile';?>" class="btn btn-info btn-lg"><i class="fa fa-eye"></i>  View</a>
                  
                </div><!-- col-7 -->
              </div><!-- row -->
            </div><!-- card -->
          </div><!-- col-6 -->
        </div>
      </div>

<?= $footer;?>

