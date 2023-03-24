<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Login extends CI_Controller {

	protected $data;

	public function __construct() {

		parent::__construct();

		date_default_timezone_set("Asia/Kolkata");

		$this->load->helper('utility_helper');

        $this->load->model('master_db');   

        $this->load->model('home_db'); 

        $this->data['session'] = ADMIN_SESSION; 

	}

	public function index() {

		if(!$this->session->userdata($this->data['session'])){

	        $this->load->view('login_view',$this->data);

	    }else{

	      redirect('home');

	    }

	}

	public	function checklogin(){
		 if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) &&  strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
    		$this->load->library('form_validation');
    		$this->form_validation->set_rules('name','Name','trim|required|regex_match[/^([A-Za-z0-9])+$/i]|max_length[40]',['max_length'=>'Only 40 characters are allowed','regex_match'=>'Invalid username','required'=>'Username is required']);
    		$this->form_validation->set_rules('password','Name','required',['required'=>'Password is required']);
    		if($this->form_validation->run() ==TRUE) {
    			$name = trim(preg_replace('!\s+!', ' ',html_escape($this->input->post('name', true))));
				$password = trim(preg_replace('!\s+!', '',$this->input->post('password',true)));
				$details = $this->home_db->getlogin($name);
					if(count($details) >0){		
						if(password_verify($password, $details[0]->password)) {
							$savesession =array('id'=>$details[0]->id,'name'=>$details[0]->username);
							$this->session->set_userdata(ADMIN_SESSION, $savesession);	
							$array =['status'=>true,'csrf_tkn'=>$this->security->get_csrf_hash()];
						}else {
							$array =['status'=>false,'csrf_token'=>$this->security->get_csrf_hash(),'msg'=>'Password is not matching'];
						}			
					}else {
						$array =['status'=>false,'csrf_token'=>$this->security->get_csrf_hash(),'msg'=>'Email or Password is incorrect'];
					}
    		}else {
    			$array = array(
                  'formerror'   => false,
                  'name_error' => form_error('name'),
                  'pass_error' => form_error('password'),
                  'csrf_token'=> $this->security->get_csrf_hash()
               );
    		}
    		echo json_encode($array);
	}
}

	public function logout()

	{

	    $this->session->unset_userdata($this->data['session']);

	    redirect(base_url().'login');

	}

}