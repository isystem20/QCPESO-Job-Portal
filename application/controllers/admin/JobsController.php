 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class JobsController extends CI_Controller {
 
 	function __construct() {
        parent::__construct();
        $this->load->model('admin/JobsModel','jobsmod');
      	$this->load->model('admin/EmploymentTypesModel','emptypemod');
        $this->load->model('admin/ApplicantLevelModel','applevmod');
        $this->load->model('admin/SkillsModel','skimod');
        $this->load->model('admin/EstablishmentModel','establishmentmod');


        
            
     }
 
 	public function NewJob($id = null,$mode= null)
 	{
        $css = array('addons' => True, );
 		$layout = array('addons'=>TRUE);
 		$data['emptypes'] = $this->emptypemod->LoadMasterlist();
 		$data['applev'] = $this->applevmod->LoadMasterlist();
        $data['skills'] = $this->skimod->LoadMasterlist();
        $data['estabs'] = $this->establishmentmod->LoadMasterlist();
        
        
        
        $data['class'] = 'jobposts';
 		// $data['categories'] = $this->categmod->LoadCategoryMasterlist();
   //      $data['class'] = 'categories';


     if (!empty($id)) {

            $data['jobposts'] = $this->jobsmod->LoadMasterlist($id);

            print_r($data['jobposts']);

            if (!empty($mode)) {
                if ($mode == 'edit') {
                    $mode = array('edit' => TRUE, );
                }
                elseif ($mode == 'view') {
                    $mode = array('view' => TRUE, );
                }
                else {
                    die('Invalid Mode');
                }
            }
            else {
                $mode = array('view' => TRUE, );
            }
        }
    



 		$this->load->view('layout/admin/1_css', $css);
 		$this->load->view('layout/admin/2_preloader');
 		$this->load->view('layout/admin/3_topbar');
 		$this->load->view('layout/admin/4_leftsidebar');
 		$this->load->view('pages/transaction/jobs/NewJobs', $data);
 		$this->load->view('layout/admin/6_js',$layout);		
    
 	}

 	public function ViewJobs()
 	{

 
 		$layout = array('tables'=>TRUE,);
 		$data['jobposts'] = $this->jobsmod->LoadMasterlist();
    $data['class'] = 'jobposts';



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
 	// $this->form_validation->set_rules('speci', 'Specialization', 'trim|required');
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

       //  $config['upload_path'] = APPPATH.'views/pages/transaction/jobs/uploads';
       //  $config['allowed_type'] = '*';

       //  $this->load->library('upload', $config);
       //  $this->upload->do_upload('jobimage');
       //  $jobimage = $this->upload->data();
        
       //  $data = array('jobimage' =>$jobimage['jobimage']);
 		    // $this->jobsmod->Add($data);

        $postdata = $this->input->post();

        $inserted = $this->jobsmod->Add($postdata);

        if ($inserted != FALSE) {         
            
            echo json_encode(['error'=>'Update Unsuccessful.']);

          }
          else {
            echo json_encode(['success'=>TRUE, 'url'=>base_url().'manage/do/jobs/view-list']);  

          }

        
 	}
 	else{
 		// die ('error');
 		foreach ($_POST as $key => $value) {
 			$data['messages'][$key] = form_error($key);

 		}
        echo json_encode($data);

 	}


 	} 




  public function Delete() {
 
         $this->form_validation->set_rules('id', 'Item Record', 'required',
                array(
                'required'      => 'Cannot identify this record.',
                ));

        $postdata = $this->input->post();
        if ($this->form_validation->run() == FALSE){
            $errors = validation_errors();
            echo json_encode(['error'=>$errors]);
        }
        else{
            $result = $this->jobsmod->Delete($postdata);
            if ($result != FALSE) {

                $json = json_encode($result);              
                echo $json;
            }
            else {
                echo json_encode(['error'=>'Update Unsuccessful.']);

            }

        }

}


}
