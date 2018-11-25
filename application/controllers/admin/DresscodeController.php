 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class DresscodeController extends CI_Controller {
 
 	function __construct() {
         parent::__construct();
         $this->load->model('admin/DresscodeModel','dremod');
         $this->load->model('LoggerModel','logger'); //Include LoggerModel 
     }
 
 	public function Dresscode()
 	{
 
 		$layout = array('tables'=>TRUE, 'datepicker'=>TRUE);
 		$data['dresscode'] = $this->dremod->LoadDresscodeMasterlist();
        $data['class'] = 'dresscode';
 		$this->load->view('layout/admin/1_css');
 		$this->load->view('layout/admin/2_preloader');
 		$this->load->view('layout/admin/3_topbar');
 		$this->load->view('layout/admin/4_leftsidebar');
 		$this->load->view('pages/maintenance/Dresscode',$data);
 		$this->load->view('layout/admin/6_js',$layout);		
        $this->load->view('layout/admin/7_modals');

        $json = json_encode($data['dresscode']); //log
        $this->logger->log('Load Dresscode','Dresscode',$json); //Log 

 	}
 	public function Create() {
		$this->form_validation->set_rules('name','Name','required|is_unique[tbl_dresscodes.name]',
		        array(
                'required'      => 'You have not provided %s.',
                'is_unique'     => 'This %s already exists.'
        		)
		    );

		    if ($this->form_validation->run() == FALSE){
             $errors = validation_errors();
             $this->logger->log('Error Form Create','Dresscode',$errors); //LoggerModel
             echo json_encode(['error'=>$errors]);
         }
        else {
        	$postdata = $this->input->post();
        	$inserted = $this->dremod->Add($postdata);
        	// echo json_encode(['success'=>TRUE]);
         	if ($inserted != FALSE) {
	        	$json = json_encode($inserted);       		
        		$this->logger->log('Create','Dresscode',$json); //Log

                echo $json;
            }
            else {
                $json = json_encode($postdata); // encode postdata
                $this->logger->log('Error Create','Dresscode',$json); //Log 
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
            $this->logger->log('Error Form Create','Dresscode',$errors); //Log
            echo json_encode(['error'=>$errors]);
        }
        else{
            $id = $postdata['itemid'];
            unset($postdata['itemid']);
            $postdata = array_filter($postdata, 'strlen');

            $result = $this->dremod->Update($id,$postdata);
            if ($result != FALSE) {
                $json = json_encode($result);             
                 $this->logger->log('Update','Dresscode',$json); //Log           
                echo $json;
            }
            else {
                $json = json_encode($postdata); // encode postdata
                $this->logger->log('Error Update','Dresscode',$json); //Log 
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
            $this->logger->log('Error Form Create','Dresscode',$errors); //Log
            echo json_encode(['error'=>$errors]);
        }
        else{
            $result = $this->dremod->Delete($postdata);
            if ($result != FALSE) {
                $json = json_encode($result);              
               $this->logger->log('Delete','Dresscode',$json); //Log
                echo $json;
            }
            else {
                $json = json_encode($postdata); // encode postdata
                $this->logger->log('Error Delete','Dresscode',$json); //Log code(['error'=>'Update Unsuccessful.']);
            }

        }



 	}
 
 	public function Read() {
 
 	}
 
 
 
 }