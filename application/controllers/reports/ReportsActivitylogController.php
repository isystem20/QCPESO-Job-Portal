 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class ReportsActivitylogController extends Admin_Controller {
 
 	function __construct() {
         parent::__construct();
         $this->load->model('reports/ReportsActivitylogModel','acclogmod');
     }
 
 	public function ReportsActivitylog()
 	{
 
 		// $layout = array('tables'=>TRUE, 'datepicker'=>TRUE);
 		// $data['accountslog'] = $this->acclogmod->LoadReportsActivitylog();
   //      $data['class'] = 'accesslog';
 		// $this->load->view('layout/admin/1_css');
 		// $this->load->view('layout/admin/2_preloader');
 		// $this->load->view('layout/admin/3_topbar');
 		// $this->load->view('layout/admin/4_leftsidebar');
 		// $this->load->view('pages/reports/ReportsActivitylog',$data);
 		// $this->load->view('layout/admin/6_js',$layout);		
   //      $this->load->view('layout/admin/7_modals'); 

        $data['accountslog'] = $this->acclogmod->LoadReportsActivitylog();
		$layout = array('tables' => TRUE,'pagetitle'=>'Activity Log' );
		$data['class'] = 'accesslog';
		$this->load->view('layout/admin/1_css',$layout);
		$this->load->view('layout/admin/2_preloader',$layout);
		$this->load->view('layout/admin/3_topbar',$layout);
		$this->load->view('layout/admin/4_leftsidebar',$layout);
		$this->load->view('pages/reports/ReportsActivitylog',$data);
		$this->load->view('layout/admin/6_js',$layout);	
		$this->load->view('layout/admin/7_modals',$layout);

 	}
 }