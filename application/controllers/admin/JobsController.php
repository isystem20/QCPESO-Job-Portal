 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class JobsController extends CI_Controller {
 
 	function __construct() {
         parent::__construct();
         $this->load->model('admin/JobsModel','jobsmod');
     }
 
 	public function NewJob()
 	{
 
 		$layout = array('tables'=>TRUE, 'editor'=>TRUE);
 		// $data['categories'] = $this->categmod->LoadCategoryMasterlist();
   //      $data['class'] = 'categories';

 		$this->load->view('layout/admin/1_css');
 		$this->load->view('layout/admin/2_preloader');
 		$this->load->view('layout/admin/3_topbar');
 		$this->load->view('layout/admin/4_leftsidebar');
 		$this->load->view('pages/transaction/jobs/NewJobs');
 		$this->load->view('layout/admin/6_js',$layout);		
        $this->load->view('layout/admin/7_modals'); 

 	}

 	public function AddNewJob(){

 	$data = array('success' => false, 'messages' => array());

 	$this->form_validation->set_rules('jobtitle', 'Job Title', 'trim|required');
 	$this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');

 	if ($this->form_validation->run()) {
 		// die ('save');
 		$data['success'] = true;
 	}
 	else{
 		// die ('error');
 		foreach ($_POST as $key => $value) {
 			$data['messages'][$key] = form_error($key);
 		}
 	}

 	echo json_encode($data);

 
 	}
 }