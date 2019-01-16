<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WebController extends Public_Controller {

function __construct() {
	parent::__construct();
			$this->load->model('admin/WebPostsModel','webpostmod');
			$this->load->model('LoggerModel','logger'); //Include LoggerModel
		}

	public function index() {

		$websetting = $this->LoadWebSettings();


		$logged_userid = $this->session->userdata('userid');
		$usertype = $this->session->userdata('usertype');
		// if (!empty($logged_userid) && $usertype == 'APPLICANT') {
			
		// 	$this->load->view('layout/web/1_head');
		// 	$this->load->view('layout/web/2_preloader');
		// 	$this->load->view('layout/web/3_header_login');
		// 	$this->load->view('web/Profile');
		// 	$this->load->view('layout/web/5_rightbar');
		// 	$this->load->view('layout/web/6_footer');

		// }
		// else {
			$data['webpostmodel'] = $this->webpostmod->LoadMasterlist();
			$layout = array('transparentwrapper' => TRUE, 'site_title'=>'Quezon City PESO Web Portal','websetting'=>$websetting);
			$this->load->view('layout/web/1_head',$layout);
			$this->load->view('layout/web/2_preloader');
			$this->load->view('layout/web/3_header',$layout);
			$this->load->view('web/Home',$data);
			$this->load->view('layout/web/5_rightbar');
			$this->load->view('layout/web/6_footer');			
		// }


	}



	public function logout() {
		$this->session->unset_userdata('userid');
		$this->session->sess_destroy();
		return redirect(base_url());	
	}
	



	public function ActivationPage(){
		$websetting = $this->LoadWebSettings();
        $layout = array('login' => TRUE,'pagetitle'=>'Login','websetting'=>$websetting);
        $this->load->view('layout/admin/1_css',$layout);
        $this->load->view('layout/admin/2_preloader',$layout);
        $this->load->view('pages/verification',$layout);
        $this->load->view('layout/admin/6_js',$layout);
	}



	public function SendCode(){
		$code = rand(100000, 999999);
		$id = $this->session->userdata('userid');
		$this->db->set('ActivationCode',$code,FALSE);
		$this->db->set('EmailSent',"1",FALSE);
		$this->db->where('Id',$id);
		$this->db->update('tbl_security_users');
		$affected = $this->db->affected_rows();
		// die($this->db->last_query().' - '.$affected);
		if ($affected > 0) {

			$this->load->model('notifications/Email','email');
			$notifdata = array('userid'=>$id,'r_fname'=>$this->session->userdata('firstname'),'r_email' => $this->session->userdata('email'), 'r_name'=>$this->session->userdata('firstname').' '.$this->session->userdata('lastname'));
			$send = $this->email->send_email_verification_code($code,$notifdata);
			if ($send === true) {
				$this->logger->log('Send Code Success','Verification',json_encode($notifdata)); //Log   
				echo json_encode(['result'=>'Successful']);
			}
			else{
				$this->logger->log('Send Code Failed','Verification',json_encode($send)); //Log  
				echo json_encode(['error'=>$send]);
			}
			
		}
		else {
			$this->logger->log('Send Code Failed','Verification',json_encode(['userid'=> $id, 'error'=> 'Unknown'])); //Log  
			echo json_encode(['error'=>'Unknown Error. Please refresh this page.']);
		}

	}



	public function Processor($id = null, $hashed = null){


		$this->form_validation->set_rules('code','Code','required');
		$this->form_validation->set_rules('userid','Your Id','required');

		if ($this->form_validation->run() == FALSE){
			//Activation Via Link
			if (empty($id) && empty($hashed)) {
				die('You are trying to access an invalid page.');
			}
			else {
				//Check the id and hashed
				$code_result = $this->checked_activationcode($id);
				if ($code_result != FALSE) {
					$key = $this->config->item('encryption_key');
			        $salt1 = hash('sha512', $key . $code_result);
			        $salt2 = hash('sha512', $code_result . $key);
			        $hashed_code = hash('sha512', $salt1 . $code_result . $salt2);
			        if ($hashed == $hashed_code) {
						//Matched!
						// if (!empty($this->session->userdata('userid'))) {
							$this->session->set_userdata('activated','1');
							$this->ActivateAccount($id);
							return redirect(base_url('manage'));
						// }

			        }
			        else {
			        	die('Invalid Code');
			        }
				}

			}

		}
		else {
			//Activation Via Page
			$postdata = $this->input->post();
			$code_result = $this->checked_activationcode($postdata['userid']);
			if ($code_result != FALSE) {
				if ($postdata['code'] == $code_result) {
					//Matched!
					$this->session->set_userdata('activated','1');
					$this->ActivateAccount($postdata['userid']);
					echo json_encode(['result'=>'Account Verification Successful.','url'=>base_url('manage')]);
				}
				else {
					echo json_encode(['error'=>'Invalid verification code']);
				}
			}
			else {
				echo json_encode(['error'=>'Failed to load verification code.']);
			}
		}


		


	}
	function ActivateAccount($id) {
		$this->db->set('Activated',1,FALSE);
		$this->db->where('Id',$id);
		$this->db->update('tbl_security_users');
	}

	function checked_activationcode($id) {
		$this->db->select('ActivationCode');
		$this->db->from('tbl_security_users');
		$this->db->where('Id',$id);
		$result = $this->db->get()->result();
		$code = null;
		foreach ($result as $row) {
			$code = $row->ActivationCode;
		}
		if ($code != null) {
			return $code;
		}
		return FALSE;

	}


	
}
