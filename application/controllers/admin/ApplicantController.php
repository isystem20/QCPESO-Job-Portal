 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class ApplicantController extends CI_Controller {
   
      function __construct() {
           parent::__construct();
           $this->load->model('admin/ApplicantModel','applimod');
           $this->load->model('admin/CitiesModel','citymod');
           $this->load->model('admin/NationalityModel','nationalmod');
           $this->load->model('admin/JobsModel','jobsmod');
           $this->load->model('admin/DisabilityModel','dismod');
           $this->load->model('admin/LanguageModel','langmod');
           $this->load->model('admin/LocationModel','locmod');
           $this->load->model('admin/EmploymentStatusModel','empmod');
           $this->load->model('admin/JobtitlesModel','jobtimod');
           $this->load->model('admin/DialectModel','Diamod');
            $this->load->model('admin/RegionModel','regmod');
            $this->load->model('admin/CategoriesModel','categmod');

       }
   
    public function AddNewApplicant($id = null,$mode= null)
      {

   
          $layout = array('datepicker'=>TRUE, 'addons'=>TRUE, 'uploadfile'=>TRUE,'pagetitle'=>'Adding New Applicant');
           $data['city'] = $this->citymod->LoadMasterlist();
           $data['national'] = $this->nationalmod->LoadMasterlist();
           $data['jobs'] = $this->jobsmod->LoadMasterlist();
           $data['disability'] = $this->dismod->LoadMasterlist();
           $data['language'] = $this->langmod->LoadMasterlist();
           
           $data['location'] = $this->locmod->LoadMasterlist();
           $data['status'] = $this->empmod->LoadMasterlist();
           $data['titles'] = $this->jobtimod->LoadMasterlist();
           $data['dialect'] = $this->Diamod->LoadMasterlist();
           $data['region'] = $this->regmod->LoadMasterlist();
           $data['category'] = $this->categmod->LoadCategoryMasterlist();
           $data['class'] = 'applicant';
          // die('asdasd');
               
           $profile=FALSE;
         if (!empty($id)) {
              if (strtolower($id) == 'profile') {
                $id=$this->session->userdata('peopleid');
                $profile=TRUE;
                $this->session->set_tempdata('caption', 'Update Profile', 300);
                $mode = 'edit';
              }

              $data['applicant'] = $this->applimod->LoadMasterlist($id);

              

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
        // print_r($data['applicant']);
          $this->load->view('layout/admin/1_css',$layout);
          $this->load->view('layout/admin/2_preloader',$layout);
          $this->load->view('layout/admin/3_topbar',$layout);
          $this->load->view('layout/admin/4_leftsidebar',$layout);
          $this->load->view('pages/transaction/applicants/Registration',$data);
          $this->load->view('layout/admin/6_js',$layout);
       
      }
   
        public function AllApplicants()
      {
   
          $layout = array('tables'=>TRUE, 'datepicker'=>TRUE, 'pagetitle'=>'Applicant Masterlist');
          $data['applicant'] = $this->applimod->LoadMasterlist();
          $data['class'] = 'applicant';

          $this->load->view('layout/admin/1_css',$layout);
          $this->load->view('layout/admin/2_preloader',$layout);
          $this->load->view('layout/admin/3_topbar',$layout);
          $this->load->view('layout/admin/4_leftsidebar',$layout);
          $this->load->view('pages/transaction/applicants/ApplicantMasterlist',$data);
          $this->load->view('layout/admin/6_js',$layout);     
          $this->load->view('layout/admin/7_modals'); 
        

      }

   
    public function Create() {
    
      $this->form_validation->set_rules('LastName','Last Name','required');    
      $this->form_validation->set_rules('FirstName','First Name','required');
      $this->form_validation->set_rules('BirthDate','Birth date','required');
      $this->form_validation->set_rules('Age','Age','required');
      $this->form_validation->set_rules('CivilStatus','Civil Status','required');
      $this->form_validation->set_rules('BirthPlace','Birth Place','required'); 
      $this->form_validation->set_rules('HouseNum','House Number','required');
      $this->form_validation->set_rules('StreetName','Street Name','required');
      $this->form_validation->set_rules('CityId','City','required');
      $this->form_validation->set_rules('ProvinceId','Province','required');
      $this->form_validation->set_rules('Remarks','Remarks','required');  
      $this->form_validation->set_rules('EmailAddress','Email Address','is_unique[tbl_security_users.LoginName]',
         array(
                'is_unique'     => 'This %s already exists.'
                )
            );
      $this->form_validation->set_rules('MobileNum','Mobile Number','required|is_unique[tbl_applicants.MobileNum]',
       array(
                'required'      => 'You have not provided %s.',
                'is_unique'     => 'This %s already exists.'
                )
            );
      $this->form_validation->set_rules('SSS','SSS','is_unique[tbl_applicants.SSS]',
       array(
                'is_unique'     => 'This %s already exists.'
                )
            ); 

      if ($this->form_validation->run() == FALSE){
             $errors = validation_errors();
             echo json_encode(['error'=>$errors]);
         //    print_r($this->input->post());
         // die();
        }

        // elseif (empty($_FILES["PhotoPath"]["name"])) {
        //     $errors = "Image File Needed.";
        //       echo json_encode(['error'=>$errors]);
           
        // }
  
        else {
            $imagepath="";
            $path = dirname(BASEPATH).'/uploads/';
            $config['upload_path'] = $path;
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '100000';
            $senderror = FALSE;
            $this->load->library('upload', $config);

        if (!$this->upload->do_upload('PhotoPath')) {
                $errors = $this->upload->display_errors();
                $senderror = TRUE;
            }       
        else {
                $imagedata = $this->upload->data();
                $imagepath =  'uploads/'.$imagedata['file_name'];   
            }




            $postdata = $this->input->post();
            // $postdata['PhotoPath']=$imagepath;

            unset($postdata['_wysihtml5_mode']);
            $inserted = $this->applimod->Add($postdata);
           
            if ($inserted != FALSE) {           
                
                echo json_encode(['success'=>TRUE,'url'=>base_url().'manage/transactions/all-applicant']);
            }
            else {
                echo json_encode(['error'=>'Update Unsuccessful.']);
            }
         }
 
    }
 
    public function Update() {

$this->form_validation->set_rules('LastName','Last Name','required');    
      $this->form_validation->set_rules('FirstName','First Name','required');
      $this->form_validation->set_rules('BirthDate','Birth date','required');
      $this->form_validation->set_rules('Age','Age','required');
      $this->form_validation->set_rules('CivilStatus','Civil Status','required');
      $this->form_validation->set_rules('BirthPlace','Birth Place','required'); 
      $this->form_validation->set_rules('HouseNum','House Number','required');
      $this->form_validation->set_rules('StreetName','Street Name','required');
      $this->form_validation->set_rules('CityId','City','required');
      $this->form_validation->set_rules('ProvinceId','Province','required');
      $this->form_validation->set_rules('Remarks','Remarks','required');  
      $this->form_validation->set_rules('EmailAddress','Email Address','is_unique[tbl_security_users.LoginName]',
         array(
                'is_unique'     => 'This %s already exists.'
                )
            );
      $this->form_validation->set_rules('MobileNum','Mobile Number','required',
       array(
                'required'      => 'You have not provided %s.'
              
                )
            );
 

         $this->form_validation->set_rules('Id', 'Item Record', 'required',
                array(
                'required'      => 'Cannot identify this record.',
                ));

        $postdata = $this->input->post();
        if ($this->form_validation->run() == FALSE){
            $errors = validation_errors();
            echo json_encode(['error'=>$errors]);
        }
        else{
            $id = $postdata['Id'];
            unset($postdata['Id']);
            unset($postdata['_wysihtml5_mode']);
            // $postdata = array_filter($postdata, 'strlen');
            $result = $this->applimod->Update($id,$postdata);
            if ($result != FALSE) {
                $json = json_encode($result);             
               if($id == $this->session->userdata('userid')){
                echo json_encode(['success'=>TRUE,'url'=>base_url().'account/profile']);
               }
               else{
                echo json_encode(['success'=>TRUE,'url'=>base_url().'manage/transactions/all-applicant']);
              }
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
            $result = $this->applimod->Delete($postdata);
            if ($result != FALSE) {
                $json = json_encode($result);              
                echo $json;
            }
            else {
                echo json_encode(['error'=>'Update Unsuccessful.']);
            }

        }



    }
 
    public function Read() {
 
    }
 
 
 
 }

    