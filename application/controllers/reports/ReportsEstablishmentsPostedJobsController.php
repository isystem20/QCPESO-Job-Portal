 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class ReportsEstablishmentsPostedJobsController extends Admin_Controller {
 
 	function __construct() {
         parent::__construct();
         $this->load->model('reports/ReportsEstablishmentsPostedJobsModel','esjobmod');
     }
 
 	public function ReportsEstablishmentsPostedJobs()
 	{
 
 		$layout = array('tables'=>TRUE, 'datepicker'=>TRUE);
 		$data['postedjob'] = $this->esjobmod->LoadReportsEstablishmentsPostedJobs();
        $data['class'] = 'postedjobs';
 		$this->load->view('layout/admin/1_css');
 		$this->load->view('layout/admin/2_preloader');
 		$this->load->view('layout/admin/3_topbar');
 		$this->load->view('layout/admin/4_leftsidebar');
 		$this->load->view('pages/reports/ReportsEstablishmentsPostedJobs',$data);
 		$this->load->view('layout/admin/6_js',$layout);		
        $this->load->view('layout/admin/7_modals'); 

 	}
 }