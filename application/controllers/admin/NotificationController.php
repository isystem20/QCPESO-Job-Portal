 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class NotificationController extends Admin_Controller {
 
 	function __construct() {
         parent::__construct();
         $this->load->model('admin/NotificationModel','notmod');
     }
 
 	public function Notification()
 	{
 
 		
        $data['notification'] = $this->notmod->LoadNotification();
		$layout = array('tables' => TRUE,'pagetitle'=>'Notification' );
		$data['class'] = 'notification';
		$this->load->view('layout/admin/1_css',$layout);
		$this->load->view('layout/admin/2_preloader',$layout);
		$this->load->view('layout/admin/3_topbar',$layout);
		$this->load->view('layout/admin/4_leftsidebar',$layout);
		$this->load->view('pages/settings/Notification',$data);
		$this->load->view('layout/admin/6_js',$layout);	
		$this->load->view('layout/admin/7_modals',$layout);

 	}
 }