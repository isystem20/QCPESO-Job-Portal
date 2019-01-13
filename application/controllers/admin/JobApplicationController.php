 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class JobApplicationController extends Admin_Controller {
 
    function __construct() {
         parent::__construct();
         $this->load->model('admin/JobApplicationModel','jobappmod');
         $this->load->model('LoggerModel','logger'); //Include LoggerModel
        $this->load->model('admin/ApplicantModel','applimod');
        $this->load->model('admin/JobsModel','jobsmod');
        $this->load->model('admin/CategoriesModel','categmod');
        $this->load->model('admin/SkillsModel','skimod');
        $this->load->model('admin/EmploymentTypesModel','emptypemod');
        $this->load->model('admin/EstablishmentModel','establishmentmod'); 
        $this->load->model('web/BrowseJobModel','browsmod');



     }
 
    public function JobApplication()
    {

        $str = null;
                        
        $postdata = $this->input->post();

        if  (!empty($postdata['searchtext'])) {

            $str = $postdata['searchtext'];
        }

        // print_r($postdata);

        $data['search'] = $postdata;

        $layout = array('tables'=>TRUE,'pagetitle'=>'Job Application', 'addons' => TRUE);
        $data['jobapplication'] = $this->jobappmod->LoadMasterlist();
        $data['applicant'] = $this->applimod->LoadMasterlist();
        $data['categories'] = $this->categmod->LoadCategoryMasterlist();

        if  (!empty($postdata['Applicant'])) {

        $data['jobposts'] =$this->browsmod->BrowseJobModelMasterlist($postdata, null, $postdata['Applicant']);
        }

        else{
            
            // print_r($data['jobposts']->result());
        }

        
        $data['skills'] = $this->skimod->LoadMasterlist();
        $data['emptypes'] = $this->emptypemod->LoadMasterlist();
        $data['estabs'] = $this->establishmentmod->LoadMasterlist();

        

        $data['class'] = 'jobapplication';
        $this->load->view('layout/admin/1_css',$layout);
        $this->load->view('layout/admin/2_preloader',$layout);
        $this->load->view('layout/admin/3_topbar',$layout);
        $this->load->view('layout/admin/4_leftsidebar',$layout);
        $this->load->view('pages/transaction/applicants/JobApplication',$data);
        $this->load->view('layout/admin/6_js',$layout);     
        $this->load->view('layout/admin/7_modals',$layout);

        // print_r($postdata);

        // $json = json_encode($data['JobApplication']); //log
        // $this->logger->log('Load Categories','Categories',$json); //Log

    }
    public function Create() {
        
        $this->form_validation->set_rules('JobId','Job Title','required');
        // $this->form_validation->set_rules('ApplicantId','Job Title','required');

       if ($this->form_validation->run() == FALSE){
             $errors = validation_errors();
             echo json_encode(['error'=>$errors]);

         }

        else {
                $postdata = $this->input->post();
                if (empty($postdata['ApplicantId'])) {
                   $postdata['ApplicantId'] = $this->session->userdata('userid');
                }
                $inserted = $this->jobappmod->Add($postdata);
              // echo json_encode(['success'=>TRUE]);
              if ($inserted != FALSE) {         
                
                    echo json_encode(['success'=>TRUE]);
              }
              else {
                echo json_encode(['error'=>'Update Unsuccessful.']);
              }
         }
 
 
    }
 
    public function Update() {
         $this->form_validation->set_rules('itemid', 'Item Record', 'required',
                array(
                'required'      => 'Cannot identify this record.',
                ));

        $postdata = $this->input->post();
        if ($this->form_validation->run() == FALSE){
            $errors = validation_errors();
            $this->logger->log('Error Form Create','Categories',$errors); //Log
            echo json_encode(['error'=>$errors]);
        }
        else{
            $id = $postdata['itemid'];
            unset($postdata['itemid']);
            $postdata = array_filter($postdata, 'strlen');

            $result = $this->categmod->Update($id,$postdata);
            if ($result != FALSE) {
                $json = json_encode($result);
                $this->logger->log('Update','Categories',$json); //Log             
                echo $json;
            }
            else {
                 $json = json_encode($postdata); // encode postdata
                $this->logger->log('Error Update','Categories',$json); //Log
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
            // $this->logger->log('Error Form Create','Categories',$errors); //Log
            echo json_encode(['error'=>$errors]);
        }
        else{
            $result = $this->jobappmod->Delete($postdata);
            if ($result != FALSE) {
                $json = json_encode($result);
                // $this->logger->log('Delete','Categories',$json); //Log           
                echo $json;
            }
            else {
                $json = json_encode($postdata); // encode postdata
                // $this->logger->log('Error Delete','Categories',$json); //Log
                echo json_encode(['error'=>'Update Unsuccessful.']);
            }

        }



    }
 
    public function Read() {
 
    }
 
 
 
 }