 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class LocationController extends Admin_Controller {
 
 	function __construct() {
         parent::__construct();
         $this->load->model('admin/LocationModel','locmod');
         $this->load->model('LoggerModel','logger'); //Include LoggerModel
     }
 
 	public function Location()
 	{
 
 		$layout = array('tables'=>TRUE, 'datepicker'=>TRUE,'pagetitle'=>'Masterlist of Location');
 		$data['masterlist'] = $this->locmod->LoadMasterlist();
        $data['class'] = 'preferred-locations';
 		$this->load->view('layout/admin/1_css',$layout);
 		$this->load->view('layout/admin/2_preloader',$layout);
 		$this->load->view('layout/admin/3_topbar',$layout);
 		$this->load->view('layout/admin/4_leftsidebar',$layout);
 		$this->load->view('pages/maintenance/LocationList',$data);
 		$this->load->view('layout/admin/6_js',$layout);		
        $this->load->view('layout/admin/7_modals',$layout); 

        $json = json_encode($data['masterlist']); //log
        $this->logger->log('Load Location','Location',$json); //Log 

 	}
 	public function Create() {
		$this->form_validation->set_rules('name','Name','required|is_unique[tbl_applicants_prefer_locations.name]',
		        array(
                'required'      => 'You have not provided %s.',
                'is_unique'     => 'This %s already exists.'
        		)
		    );

		    if ($this->form_validation->run() == FALSE){
             $errors = validation_errors();
             $this->logger->log('Error Form Create','Location',$errors); //LoggerModel
             echo json_encode(['error'=>$errors]);
         }
        else {
        	$postdata = $this->input->post();
        	$inserted = $this->locmod->Add($postdata);
        	// echo json_encode(['success'=>TRUE]);
         	if ($inserted != FALSE) {
	        	$json = json_encode($inserted); 
                $this->logger->log('Create','Location',$json); //Log        		
        		echo $json;
        	}
        	else {
                $json = json_encode($postdata); // encode postdata
                $this->logger->log('Error Create','Location',$json); //Log 
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
            $this->logger->log('Error Form Create','Location',$errors); //Log
            echo json_encode(['error'=>$errors]);
        }
        else{
            $id = $postdata['itemid'];
            unset($postdata['itemid']);
            $postdata = array_filter($postdata, 'strlen');

            $result = $this->locmod->Update($id,$postdata);
            if ($result != FALSE) {
                $json = json_encode($result);
                $this->logger->log('Update','Location',$json); //Log               
                echo $json;
            }
            else {
                $json = json_encode($postdata); // encode postdata
                $this->logger->log('Error Update','Location',$json); //Log
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
             $this->logger->log('Error Form Create','Location',$errors); //Log
            echo json_encode(['error'=>$errors]);
        }
        else{
            $result = $this->locmod->Delete($postdata);
            if ($result != FALSE) {
                $json = json_encode($result); 
                $this->logger->log('Delete','Location',$json); //Log             
                echo $json;
            }
            else {
                $json = json_encode($postdata); // encode postdata
                $this->logger->log('Error Delete','Location',$json); //Log
                echo json_encode(['error'=>'Update Unsuccessful.']);
            }

        }



 	}
 
 	public function Read() {
 
 	}
 
 
 
 }