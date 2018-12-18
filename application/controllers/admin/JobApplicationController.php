 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class JobApplicationController extends Admin_Controller {
 
    function __construct() {
         parent::__construct();
         $this->load->model('admin/JobApplicationModel','jobappmod');
         $this->load->model('LoggerModel','logger'); //Include LoggerModel
     }
 
    public function JobApplication()
    {
 
        $layout = array('tables'=>TRUE,'pagetitle'=>'Job Application');
        $data['jobapplication'] = $this->jobappmod->LoadMasterlist();
        $data['class'] = 'jobapplication';
        $this->load->view('layout/admin/1_css',$layout);
        $this->load->view('layout/admin/2_preloader',$layout);
        $this->load->view('layout/admin/3_topbar',$layout);
        $this->load->view('layout/admin/4_leftsidebar',$layout);
        $this->load->view('pages/transaction/applicants/JobApplication',$data);
        $this->load->view('layout/admin/6_js',$layout);     
        $this->load->view('layout/admin/7_modals',$layout);

        // $json = json_encode($data['JobApplication']); //log
        // $this->logger->log('Load Categories','Categories',$json); //Log

    }
    public function Create() {
        $this->form_validation->set_rules('name','Name','required|is_unique[tbl_applicants_categories.name]',
                array(
                'required'      => 'You have not provided %s.',
                'is_unique'     => 'This %s already exists.'
                )
            );

            if ($this->form_validation->run() == FALSE){
             $errors = validation_errors();
             $this->logger->log('Error Form Create','Categories',$errors); //LoggerModel
             echo json_encode(['error'=>$errors]);
         }
        else {
            $postdata = $this->input->post();
            $inserted = $this->categmod->Add($postdata);
            // echo json_encode(['success'=>TRUE]);
            if ($inserted != FALSE) {
                $json = json_encode($inserted);
                $this->logger->log('Create','Categories',$json); //Log              
                echo $json;
            }
            else {
                $json = json_encode($postdata); // encode postdata
                $this->logger->log('Error Create','Categories',$json); //Log 
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