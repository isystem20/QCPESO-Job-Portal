 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class NationalityController extends CI_Controller {
 
    function __construct() {
         parent::__construct();
         $this->load->model('admin/NationalityModel','natmod');
         $this->load->model('LoggerModel','logger'); //Include LoggerModel
     }
 
    public function Nationality()
    {
 
        $layout = array('tables'=>TRUE, 'datepicker'=>TRUE);
        $data['masterlist'] = $this->natmod->LoadMasterlist();
        $data['class'] = 'nationality';
        $this->load->view('layout/admin/1_css');
        $this->load->view('layout/admin/2_preloader');
        $this->load->view('layout/admin/3_topbar');
        $this->load->view('layout/admin/4_leftsidebar');
        $this->load->view('pages/maintenance/Nationality',$data);
        $this->load->view('layout/admin/6_js',$layout);     
        $this->load->view('layout/admin/7_modals'); 

        $json = json_encode($data['masterlist']); //log
        $this->logger->log('Load Masterlist','Nationality',$json); //Log  

    }
    public function Create() {
        $this->form_validation->set_rules('name','Name','required|is_unique[tbl_applicants_nationality.name]',
                array(
                'required'      => 'You have not provided %s.',
                'is_unique'     => 'This %s already exists.'
                )
            );

            if ($this->form_validation->run() == FALSE){
             $errors = validation_errors();
             $this->logger->log('Error Form Create','Nationality',$errors); //Log 
             echo json_encode(['error'=>$errors]);
         }
        else {
            $postdata = $this->input->post();
            $inserted = $this->natmod->Add($postdata);
            // echo json_encode(['success'=>TRUE]);
            if ($inserted != FALSE) {
                $json = json_encode($inserted);
                $this->logger->log('Create','Nationality',$json); //Log  






                



                echo $json;
            }
            else {
                $json = json_encode($postdata); // encode postdata
                $this->logger->log('Error Create','Nationality',$json); //Log 
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
            $this->logger->log('Error Form Create','Nationality',$errors); //Log
            echo json_encode(['error'=>$errors]);
        }
        else{
            $id = $postdata['itemid'];
            unset($postdata['itemid']);
            $postdata = array_filter($postdata, 'strlen');

            $result = $this->natmod->Update($id,$postdata);
            if ($result != FALSE) {
                $json = json_encode($result);
                $this->logger->log('Update','Nationality',$json); //Log             
                echo $json;
            }
            else {
                $json = json_encode($postdata); // encode postdata
                $this->logger->log('Error Update','Nationality',$json); //Log  
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
            $this->logger->log('Error Form Create','Nationality',$errors); //Log
            echo json_encode(['error'=>$errors]);
        }
        else{
            $result = $this->natmod->Delete($postdata);
            if ($result != FALSE) {
                $json = json_encode($result);
                $this->logger->log('Delete','Nationality',$json); //Log                
                echo $json;
            }
            else {
                $json = json_encode($postdata); // encode postdata
                $this->logger->log('Error Delete','Nationality',$json); //Log 
                echo json_encode(['error'=>'Update Unsuccessful.']);
            }

        }


    }
 
    public function Read() {
 
    }
 
 
 
 }