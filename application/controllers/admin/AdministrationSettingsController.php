 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class AdministrationSettingsController extends CI_Controller {
 
 	// function __construct() {
  //        parent::__construct();
  //        $this->load->model('admin/AdministrationModel','Administration_Mod');
  //    }
 
 	public function Administration()
 	{
 
 		
        // $data['administration'] = $this->AdministrationMod->LoadAdministration();
		$layout = array('tables' => TRUE,'pagetitle'=>'administration' );
		// $data['class'] = 'administration';
		$this->load->view('layout/admin/1_css',$layout);
		$this->load->view('layout/admin/2_preloader',$layout);
		$this->load->view('layout/admin/3_topbar',$layout);
		$this->load->view('layout/admin/4_leftsidebar',$layout);
		$this->load->view('pages/settings/Administration',$layout);
		$this->load->view('layout/admin/6_js',$layout);	
		$this->load->view('layout/admin/7_modals');

 	}
 }