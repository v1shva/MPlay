<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminCtrl extends CI_Controller {

	public function index()
	{
		$this->load->view('/pages/admin_dashboard');
	}
}
