<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller {


	public function UserMasterlist() {
		$this->load->model('admin/UserModel','usermasterlistmodel');
		$data['usermasterlist'] = $this->usermasterlistmodel->Load_UserMasterlistModel_Masterlist();
		$layout = array('tables' => TRUE, );
		$this->load->view('layout/admin/1_css');
		$this->load->view('layout/admin/2_preloader');
		$this->load->view('layout/admin/3_topbar');
		$this->load->view('layout/admin/4_leftsidebar');
		$this->load->view('pages/users/UserMasterlist',$data);
		$this->load->view('layout/admin/6_js',$layout);	
		$this->load->view('layout/admin/7_modals',$layout);	
	}

}
