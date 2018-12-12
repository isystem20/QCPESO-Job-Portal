<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BrowseJobController extends CI_Controller {


function __construct() {
	parent::__construct();
			$this->load->model('web/BrowseJobModel','browsmod');
			$this->load->model('web/EstablishmentModel','estmod');
			$this->load->model('admin/CategoriesModel','categmod');
			$this->load->model('admin/SkillsModel','skimod');
			$this->load->model('admin/ApplicantLevelModel','levelmod');
     }
public function BrowseJob()
				{
						$str = null;
						// $category = null;
						$postdata = $this->input->post();

						if  (!empty($postdata['searchtext'])) {
							$str = $postdata['searchtext'];
				}
		
		

		$data['browsejob'] = $this->browsmod->BrowseJobModelMasterlist($postdata);
		$data['browsejob1'] = $this->browsmod->MostRecentJobs();
		$data['estabpost'] = $this->estmod->LoadMasterlist();		
		$data['categori'] = $this->categmod->LoadCategoryMasterlist();
		$data['skills'] = $this->skimod->LoadMasterlist();
		$data['applevel'] = $this->levelmod->LoadMasterlist();
		$data['criteria'] = $postdata;
		$layout = array('transparentwrapper' => TRUE,'addons'=>TRUE, 'pagetitle'=>'BrowseJob');
			$this->load->view('layout/web/1_head',$layout);
			$this->load->view('layout/web/2_preloader',$layout);
			$this->load->view('layout/web/3_header',$layout);
			$this->load->view('web/BrowseJob',$data);
			$this->load->view('layout/web/5_rightbar',$layout);
			$this->load->view('layout/web/6_footer',$layout);

	}
}
