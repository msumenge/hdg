<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
            parent::__construct();
    
        $this->admin = array('username' => 'admin', 'password' => password_hash('handsomeDragon', PASSWORD_DEFAULT));
    }
    
    public function index()
	{   
        //get all blogs
        $query = $this->db->query("SELECT * FROM blogs ORDER BY timestamp DESC;")->result_array();
        
        $data['blogs'] = $query;
        
        //load page
        $this->load->view('body_start');
		$this->load->view('nav');
		$this->load->view('admin', $data);
		$this->load->view('body_end');
	}
    
    function login() {
        //get inputs
        $u = $this->input->post('user');
        $p = $this->input->post('pass');
        
        //check if inputs are null 
        if(!is_null($u) && !is_null($p)) {
			if($u == $this->admin['username'] && password_verify($p, $this->admin['password'])) {
				$_SESSION['admin'] = true;
				header('location: ' . base_url('admin'));
				exit;
			}
        }
        
        //exit if inputs are invalid
        header('location: ' . base_url());
        exit;
    }
    
    function logout() {
        //delete admin session var
        unset($_SESSION['admin']);
        
        //redirect to admin page
        header('location: ' . base_url());
        exit;
    }
    
    function update() {
        //get inputs
        $id = $this->input->post('id');
        $post = $this->input->post('post');
        
        //update DB
        if ($this->db->update('blogs', array('post' => $post), 'id='.$id)) {
            echo 'Saved';
        }
        else {
            echo 'Failed to save';
        }
    }
    
    function post() {
        //get inputs
        $title = $this->input->post('blog-title');
        $body = $this->input->post('blog-body');
        
        //check if inputs are empty
        if(!empty($title) && !empty($body)) {
            $blog = array(
                'title' => $title,
                'post' => $body
            );
            //inser data to DB
            $this->db->insert('blogs', $blog);
        }
        
        //redirect to admin page
        header('location: ' . base_url('admin'));
        exit;
    }
    
    function delete() {
        //get post id from the url
        $blog_id = $this->uri->segment(3);
        
        if(!is_null($blog_id)) {
            //delete post from DB
            $this->db->delete('blogs', array('id' => $blog_id));
        }
        
        //redirect to admin page
        header('location: ' . base_url('admin'));
        exit;
    }
}