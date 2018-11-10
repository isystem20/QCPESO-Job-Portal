<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LicenseController extends CI_Controller {

function __construct() {
         parent::__construct();
         $this->load->model('admin/LicenseModel','licensemode');
     }

    public function LicenseList()
    {

       $layout = array('tables'=>TRUE, 'datepicker'=>TRUE);
        
        $data['license'] = $this->licensemode->Load_LicenseModel_Masterlist();
        // print_r($data);
        // die();
		$layout = array('tables' => TRUE, );
		$this->load->view('layout/admin/1_css');
		$this->load->view('layout/admin/2_preloader');
		$this->load->view('layout/admin/3_topbar');
		$this->load->view('layout/admin/4_leftsidebar');
		$this->load->view('pages/maintenance/LicenseList',$data);
		$this->load->view('layout/admin/6_js',$layout);		
	}

public function Create() {
        $this->form_validation->set_rules('name','Name','required|is_unique[tbl_license_list.name]');
        $this->form_validation->set_rules('name','Name','required|is_unique[tbl_license_list.name]',
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
            $inserted = $this->licensemode->Add($postdata);
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
 
    }
 
    public function Delete() {
 
    }
 
    public function Read() {
 
    }
 
 



}