<?= $header;?>
    <div class="br-pageheader">
      <nav class="breadcrumb pd-0 mg-0 tx-12">
        <a class="breadcrumb-item" href="dashboard.html">Dashboard</a>
        <span class="breadcrumb-item active">Profile List</span>
      </nav>
    </div><!-- br-pageheader -->
    <div class="br-pagetitle">

      <div class="col-md-8">


        <h4>Profile List</h4>




      </div>
      <div class="col-md-4">

      </div>
    </div><!-- d-flex -->

    <div class="br-pagebody">
      <div class="br-section-wrapper">


        <div class="table-wrapper">
          <table id="datatable1" class="table display responsive nowrap">
            <thead>
              <tr>
                <th class="wd-5p">Sl. No.</th>
                <th class="wd-15p">Artist Name</th>
                <th class="wd-20p">Contact Number</th>
                <th class="wd-15p">Email Adddress</th>
                <th class="wd-10p">Action</th>
                <th class="wd-10p">Place</th>
              </tr>
            </thead>
            <tbody>
             

            </tbody>
          </table>
        </div><!-- table-wrapper -->






      </div><!-- br-section-wrapper -->
    </div><!-- br-pagebody -->

<?= $footer;?>

<script type="text/javascript">

    var dataTable, edit_data;

            function initialiseData(){


                dataTable = $('#datatable1').DataTable({  

                    "processing":true,  

                    "serverSide":true,  

                    "searching": true,

                    "order":[],  

                    "ajax":{  

                        url:"<?=base_url().'profile/profilelist'?>",  

                        type:"POST",

                        data: function(d){

                            //d.form = $("#filters").serializeArray();

                        },

                        error: function(){  // error handling

                            $(".user_data-error").html("");

                            $("#user_data").append('<tbody class="user_data-error"><tr><th colspan="5">No data found in the server</th></tr></tbody>');

                            $("#user_data_processing").css("display","none");

                        }

                    },

                     columnDefs:[  
                  {  
                       "targets":[1,2,3],  
                       "orderable":true,  
                  },  
                  {  
                       "targets":[0,4],  
                       "orderable":false,  
                  },
            ]

                }); 

            }

            initialiseData();

            
 function reinitialsedata(){
                var dt = $("#datatable1").DataTable();
                dt.ajax.reload(null, false);
            }

              



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
                         dataTable.ajax.reload( null, false );
                        
                    }
              });
            }
       

</script>