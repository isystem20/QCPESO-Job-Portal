 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class EmploymentStatusController extends Admin_Controller {
 
    function __construct() {
         parent::__construct();
         $this->load->model('admin/EmploymentStatusModel','empstatmod');
         $this->load->model('LoggerModel','logger'); //Include LoggerModel
     }
 
    public function EmploymentStatus()
    {
 
        $layout = array('tables'=>TRUE, 'datepicker'=>TRUE,'pagetitle'=>'Employment Status Masterlist');
        $data['masterlist'] = $this->empstatmod->LoadMasterlist();
        $data['class'] = 'employmentstat';
        $this->load->view('layout/admin/1_css',$layout);
        $this->load->view('layout/admin/2_preloader',$layout);
        $this->load->view('layout/admin/3_topbar',$layout);
        $this->load->view('layout/admin/4_leftsidebar',$layout);
        $this->load->view('pages/maintenance/EmploymentStatus',$data);
        $this->load->view('layout/admin/6_js',$layout);     
        $this->load->view('layout/admin/7_modals',$layout);

        $json = json_encode($data['masterlist']); //log
        $this->logger->log('Load EmploymentStatus','EmploymentStatus',$json); //Log 

    }
    public function Create() {
        $this->form_validation->set_rules('name','Name','required|is_unique[tbl_applicants_employment_status.name]',
                array(
                'required'      => 'You have not provided %s.',
                'is_unique'     => 'This %s already exists.'
                )
            );

            if ($this->form_validation->run() == FALSE){
             $errors = validation_errors();
              $this->logger->log('Error Form Create','EmploymentStatus',$errors); //LoggerModel
             echo json_encode(['error'=>$errors]);
         }
        else {
            $postdata = $this->input->post();
            $inserted = $this->empstatmod->Add($postdata);
            // echo json_encode(['success'=>TRUE]);
            if ($inserted != FALSE) {
                $json = json_encode($inserted);
                $this->logger->log('Create','EmploymentStatus',$json); //Log           
                echo $json;
            }
            else {
                $json = json_encode($postdata); // encode postdata
                $this->logger->log('Error Create','EmploymentStatus',$json); //Log 
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
            $this->logger->log('Error Form Create','EmploymentStatus',$errors); //Log
            echo json_encode(['error'=>$errors]);
        }
        else{
            $id = $postdata['itemid'];
            unset($postdata['itemid']);
            $postdata = array_filter($postdata, 'strlen');

            $result = $this->empstatmod->Update($id,$postdata);
            if ($result != FALSE) {
                $json = json_encode($result);
                $this->logger->log('Update','EmploymentStatus',$json); //Log            
                echo $json;
            }
            else {
                $json = json_encode($postdata); // encode postdata
                $this->logger->log('Error Update','EmploymentStatus',$json); //Log  
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
            $this->logger->log('Error Form Create','EmploymentStatus',$errors); //Log
            echo json_encode(['error'=>$errors]);
        }
        else{
            $result = $this->empstatmod->Delete($postdata);
            if ($result != FALSE) {
                $json = json_encode($result);
                $this->logger->log('Delete','EmploymentStatus',$json); //Log              
                echo $json;
            }
            else {
                $json = json_encode($postdata); // encode postdata
                $this->logger->log('Error Delete','EmploymentStatus',$json); //Log 
                echo json_encode(['error'=>'Update Unsuccessful.']);
            }

        }



    }
 
    public function Read() {
 
    }
 
 
 
 }