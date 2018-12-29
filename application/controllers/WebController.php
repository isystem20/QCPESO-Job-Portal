<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WebController extends Public_Controller {

function __construct() {
	parent::__construct();
			$this->load->model('admin/WebPostsModel','webpostmod');
		}

	public function index() {




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
			$layout = array('transparentwrapper' => TRUE, 'site_title'=>'Quezon City PESO Web Portal');
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
	
	
}
