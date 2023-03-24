<style type="text/css">
    input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
</style>
 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md">
          <div class="modal-content">

            <form method="post" action="#">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Enter your details</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body ">
              <div class="contact-form pl-0">
      <input type="hidden" name="pemailid" id="pemailid" value="<?= $profile[0]->pro_id;?>">
 <input type="hidden" name="profileid" id="profileid" value="2">
                <div class="row">
                    <div id="processing"></div>
                <div class="col-6">
                    <div class="form-group mb-3">
                    <label>First Name <font style="color:red">*</font></label>
                  <input type="text" class="form-control" placeholder="First Name" name="fname" id="fname">
                  <span id="fname_error" class="text-danger"></span>
                </div>
                </div>

                <div class="col-6">
                    <div class="form-group mb-3">
        <label>Last Name <font style="color:red">*</font></label>
                    <input type="text" class="form-control" placeholder="Last Name" name="lname" id="lname">
                    <span id="lname_error" class="text-danger"></span>
                  </div>
                  </div>
                  </div>
    
                <div class="form-group mb-3">
        <label>Email ID<font style="color:red">*</font></label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email Id">
                  <span id="email_error" class="text-danger"></span>
                </div>
    
                <div class="form-group mb-3">
        <label>Mobile Number <font style="color:red">*</font></label>
                  <input type="number" min="0" class="form-control" placeholder="Phone Number" name="phone" id="phone" maxlength="10" minlength="10" pattern="/^-?\d+\.?\d*$/" onkeypress="if(this.value.length==10) return false;">
                  <span id="phone_error" class="text-danger"></span>
                </div>
    

                <div class="row">
                <div class="col-6 ">
                    <div class="mb-3 form-group">
        <label>Country <font style="color:red">*</font></label>
                    <input type="text" class="form-control" placeholder="Country" name="country" id="country">
                    <span id="country_error" class="text-danger"></span>
                  </div>
                  </div>

                  <div class="col-6 ">
                      <div class="mb-3 form-group">
        <label>City <font style="color:red">*</font></label>
                    <input type="text" class="form-control" placeholder="City" name="city" id="city">
                    <span id="city_error" class="text-danger"></span>
                  </div>
                  </div>
                </div>
                  

                <div class="form-group mb-3">
        <label>Message <font style="color:red">*</font></label>
                  <textarea rows="4" cols="3" placeholder="Message" name="msg" id="msg"></textarea>
                  <span id="msg_error" class="text-danger"></span>
                </div>
    
    
    
    
              </div>
            </div>
            <div class="modal-footer text-center">
              <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
              <button type="submit" id="notificationSend" class="btn btn-cc">Submit</button>
            </div>
        </form>
          </div>
        </div>
      </div>
<?= $header;?>
 <header class="page-header" data-background="<?= base_url();?>assets/images/page-header-l.jpg">
        <div class="inner">
          <div class="row">
            <div class="col-md-6">
          <div class="user_profile rounded-circle overflow-hidden">
          	<?php
          		if(!empty($profile[0]->photo)) {
          			?>
          			<img src="<?= base_url().$profile[0]->photo;?>" alt="" class="img-circle">
          			<?php
          		}
          	?>
          	</div>
          <h3><?= ucfirst($profile[0]->name);?></h3>
          <p>
            <i class="far fa-envelope"></i>
            <?= $profile[0]->emailid;?> &nbsp; &nbsp; 
            <br> <a class="btn btn-warning" data-bs-toggle="modal"
              data-bs-target="#exampleModal">Contact</a></p>
              </div>
              <div class="col-md-6 top_s">

                 
                   
                    <h1 class="profile-h">About Me</h1>
                    <p><?= $profile[0]->about;?></p>
      
                  



              </div>
              </div>
        </div>
        <!-- end inner -->
      </header>
      <!-- end page-header -->
      <section class="content-section" data-background="#fffbf7">
        <div class="container">
          
          <div class="row justify-content-center">
          	<?php 
          		if(count($profileimg) >0) {
          			foreach ($profileimg as $key => $value) {
          				?>
          				<div class="col-lg-3 col-md-6 bgp">
			              <div class="exhibition-box"><input type="checkbox" class="npl notificationcheck" id="" name="notify[]" value="<?= $value->imgid;?>"/>
			                <figure> <a class="grouped_elements" data-fancybox="gallery" href="<?= base_url().$value->profileimg;?>"><img
			                      src="<?= base_url().$value->profileimg;?>" alt="Image" class="img"></a>

			                  <!-- end info -->
			                </figure>
			                <div class="content-box">
			                  <h4><a><?= $value->title;?></a></h4>
			                  <h3 class="price"><i class="fas fa-rupee-sign"></i> <?= number_format($value->amount);?></h3>
			                  <h4 class="cate_art">Category : <?php 
			                  		if($value->category ==1) {
			                  				echo "ABC";
			                  		}
			                  		else if($value->category ==2) {
			                  				echo "DEF";
			                  		}
			                  		else if($value->category ==3) {
			                  				echo "GHI";
			                  		}

			                  ?></h4>
			                                                    <h4 class="cate_art">Medium : <span class="text-info"><?php 
			                  		if($value->medium ==1) {
			                  				echo "Wall Painting";
			                  		}
			                  		else if($value->medium ==2) {
			                  				echo "Poster";
			                  		}
			                  		else if($value->medium ==3) {
			                  				echo "Oil Painting";
			                  		}

			                  ?></span></h4>

			                </div>
			                <!-- end content-box -->
			              </div>
			              <!-- end exhibition-box -->
			            </div>
          				<?php
          			}
          		}
          	?>
         



           
            
            <!-- end col-4 -->
          </div>
          <!-- end row -->
        </div>
        <!-- end container -->
      </section>

      <div class="bgs">
        <div class="col-md-12 text-center">
            <button type="button" class="btn frm-btn" data-bs-toggle="modal"
            data-bs-target="#exampleModal"> CONTACT ARTIST </button>
        </div>
    </div>
<?= $footer;?>
<?= $js;?>