<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegisterController extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('web/AuthModel','auth');
    }

	public function register()
	{
		
		$layout = array('transparentwrapper' => TRUE, );
		$this->load->view('layout/web/1_head');
		$this->load->view('layout/web/2_preloader');
		$this->load->view('layout/web/3_header', $layout);
		$this->load->view('web/Register');
		$this->load->view('layout/web/5_rightbar');
		$this->load->view('layout/web/6_footer');
		
	}
	
	public function VerifyEmail() {
		$layout = array('transparentwrapper' => TRUE, );
		$this->load->view('layout/web/1_head');
		$this->load->view('layout/web/2_preloader');
		$this->load->view('layout/web/3_header', $layout);
		$this->load->view('web/VerifyEmail');
		$this->load->view('layout/web/5_rightbar');
		$this->load->view('layout/web/6_footer');	
	}

	//POST Function to create new applicant
	public function CreateApplicant() {

        $this->form_validation->set_rules('firstName', 'First Name', 'required');
        $this->form_validation->set_rules('lastName', 'Last Name', 'required'); 
        $this->form_validation->set_rules('emailAddress', 'Email', 'required|valid_email'); 
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]'); 
        $this->form_validation->set_rules('password2', 'Confirm Password', 'required|matches[password]'); 

        if ($this->form_validation->run() == FALSE){
            $errors = validation_errors();
            echo json_encode(['error'=>$errors]);
        }
        else{

        	$postdata = $this->input->post(); 
        	$inserted = $this->auth->RegisterApplicant($postdata);
        	if ($inserted == TRUE) {
         		echo json_encode(['success'=>TRUE]);       		
        	}
        	else {
        		echo json_encode(['error'=>'Registration Failed']);
        	}

        }



	}



}
