 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class JobApplicationController extends CI_Controller {
 
    function __construct() {
         parent::__construct();
         $this->load->model('admin/JobApplicationModel','jobappmod');

     }
 
    public function ApplicationMasterList()
    {
 
        $layout = array('tables'=>TRUE, 'datepicker'=>TRUE);
        $data['masterlist'] = $this->jobappmod->LoadMasterlist();
        $data['class'] = 'job-applications';
        $this->load->view('layout/admin/1_css');
        $this->load->view('layout/admin/2_preloader');
        $this->load->view('layout/admin/3_topbar');
        $this->load->view('layout/admin/4_leftsidebar');
        $this->load->view('pages/transaction/applicants/JobApplication',$data);
        $this->load->view('layout/admin/6_js',$layout);     
        $this->load->view('layout/admin/7_modals',$layout);

    }


    
    
    public function Create() {

        $this->form_validation->set_rules('name','Name','required|is_unique[tbl_applicants_job_applications.name]',
                array(
                'required'      => 'You have not provided %s.',
                'is_unique'     => 'This %s already exists.'
                )
            );

            if ($this->form_validation->run() == FALSE){
             $errors = validation_errors();
             echo json_encode(['error'=>$errors]);
         }
        else {
            $postdata = $this->input->post();
            $inserted = $this->jobappmod->Add($postdata);
            // echo json_encode(['success'=>TRUE]);
            if ($inserted != FALSE) {
                $json = json_encode($inserted);             
                echo $json;
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
            echo json_encode(['error'=>$errors]);
        }
        else{
            $id = $postdata['itemid'];
            unset($postdata['itemid']);
            $postdata = array_filter($postdata, 'strlen');

            $result = $this->jobappmod->Update($id,$postdata);
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
            $result = $this->jobappmod->Delete($postdata);
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