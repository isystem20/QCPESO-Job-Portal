<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegisterController extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('web/AuthModel','auth');
    }

	public function register()
	{
		
		$layout = array('transparentwrapper' => TRUE,'pagetitle'=>'Register' );
		$this->load->view('layout/web/1_head',$layout);
		$this->load->view('layout/web/2_preloader',$layout);
		$this->load->view('layout/web/3_header', $layout);
		$this->load->view('web/Register',$layout);
		$this->load->view('layout/web/5_rightbar',$layout);
		$this->load->view('layout/web/6_footer',$layout);
		
	}
	
	public function VerifyEmail() {
		$layout = array('transparentwrapper' => TRUE,'pagetitle'=>'Verification of Email' );
		$this->load->view('layout/web/1_head',$layout);
		$this->load->view('layout/web/2_preloader',$layout);
		$this->load->view('layout/web/3_header', $layout);
		$this->load->view('web/VerifyEmail',$layout);
		$this->load->view('layout/web/5_rightbar',$layout);
		$this->load->view('layout/web/6_footer',$layout);	
	}

	//POST Function to create new applicant
	public function CreateApplicant() {

        $this->form_validation->set_rules('FirstName', 'First Name', 'required|alpha');
        $this->form_validation->set_rules('LastName', 'Last Name', 'required|alpha'); 
        $this->form_validation->set_rules('EmailAddress', 'Email', 'required|valid_email'); 
        $this->form_validation->set_rules('Password', 'Password', 'required|min_length[6]'); 
        $this->form_validation->set_rules('Password2', 'Confirm Password', 'required|matches[Password]'); 

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
