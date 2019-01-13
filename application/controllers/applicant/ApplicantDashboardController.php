 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class ApplicantDashboardController extends CI_Controller {
 
    function __construct() {
         parent::__construct();
         $this->load->model('applicant/ApplicantDashboardModel','app');
         $this->load->model('LoggerModel','logger'); //Include LoggerModel

     }
 
    public function ApplicantDashboard()
    {
        $data["totaljobs"] = $this->app->myTotalJobApplication();
        $data["totalapproved"] = $this->app->myTotalApprovedJob();
        $data["recentjobs"] = $this->app->myRecentJobs();
        $data["pendingjobs"] = $this->app->myPendingJobs();
        $data["rejectedjobs"] = $this->app->myTotalRejectJob();
        $layout = array('tables'=>TRUE, 'datepicker'=>TRUE, 'charts' => TRUE);
        $this->load->view('layout/admin/1_css',$layout);
        $this->load->view('layout/admin/2_preloader',$layout);
        $this->load->view('layout/admin/3_topbar',$layout);
        $this->load->view('layout/admin/4_leftsidebar',$layout);
        $this->load->view('pages/applicant/ApplicantDashboard',$data);
        $this->load->view('layout/admin/6_js',$layout);     
        $this->load->view('layout/admin/7_modals');

       

    }

 
 }