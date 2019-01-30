<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AboutController extends Public_Controller {

	function __construct() {
	parent::__construct();
			$this->load->model('admin/WebPostsModel','webpostmod');
			// $this->load->model('LoggerModel','logger'); //Include LoggerModel
		}

public function About()
	{

		$data['webpost'] = $this->webpostmod->MostRecentPost();

		$layout = array('transparentwrapper' => TRUE,'pagetitle'=>'About Us');
		$this->load->view('layout/web/1_head',$layout);
		$this->load->view('layout/web/2_preloader',$layout);
		$this->load->view('layout/web/3_header',$layout);
		$this->load->view('web/About',$data);
		$this->load->view('layout/web/5_rightbar',$layout);
		$this->load->view('layout/web/6_footer',$layout);
		
	}
	
	
	
}
