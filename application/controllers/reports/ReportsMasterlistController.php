<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class ReportsMasterlistController extends Admin_Controller {
 
 	function __construct() {
         parent::__construct();
         $this->load->model('reports/ReportsMasterlistModel','reportsmasmod');
         $this->load->model('admin/CategoriesModel','catmod');
     }
 
 	public function ReportsMasterlist()
 	{

 		$data['categories'] = $this->catmod->LoadCategoryMasterlist();
 
 		$layout = array('tables'=>TRUE, 'datepicker'=>TRUE);
 		$data['reports'] = $this->reportsmasmod->LoadReportsMasterlist();
        $data['class'] = 'reports';
 		$this->load->view('layout/admin/1_css');
 		$this->load->view('layout/admin/2_preloader');
 		$this->load->view('layout/admin/3_topbar');
 		$this->load->view('layout/admin/4_leftsidebar');
 		$this->load->view('pages/reports/ReportsMasterlist',$data);
 		$this->load->view('layout/admin/6_js',$layout);		
        $this->load->view('layout/admin/7_modals'); 


 	}
 }