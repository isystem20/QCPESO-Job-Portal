<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NewsController extends CI_Controller {

public function News()
	{
		
		
		$layout = array('transparentwrapper' => TRUE, );
		$this->load->view('layout/web/1_head');
		$this->load->view('layout/web/2_preloader');
		$this->load->view('layout/web/3_header');
		$this->load->view('web/News');
		$this->load->view('layout/web/5_rightbar');
		$this->load->view('layout/web/6_footer');
		
	}
	
	
	
}
