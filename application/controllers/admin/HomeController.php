
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

		if ($this->session->userdata('usertype') == 'APPLICANT') {
			return redirect(base_url('applicant/Dashboard'));
		}
		if ($this->session->userdata('usertype') == 'EMPLOYER') {
			return redirect(base_url('manage/employerdashboard'));
		}
		$websetting = $this->LoadWebSettings();
		$data["totaljobs"] = $this->dash->total_Jobs();
		$data["totalemployers"] = $this->dash->total_Employers();
		$data["totalapplicants"] = $this->dash->total_Applicants();
		$data["successhires"] = $this->dash->total_SuccessHires();
		$data['query'] = $this->dash->load_Categories();
		$data['recenthired'] = $this->dash->load_RecentHired();
		//for table under the donut chart
		$data['referrals'] = $this->dash->load_ReferredApplicants();
		
		

		
		// 1st dashboard line chart //
		$keys_array = array();
		$values_array = array();
		
		foreach ($this->dash->load_Dashboard1() as $row) {
			
			array_push($keys_array, $row->Month);
			array_push($values_array, $row->Days);
			 	
			
			
		}
		$data_array = array_combine($keys_array, $values_array);
		$data['monthly_applicants'] = $data_array;

		// 2nd dashboard bar chart
		$keys_array = array();
		$values_array = array();
		
		foreach ($this->dash->load_Dashboard2() as $row) {
			
			array_push($keys_array, $row->Month);
			array_push($values_array, $row->Days);
			 	
			
			
		}
		$data_array = array_combine($keys_array, $values_array);
		$data['all_year'] = $data_array;

		// 3rd donut chart
		$keys_array = array();
		$values_array = array();
		
		foreach ($this->dash->load_ReferredApplicants()->result() as $row) {
			
			array_push($keys_array, $row->TotalApplicants);
			array_push($values_array, $row->ReferredApplicants);
			 	
			
			
		}
		$data_array = array_combine($keys_array, $values_array);
		$data['monthly_referrals'] = $data_array;

		
		$layout = array('charts' => TRUE, 'pagetitle'=>'Dashboard','websetting'=>$websetting);
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
