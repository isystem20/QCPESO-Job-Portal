<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PreferredLocationController extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	
public function PreferredLocations()
	{
		$layout = array('tables' => TRUE, );
		$this->load->model('admin/PreferredLocationModel','preferredlocationmodel');
		$data['preferredlocation'] = $this->preferredlocationmodel->Load_PreferredLocationModel_Masterlist();
		$this->load->view('layout/admin/1_css');
		$this->load->view('layout/admin/2_preloader');
		$this->load->view('layout/admin/3_topbar');
		$this->load->view('layout/admin/4_leftsidebar');
		$this->load->view('pages/maintenance/PreferredLocations',$data);
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