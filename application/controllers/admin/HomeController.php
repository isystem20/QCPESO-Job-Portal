<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller {


	public function UserLogin() {
		$this->load->view('layout/css');
		$this->load->view('UserLogin');
		$this->load->view('layout/js');	
	}

	public function AdminEmployeeLogin() {
		$this->load->view('layout/css');
		$this->load->view('EmployeeLogin');
		$this->load->view('layout/js');
	}


	public function Dashboard()
	{
		$layout = array('charts' => TRUE, );
		$this->load->view('layout/admin/1_css',$layout);
		$this->load->view('layout/admin/2_preloader');
		$this->load->view('layout/admin/3_topbar');
		$this->load->view('layout/admin/4_leftsidebar');
		$this->load->view('pages/dashboard');
		$this->load->view('layout/admin/6_js',$layout);	
		
	}

	public function Changelog() {

		$this->load->view('DevelopmentChangeLog');

	}

	public function FrontPage()
		{
			$this->load->view('layout/css');
			$this->load->view('layout/top_navbar_frontpage');
			$this->load->view('FrontPage');
			$this->load->view('layout/js');	
			
		}
	public function index()
		{
			// $this->load->view('layout/css');
			// $this->load->view('layout/top_navbar_frontpage');
			$this->load->view('FrontPage2');
			// $this->load->view('layout/js');	
			
		}


}
