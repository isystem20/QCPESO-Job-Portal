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
        
        
        
        $data['class'] = 'viewjobs';
 		// $data['categories'] = $this->categmod->LoadCategoryMasterlist();
   //      $data['class'] = 'categories';


     if (!empty($id)) {

            $data['jobposts'] = $this->jobsmod->LoadMasterlist($id);

            // print_r($data['jobposts']);

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

      
        $this->form_validation->set_rules('JobTitle','Job Title','required');
        if ($this->form_validation->run() == FALSE){
             $errors = validation_errors();
             echo json_encode(['error'=>$errors]);
         }
        else {
          $postdata = $this->input->post();
          $inserted = $this->jobsmod->Add($postdata);
          // echo json_encode(['success'=>TRUE]);
          if ($inserted != FALSE) {         
            
                echo json_encode(['success'=>TRUE,'url'=>base_url().'manage/do/jobs/view-list']);
          }
          else {
            echo json_encode(['error'=>'Update Unsuccessful.']);
          }
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
