<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class JobController extends Public_Controller {

public function Job()
	{

		$layout = array('transparentwrapper' => TRUE,'pagetitle'=>'Job');
		$this->load->view('layout/web/1_head',$layout);
		$this->load->view('layout/web/2_preloader',$layout);
		$this->load->view('layout/web/3_header',$layout);
		$this->load->view('web/Job',$layout);
		$this->load->view('layout/web/5_rightbar',$layout);
		$this->load->view('layout/web/6_footer',$layout);
		
	}
	
	
	
}
