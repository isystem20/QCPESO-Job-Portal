<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LicenseController extends CI_Controller {

/**
* Index Page for this controller.
*
* Maps to the following URL
* http://example.com/­index.php/welcome
*	- or -
* http://example.com/­index.php/welcome/­index
*	- or -
* Since this controller is set as the default controller in
* config/routes.php, it's displayed at http://example.com/
*
* So any other public methods not prefixed with an underscore will
* map to /index.php/welcome/­<method_name>
* @see https://­codeigniter.com/­user_guide/general/­urls.html
*/


    public function LicenseList()
    {

        $layout = array('tables' => TRUE, );	
        $this->load->model('admin/LicenseModel','licensemode');
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
}