<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NewsController extends CI_Controller {

public function News()
	{
		
		
		$layout = array('transparentwrapper' => TRUE,'pagetitle'=>'News' );
		$this->load->view('layout/web/1_head',$layout);
		$this->load->view('layout/web/2_preloader',$layout);
		$this->load->view('layout/web/3_header',$layout);
		$this->load->view('web/News',$layout);
		$this->load->view('layout/web/5_rightbar',$layout);
		$this->load->view('layout/web/6_footer',$layout);
		
	}
	
	
	
}
