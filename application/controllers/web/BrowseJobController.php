<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BrowseJobController extends CI_Controller {


function __construct() {
         parent::__construct();
         $this->load->model('web/BrowseJobModel','browsmod');
         $this->load->model('web/EstablishmentModel','estmod');
     }
	public function BrowseJob()
	{
		$str = null;
		$postdata = $this->input->post();
		if (!empty($postdata['searchtext'])) {
			$str = $postdata['searchtext'];
		}
		$data['browsejob1'] = $this->browsmod->MostRecentJobs();
		$data['browsejob'] = $this->browsmod->BrowseJobModelMasterlist($str);
		$data['estabpost'] = $this->estmod->LoadMasterlist();
		
		$layout = array('transparentwrapper' => TRUE, );
		$this->load->view('layout/web/1_head');
		$this->load->view('layout/web/2_preloader');
		$this->load->view('layout/web/3_header');
		$this->load->view('web/BrowseJob',$data);
		$this->load->view('layout/web/5_rightbar');
		$this->load->view('layout/web/6_footer');

	}
	
	
	
}
