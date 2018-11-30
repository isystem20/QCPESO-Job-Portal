 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class ApplicantController extends CI_Controller {
 
    function __construct() {
         parent::__construct();
         $this->load->model('admin/ApplicantModel','appmamod');
         $this->load->model('admin/CountriesModel','countries');
         $this->load->model('LoggerModel','logger'); //Include LoggerModel
     }
 
    public function Masterlist()
    {
 
        $layout = array('tables'=>TRUE, 'datepicker'=>TRUE);
        $data['masterlist'] = $this->appmamod->LoadMasterlist();
        $data['class'] = 'applicantmasterlist';
        $this->load->view('layout/admin/1_css');
        $this->load->view('layout/admin/2_preloader');
        $this->load->view('layout/admin/3_topbar');
        $this->load->view('layout/admin/4_leftsidebar');
        $this->load->view('pages/transaction/applicants/ApplicantMasterlist',$data);
        $this->load->view('layout/admin/6_js',$layout);     
        $this->load->view('layout/admin/7_modals'); 

        $json = json_encode($data['masterlist']); //log
        $this->logger->log('Load Masterlist','Applicant',$json); //Log 
    }

    public function ApplicantInfo($id = null,$mode = null) {
        $layout = array('wizard'=>TRUE,'datepicker'=>TRUE, 'addons'=>TRUE);
        $data['countries'] = $this->countries->LoadMasterlist();


        if (!empty($id)) {

            $data['applicant'] = $this->appmamod->LoadMasterlist($id);

            // print_r($data['applicant']);

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

        $this->load->view('layout/admin/1_css',$layout);
        $this->load->view('layout/admin/2_preloader');
        $this->load->view('layout/admin/3_topbar');
        $this->load->view('layout/admin/4_leftsidebar');
        $this->load->view('pages/transaction/applicants/Registration',$data);
        $this->load->view('layout/admin/6_js',$layout);     
        $this->load->view('layout/admin/7_modals');

        $json = json_encode($data['countries']); //log
        $this->logger->log('Load ApplicantInfo','ApplicantInfo',$json); //Log 
    }

    public function Create() {
        $this->form_validation->set_rules('FirstName','Firstname','required');
        $this->form_validation->set_rules('LastName','Lastname','required');

        if ($this->form_validation->run() == FALSE){
             $errors = validation_errors();
             $this->logger->log('Error Form Create','Application',$errors); //LoggerModel
             echo json_encode(['error'=>$errors]);
         }
        else {
            $postdata = $this->input->post();
            $inserted = $this->appmamod->Add($postdata);
            // echo json_encode(['success'=>TRUE]);
            if ($inserted != FALSE) {
                $json = json_encode($inserted);             
                 $this->logger->log('Create','Application',$json); //Log  
                
                echo $json;
            }
            else {
                $json = json_encode($postdata); // encode postdata
                $this->logger->log('Error Create','Application',$json); //Log
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
            $this->logger->log('Error Form Create','Application',$errors); //Log
            echo json_encode(['error'=>$errors]);
        }
        else{
            $id = $postdata['itemid'];
            unset($postdata['itemid']);
            $postdata = array_filter($postdata, 'strlen');

            $result = $this->appmamod->Update($id,$postdata);
            if ($result != FALSE) {
                  $this->logger->log('Update','Application',$json); //Log           
                echo $json;
            }
            else {
                $json = json_encode($postdata); // encode postdata
                $this->logger->log('Error Update','Application',$json); //Log 
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
            $this->logger->log('Error Form Create','Application',$errors); //Log
            echo json_encode(['error'=>$errors]);
        }
        else{
            $result = $this->appmamod->Delete($postdata);
            if ($result != FALSE) {
                $json = json_encode($result);              
               $this->logger->log('Delete','Application',$json); //Log
                echo $json;
            }
            else {
                $json = json_encode($postdata); // encode postdata
                $this->logger->log('Error Delete','Application',$json); //Log 
                echo json_encode(['error'=>'Update Unsuccessful.']);
            }

        }



    }
 
    public function Read() {
 
    }
 
 
 
 }