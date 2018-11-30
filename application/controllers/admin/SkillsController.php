 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class SkillsController extends Admin_Controller {
 
    function __construct() {
         parent::__construct();
         $this->load->model('admin/SkillsModel','skimod');
         $this->load->model('LoggerModel','logger'); //Include LoggerModel
     }
 
    public function Skills()
    {
 
        $layout = array('tables'=>TRUE, 'datepicker'=>TRUE, 'pagetitle'=>'Skills Masterlist');
        $data['masterlist'] = $this->skimod->LoadMasterlist();
        $data['class'] = 'skills';
        $this->load->view('layout/admin/1_css',$layout);
        $this->load->view('layout/admin/2_preloader',$layout);
        $this->load->view('layout/admin/3_topbar',$layout);
        $this->load->view('layout/admin/4_leftsidebar',$layout);
        $this->load->view('pages/maintenance/Skills',$data);
        $this->load->view('layout/admin/6_js',$layout);     
        $this->load->view('layout/admin/7_modals',$layout); 

        $json = json_encode($data['masterlist']); //log
        $this->logger->log('Load Skills','Skills',$json); //Log 

    }
    public function Create() {
        $this->form_validation->set_rules('name','Name','required|is_unique[tbl_applicants_skills.name]',
                array(
                'required'      => 'You have not provided %s.',
                'is_unique'     => 'This %s already exists.'
                )
            );

            if ($this->form_validation->run() == FALSE){
             $errors = validation_errors();
             $this->logger->log('Error Form Create','Skills',$errors); //LoggerModel
             echo json_encode(['error'=>$errors]);
         }
        else {
            $postdata = $this->input->post();
            $inserted = $this->skimod->Add($postdata);
            // echo json_encode(['success'=>TRUE]);
            if ($inserted != FALSE) {
                $json = json_encode($inserted); 
                 $this->logger->log('Create','Skills',$json); //Log           
                echo $json;
            }
            else {
                $json = json_encode($postdata); // encode postdata
                $this->logger->log('Error Create','Skills',$json); //Log 
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
            $this->logger->log('Error Form Create','Skills',$errors); //Log
            echo json_encode(['error'=>$errors]);
        }
        else{
            $id = $postdata['itemid'];
            unset($postdata['itemid']);
            $postdata = array_filter($postdata, 'strlen');

            $result = $this->skimod->Update($id,$postdata);
            if ($result != FALSE) {
                $json = json_encode($result);
                $this->logger->log('Update','Skills',$json); //Log            
                echo $json;
            }
            else {
                $json = json_encode($postdata); // encode postdata
                $this->logger->log('Error Update','Skills',$json); //Log
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
            $this->logger->log('Error Form Create','Skills',$errors); //Log
            echo json_encode(['error'=>$errors]);
        }
        else{
            $result = $this->skimod->Delete($postdata);
            if ($result != FALSE) {
                $json = json_encode($result);
                $this->logger->log('Delete','Skills',$json); //Log              
                echo $json;
            }
            else {
                $json = json_encode($postdata); // encode postdata
                $this->logger->log('Error Delete','Skills',$json); //Log
                echo json_encode(['error'=>'Update Unsuccessful.']);
            }

        }



    }
 
    public function Read() {
 
    }
 
 
 
 }