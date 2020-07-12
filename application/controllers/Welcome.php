<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		$dataa = array(
			'as' => 'aaa',
			'az' => 'aaaa',
		);
		$this->load->library('template');
		$this->template->set_body('content/testing/testbody')->set_data($dataa)->view('notika','layout');
	}
}
