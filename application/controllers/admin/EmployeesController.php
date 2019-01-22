 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class EmployeesController extends CI_Controller {
   
      function __construct() {
           parent::__construct();
           $this->load->model('admin/EmployeesModel','employmod');
        

          

       }
   
    public function AddNewEmployees($id = null,$mode= null)
      {

   
          $layout = array('datepicker'=>TRUE, 'addons'=>TRUE, 'uploadfile'=>TRUE,'pagetitle'=>'Adding New employee');
           
           $data['class'] = 'employee';
          // die('asdasd');
               
           $profile=FALSE;
         if (!empty($id)) {
              if (strtolower($id) == 'profile') {
                $id=$this->session->userdata('peopleid');
                $profile=TRUE;
                $this->session->set_tempdata('caption', 'Update Profile', 300);
              }
              $data['employee'] = $this->employmod->LoadMasterlist($id);


              

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
        // print_r($data['employee']);
          $this->load->view('layout/admin/1_css',$layout);
          $this->load->view('layout/admin/2_preloader',$layout);
          $this->load->view('layout/admin/3_topbar',$layout);
          $this->load->view('layout/admin/4_leftsidebar',$layout);
          $this->load->view('pages/employee/AddEmployee',$data);
          $this->load->view('layout/admin/6_js',$layout);
       
      }
   
        public function AllEmployees()
      {
   
          $layout = array('tables'=>TRUE, 'datepicker'=>TRUE, 'pagetitle'=>'Employee Masterlist');
          $data['employee'] = $this->employmod->LoadMasterlist();
          $data['class'] = 'employee';

          $this->load->view('layout/admin/1_css',$layout);
          $this->load->view('layout/admin/2_preloader',$layout);
          $this->load->view('layout/admin/3_topbar',$layout);
          $this->load->view('layout/admin/4_leftsidebar',$layout);
          $this->load->view('pages/employee/EmployeeMasterlist',$data);
          $this->load->view('layout/admin/6_js',$layout);     
          $this->load->view('layout/admin/7_modals'); 
        

      }

   
    public function Create() {
    
      $this->form_validation->set_rules('LastName','Last Name','required');    
      // $this->form_validation->set_rules('FirstName','First Name','required');
      // $this->form_validation->set_rules('BirthDate','Birth date','required');
      // $this->form_validation->set_rules('HouseNum','House Number','required');
      // $this->form_validation->set_rules('StreetName','Street Name','required');
      // $this->form_validation->set_rules('HouseNum','House Number','required');
      // $this->form_validation->set_rules('Remarks','Remarks','required');  
      $this->form_validation->set_rules('EmailAddress','User Name','required|is_unique[tbl_employees.EmailAddress]',
         array(
          'required'      => 'You have not provided %s.',
                'is_unique'     => 'This %s already exists.'
                )
            );
      $this->form_validation->set_rules('SSS','SSS','required|is_unique[tbl_employees.SSS]',
       array(
                'required'      => 'You have not provided %s.',
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
          




            $postdata = $this->input->post();
            
            unset($postdata['_wysihtml5_mode']);
            $inserted = $this->employmod->Add($postdata);
           
            if ($inserted != FALSE) {           
                
                echo json_encode(['success'=>TRUE,'url'=>base_url().'manage/employees-masterlist']);
            }
            else {
                echo json_encode(['error'=>'Update Unsuccessful.']);
            }
         }
 
    }
 
    public function Update() {
         $this->form_validation->set_rules('Id', 'Item Record', 'required',
                array(
                'required'      => 'Cannot identify this record.',
                ));
// die($this->db->last_query());
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
            $result = $this->employmod->Update($id,$postdata);
             // print_r($result);
             // die;
            // die($this->db->last_query());
            if ($result != FALSE) {
                $json = json_encode($result);             
               
                echo json_encode(['success'=>TRUE,'url'=>base_url().'manage/employees-masterlist']);
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
            $result = $this->employmod->Delete($postdata);
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

    