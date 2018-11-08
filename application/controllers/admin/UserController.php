<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserMasterlistController extends Admin_Controller {


	public function UserMasterlist()
	{
		$layout = array('charts' => TRUE, );
		$this->load->view('layout/admin/1_css',$layout);
		$this->load->view('layout/admin/2_preloader');
		$this->load->view('layout/admin/3_topbar');
		$this->load->view('layout/admin/4_leftsidebar');
		$this->load->view('pages/users/UserMasterlist');
		$this->load->view('layout/admin/6_js',$layout);	
		
	}


}