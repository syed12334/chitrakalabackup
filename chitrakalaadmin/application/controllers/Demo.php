<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Demo extends CI_Controller {
	public function __construct() {

	}
	public function index() {
		$pass = "bmwtppl@123";
		echo password_hash($pass, PASSWORD_BCRYPT);
	}

}