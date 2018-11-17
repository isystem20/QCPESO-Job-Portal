<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BrowseJobController extends CI_Controller {


function __construct() {
         parent::__construct();
         $this->load->model('web/BrowseJobModel','browsmod');
     }
public function BrowseJob()
	{

		$data['browsejob'] = $this->browsmod->BrowseJobModelMasterlist();
		$layout = array('transparentwrapper' => TRUE, );
		$this->load->view('layout/web/1_head');
		$this->load->view('layout/web/2_preloader');
		$this->load->view('layout/web/3_header');
		$this->load->view('web/BrowseJob',$data);
		$this->load->view('layout/web/5_rightbar');
		$this->load->view('layout/web/6_footer');

	}
	
	
	
}
