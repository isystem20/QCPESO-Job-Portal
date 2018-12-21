 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class SecurityController extends Admin_Controller {
 
 	function __construct() {
         parent::__construct();
         $this->load->model('admin/SecurityModel','secmod');
     }
 
 	public function Security()
 	{
 
 		
        $data['security'] = $this->secmod->LoadSecurity();
		$layout = array('tables' => TRUE,'pagetitle'=>'Security' );
		$data['class'] = 'security';
		$this->load->view('layout/admin/1_css',$layout);
		$this->load->view('layout/admin/2_preloader',$layout);
		$this->load->view('layout/admin/3_topbar',$layout);
		$this->load->view('layout/admin/4_leftsidebar',$layout);
		$this->load->view('pages/settings/Security',$data);
		$this->load->view('layout/admin/6_js',$layout);	
		$this->load->view('layout/admin/7_modals',$layout);

 	}
 }