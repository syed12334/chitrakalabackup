<?= $header;?>
<style type="text/css">
  .inputborders {
    border:1px solid red;
  }
</style>
<div class="page has-sidebar-left bg-light height-full">

 <div class="container-fluid my-3">

        <div class="row">

            <div class="col-md-12">

                    <div class="card my-3 no-b">

                    <div class="card-body">

                        

                        

                      <div class="card-title">Edit Document</div>

                  <div id="processing"></div>
                  <?php

                    if(count($document) >0) {
                      ?>
                       <form id="uaccount" method="post" style="margin-top:40px" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?= $document[0]->id;?>">
                                  <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                       <div class="form-group" style="margin-bottom: 5px!important">

                            <label>Document Title <span style="color:red">*</span></label>

                               <input type="text" name="name" class="form-control" id="name" placeholder="Enter Document Title" value="<?= $document[0]->title; ?>">

                           </div>
                           <span id="name_error" class="text-danger"></span>
                                    </div>
                                    

                           
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                             <div class="form-group" style="margin-bottom: 5px!important">

                            <label>Document <span style="color:red">*</span></label>

                               <input type="file" name="file" id="file" class="form-control">

                           </div>
                           <span id="file_error" class="text-danger"></span>
                           <?php 
                            if(!empty($document[0]->document)) {
                              ?>
                              <a href='<?=  base_url().$document[0]->document;?>' target='_blank' style='font-size:20px'><i class='fas fa-file-pdf'></i></a></a>
                              <?php
                            }

                           ?>
</div>
<div class="clearfix"></div>
     

           <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                           <center>
                            <br />

                             <button class="btn btn-primary" type="submit" id="submit">Submit</button>

                           </center>
                                  </div>
                          </div>

                           

                       </form>
                      <?php
                    }else {
                      redirect(base_url().'documents');
                    }
                  ?>

                              

                        

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<?= $footer;?>


<script type="text/javascript">
  $(document).ready(function() {
       $("#uaccount").on("submit",function(e) {
        e.preventDefault();
          var formdata =new FormData(this);
          $.ajax({
              url :"<?= base_url().'Master/documenteditsave';?>",
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
                    $("#name").addClass('inputborders');
                  }else {
                    $("#name_error").html('');
                    $("#name").removeClass('inputborders');
                  }
                  if(data.file_error !='') {
                    $("#file_error").html(data.file_error);
                    $("#file").addClass('inputborders');
                  }else {
                    $("#file_error").html('');
                    $("#file").removeClass('inputborders');
                  }
                   
                   
                }
                else if(data.status ==false) {
                  $(".csrf_token").val(data.csrf_token);
                  $("#processing").html('<div class="alert alert-danger alert-dismissible"><i class="fas fa-ban"></i> '+data.msg+'</div>').show().fadeOut(3500);
                }
                else if(data.status ==true) {
                   $(".csrf_token").val(data.csrf_token);
                   $("#name_error").html('');
                   $("#file_error").html('');
                  
                   $("#name").removeClass('inputborders');
                   $("#file").removeClass('inputborders');
                  
                   $("#processing").html('<div class="alert alert-success alert-dismissible"><i class="fas fa-circle-check"></i> '+data.msg+'</div>');
                   setTimeout(function() {window.location.href="<?= base_url().'documents';?>"}, 1800);
                }
              }
          });
      });
  });

</script>