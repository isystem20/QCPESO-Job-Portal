 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class BasicSettingsController extends CI_Controller {
 
 	// function __construct() {
  //        parent::__construct();
  //        $this->load->model('admin/BasicSettignsModel','Administration_Mod');
  //    }
 
 	public function BasicSettings()
 	{
 
 		
        // $data['BasicSettings'] = $this->BasicSettingsMod->LoadBasicSettings();
		$layout = array('tables' => TRUE,'pagetitle'=>'BasicSettings' );
		// $data['class'] = 'BasicSettings';
		$this->load->view('layout/admin/1_css',$layout);
		$this->load->view('layout/admin/2_preloader',$layout);
		$this->load->view('layout/admin/3_topbar',$layout);
		$this->load->view('layout/admin/4_leftsidebar',$layout);
		$this->load->view('pages/settings/BasicSettings',$layout);
		$this->load->view('layout/admin/6_js',$layout);	
		$this->load->view('layout/admin/7_modals');

 	}
 }