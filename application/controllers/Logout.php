<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function proses() {
		$this->session->sess_destroy();
		redirect('login/index');
	}

}
