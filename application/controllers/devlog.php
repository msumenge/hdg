<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Devlog extends CI_Controller {

	public function index()
	{
		$query = $this->db->query("SELECT * FROM blogs ORDER BY timestamp DESC LIMIT 5;")->result_array();
        
        $data['blogs'] = $query;
        
        $this->load->view('body_start');
		$this->load->view('nav');
		$this->load->view('devlog', $data);
		$this->load->view('body_end');
	}
    
    function more() {
        $offset = $something = $this->input->post('offset');
        
        $query = $this->db->query("SELECT * FROM blogs ORDER BY timestamp DESC LIMIT 1 OFFSET ".$offset.";")->result_array();
        
        if(empty($query)) {
            echo 'false';
            exit;
        }
        
        echo json_encode($query);
    }
}