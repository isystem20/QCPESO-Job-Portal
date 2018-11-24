 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class JobsController extends CI_Controller {
 
 	function __construct() {
        parent::__construct();
        $this->load->model('admin/JobsModel','jobsmod');
      	$this->load->model('admin/EmploymentTypesModel','emptypemod');
        $this->load->model('admin/ApplicantLevelModel','applevmod');
        
            
     }
 
 	public function NewJob()
 	{
 
 		$layout = array('tables'=>TRUE, 'editor'=>TRUE,'selectpicker'=>TRUE );
 		$data['emptypes'] = $this->emptypemod->LoadMasterlist();
 		$data['applev'] = $this->applevmod->LoadMasterlist();
        
        $data['class'] = 'viewjobs';
 		// $data['categories'] = $this->categmod->LoadCategoryMasterlist();
   //      $data['class'] = 'categories';

 		$this->load->view('layout/admin/1_css');
 		$this->load->view('layout/admin/2_preloader');
 		$this->load->view('layout/admin/3_topbar');
 		$this->load->view('layout/admin/4_leftsidebar');
 		$this->load->view('pages/transaction/jobs/NewJobs', $data);
 		$this->load->view('layout/admin/6_js',$layout);		
        $this->load->view('layout/admin/7_modals'); 

 	}

 	public function ViewJobs()
 	{
 
 		$layout = array('tables'=>TRUE, 'editor'=>TRUE, 'datepicker'=>TRUE);
 		$data['viewjobs'] = $this->jobsmod->LoadMasterlist();
 		$data['emptypes'] = $this->emptypemod->LoadMasterlist();
 		
        $data['class'] = 'viewjobs';

 		$this->load->view('layout/admin/1_css');
 		$this->load->view('layout/admin/2_preloader');
 		$this->load->view('layout/admin/3_topbar');
 		$this->load->view('layout/admin/4_leftsidebar');
 		$this->load->view('pages/transaction/jobs/ViewJobs', $data);
 		$this->load->view('layout/admin/6_js',$layout);		
        $this->load->view('layout/admin/7_modals'); 

 	}

 	public function AddNewJob(){

 	$data = array('success' => false, 'messages' => array());

 	$this->form_validation->set_rules('jtitle', 'Job Title', 'trim|required');
 	$this->form_validation->set_rules('spec', 'Specialization', 'trim|required');
 	$this->form_validation->set_rules('jobdesc', 'Job Description', 'trim|required');
 	$this->form_validation->set_rules('salary', 'Salary', 'trim|required|numeric');
 	
 	
 	$this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');


 	// if ($this->form_validation->run() == FALSE){
 	// 	$errors = validation_errors();
 	// 	echo json_encode(['error' => $errors]);
 	// }
 	// else{

 	// 	echo json_encode('ok');

 	// }

 	if ($this->form_validation->run()) {
 		// die ('save');
 		
 		$postdata = $this->input->post();
        $inserted = $this->jobsmod->Add($postdata);

         echo json_encode(['success'=>TRUE]);

    
 	}
 	else{
 		// die ('error');
 		foreach ($_POST as $key => $value) {
 			$data['messages'][$key] = form_error($key);

 		}
                    echo json_encode($data);

 	}


 	} 

}
