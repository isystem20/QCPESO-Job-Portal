 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class DesignController extends CI_Controller {
 
 	// function __construct() {
  //        parent::__construct();
  //        $this->load->model('admin/MaintenanceModel','DesignMod');
  //    }
 
 	public function Design()
 	{
 
 		
        // $data['Design'] = $this->DesignMod->LoadDesign();
		$layout = array('tables' => TRUE,'pagetitle'=>'Design' );
		// $data['class'] = 'Design';
		$this->load->view('layout/admin/1_css',$layout);
		$this->load->view('layout/admin/2_preloader',$layout);
		$this->load->view('layout/admin/3_topbar',$layout);
		$this->load->view('layout/admin/4_leftsidebar',$layout);
		$this->load->view('pages/settings/Design',$layout);
		$this->load->view('layout/admin/6_js',$layout);	
		$this->load->view('layout/admin/7_modals');

 	}
 }