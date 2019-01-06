 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class ModulesController extends Admin_Controller {
 
 	function __construct() {
         parent::__construct();
         $this->load->model('admin/ModulesModel','modmod');
         $this->load->model('LoggerModel','logger'); //Include LoggerModel 
     }
 
 	public function Modules()
 	{
 
 		$layout = array('tables'=>TRUE, 'datepicker'=>TRUE, 'pagetitle'=>'Masterlist of Modules');
 		$data['modules'] = $this->modmod->LoadModuleslist();
        $data['class'] = 'modules';
 		$this->load->view('layout/admin/1_css',$layout);
 		$this->load->view('layout/admin/2_preloader',$layout);
 		$this->load->view('layout/admin/3_topbar',$layout);
 		$this->load->view('layout/admin/4_leftsidebar',$layout);
 		$this->load->view('pages/users/Modules',$data);
 		$this->load->view('layout/admin/6_js',$layout);		
        $this->load->view('layout/admin/7_modals',$layout);

        $json = json_encode($data['modules']); //log
        $this->logger->log('Load Modules','Modules',$json); //Log 

 	}
 	public function Create() {
		$this->form_validation->set_rules('name','Name','required|is_unique[tbl_security_modules.name]',
		        array(
                'required'      => 'You have not provided %s.',
                'is_unique'     => 'This %s already exists.'
        		)
		    );

		    if ($this->form_validation->run() == FALSE){
             $errors = validation_errors();
             $this->logger->log('Error Form Create','Modules',$errors); //LoggerModel
             echo json_encode(['error'=>$errors]);
         }
        else {
        	$postdata = $this->input->post();
        	$inserted = $this->modmod->Add($postdata);
        	// echo json_encode(['success'=>TRUE]);
         	if ($inserted != FALSE) {
	        	$json = json_encode($inserted);
                return redirect(base_url('manage/modules'));       		
        		//$this->logger->log('Create','Modules',$json); //Log

                echo $json;
            }
            else {
                $json = json_encode($postdata); // encode postdata
                return redirect(base_url('manage/modules'));
                //$this->logger->log('Error Create','Modules',$json); //Log 
        		//echo json_encode(['error'=>'Update Unsuccessful.']);
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
            $this->logger->log('Error Form Create','Modules',$errors); //Log
            echo json_encode(['error'=>$errors]);
        }
        else{
            $id = $postdata['itemid'];
            unset($postdata['itemid']);
            $postdata = array_filter($postdata, 'strlen');

            $result = $this->modmod->Update($id,$postdata);
            if ($result != FALSE) {
                $json = json_encode($result);
                return redirect(base_url('manage/modules'));             
                //$this->logger->log('Update','Modules',$json); //Log           
                //echo $json;
            }
            else {
                $json = json_encode($postdata); // encode postdata
                return redirect(base_url('manage/modules'));
                //$this->logger->log('Error Update','Modules',$json); //Log 
                //echo json_encode(['error'=>'Update Unsuccessful.']);
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
            $this->logger->log('Error Form Create','Modules',$errors); //Log
            echo json_encode(['error'=>$errors]);
        }
        else{
            $result = $this->modmod->Delete($postdata);
            if ($result != FALSE) {
                $json = json_encode($result);              
               $this->logger->log('Delete','Modules',$json); //Log
                echo $json;
            }
            else {
                $json = json_encode($postdata); // encode postdata
                $this->logger->log('Error Delete','Modules',$json); //Log code(['error'=>'Update Unsuccessful.']);
            }

        }



 	}
 
 	public function Read() {
 
 	}
 
 
 
 }