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

                        <input type="hidden" name="profileid" id="profileid" value="1">
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
                            <label>Email ID <font style="color:red">*</font></label>
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
                                    <label>Country<font style="color:red">*</font></label>
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
</div><?= $header; ?>

<section class="content-section" data-background="#fffbf7">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-title text-center mb-4">

                    <h2>Artist Profile List</h2>
                    <input id="myInput" class="fil" type="text" placeholder="Search..">
                </div>
                <!-- end section-title -->
            </div>
            <!-- end col-12 -->

            <div class="col-md-3">
                <aside class="sidebar">
                    <div class="widget-title">
                        <?php
                        $data = range('A', 'Z');
                        foreach ($data as $alpha) {
                        ?>
                            <button class="alfa" data-alpha="<?= $alpha; ?>" id="alphabetic" style="border:none!important"><?= $alpha; ?></button>
                        <?php

                        }
                        ?>

                    </div>



                </aside>
                <!-- end sidebar -->
            </div>



            <div class="col-md-9">


                <div class="col-lg-12 form-full" id="myTable">


                    <form method="post" id="searchBar" enctype="multipart/form-data">
                        <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>" class="csrf_token">
                        <div class="row">
                        <div class="form-group col-md-6 mb-2">
                            
                                 
                                    <label for="">Name</label>
                                    <input type="text" name="name" id="name">
                                 

                             

                        </div>
                        <div class="form-group col-md-6 mb-2">
                            <label for="">Category</label>
                            <select name="category" id="category">
                                <option value="">Select Category</option>
                                <?php
                                if (count($category) > 0) {
                                    foreach ($category as $cat) {
                                ?>
                                        <option value="<?= $cat->cat_id; ?>"><?= $cat->title; ?></option>
                                <?php
                                    }
                                }
                                ?>


                            </select>

                        </div>
                        <div class="form-group col-md-6 mb-2">
                            <label for="">Medium</label>
                            <select name="medium" id="medium">
                                <option value="">Select Medium</option>

                                <?php
                                if (count($medium) > 0) {
                                    foreach ($medium as $med) {
                                ?>
                                        <option value="<?= $med->m_id; ?>"><?= $med->mtitle; ?></option>
                                <?php
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group col-md-6 mb-2">
                            <label for="">Price</label>
                            <input type="text" name="price" id="price">
                        </div>
                        <div class="form-group col-sm-12 text-center mt-2 mb-5">
                            <button class="btn btn-info frm-btn" type="submit">SUBMIT</button> &nbsp;
                            <button class="btn btn-danger frm-btn reset-p" type="button">RESET</button>
                        </div>
                        </div>
                    </form>

                    <div class="ccl ccl-s">



                        <ul class="row" id="appendRow">
                            <?php
                            if (count($profile) > 0) {
                                foreach ($profile as $pro) {
                            ?>
                                    <li class="col-md-4 col-sm-12">
                                        <div class="btsf"><input type="checkbox" class="npl notificationcheck" id="" name="notify[]" value="<?= $pro->pid; ?>" /><a href="<?= base_url() . 'profile/artists/' . chitrakalaEncrypt($pro->pid); ?>">
                                                <h2 class="name-art"><?= ucfirst($pro->name); ?></h2>
                                                <h3 class="price_art">Price : <i class="fas fa-rupee-sign"></i> <?= number_format($pro->amount); ?>
                                                </h3>
                                                <h4 class="cate_art">Category : <?php if ($pro->category == 1) {
                                                                                    echo 'ABC';
                                                                                } else if ($pro->category == 2) {
                                                                                    echo 'DEF';
                                                                                } else if ($pro->category == 3) {
                                                                                    echo 'GHI';
                                                                                } ?></h4>
                                                <h4 class="cate_art">Medium : <span class="text-info"><?php if ($pro->medium == 1) {
                                                                                                            echo 'Wall Painting';
                                                                                                        } else if ($pro->medium == 2) {
                                                                                                            echo 'Poster';
                                                                                                        } else if ($pro->medium == 3) {
                                                                                                            echo 'Oil Painting';
                                                                                                        } ?></span></h4>
                                            </a></div>
                                    </li>
                            <?php
                                }
                            }
                            ?>



                        </ul>

                    </div>


                    <div class="bgs">
                        <div class="col-md-12 text-center">
                            <button type="button" class="btn frm-btn" data-bs-toggle="modal" data-bs-target="#exampleModal"> CONTACT ARTIST </button>
                        </div>
                    </div>
                </div>
            </div>




            <!-- end contact-form -->
        </div>
        <!-- end col-5 -->
    </div>
    <!-- end row -->

    <!-- end container -->
</section>
<?= $footer; ?>
<?= $js; ?>