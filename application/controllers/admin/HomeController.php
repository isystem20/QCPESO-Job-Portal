<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends Admin_Controller {

function __construct() {
         parent::__construct();
         $this->load->model('admin/DashboardModel','totjob');
         $this->load->model('admin/DashboardModel','totemp');
         $this->load->model('admin/DashboardModel','totapp');
         $this->load->model('admin/DashboardModel','totsh');
         $this->load->model('admin/DashboardModel','loadcat');


     }

	public function Dashboard()
	{
		$data["totaljobs"] = $this->totjob->total_Jobs();
		$data["totalemployers"] = $this->totemp->total_Employers();
		$data["totalapplicants"] = $this->totapp->total_Applicants();
		$data["successhires"] = $this->totsh->total_SuccessHires();
		$data['query'] = $this->loadcat->load_Categories();
		$data['monthly_applicants'] = array('Jan'=>200, 'Feb'=> 512, 'Mar'=> 300, 'Apr'=> 503, 'May'=>21);
		$layout = array('charts' => TRUE, );
		$this->load->view('layout/admin/1_css',$layout);
		$this->load->view('layout/admin/2_preloader');
		$this->load->view('layout/admin/3_topbar');
		$this->load->view('layout/admin/4_leftsidebar');
		$this->load->view('pages/dashboard',$data);
		$this->load->view('layout/admin/6_js',$layout);	
		
	}


}
