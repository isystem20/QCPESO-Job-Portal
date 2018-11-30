<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AboutController extends Web_Controller {

public function About()
	{

		$layout = array('transparentwrapper' => TRUE,'pagetitle'=>'About Us');
		$this->load->view('layout/web/1_head',$layout);
		$this->load->view('layout/web/2_preloader',$layout);
		$this->load->view('layout/web/3_header',$layout);
		$this->load->view('web/About',$layout);
		$this->load->view('layout/web/5_rightbar',$layout);
		$this->load->view('layout/web/6_footer',$layout);
		
	}
	
	
	
}
