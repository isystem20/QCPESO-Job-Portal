 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class EmployerController extends CI_Controller {
 
 	function __construct() {
         parent::__construct();
         $this->load->model('admin/EstablishmentModel','establishmentmod');
     }
 
 	public function EmployerRegistration()
 	{
 
 		$layout = array('tables'=>TRUE, 'datepicker'=>TRUE);
 		$data['masterlist'] = $this->establishmentmod->LoadMasterlist();
        $data['class'] = 'establishment';
 		$this->load->view('layout/admin/1_css');
 		$this->load->view('layout/admin/2_preloader');
 		$this->load->view('layout/admin/3_topbar');
 		$this->load->view('layout/admin/4_leftsidebar');
 		$this->load->view('pages/transaction/establishment/EmployerRegistration',$data);
 		$this->load->view('layout/admin/6_js',$layout);		
        $this->load->view('layout/admin/7_modals'); 

 	}
 }
