 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class ServerandDatabaseController extends Admin_Controller {
 
 	function __construct() {
         parent::__construct();
         $this->load->model('admin/ServerandDatabaseModel','servermod');
     }
 
 	public function ServerandDatabase()
 	{
 
 		
        $data['serndata'] = $this->servermod->LoadServerandDatabase();
		$layout = array('tables' => TRUE,'pagetitle'=>'Server and Database' );
		$data['class'] = 'serndata';
		$this->load->view('layout/admin/1_css',$layout);
		$this->load->view('layout/admin/2_preloader',$layout);
		$this->load->view('layout/admin/3_topbar',$layout);
		$this->load->view('layout/admin/4_leftsidebar',$layout);
		$this->load->view('pages/settings/ServerandDatabase',$data);
		$this->load->view('layout/admin/6_js',$layout);	
		$this->load->view('layout/admin/7_modals',$layout);

 	}
 }