<script type="text/javascript">
   $(document).ready(function() {
      $("#profile").on("submit",function(e) {
        e.preventDefault();
          var formdata =new FormData(this);
          $.ajax({
              url :"<?= base_url().'profile/profileSave';?>",
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
                   if(data.email_error !='') {
                    $("#email_error").html(data.email_error);
                  }else {
                    $("#email_error").html('');
                  }
                   if(data.phone_error !='') {
                    $("#phone_error").html(data.phone_error);
                  }else {
                    $("#phone_error").html('');
                  }
                   if(data.age_error !='') {
                    $("#age_error").html(data.age_error);
                  }else {
                    $("#age_error").html('');
                  }
                  if(data.state_error !='') {
                    $("#state_error").html(data.state_error);
                  }else {
                    $("#state_error").html('');
                  }
                  if(data.country_error !='') {
                    $("#country_error").html(data.country_error);
                  }else {
                    $("#country_error").html('');
                  }
                  if(data.place_error !='') {
                    $("#place_error").html(data.place_error);
                  }else {
                    $("#place_error").html('');
                  }
                  if(data.address_error !='') {
                    $("#address_error").html(data.address_error);
                  }else {
                    $("#address_error").html('');
                  }
                 
                  if(data.feeamount_error !='') {
                    $("#feeamount_error").html(data.feeamount_error);
                  }else {
                    $("#feeamount_error").html('');
                  }
                  if(data.entries_error !='') {
                    $("#entries_error").html(data.entries_error);
                  }else {
                    $("#entries_error").html('');
                  }

                  if(data.images_error !='') {
                    $("#images_error").html(data.images_error);
                  }else {
                    $("#images_error").html('');
                  }
                 
                  if(data.artists_error !='') {
                    $("#artists_error").html(data.artists_error);
                  }else {
                    $("#artists_error").html('');
                  }
                  if(data.gender_error !='') {
                    $("#gender_error").html(data.gender_error);
                  }else {
                    $("#gender_error").html('');
                  }
                   if(data.gender_error !='') {
                    $("#gender_error").html(data.gender_error);
                  }else {
                    $("#gender_error").html('');
                  }
                  if(data.photo_error !='') {
                    $("#photo_error").html(data.photo_error);
                  }else {
                    $("#photo_error").html('');
                  }
                   if(data.gstno_error !='') {
                    $("#gstno_error").html(data.gstno_error);
                  }else {
                    $("#gstno_error").html('');
                  }

                  if(data.proimg_error !='') {
                    $("#proimg_error").html(data.proimg_error);
                  }else {
                    $("#proimg_error").html('');
                  }
                  $("#errorMsg").html('<p>Please fill correct details</p>');
                  
                }
                else if(data.status ==false) {
                  $(".csrf_token").val(data.csrf_token);
                  $("#processing").html('<div class="alert warning-alert"><h3>'+data.msg+'</h3><a class="close">&times;</a>').show();
                  $("#errorMsg").html('<p>Please fill correct details</p>');
                }
                else if(data.status ==true) {
                   $(".csrf_token").val(data.csrf_token);
                   $("#name_error").html('');
                   $("#email_error").html('');
                   $("#phone_error").html('');
                   $("#age_error").html('');
                   $("#artists_error").html('');
                   $("#feeamount_error").html('');
                   $("#address_error").html('');
                   $("#place_error").html('');
                   $("#country_error").html('');
                   $("#images_error").html('');
                   $("#photo_error").html('');
                   $("#proimg_error").html('');
                   $("#gstno_error").html('');
                   $("#gender_error").html('');
                   $("#exampleModal").modal('show');
                   $("#errorMsg").html('');
                   $("#getImgdata").html(data.view);
                   $("#profile")[0].reset();
                   //setTimeout(function() {window.location.href=data.url}, 2400);
                }
              }
          });
      });

    $("#saveProfilesetting").on("submit",function(e) {
        e.preventDefault();
          var formdata =new FormData(this);
          $.ajax({
              url :"<?= base_url().'profile/profilesettings';?>",
              method :"post",
              dataType:"json",
              data :formdata,
              contentType: false,
                cache: false,
                processData:false,
                success:function(data) {
                if(data.formerror ==false) {
                  $(".csrf_token").val(data.csrf_token);
                  if(data.title_error !='') {
                    $("#title_error").html(data.title_error);
                  }else {
                    $("#title_error").html('');
                  }
                  if(data.amount_error !='') {
                    $("#amount_error").html(data.amount_error);
                  }else {
                    $("#amount_error").html('');
                  }

                  if(data.category_error !='') {
                    $("#category_error").html(data.category_error);
                  }else {
                    $("#category_error").html('');
                  }

                  if(data.medium_error !='') {
                    $("#medium_error").html(data.medium_error);
                  }else {
                    $("#medium_error").html('');
                  }
                   
                  
                }
                else if(data.status ==false) {
                  $(".csrf_token").val(data.csrf_token);
                  $("#processing").html('<div class="alert warning-alert"><h3>'+data.msg+'</h3><a class="close">&times;</a>').show();
                }
                else if(data.status ==true) {
                   $(".csrf_token").val(data.csrf_token);
                   $("#title_error").html('');
                   $("#amount_error").html('');
                   $("#category_error").html('');
                   $("#medium_error").html('');
                  
                   
                   setTimeout(function() {window.location.href=data.url}, 800);
                }
              }
          });
    });

        $(document).on("click","#alphabetic",function(e) {
            e.preventDefault();
            var id = $(this).data('alpha');
            $.ajax({
                url :"<?= base_url().'profile/search'; ?>",
                method:"post",
                data:{
                    search :id
                },
                dataType:"json",
                cache:false,
                success:function(response) {
                    if(response.status ==true) {
                        $("#appendRow").html(response.msg);
                    }
                }

            });
        });

        $("#searchBar").on("submit",function(e) {
        e.preventDefault();
          var formdata =new FormData(this);
          $.ajax({
              url :"<?= base_url().'profile/getSearcheddata';?>",
              method :"post",
              dataType:"json",
              data :formdata,
              contentType: false,
                cache: false,
                processData:false,
                success:function(data) {
              if(data.status ==false) {
                  $(".csrf_token").val(data.csrf_token);
                }
                else if(data.status ==true) {
                   $(".csrf_token").val(data.csrf_token);
                   $("#appendRow").html(data.msg);
                }
              }
          });
    });

        $("#myInput").on('keyup',function(e) {
          var search = $(this).val();
          $.ajax({
              url :"<?= base_url().'Profile/autocompletesearch';?>",
              method:"post",
              cache :false,
              data : {
                search :search
              },
              dataType :"json",
              success:function(response) {
                if(response.status ==false) {
                  $(".csrf_token").val(response.csrf_token);
                }
                else if(response.status ==true) {
                   $(".csrf_token").val(response.csrf_token);
                   $("#appendRow").html(response.msg);
                }
              }
          });
        });

    $(document).on("click","#notificationSend",function(e) {
      e.preventDefault();
          var fname = $("#fname").val();
          var lname = $("#lname").val();
          var email = $("#email").val();
          var phone = $("#phone").val();
          var country = $("#country").val();
          var city = $("#city").val();
          var msg = $("#msg").val();
          var pemailid = $("#pemailid").val();
          var profileid = $("#profileid").val();
          var ar =[];
          $('.notificationcheck:checked').each(function(){
            ar.push($(this).val());
        });
           $.ajax({
              url :"<?= base_url().'profile/sendNotification';?>",
              method :"post",
              dataType:"json",
              data :{
                "<?= $this->security->get_csrf_token_name();?>" :$(".csrf_token").val(),
                fname :fname,
                lname :lname,
                email :email,
                phone:phone,
                country:country,
                city:city,
                msg :msg,
                proid :ar,
                profileid :profileid,
                pemailid:pemailid
              },
              success:function(data) {
                if(data.formerror ==false) {
                  $(".csrf_token").val(data.csrf_token);
                  if(data.fname_error !='') {
                    $("#fname_error").html(data.fname_error);
                  }else {
                    $("#fname_error").html('');
                  }
                  if(data.lname_error !='') {
                    $("#lname_error").html(data.lname_error);
                  }else {
                    $("#lname_error").html('');
                  }

                  if(data.email_error !='') {
                    $("#email_error").html(data.email_error);
                  }else {
                    $("#email_error").html('');
                  }

                  if(data.phone_error !='') {
                    $("#phone_error").html(data.phone_error);
                  }else {
                    $("#phone_error").html('');
                  }
                  if(data.country_error !='') {
                    $("#country_error").html(data.country_error);
                  }else {
                    $("#country_error").html('');
                  }
                  if(data.city_error !='') {
                    $("#city_error").html(data.city_error);
                  }else {
                    $("#city_error").html('');
                  }
                  if(data.msg_error !='') {
                    $("#msg_error").html(data.msg_error);
                  }else {
                    $("#msg_error").html('');
                  }
                }
                else if(data.status ==false) {
                  $(".csrf_token").val(data.csrf_token);
                  $("#processing").html('<div class="alert warning-alert"><h3>'+data.msg+'</h3><a class="close">&times;</a>').show();
                }
                else if(data.status ==true) {
                   $(".csrf_token").val(data.csrf_token);
                   $("#fname_error").html('');
                   $("#lname_error").html('');
                   $("#email_error").html('');
                   $("#phone_error").html('');
                   $("#country_error").html('');
                   $("#city_error").html('');
                   $("#msg_error").html('');
                   $("#fname").val('');
                   $("#lname").val('');
                   $("#email").val('');
                   $("#phone").val('');
                     $("#country").val('');
                  $("#city").val('');
                 $("#msg").val('');
                   $("#processing").html('<div class="alert alert-success">'+data.msg+'</div>');
                   setTimeout(function() {window.location.href=data.url;}, 3000);
                }
              }
          });
        });

   });
</script>