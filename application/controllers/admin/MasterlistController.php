 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class MasterlistController extends Admin_Controller {
 
 	function __construct() {
         parent::__construct();
         $this->load->model('admin/MasterlistModel','masmod');
     }
 
 	public function Masterlist()
 	{
 
 		$layout = array('tables'=>TRUE, 'datepicker'=>TRUE);
 		$data['masterlist '] = $this->masmod->LoadMasterlist();
        $data['class'] = 'masterlist';
 		$this->load->view('layout/admin/1_css');
 		$this->load->view('layout/admin/2_preloader');
 		$this->load->view('layout/admin/3_topbar');
 		$this->load->view('layout/admin/4_leftsidebar');
 		$this->load->view('pages/reports/Masterlist',$data);
 		$this->load->view('layout/admin/6_js',$layout);		
        $this->load->view('layout/admin/7_modals'); 

 	}