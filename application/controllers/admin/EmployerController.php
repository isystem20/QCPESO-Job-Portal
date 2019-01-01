 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class EmployerController extends CI_Controller {
 
    function __construct() {
         parent::__construct();
         $this->load->model('admin/EmployerModel','empmod');
         $this->load->model('admin/PostTypesModel','postymod');
          $this->load->model('admin/IndustriesModel','indmod');
          $this->load->model('admin/DresscodeModel','dremod');
          $this->load->model('admin/LanguageModel','langmod');
     }
 
  public function EmployerRegistration($id = null,$mode= null)
    {
 
        $layout = array( 'pagetitle'=>'Adding New Web Employer','addons'=>TRUE);
        $data['industry'] = $this->indmod->LoadMasterlist();
        $data['class'] = 'emppost';
        $data['dresscode'] = $this->dremod->LoadDresscodeMasterlist();
        $data['language'] = $this->langmod->LoadMasterlist();
       

             

       if (!empty($id)) {

            $data['emppost'] = $this->empmod->LoadMasterlist($id);

            // print_r($data['applicant']);

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
        $this->load->view('layout/admin/1_css',$layout);
        $this->load->view('layout/admin/2_preloader',$layout);
        $this->load->view('layout/admin/3_topbar',$layout);
        $this->load->view('layout/admin/4_leftsidebar',$layout);
        $this->load->view('pages/transaction/establishment/EmployerRegistration',$data);
        $this->load->view('layout/admin/6_js',$layout);

    }
 
      public function EstablishmentMasterlist()
    {
 
        $layout = array('tables'=>TRUE,'pagetitle'=>'List of All Web Posts');
        $data['emppost'] = $this->empmod->LoadMasterlist();
        $data['class'] = 'emppost';

        $this->load->view('layout/admin/1_css',$layout);
        $this->load->view('layout/admin/2_preloader',$layout);
        $this->load->view('layout/admin/3_topbar',$layout);
        $this->load->view('layout/admin/4_leftsidebar',$layout);
        $this->load->view('pages/transaction/establishment/EstablishmentMasterlist',$data);
        $this->load->view('layout/admin/6_js',$layout);     
        $this->load->view('layout/admin/7_modals',$layout); 


    }

     public function PendingRequest()
    {
 
        $layout = array('tables'=>TRUE,'pagetitle'=>'List of All Employers with Pending Accreditation');
        $data['emppost'] = $this->empmod->PendingRequest();
        $data['class'] = 'emppost';

        $this->load->view('layout/admin/1_css',$layout);
        $this->load->view('layout/admin/2_preloader',$layout);
        $this->load->view('layout/admin/3_topbar',$layout);
        $this->load->view('layout/admin/4_leftsidebar',$layout);
        $this->load->view('pages/transaction/establishment/AccreditationRequest',$data);
        $this->load->view('layout/admin/6_js',$layout);     
        $this->load->view('layout/admin/7_modals',$layout); 


    }

   
    public function Create() {

        $this->form_validation->set_rules('CompanyName','Company Name','required');
        $this->form_validation->set_rules('TIN','TIN','required|max_length[9]|numeric');
        $this->form_validation->set_rules('PermitIssuedDate','Permit Issued Date','required');
        $this->form_validation->set_rules('IndustryType','Industry Type','required');
        $this->form_validation->set_rules('CompanyAddress','Company Address','required');
        $this->form_validation->set_rules('LandlineNum','Landline Number','required');
        $this->form_validation->set_rules('CompanyEmail','Company Email','required|valid_email|is_unique[tbl_establishments.CompanyEmail]|is_unique[tbl_security_users.Email]|is_unique[tbl_security_users.LoginName]',
            array(
                'required'      => 'You have not provided %s.',
                'valid_email'     => 'This is not a valid email.',
                'is_unique'     => 'The %s already exists.',
                
                )
        );
        $this->form_validation->set_rules('OwnerName','Owner Name','required');
        $this->form_validation->set_rules('Designation','Designation','required');
        $this->form_validation->set_rules('ContactPerson','Contact Person','required');
        $this->form_validation->set_rules('ContactPersonDesignation','Contact Person Designation','required');
        $this->form_validation->set_rules('ContactPersonMobile','Contact Person Mobile','required');
        $this->form_validation->set_rules('DoleRegistrationDateIssued','Dole Registration Date Issued','required');
        $this->form_validation->set_rules('DoleRegistrationExpiration','Dole Registration Expiration','required');
        $this->form_validation->set_rules('PoeaLicenseDateIssued','Poea License Date Issued','required');
        $this->form_validation->set_rules('PoeaLicenseExpiration','Poea License Expiration','required');
        $this->form_validation->set_rules('WorkingHours','Working Hours','required');
        
                        
        if ($this->form_validation->run() == FALSE){
             $errors = validation_errors();
             // $this->logger->log('Error Form Create','Categories',$errors); //LoggerModel
             echo json_encode(['error'=>$errors]);
         }
        else {
          $postdata = $this->input->post();
          $inserted = $this->empmod->Add($postdata);
          // echo json_encode(['success'=>TRUE]);
          if ($inserted != FALSE) {
                echo json_encode(['success'=>TRUE,'url'=>base_url().'manage/do/establishments/view-list']);
                // $this->logger->log('Create','Categories',$json); //Log          
          }
          else {
                $json = json_encode($postdata); // encode postdata
                // $this->logger->log('Error Create','Categories',$json); //Log 
            echo json_encode(['error'=>'Update Unsuccessful.']);
          }
         }
 
    }
 
    public function Update() {
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
            // unset($postdata['_wysihtml5_mode']);
            // $postdata = array_filter($postdata, 'strlen');

            $result = $this->empmod->Update($id,$postdata);
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
            $result = $this->empmod->Delete($postdata);
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