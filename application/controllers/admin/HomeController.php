
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends Admin_Controller {

function __construct() {
         parent::__construct();
         $this->load->model('admin/DashboardModel','dash');
         $this->load->model('LoggerModel','logger'); //Include LoggerModel

     }

	public function Dashboard()
	{
		$data["totaljobs"] = $this->dash->total_Jobs();
		$data["totalemployers"] = $this->dash->total_Employers();
		$data["totalapplicants"] = $this->dash->total_Applicants();
		$data["successhires"] = $this->dash->total_SuccessHires();
		$data['query'] = $this->dash->load_Categories();
		$data['recenthired'] = $this->dash->load_RecentHired();
		
		$keys_array = array();
		$values_array = array();
		
		foreach ($this->dash->load_Dashboard1() as $row) {
			// if ($key == 'Month') {
			array_push($keys_array, $row->Month);
			array_push($values_array, $row->Days);
			 	
			// }
			
		}
		$data_array = array_combine($keys_array, $values_array);
		$data['monthly_applicants'] = $data_array;
		
		$keys_array = array();
		$values_array = array();
		
		foreach ($this->dash->load_Dashboard2() as $row) {
			// if ($key == 'Month') {
			array_push($keys_array, $row->Month);
			array_push($values_array, $row->Days);
			 	
			// }
			
		}
		$data_array = array_combine($keys_array, $values_array);
		$data['all_year'] = $data_array;
		
		$layout = array('charts' => TRUE, 'pagetitle'=>'Dashboard');
		$this->load->view('layout/admin/1_css',$layout);
		$this->load->view('layout/admin/2_preloader');
		$this->load->view('layout/admin/3_topbar');
		$this->load->view('layout/admin/4_leftsidebar');
		$this->load->view('pages/dashboard',$data);
		$this->load->view('layout/admin/6_js',$layout);	

		$json = json_encode($data); //log
        $this->logger->log('Load Dashboard','Home',$json); //Log 
		
	}


}
