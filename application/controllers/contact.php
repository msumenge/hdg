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
    
    function submit() {
        $name = $this->input->post('contact-name');
        $email = $this->input->post('contact-email');
        $phone = $this->input->post('contact-phone');
        $message = $this->input->post('contact-message');
        
        if(valid_email($email)) {
            $this->load->library('email');

            $config = Array(
                'protocol' => 'mail',
                'mailtype'  => 'html', 
                'charset'   => 'iso-8859-1',
                'wordwrap'	=> TRUE
            );
            
            //****************************************************************
            //*************** EDIT *******************************************
            //****************************************************************
            
                    $config['smtp_host'] = 'mail.handsomedragongames.com';
                    $config['smtp_port'] = 25;
                    $config['smtp_user'] = 'contact@handsomedragongames.com';
                    $config['smtp_pass'] = 'handsomeDragon123';
            
            //****************************************************************
            //****************************************************************
            //****************************************************************
            
            $this->email->initialize($config);
            $this->email->set_newline("\r\n");

            $this->email->from($email, ucwords($name));
            $this->email->to('msumenge@hotmail.com'); #admin@handsomedragongames.com	

            $this->email->subject('Handsome Dragon Games contact form');
            $this->email->message(
                $message.'<br/><br/>'.
                ucwords($name).'<br/>'.
                $phone
            );

            if($this->email->send())
                $this->session->set_flashdata('success', true);
            else {
                $this->session->set_flashdata('error', '<strong>Error!</strong> The message could not be sent. Please try again.');
                $form_data = array(
                    'name' => $name,
                    'email' => $email,
                    'phone' => empty($phone) ? '' : $phone,
                    'message' => $message,
                );
                $this->session->set_flashdata('form_data', $form_data);
            }
        }
        else {
            $this->session->set_flashdata('error', '<strong>Error!</strong> Invalid email address. Please try again with a different email address.');
            $form_data = array(
                'name' => $name,
                'email' => $email,
                'phone' => empty($phone) ? '' : $phone,
                'message' => $message,
            );
            $this->session->set_flashdata('form_data', $form_data);
        }
        
        //return to contact page
        header('location: ' . base_url('contact'));
        exit;
    }
}