 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class ReportsApplicationsController extends Admin_Controller {
 
 	function __construct() {
         parent::__construct();
         $this->load->model('reports/ReportsApplicationsModel','appmod');
     }
 
 	public function ReportsApplications()
 	{
 
 		$layout = array('tables'=>TRUE, 'datepicker'=>TRUE);
 		$data['applications'] = $this->appmod->LoadReportsApplications();
        $data['class'] = 'applications';
 		$this->load->view('layout/admin/1_css');
 		$this->load->view('layout/admin/2_preloader');
 		$this->load->view('layout/admin/3_topbar');
 		$this->load->view('layout/admin/4_leftsidebar');
 		$this->load->view('pages/reports/ReportsApplications',$data);
 		$this->load->view('layout/admin/6_js',$layout);		
        $this->load->view('layout/admin/7_modals'); 

 	}
 }