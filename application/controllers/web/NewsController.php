<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NewsController extends CI_Controller {

function __construct() {
	parent::__construct();
			//$this->load->model('web/NewsModel','newsmod');
			$this->load->model('admin/WebPostsModel','webpostmod');
			
			
			//$this->load->view('web/BrowseJob',$data);


     }

public function News()
	{
		$data['webpost'] = $this->webpostmod->LoadMasterlist();
		
		//$data['browsenews'] = $this->newsmod->LoadMasterlist();
		$layout = array('transparentwrapper' => TRUE,'addons'=>TRUE, 'pagetitle'=>'News');

		$this->load->view('layout/web/1_head',$layout);
		$this->load->view('layout/web/2_preloader',$layout);
		$this->load->view('layout/web/3_header',$layout);
		$this->load->view('web/News',$data);
		$this->load->view('layout/web/5_rightbar',$layout);
		$this->load->view('layout/web/6_footer',$layout);
		
	}
	
	
	
}
