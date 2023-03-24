<?= $header;?>

<div class="page has-sidebar-left bg-light height-full">

 <div class="container-fluid my-3">

        <div class="row">

            <div class="col-md-12">

                    <div class="card my-3 no-b">

                    <div class="card-body">



                        <div class="card-title">Deleted Document</div>

                          <?php 

                            if($this->session->flashdata('message')) {

                                echo $this->session->flashdata('message');

                            }

                        ?>

                     

                        <br /><br /><br />

                            <table id="category_table" class="table display table-bordered table-striped no-wrap" style="width:100%;">

                                <thead>

                                    <tr>

                                        <th>Sl. No.</th>
                                        <th>Action</th>

                                         <th>Name</th>
                                         <th>Document</th>


                                       

                                    </tr>

                                </thead>

                                <tbody>

                                 

                                </tbody>

                            </table>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<?= $footer;?>



<script type="text/javascript">

    var dataTable, edit_data;

            function initialiseData(){

                var active = $('#active').val();
            var mode = $('#mode').val();

                dataTable = $('#category_table').DataTable({  

                    "processing":true,  

                    "serverSide":true,  

                    "searching": true,

                    "order":[],  

                    "ajax":{  

                        url:"<?=base_url().'master/deldocumentlist'?>",  

                        type:"POST",

                        data: function(d){

                            d.form = $("#filters").serializeArray();

                        },

                        error: function(){  // error handling

                            $(".user_data-error").html("");

                            $("#user_data").append('<tbody class="user_data-error"><tr><th colspan="5">No data found in the server</th></tr></tbody>');

                            $("#user_data_processing").css("display","none");

                        }

                    },

                     columnDefs:[  
                  {  
                       "targets":[2],  
                       "orderable":true,  
                  },  
                  {  
                       "targets":[0,1],  
                       "orderable":false,  
                  },
            ],'rowCallback': function(row, data, index){

                        //$(row).find('td:eq(3)').css('background-color', data[3]).html("");   

                    }

                }); 

            }

            initialiseData();

            
 function reinitialsedata(){
                var dt = $("#category_table").DataTable();
                dt.ajax.reload(null, false);
            }

              



            function updateStatus(id,st,pri)  {
              $.ajax({
                    url :"<?= base_url().'master/updateStatus';?>",
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