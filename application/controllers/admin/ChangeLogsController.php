 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class ChangeLogsController extends Admin_Controller {
 
 	function __construct() {
         parent::__construct();
         $this->load->model('admin/ChangeLogsModel','logsmod');
     }
 
 	public function ChangeLogs()
 	{
 
 		
        $data['changelogs'] = $this->logsmod->LoadChangeLogs();
		$layout = array('tables' => TRUE,'pagetitle'=>'Change Logs' );
		$data['class'] = 'changelogs';
		$this->load->view('layout/admin/1_css',$layout);
		$this->load->view('layout/admin/2_preloader',$layout);
		$this->load->view('layout/admin/3_topbar',$layout);
		$this->load->view('layout/admin/4_leftsidebar',$layout);
		$this->load->view('pages/settings/ChangeLogs',$data);
		$this->load->view('layout/admin/6_js',$layout);	
		$this->load->view('layout/admin/7_modals',$layout);

 	}
 }