<?php
defined("BASEPATH") or exit("No direct script access allowed");
class Profile extends CI_Controller
{
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
        $this->data['header']=$this->load->view('includes/header1', $this->data , TRUE);
        $this->data['footer']=$this->load->view('includes/footer1', $this->data , TRUE);
  }
  public function index() {
  	$this->load->view('profile',$this->data);
  }
  public function profilelist() {
  	 $where = "where status !=2";
        if (isset($_POST["search"]["value"]) && !empty($_POST["search"]["value"])) {
            $val = trim($_POST["search"]["value"]);
            $where.= " and (name like '%$val%') ";
            $where.= " or (emailid	 like '%$val%') ";
            $where.= " or (mphone like '%$val%') ";
        }
        $order_by_arr[] = "name";
        $order_by_arr[] = "";
        $order_by_arr[] = "pro_id";
        $order_by_def = " order by pro_id  desc";
        $query = "select * from profile " . $where . "";
        $fetchdata = $this->home_db->rows_by_paginations($query, $order_by_def, $order_by_arr);
        //echo $this->db->last_query();exit;
        $data = array();
        $i = $_POST["start"] + 1;
        foreach ($fetchdata as $r) {
            $action = "";
            $sub_array = array();
           if($r->status ==-1) {
           		$action .= '<button class="btn btn-sm btn-success" title="Active" onclick="updateStatus(' .$r->pro_id.', 0,1)" style="margin-right:5px"><i class="fa fa-check"></i> </button>';
           }else {
           		$action .='<button class="btn btn-sm btn-warning" title="In Active" onclick="updateStatus(' .$r->pro_id.', -1,1)" style="margin-right:5px"><i class="fa fa-times"></i> </button>';
           }
           $action .= '<a href="'.base_url().'profile/viewprofile/'.chitraEncrypt($r->pro_id).'" class="btn btn-sm btn-dark" title="View" style="margin-right:5px"><i class="fa fa-eye"></i> </a>';
           $action .='<button class="btn btn-sm btn-danger" title="delete" onclick="updateStatus(' .$r->pro_id.', 2,1)" style="margin-right:5px"><i class="fa fa-trash"></i> </button>';
           if($r->astatus ==2) {
           		$action .='<button class="btn btn-sm btn-warning" title="Accept" onclick="updateStatus(' .$r->pro_id.', 1,2)" style="margin-right:5px"><i class="far fa-thumbs-down"></i> </button>';
           }else {
           	$action .='<button class="btn btn-sm btn-primary" title="Reject" onclick="updateStatus(' .$r->pro_id.', 2,2)" style="margin-right:5px"><i class="far fa-thumbs-up"></i> </button>';
           }
            $sub_array[] = $i++;
            $sub_array[] = ucfirst($r->name);
            $sub_array[] = $r->mphone;
            $sub_array[] = $r->emailid;
            $sub_array[] = $action;
            $sub_array[] = $r->place;
            $data[] = $sub_array;
        }
        $res = $this->home_db->run_manual_query_result($query);
        $total = count($res);
        $output = array("draw" => intval($_POST["draw"]), "recordsTotal" => $total, "recordsFiltered" => $total, "data" => $data);
        $output['csrf_token'] = $this->security->get_csrf_hash();
        echo json_encode($output);
  }
  public function updateStatus() {
  $id = $this->input->post('id');
  $status = $this->input->post('st');
  $pri = $this->input->post('pri');
  if($pri ==1) {
  		$db['status'] = $status;
  }else if($pri ==2) {
  	$db['astatus'] = $status;
  }
  
  $up = $this->master_db->updateRecord('profile',$db,array('pro_id'=>$id));
  if($up >0) {
    echo json_encode(['status'=>true]);
  }else {
    echo json_encode(['status'=>false]);
  }

 }
 public function viewprofile() {
 	$id = chitraDcrypt($this->uri->segment(3));
 	$this->data['profile'] = $this->master_db->getRecords('profile',['pro_id'=>$id],'*');
 	$this->data['profileimg'] = $this->master_db->getRecords('profile_img',['proid'=>$id],'*');
 	$this->load->view('view_profile',$this->data);
 }
 public function deleteProfile () {
 	//echo "<pre>";print_r($_POST);exit;
 	$id = $this->input->post('id');
 	$this->master_db->deleterecord('profile_img',['imgid '=>$id]);
 	echo json_encode(['status'=>true]);
 }
}