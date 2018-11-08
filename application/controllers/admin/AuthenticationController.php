<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthenticationController extends CI_Controller {


	function __construct() {
        parent::__construct();
        $this->load->model('admin/AuthModel','auth');
    }



	public function LoginPage()
	{
		$layout = array('login' => TRUE, );
		$this->load->view('layout/admin/1_css',$layout);
		$this->load->view('layout/admin/2_preloader',$layout);
		$this->load->view('auth/LoginPage');
		$this->load->view('layout/admin/6_js');	
	}


	public function AuthenticateAdmin() { // This function will receive the POST data from Ajax

		$this->form_validation->set_rules('Email','Email','required|valid_email');
		$this->form_validation->set_rules('Password','Password','required');

  		if ($this->form_validation->run() == FALSE){
            $errors = validation_errors();
            echo json_encode(['error'=>$errors]);
        }
        else {
        	//Inserting data to database
        	$postdata = $this->input->post();
        	$login = $this->auth->LoginAdmin($postdata);

			$password = $postdata['Password'];
	        $key = $this->config->item('encryption_key');
	        $salt1 = hash('sha512', $key . $password);
	        $salt2 = hash('sha512', $password . $key);
	        $hashed_password = hash('sha512', $salt1 . $password . $salt2);

        	if ($login != FALSE) {

        		if ($login->Active == '0' || $login->applicantstatus == '0') {
        			echo json_encode(['error'=>'Account Disabled.']);
        		}
        		elseif ($login->PasswordHash != $hashed_password) {
        			echo json_encode(['error'=>'Incorrect Password']);
        		}
        		else {
	        		$session_data = array(
	        			'userid' => $login->id,
	        			'lastname' => $login->lastName,
	        			'firstname'=> $login->firstName,
	        			'status' => $login->applicantstatus,
	        			'active' => $login->Active,
	        			'security_id' =>$login->SecurityUserLevelId,
	        			'usertype' => $login->UserType,
	        			'peopleid' => $login->PeopleId,
	        		);  
	        		
	        		$this->session->set_userdata($session_data);
        			echo json_encode(['success'=>TRUE,'url'=>base_url().'manage']);	        		

        		}

        	}
        	else {
        		echo json_encode(['error'=>'Account not found.']);
        	}

        }

	}



}