<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HiringController extends Public_Controller {

public function Hiring()
	{

		$layout = array('transparentwrapper' => TRUE,'pagetitle'=>'Hiring');
		$this->load->view('layout/web/1_head',$layout);
		$this->load->view('layout/web/2_preloader',$layout);
		$this->load->view('layout/web/3_header',$layout);
		$this->load->view('web/Hiring',$layout);
		$this->load->view('layout/web/5_rightbar',$layout);
		$this->load->view('layout/web/6_footer',$layout);
		
	}
	
	
	
}
