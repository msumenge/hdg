<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Our_team extends CI_Controller {

	public function index()
	{
		$this->load->view('body_start');
		$this->load->view('nav');
		$this->load->view('our_team');
		$this->load->view('body_end');
	}
}