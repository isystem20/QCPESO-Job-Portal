 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class AccountReleaseController extends CI_Controller {
 
 	function __construct() {
         parent::__construct();
         $this->load->model('admin/AccountReleaseModel','accrelmod');
         $this->load->model('LoggerModel','logger'); //Include LoggerModel
     }
 
 	public function AccountRelease()
 	{
 
 		$layout = array('tables'=>TRUE, 'datepicker'=>TRUE);
 		$data['masterlist'] = $this->accrelmod->LoadMasterlist();
        $data['class'] = 'accountrel';
 		$this->load->view('layout/admin/1_css');
 		$this->load->view('layout/admin/2_preloader');
 		$this->load->view('layout/admin/3_topbar');
 		$this->load->view('layout/admin/4_leftsidebar');
 		$this->load->view('pages/maintenance/AccountRelease',$data);
 		$this->load->view('layout/admin/6_js',$layout);		
        $this->load->view('layout/admin/7_modals');

        $json = json_encode($data['masterlist']); //log
        $this->logger->log('Load AccountRelease','AccountRelease',$json); //Log 
 

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
             $this->logger->log('Error Form Create','AccountRelease',$errors); //LoggerModel
             echo json_encode(['error'=>$errors]);
         }
        else {
        	$postdata = $this->input->post();
        	$inserted = $this->accrelmod->Add($postdata);
        	// echo json_encode(['success'=>TRUE]);
         	if ($inserted != FALSE) {
	        	$json = json_encode($inserted);
                $this->logger->log('Create','Tags',$json); //Log      		
        		echo $json;
        	}
        	else {
                $json = json_encode($postdata); // encode postdata
                $this->logger->log('Error Create','AccountRelease',$json); //Log 
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

            $result = $this->accrelmod->Update($id,$postdata);
            if ($result != FALSE) {
                $json = json_encode($result);
                $this->logger->log('Update','AccountRelease',$json); //Log              
                echo $json;
            }
            else {
                $json = json_encode($postdata); // encode postdata
                $this->logger->log('Error Update','AccountRelease',$json); //Log
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
             $this->logger->log('Error Form Create','AccountRelease',$errors); //Log
            echo json_encode(['error'=>$errors]);
        }
        else{
            $result = $this->accrelmod->Delete($postdata);
            if ($result != FALSE) {
                $json = json_encode($result);
                $this->logger->log('Delete','AccountRelease',$json); //Log         
                echo $json;
            }
            else {
                $json = json_encode($postdata); // encode postdata
                $this->logger->log('Error Delete','AccountRelease',$json); //Log 
                echo json_encode(['error'=>'Update Unsuccessful.']);
            }

        }



 	}
 
 	public function Read() {
 
 	}
 
 
 
 }