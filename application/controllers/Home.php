<?php
defined("BASEPATH") or exit("No direct script access allowed");
class Home extends CI_Controller
{
    protected $data;
    public function __construct()
    {
    	date_default_timezone_set("Asia/Kolkata");
        parent::__construct();
        $this->load->helper("utility_helper");
        $this->load->model("master_db");
        $this->load->model("home_db");
         $this->data["header"] = $this->load->view(
            "includes/header",
            $this->data,
            true
        );
        $this->data["footer"] = $this->load->view(
            "includes/footer",
            $this->data,
            true
        );
        //$this->data["js"] = $this->load->view("jsFile", $this->data, true);
    }
     public function index()
    {
    	$this->load->view('index',$this->data);
    }
    public function phpinfo() {
        echo phpinfo();
    }

}