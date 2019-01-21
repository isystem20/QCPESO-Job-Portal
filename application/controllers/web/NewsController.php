<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NewsController extends CI_Controller {

function __construct() {
	parent::__construct();
			//$this->load->model('web/NewsModel','newsmod');
			$this->load->model('admin/WebPostsModel','webpostmod');
			$this->load->model('admin/PostTypesModel','posttypemod');
			$this->load->model('admin/TagsModel','tagsmod');
			
			
			//$this->load->view('web/BrowseJob',$data);


     }

public function News()
	{
		$data['webpost'] = $this->webpostmod->LoadMasterlist();
		$data['posttype'] = $this->posttypemod->LoadMasterlist();
		$data['posttags'] = $this->tagsmod->LoadTagslist();
		
		//$data['browsenews'] = $this->newsmod->LoadMasterlist();
		$layout = array('transparentwrapper' => TRUE,'addons'=>TRUE, 'pagetitle'=>'News');

		$this->load->view('layout/web/1_head',$layout);
		$this->load->view('layout/web/2_preloader',$layout);
		$this->load->view('layout/web/3_header',$layout);
		$this->load->view('web/News',$data);
		$this->load->view('layout/web/5_rightbar',$layout);
		$this->load->view('layout/web/6_footer',$layout);
		
	}


	public function NewsDescription($id = NULL){


		if (!empty($id)) {	

		$data['webpost'] = $this->webpostmod->LoadMasterlist();
		$data['posttype'] = $this->posttypemod->LoadMasterlist();
		$data['posttags'] = $this->tagsmod->LoadTagslist();


		if ($data['webpost']->num_rows() > 0) {
			$data['webpost'] = $data['webpost']->result_array();
		
		//$data['browsenews'] = $this->newsmod->LoadMasterlist();
		$layout = array('transparentwrapper' => TRUE,'addons'=>TRUE, 'pagetitle'=>'News');

		$this->load->view('layout/web/1_head',$layout);
		$this->load->view('layout/web/2_preloader',$layout);
		$this->load->view('layout/web/3_header',$layout);
		$this->load->view('web/NewsDescription',$data);
		$this->load->view('layout/web/5_rightbar',$layout);
		$this->load->view('layout/web/6_footer',$layout);
		}
		else{
			return redirect(base_url('404'));

		}
	}
		
	}


	
	
	
}
