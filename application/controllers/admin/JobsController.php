 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class JobsController extends CI_Controller {
 
 	function __construct() {
         parent::__construct();
         $this->load->model('admin/CategoriesModel','categmod');
         $this->load->model('LoggerModel','logger'); //Include LoggerModel
     }
 
 	public function NewJob()
 	{
 
 		$layout = array('tables'=>TRUE, 'editor'=>TRUE);
 		 $data['categories'] = $this->categmod->LoadCategoryMasterlist();
         $data['class'] = 'categories';

 		$this->load->view('layout/admin/1_css');
 		$this->load->view('layout/admin/2_preloader');
 		$this->load->view('layout/admin/3_topbar');
 		$this->load->view('layout/admin/4_leftsidebar');
 		$this->load->view('pages/transaction/jobs/NewJobs');
 		$this->load->view('layout/admin/6_js',$layout);		
        $this->load->view('layout/admin/7_modals');

        $json = json_encode($data['categories']); //log
        $this->logger->log('Load Jobs','Jobs',$json); //Log  

 	}
 }