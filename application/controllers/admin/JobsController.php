 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class JobsController extends Admin_Controller {
 
 	function __construct() {
        parent::__construct();
        $this->load->model('admin/JobsModel','jobsmod');
      	$this->load->model('admin/EmploymentTypesModel','emptypemod');
         $this->load->model('LoggerModel','logger'); //Include LoggerModel
        $this->load->model('admin/ApplicantLevelModel','applevmod');
        $this->load->model('admin/SkillsModel','skimod');
        $this->load->model('admin/EstablishmentModel','establishmentmod'); 
        $this->load->model('admin/CategoriesModel','categmod');
        
     }
 
 	public function NewJob($id = null,$mode= null)
 	{
      $css = array('addons' => True, );
      $layout = array('editor'=>TRUE, 'addons'=>TRUE,'pagetitle'=>'Adding New Job Posts','uploadfile'=>TRUE);
      $data['emptypes'] = $this->emptypemod->LoadMasterlist();
      $data['applev'] = $this->applevmod->LoadMasterlist();
      $data['skills'] = $this->skimod->LoadMasterlist();
      $data['estabs'] = $this->establishmentmod->LoadMasterlist();
      $data['categories'] = $this->categmod->LoadCategoryMasterlist();
       
      $data['class'] = 'jobapplication';
 		// $data['categories'] = $this->categmod->LoadCategoryMasterlist();
   //      $data['class'] = 'categories';


     if (!empty($id)) {

            $data['jobposts'] = $this->jobsmod->LoadMasterlist($id);

            // print_r($data['jobposts']);

             if (!empty($mode)) {
                if ($mode == 'edit') {
                    $data['mode']="edit";
                }
                elseif ($mode == 'view') {
                    $data['mode']="view";
                }
                else {
                    die('Invalid Mode');
                }
            }
            else {
                  $data['mode']="view";
            }
        }
    
 		$this->load->view('layout/admin/1_css', $layout);
 		$this->load->view('layout/admin/2_preloader', $layout);
 		$this->load->view('layout/admin/3_topbar', $layout);
 		$this->load->view('layout/admin/4_leftsidebar', $layout);
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
        $this->load->view('layout/admin/7_modals',$layout);

        // $json = json_encode($data['categories']); //log
        // $this->logger->log('Load Jobs','Jobs',$json); //Log  

 	}

  public function PendingJobs()
  {

 
    $layout = array('tables'=>TRUE,);
    $data['jobposts'] = $this->jobsmod->LoadMasterlistPending();
    $data['class'] = 'jobposts';



    $this->load->view('layout/admin/1_css');
    $this->load->view('layout/admin/2_preloader');
    $this->load->view('layout/admin/3_topbar');
    $this->load->view('layout/admin/4_leftsidebar');
    $this->load->view('pages/transaction/jobs/PendingJobs', $data);
    $this->load->view('layout/admin/6_js',$layout);   
    $this->load->view('layout/admin/7_modals',$layout);

        // $json = json_encode($data['categories']); //log
        // $this->logger->log('Load Jobs','Jobs',$json); //Log  

  }

 	public function AddNewJob() {
  
        $this->form_validation->set_rules('JobTitle','Job Title','required');
       if ($this->form_validation->run() == FALSE){
             $errors = validation_errors();
             echo json_encode(['error'=>$errors]);

         }

  
        else {
            $imagepath="";
            $path = dirname(BASEPATH).'/uploads/';
            $config['upload_path'] = $path;
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '100000';
            $senderror = FALSE;
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('JobImage')) {
                $errors = $this->upload->display_errors();
                $senderror = TRUE;
            }       
            else {
                $imagedata = $this->upload->data();
                $imagepath =  'uploads/'.$imagedata['file_name'];   
            }




          $postdata = $this->input->post();
            $postdata['JobImage']=$imagepath;
            // unset($postdata['_wysihtml5_mode']);
          $inserted = $this->jobsmod->Add($postdata);
          // echo json_encode(['success'=>TRUE]);
          if ($inserted != FALSE) {         
            
                echo json_encode(['success'=>TRUE,'url'=>base_url().'manage/do/jobs/pending-job-posts']);
          }
          else {
            echo json_encode(['error'=>'Update Unsuccessful.']);
          }
         }
 
  }
  public function Update() {
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
            $id = $postdata['id'];
            unset($postdata['id']);
            // unset($postdata['_wysihtml5_mode']);
            // $postdata = array_filter($postdata;

            $result = $this->jobsmod->Update($id,$postdata);
            if ($result != FALSE) {
                $json = json_encode($result);             
                echo $json;
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
