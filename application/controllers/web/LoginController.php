<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends Public_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('web/AuthModel','auth');
    }

	public function login()
	{
		$logged_userid = $this->session->userdata('userid');
		$usertype = $this->session->userdata('usertype');
		if (!empty($logged_userid) && $usertype == 'APPLICANT') {
			return redirect(base_url());
		}
		$layout = array('transparentwrapper' => TRUE,'pagetitle'=>'Login' );
		$this->load->view('layout/web/1_head',$layout);
		$this->load->view('layout/web/2_preloader',$layout);
		$this->load->view('layout/web/3_header', $layout);
		$this->load->view('web/Login',$layout);
		$this->load->view('layout/web/5_rightbar',$layout);
		$this->load->view('layout/web/6_footer',$layout);
		
	}
	

	public function authenticate() {
		$this->form_validation->set_rules('Email','Email','required|valid_email');
		$this->form_validation->set_rules('Mode','Mode','required');


		$postdata = $this->input->post();


  		if ($this->form_validation->run() == FALSE){
            $errors = validation_errors();
            echo json_encode(['error'=>$errors]);
        }

        else {

        	if ($postdata['Mode'] =='Google') {

	        	if (empty($postdata['External_Id'])) {
	        		echo json_encode(['error'=>'Google Authentication Failed.']);
	        	}
	        	else {
	        			unset($postdata['Mode']);
			        	$login = $this->auth->LoginApplicantGoogle($postdata);

			        	if ($login != FALSE) {

			        		if ($login->Active == '0' || $login->applicantstatus == '0') {
			        			echo json_encode(['error'=>'Account Disabled.']);
			        		}
			        		else {
				        		$session_data = array(
				        			'userid' => $login->Id,
				        			'lastname' => $login->lastName,
				        			'firstname'=> $login->firstName,
				        			'status' => $login->applicantstatus,
				        			'active' => $login->Active,
				        			'security_id' =>$login->SecurityUserLevelId,
				        			'usertype' => $login->UserType,
				        			'peopleid' => $login->PeopleId,
				        		);  
				        		
				        		$this->session->set_userdata($session_data);
			        			echo json_encode(['success'=>TRUE,'url'=>base_url()]);	        		

			        		}

			        	}
			        	else {
			        		echo json_encode(['error'=>'Account not found.']);
			        	}


	        	}

        	}

        	elseif ($postdata['Mode'] == 'Manual') {

	        	if (empty($postdata['Password'])) {
	        		echo json_encode(['error'=>'Password is required.']);
	        	}
	        	else {
			        	unset($postdata['Mode']);
			        	$login = $this->auth->LoginApplicant($postdata);

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
				        			'userid' => $login->Id,
				        			'lastname' => $login->lastName,
				        			'firstname'=> $login->firstName,
				        			'status' => $login->applicantstatus,
				        			'active' => $login->Active,
				        			'security_id' =>$login->SecurityUserLevelId,
				        			'usertype' => $login->UserType,
				        			'peopleid' => $login->PeopleId,
				        		);  
				        		
				        		$this->session->set_userdata($session_data);
			        			echo json_encode(['success'=>TRUE,'url'=>base_url()]);	        		

			        		}

			        	}
			        	else {
			        		echo json_encode(['error'=>'Account not found.']);
			        	}
	        	}

        	}



        	else {
        		echo json_encode(['error'=>'Unknown method.']);
        	}



        }

	}
	
	

}
