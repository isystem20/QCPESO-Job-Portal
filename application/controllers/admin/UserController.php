<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends Admin_Controller {

	public function UserMasterlist() {
		$this->load->model('admin/UserModel','usermasterlistmodel');
		$this->load->model('LoggerModel','logger'); //Include LoggerModel
		
		$data['usermasterlist'] = $this->usermasterlistmodel->Load_UserMasterlistModel_Masterlist();
		$layout = array('tables' => TRUE,'pagetitle'=>'List of User' );
		$this->load->view('layout/admin/1_css',$layout);
		$this->load->view('layout/admin/2_preloader',$layout);
		$this->load->view('layout/admin/3_topbar',$layout);
		$this->load->view('layout/admin/4_leftsidebar',$layout);
		$this->load->view('pages/users/UserMasterlist',$data);
		$this->load->view('layout/admin/6_js',$layout);	
		$this->load->view('layout/admin/7_modals',$layout);

		$json = json_encode($data['usermasterlist']); //log
        $this->logger->log('Load UserMasterlist','User',$json); //Log	
	}

}
