 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class CitiesController extends CI_Controller {
 
    function __construct() {
         parent::__construct();
         $this->load->model('admin/CitiesModel','citmod');
         $this->load->model('LoggerModel','logger'); //Include LoggerModel
     }
 
    public function Cities()
    {
 
        $layout = array('tables'=>TRUE, 'datepicker'=>TRUE);
        $data['masterlist'] = $this->citmod->LoadMasterlist();
        $data['class'] = 'cities';
        $this->load->view('layout/admin/1_css');
        $this->load->view('layout/admin/2_preloader');
        $this->load->view('layout/admin/3_topbar');
        $this->load->view('layout/admin/4_leftsidebar');
        $this->load->view('pages/maintenance/Cities',$data);
        $this->load->view('layout/admin/6_js',$layout);     
        $this->load->view('layout/admin/7_modals'); 

        $json = json_encode($data['masterlist']); //log
        $this->logger->log('Load Masterlist','Cities',$json); //Log  

    }
    public function Create() {
        $this->form_validation->set_rules('name','Name','required|is_unique[tbl_applicants_cities.name]',
                array(
                'required'      => 'You have not provided %s.',
                'is_unique'     => 'This %s already exists.'
                )
            );

            if ($this->form_validation->run() == FALSE){
             $errors = validation_errors();
             $this->logger->log('Error Form Create','Cities',$errors); //Log 
             echo json_encode(['error'=>$errors]);
         }
        else {
            $postdata = $this->input->post();
            $inserted = $this->citmod->Add($postdata);
            // echo json_encode(['success'=>TRUE]);
            if ($inserted != FALSE) {
                $json = json_encode($inserted);
                $this->logger->log('Create','Cities',$json); //Log  







                echo $json;
            }
            else {
                $json = json_encode($postdata); // encode postdata
                $this->logger->log('Error Create','Cities',$json); //Log 
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
            $this->logger->log('Error Form Create','Cities',$errors); //Log
            echo json_encode(['error'=>$errors]);
        }
        else{
            $id = $postdata['itemid'];
            unset($postdata['itemid']);
            $postdata = array_filter($postdata, 'strlen');

            $result = $this->citmod->Update($id,$postdata);
            if ($result != FALSE) {
                $json = json_encode($result);
                $this->logger->log('Update','Cities',$json); //Log             
                echo $json;
            }
            else {
                $json = json_encode($postdata); // encode postdata
                $this->logger->log('Error Update','Cities',$json); //Log  
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
            $this->logger->log('Error Form Create','Cities',$errors); //Log
            echo json_encode(['error'=>$errors]);
        }
        else{
            $result = $this->citmod->Delete($postdata);
            if ($result != FALSE) {
                $json = json_encode($result);
                $this->logger->log('Delete','Cities',$json); //Log                
                echo $json;
            }
            else {
                $json = json_encode($postdata); // encode postdata
                $this->logger->log('Error Delete','Cities',$json); //Log 
                echo json_encode(['error'=>'Update Unsuccessful.']);
            }

        }


    }
 
    public function Read() {
 
    }
 
 
 
 }