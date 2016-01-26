<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dyadic extends CI_Controller {

	public function index()
	{
		$this->load->view('body_start');
		$this->load->view('nav');
		$this->load->view('dyadic');
		$this->load->view('body_end');
	}
}