<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CertificateController extends CI_Controller {


    function __construct() {
        parent::__construct();
        $this->load->model('admin/CertificateModel','certmod');
    }


	public function Certificates()
	{
        
        $layout = array('tables' => TRUE, );  
        $data['certificates'] = $this->certmod->Load_CertificateModel_Masterlist();
       

		$this->load->view('layout/admin/1_css',$layout);
		$this->load->view('layout/admin/2_preloader');
		$this->load->view('layout/admin/3_topbar');
		$this->load->view('layout/admin/4_leftsidebar');
		$this->load->view('pages/maintenance/certificates',$data);
		$this->load->view('layout/admin/6_js',$layout);	
		
	}

	public function Create() {
	
	}

	public function Update() {
 
	}

	public function Delete() {

	}

	public function Read() {

	}


}
