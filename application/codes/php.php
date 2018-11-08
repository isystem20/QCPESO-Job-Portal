

PHP Templated Codes


<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControllerFileName extends CI_Controller { //The Class name must be the same file name of this controller. CI_Controller is the core 
															//controller in codeigniter

    function __construct() {						//This function is for global declaration of variables and loading of system files.
        parent::__construct();
        $this->load->model('web/AuthModel','auth');			//this model will be loaded in all functions in this Controller.
    }


	public function LoadMasterList()
	{
		
		$layout = array('transparentwrapper' => TRUE, );		//We can set the data that we can pass on to different views
		$this->load->view('layout/web/1_head');					//These are the segmented parts of the website
		$this->load->view('layout/web/2_preloader');
		$this->load->view('layout/web/3_header', $layout);		//This segment is the part where we pass the data called "layout"
		$this->load->view('web/Register');
		$this->load->view('layout/web/5_rightbar');
		$this->load->view('layout/web/6_footer');
		
	}

	public function CreateItem() {

        $this->form_validation->set_rules('Code', 'Item Code', 'required|is_unique[hr_general_positions.Code]');
        $this->form_validation->set_rules('Name', 'Item Name', 'required');
        $postdata = $this->input->post();
        if ($this->form_validation->run() == FALSE){
            $errors = validation_errors();
            echo json_encode(['error'=>$errors]);
        }
        elseif (empty($postdata['CompanyId'])) {
        	echo json_encode(['error'=>'Subscription Cannot be validated.']);
        }
        else{
        	$result = $this->posmod->Create($postdata);
        	if ($result != FALSE) {
	        	$json = json_encode($result);
	        	$this->logger->log('Add','Successful Adding Position',$json);          		
        		echo $json;
        	}
        	else {
        		echo json_encode(['error'=>'Update Unsuccessful.']);
        	}

        }
	}





 }