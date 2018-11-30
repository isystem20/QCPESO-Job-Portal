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

		$data['browsejob'] = $this->browsmod->BrowseJobModelMasterlist();
		$data['estabpost'] = $this->estmod->LoadMasterlist();
		$layout = array('transparentwrapper' => TRUE, 'pagetitle'=>'BrowseJob');
		$this->load->view('layout/web/1_head',$layout);
		$this->load->view('layout/web/2_preloader',$layout);
		$this->load->view('layout/web/3_header',$layout);
		$this->load->view('web/BrowseJob',$data);
		$this->load->view('layout/web/5_rightbar',$layout);
		$this->load->view('layout/web/6_footer',$layout);

	}
	
	
	
}
