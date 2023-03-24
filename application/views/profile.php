<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
           
            <form id="saveProfilesetting" method="post" enctype="multipart/form-data">
                <input type="hidden" name="<?= $this->security->get_csrf_token_name();?>" value="<?= $this->security->get_csrf_hash();?>" class="csrf_token">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Enter Title and price on your work</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body prol">
                    <div class="row" id="getImgdata">
                    </div>
                </div>
                <div class="modal-footer text-center">
                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal" style="height: 70px!important">Close</button>
                    <button type="submit" class="btn btn-cc">Save & Submit</button>
                </div>
            </div>
        </form>
        </div>
    </div>
    <style type="text/css">
    #processing {
        position: fixed;
        top:100px;
        right: 20px;
        z-index: 99999999999999999!important;
        width:50%;
    }
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
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
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
<?= $header;?>

                <!-- end page-header -->
                <section class="content-section" data-background="#fffbf7">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12">
                                <div class="section-title text-center">

                                    <h2>Create your profile and send your work</h2>
                                </div>
                                <!-- end section-title -->
                            </div>
                            <!-- end col-12 -->

                            <!-- end col-5 -->
                              <div class="col-lg-12 form-full">
                            <div id="processing"></div>
                            <form id="profile" method="post"  enctype="multipart/form-data">
                                <input type="hidden" name="<?= $this->security->get_csrf_token_name();?>" value="<?= $this->security->get_csrf_hash();?>" class="csrf_token">
                            <div class="p-0">
                                <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label for="">Name <font style="color:red">*</font></label>
                                    <input type="text" name="name" id="name" placeholder="Enter Name">
                                    <span id="name_error" class="text-danger"></span>

                                </div>

                                <div class="mb-3 col-md-6">
                                    <label>Age <font style="color:red">*</font></label>
                                    <input type="number" name="age" min="0" id="age" placeholder="Enter Age">
                                    <span id="age_error" class="text-danger"></span>
                                </div>


                                <!-- end mb-3 -->
                                <div class="mb-3 col-md-6">
                                    <label>Email Id <font style="color:red">*</font></label>
                                    <input type="email" name="email" id="email" placeholder="Enter Email ID">
                                    <span id="email_error" class="text-danger"></span>
                                </div>

                                

                                <div class="mb-3 col-md-6">
                                    <label>Mobile No. <font style="color:red">*</font></label>
                                    <input type="number" min="0" name="phone" id="phone" placeholder="Enter Mobile Number" min="0" maxlength="10" minlength="10" pattern="/^-?\d+\.?\d*$/" onkeypress="if(this.value.length==10) return false;">
                                    <span id="phone_error" class="text-danger"></span>
                                </div>

                                <div class="mb-3 col-md-12">
                                    <label>Address <font style="color:red">*</font></label>
                                    <textarea name="address" id="address" placeholder="Enter Address"></textarea>
                                    <span id="address_error" class="text-danger"></span>
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label>State <font style="color:red">*</font></label>
                                    <input type="text" name="state" id="state" placeholder="Enter State">
                                    <span id="state_error" class="text-danger"></span>
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label>Country <font style="color:red">*</font></label>
                                    <input type="text" name="country" id="country" placeholder="Enter Country">
                                    <span id="country_error" class="text-danger"></span>
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label>Place <font style="color:red">*</font></label>
                                    <input type="text" name="place" id="place" placeholder="Enter Place">
                                    <span id="place_error" class="text-danger"></span>
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label>GST No. </label>
                                    <input type="text" name="gst" id="gst" placeholder="Enter GSTNO">
                                    <span id="gstno_error" class="text-danger"></span>
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label>Gender <font style="color:red">*</font></label>
                                    <select name="gender" id="gender">
                                        <option value="">Select Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                    <span id="gender_error" class="text-danger"></span>
                                </div>



                                <div class="mb-3 col-md-6">
                                    <label for="">Upload your photo <font style="color:red">* </font></label>
                                    <input class="form-control filef" type="file" id="photo" id="photo" name="photo">
                                    <span id="photo_error" class="text-danger"></span>
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label for="">Upload your profile <font style="color:red">* (Only PDF File is allowed)</font></label>
                                    <input class="form-control filef" name="proimg" type="file" id="proimg">
                                    <span id="proimg_error" class="text-danger"></span>
                                </div>


                                
                                <!-- end mb-3 -->
                                <div class="mb-3 col-md-12">
                                    <label for="">About Artist <font style="color:red">*(Maximum 200 characters is allowed)</font></label>
                                    <textarea id="artists" cols="4" rows="4" name="artists"></textarea>
                                    <span id="artists_error" class="text-danger"></span>
                                </div>

                                <div class="mb-3 col-md-6">
                               <h5>Registration Fee Details <font style="color:red">*</font></h5>

                               <div class="row">
                                <span id="feeamount_error" class="text-danger"></span>
                                    <div class="mb-3 col-md-4">
                                        <input type="radio" name="feeamount" class="check_n" id="individual" value="1">
                                        <label for="individual">Individual Artists <br> Rs.500</label>
                                        
                                    </div>

                                    <div class="mb-3 col-md-4">
                                        <input type="radio" name="feeamount"  id="institute" class="check_n" value="2">
                                        <label for="institute">Institutes <br> Rs.1000</label>
                                        
                                    </div>

                                    <div class="mb-3 col-md-4">
                                        <input type="radio" id="foreign" name="feeamount" class="check_n" value="3">
                                        <label for="foreign">NRI/Foreign Artists <br> Rs.2000</label>
                                        
                                    </div>


                               </div>
                                
                            </div>




                            <div class="mb-3 col-md-12">
                                <h5>Entries are open for the following categories: Painting, Sculpture, Ceramic, Graphic and Mixed Media. <font style="color:red">*</font></h5>
 
                                <div class="row">
                                    <span id="entries_error" class="text-danger"></span>
                                    <div class="mb-3 col-md-4">
                                        <input type="checkbox" id="professional" name="entries[]" value="1" class="check_n">
                                        <label for="professional">Prfossional Artist</label>
                                        
                                    </div>

                                    <div class="mb-3 col-md-4">
                                        <input type="checkbox" id="art" class="check_n" name="entries[]" value="2">
                                        <label for="art">Art Institutions</label>
                                        
                                    </div>

                                    <div class="mb-3 col-md-4">
                                        <input type="checkbox" id="students" class="check_n" name="entries[]" value="3">
                                        <label for="students">Student</label>
                                        
                                    </div>




                                    <div class="mb-3 col-md-4">
                                        <input type="checkbox" id="tradition" class="check_n" name="entries[]" value="4">
                                        <label for="tradition">Traditional Artist</label>
                                        
                                    </div>

                                    <div class="mb-3 col-md-4">
                                        <input type="checkbox" id="nri" class="check_n" name="entries[]" value="5">
                                        <label for="nri">NRI/Foreign Artist</label>
                                        
                                    </div>

                                    <div class="mb-3 col-md-4">
                                        <input type="checkbox" id="different" class="check_n" name="entries[]" value="6">
                                        <label for="different">Differently abled</label>
                                        
                                    </div>



                                    <div class="mb-3 col-md-4">
                                        <input type="checkbox" id="senior" class="check_n" name="entries[]" value="7">
                                        <label for="senior">Senior Citizens</label>
                                        
                                    </div>

                                    <div class="mb-3 col-md-4">
                                        <input type="checkbox" id="hobby" class="check_n" name="entries[]" value="8">
                                        <label for="hobby">Hobby / Self-taught Artist</label>
                                        
                                    </div>

                                    
 
 
                                </div>
                                 
                             </div>
                                

                                


                                

                                <div class="mb-3 col-md-12">
                                    <label>Upload your Works <font style="color:red">*</font></label>
                                    
                                    <div class="input-images-1"></div>
                                    <small><b>Note :</b> Upload Maximum 10 numbers images. jpg, jpeg, png format only & Each file should be a within 1mb </small>
                                    <span id="images_error" class="text-danger"></span>
                                </div>



                                 
                                


                                <div id="errorMsg" class="text-danger" style="text-align: center;"></div>
                                <!-- end mb-3 -->
                                <div class="mb-3 col-md-12 text-center">
                                    <button type="submit"  class="frm-btn">Next</button>
                                </div>
                                </div>

                            </form>
                            </div>
                            <!-- end contact-form -->
                        </div>
                            <!-- end contact-form -->
                        </div>
                        <!-- end col-5 -->
                 
            </section>
            <!-- end content-section -->



            <section class="content-section no-spacing" data-background="#f5f5f5">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="newsletter-box">
                                <div class="form">
                                    <div class="titles">
                                        <h6>Subscribe Newsletter</h6>
                                        <h2>Sign up to get the
                                            latest news</h2>
                                    </div>
                                    <!-- end titles -->
                                    <div class="inner">
                                        <input type="email" placeholder="Enter your e-mail address">
                                        <input type="submit" value="SIGN UP">
                                    </div>
                                    <!-- end inner -->
                                    <small>Will be used in accordance with our <a href="#">Privacy Policy</a></small>
                                </div>
                                <!-- end form -->
                                <figure class="newsletter-image" data-scroll data-scroll-speed="0.7"><img
                                        src="images/newsletter-image.png" alt="Image"></figure>
                            </div>
                            <!-- end newsletter-box -->
                        </div>
                        <!-- end col-12 -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </section>
            <!-- end content-section -->
          <?= $footer;?>
          <script type="text/javascript">
    $(document).ready(function() {
        $(document).on('click',".close",function(e) {
            $(".alert").hide();
        });
    });
  
</script>
          <?= $js;?>
