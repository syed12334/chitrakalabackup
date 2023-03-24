<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Master extends CI_Controller {

    protected $data;

      public function __construct() {

        date_default_timezone_set("Asia/Kolkata");

        parent::__construct();

        $this->load->helper('utility_helper');

        $this->load->model('master_db');   

        $this->load->model('home_db'); 

        $this->data['detail']="";

        $this->data['session'] = ADMIN_SESSION; 

        if (!$this->session->userdata($this->data['session'])) {

            redirect('Login', 'refresh');

        }else{

                $sessionval = $this->session->userdata($this->data['session']);

                $details = $this->home_db->getlogin($sessionval['name']);

                if(count($details)){

                    $this->data['detail']=$details;

                }else{

                    $this->session->set_flashdata('message','<div class="alert alert-danger alert-dismissable"><button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</button>Invalid Credentials.</div>');

                    redirect(base_url()."login/logout");

                }

        } 

        $this->data['header']=$this->load->view('includes/header', $this->data , TRUE);

        $this->data['footer']=$this->load->view('includes/footer', $this->data , TRUE);

  }

	public function index() {

		$this->load->view('index',$this->data);

	}


  


  public function documents() {
    $this->load->view('document',$this->data);
  }
  public function documentadd() {
    $this->load->view('documentadd',$this->data);
  }

 public function updateStatus() {
  $id = $this->input->post('id');
  $status = $this->input->post('st');
  $db['status'] = $status;
  $up = $this->master_db->updateRecord('documents',$db,array('id'=>$id));
  if($up >0) {
    echo json_encode(['status'=>true]);
  }else {
    echo json_encode(['status'=>false]);
  }

 }
 
 public function documentsave() {
     //echo "<pre>";print_r($_POST);exit;

  if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) &&  strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
    $this->load->library('form_validation');
           $this->form_validation->set_rules('name','Name','trim|required|regex_match[/^([A-Za-z& ])+$/i]|max_length[120]',['max_length'=>'Only 120 characters are allowed','regex_match'=>'Invalid name','required'=>'Name is required']);
            //$this->form_validation->set_rules('file','Document','required',['required'=>'Document is required']);
             if($this->form_validation->run() ==TRUE) {
                $name = trim(preg_replace('!\s+!', ' ',html_escape($this->input->post('name', true))));
                if(isset($name) && !empty($name)) {
                        $db['title'] = $name;
                        if (!empty($_FILES['file']['name'])) {
                          $uploadPath = './assets/pdf/';
                          $config['upload_path'] = $uploadPath;
                          $config['allowed_types'] = 'pdf|PDF';
                          $ext = pathinfo($_FILES["file"]['name'], PATHINFO_EXTENSION);
                          $new_name = "BMWTPPL" . rand(11111, 99999) . '.' . $ext;
                          $config['file_name'] = $new_name;
                          $this->load->library('upload', $config);
                          $this->upload->initialize($config);
                          if (!$this->upload->do_upload('file')) {
                            $this->session->set_flashdata("message", "<div class='alert alert-danger'>" . $this->upload->display_errors() . "</div>");
                            redirect(base_url() . 'documents');
                            $array = ['status'=>false,'msg'=>"<div class='alert alert-danger'>" . $this->upload->display_errors() . "</div>",'csrf_token'=> $this->security->get_csrf_hash()];
                            //echo json_encode($array);exit;
                          } else {
                              $upload_data = $this->upload->data();
                              $db['document'] = 'assets/pdf/' . $upload_data['file_name'];
                          }
                        }
                        $db['created_at'] = date('Y-m-d H:i:s');
                        $in = $this->master_db->insertRecord('documents',$db);
                        if($in >0) {
                            $array = ['status'=>true,'msg'=>'Docuement created successfully','csrf_token'=> $this->security->get_csrf_hash()];
                        }else {
                            $array = ['status'=>false,'msg'=>'Error in creating document','csrf_token'=> $this->security->get_csrf_hash()];
                        }
                   
                }else {
                    $array = ['status'=>false,'msg'=>'Required fields are missing','csrf_token'=> $this->security->get_csrf_hash()];
                }
             }else {
                 $array = array(
                  'formerror'   => false,
                  'name_error' => form_error('name'),
                  'file_error' => form_error('file'),
                  'csrf_token'=> $this->security->get_csrf_hash()
               );
             }
      }else {
        $array = ['status'=>false,'msg'=>'Invalid request','csrf_token'=> $this->security->get_csrf_hash()];
      }
         echo json_encode($array);
 }

 public function documentlist() {
   $where = "where status !=2";
        if (isset($_POST["search"]["value"]) && !empty($_POST["search"]["value"])) {
            $val = trim($_POST["search"]["value"]);
            $where.= " and (title like '%$val%') ";
        }
        $order_by_arr[] = "title";
        $order_by_arr[] = "";
        $order_by_arr[] = "id";
        $order_by_def = " order by id desc";
        $query = "select * from documents " . $where . "";
        $fetchdata = $this->home_db->rows_by_paginations($query, $order_by_def, $order_by_arr);
        //echo $this->db->last_query();exit;
        $data = array();
        $i = $_POST["start"] + 1;
        foreach ($fetchdata as $r) {
            $action = "";
            $sub_array = array();
           
            $action .= '<a href=' . base_url() . "master/editdocument?id=" . sqftEncrypt(($r->id)) . "" . ' class="btn btn-primary" title="Edit Details"><i class="fas fa-pencil-alt"></i></a>&nbsp;';
            if ($r->status == 0) {
                $action.= "<button title='Deactive' class='btn btn-warning' onclick='updateStatus(" . $r->id . ", -1,1)' ><i class='fas fa-times-circle'></i></button>&nbsp;";
            } else {
                $action.= "<button title='Active' class='btn btn-success' onclick='updateStatus(" . $r->id . ", 0,1)' ><i class='fas fa-check'></i></button>&nbsp;";
            }

            $action.= "<button title='Delete' class='btn btn-danger' onclick='updateStatus(" . $r->id . ", 2,1)' ><i class='fas fa-trash'></i></button>&nbsp;";
        
           
            $sub_array[] = $i++;
            $sub_array[] = $action;
            // $sub_array[] = $image;
            $sub_array[] = ucfirst($r->title);
            $sub_array[] = "<a href='".base_url().$r->document."' target='_blank' style='font-size:20px'><i class='fas fa-file-pdf'></a></a>";
           
            // $sub_array[] = "<i class='fas fa-calendar' style='color:#620404;margin-right:3px'></i> ".date('d M y',strtotime($r->created_at))."<br/>"."<i class='fas fa-clock' style='color:#620404;margin-right:3px'></i> ".date('h:i:s A',strtotime($r->created_at));
            $data[] = $sub_array;
        }
        $res = $this->home_db->run_manual_query_result($query);
        $total = count($res);
        $output = array("draw" => intval($_POST["draw"]), "recordsTotal" => $total, "recordsFiltered" => $total, "data" => $data);
        $output['csrf_token'] = $this->security->get_csrf_hash();
        echo json_encode($output);
 }
 public function deleteddocument() {
  $this->load->view('deleteddocument',$this->data);
 }

  public function deldocumentlist() {
   $where = "where status =2";
        if (isset($_POST["search"]["value"]) && !empty($_POST["search"]["value"])) {
            $val = trim($_POST["search"]["value"]);
            $where.= " and (title like '%$val%') ";
        }
        $order_by_arr[] = "title";
        $order_by_arr[] = "";
        $order_by_arr[] = "id";
        $order_by_def = " order by id desc";
        $query = "select * from documents " . $where . "";
        $fetchdata = $this->home_db->rows_by_paginations($query, $order_by_def, $order_by_arr);
        //echo $this->db->last_query();exit;
        $data = array();
        $i = $_POST["start"] + 1;
        foreach ($fetchdata as $r) {
            $action = "";
            $sub_array = array();
           
            
                $action.= "<button title='Active' class='btn btn-success' onclick='updateStatus(" . $r->id . ", 0,1)' ><i class='fas fa-circle-check'></i></button>&nbsp;";
           

           
        
           
            $sub_array[] = $i++;
            $sub_array[] = $action;
            // $sub_array[] = $image;
            $sub_array[] = ucfirst($r->title);
            $sub_array[] = $r->title;
           
            // $sub_array[] = "<i class='fas fa-calendar' style='color:#620404;margin-right:3px'></i> ".date('d M y',strtotime($r->created_at))."<br/>"."<i class='fas fa-clock' style='color:#620404;margin-right:3px'></i> ".date('h:i:s A',strtotime($r->created_at));
            $data[] = $sub_array;
        }
        $res = $this->home_db->run_manual_query_result($query);
        $total = count($res);
        $output = array("draw" => intval($_POST["draw"]), "recordsTotal" => $total, "recordsFiltered" => $total, "data" => $data);
        $output['csrf_token'] = $this->security->get_csrf_hash();
        echo json_encode($output);
 }
 public function editdocument() {
  $id = sqftDcrypt($this->input->get('id'));
    $this->data['document'] = $this->master_db->getRecords('documents',['id'=>$id],'*');
    //echo $this->db->last_query();exit;
      $this->load->view('documentedit',$this->data);
    
      
 }
 public function documenteditsave() {
   if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) &&  strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
    $this->load->library('form_validation');
           $this->form_validation->set_rules('name','Name','trim|required|regex_match[/^([A-Za-z& ])+$/i]|max_length[120]',['max_length'=>'Only 120 characters are allowed','regex_match'=>'Invalid name','required'=>'Name is required']);
            //$this->form_validation->set_rules('file','Document','required',['required'=>'Document is required']);
             if($this->form_validation->run() ==TRUE) {
                $name = trim(preg_replace('!\s+!', ' ',html_escape($this->input->post('name', true))));
                $id = trim(preg_replace('!\s+!', ' ',html_escape($this->input->post('id', true))));
                if(isset($name) && !empty($name)) {
                        $db['title'] = $name;
                        if (!empty($_FILES['file']['name'])) {
                          $uploadPath = './assets/pdf/';
                          $config['upload_path'] = $uploadPath;
                          $config['allowed_types'] = 'pdf|PDF';
                          $ext = pathinfo($_FILES["file"]['name'], PATHINFO_EXTENSION);
                          $new_name = "BMWTPPL" . rand(11111, 99999) . '.' . $ext;
                          $config['file_name'] = $new_name;
                          $this->load->library('upload', $config);
                          $this->upload->initialize($config);
                          if (!$this->upload->do_upload('file')) {
                            $this->session->set_flashdata("message", "<div class='alert alert-danger'>" . $this->upload->display_errors() . "</div>");
                            redirect(base_url() . 'documents');
                            $array = ['status'=>false,'msg'=>"<div class='alert alert-danger'>" . $this->upload->display_errors() . "</div>",'csrf_token'=> $this->security->get_csrf_hash()];
                            //echo json_encode($array);exit;
                          } else {
                              $upload_data = $this->upload->data();
                              $db['document'] = 'assets/pdf/' . $upload_data['file_name'];
                          }
                        }
                        $db['modified_at'] = date('Y-m-d H:i:s');
                        $up = $this->master_db->updateRecord('documents',$db,['id'=>$id]);
                        if($up >0) {
                            $array = ['status'=>true,'msg'=>'Docuement updated successfully','csrf_token'=> $this->security->get_csrf_hash()];
                        }else {
                            $array = ['status'=>false,'msg'=>'Error in creating document','csrf_token'=> $this->security->get_csrf_hash()];
                        }
                   
                }else {
                    $array = ['status'=>false,'msg'=>'Required fields are missing','csrf_token'=> $this->security->get_csrf_hash()];
                }
             }else {
                 $array = array(
                  'formerror'   => false,
                  'name_error' => form_error('name'),
                  'file_error' => form_error('file'),
                  'csrf_token'=> $this->security->get_csrf_hash()
               );
             }
      }else {
        $array = ['status'=>false,'msg'=>'Invalid request','csrf_token'=> $this->security->get_csrf_hash()];
      }
         echo json_encode($array);
 }

}

?>