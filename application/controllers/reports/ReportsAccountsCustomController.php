 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class ReportsAccountsCustomController extends Admin_Controller {
 
 	function __construct() {
         parent::__construct();
         $this->load->model('reports/ReportsAccountsCustomModel','accusmod');
     }
 
 	public function ReportsAccountsCustom()
 	{
 
 		$layout = array('tables'=>TRUE, 'datepicker'=>TRUE);
 		$data['accountscustom'] = $this->accusmod->LoadReportsAccountsCustom();
        $data['class'] = 'accesscustom';
 		$this->load->view('layout/admin/1_css');
 		$this->load->view('layout/admin/2_preloader');
 		$this->load->view('layout/admin/3_topbar');
 		$this->load->view('layout/admin/4_leftsidebar');
 		$this->load->view('pages/reports/ReportsAccountsCustom',$data);
 		$this->load->view('layout/admin/6_js',$layout);		
        $this->load->view('layout/admin/7_modals'); 

 	}
 }