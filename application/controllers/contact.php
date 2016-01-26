<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function index()
	{
		$this->load->view('body_start');
		$this->load->view('nav');
		$this->load->view('contact');
		$this->load->view('body_end');
	}
}