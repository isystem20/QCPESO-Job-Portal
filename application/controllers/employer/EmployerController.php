 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class EmployerController extends CI_Controller {

        function __construct() {
         parent::__construct();
         $this->load->model('employer/EmployerDashboardModel','emp');
         $this->load->model('LoggerModel','logger'); //Include LoggerModel
}


    public function Employer(){

        $websetting = $this->LoadWebSettings();
        $data['emptotaljobs'] = $this->emp->EmployerTotalJobs();
        $data['empjobsdeployed'] = $this->emp->EmployerTotalJobsDeployed();
        $data['emptotalhires'] = $this->emp->EmployerHiredApplicants();
        $data['emprejected'] = $this->emp->EmployerRejectedApplicants();
       $data['empjobpost']= $this->emp->EmployerJobPostings();
        $data['emprecentapp'] = $this->emp->EmployerRecentApplicants();
        $data['empjobstatus'] = $this->emp->EmployerJobsByStatus();


        // 1st dashboard line chart //
        $keys_array = array();
        $values_array = array();
        
        foreach ($this->emp->EmployerLineChart()->result() as $row) {
            
            array_push($keys_array, $row->Month);
            array_push($values_array, $row->Days);
                
            
            
        }
        $data_array = array_combine($keys_array, $values_array);
        $data['emp_all_applicants'] = $data_array;

        //Jobs by Status chart
        $keys_array = array();
        $values_array = array();
       // $keysvalues_array = array();
        
        foreach ($this->emp->EmployerJobsByStatus()->result() as $row) {
            
            array_push($keys_array, $row->IsActive1);
            array_push($values_array, $row->IsActive2);
           // array_push($keysvalues_array, $row->IsActive3);  
            
            
        }
        $data_array = array_combine($keys_array, $values_array);
        $data['empjobsbystatus'] = $data_array;
        


        $layout = array('tables'=>TRUE, 'datepicker'=>TRUE, 'charts' => TRUE,'websetting'=>$websetting);
        
        $this->load->view('layout/admin/1_css',$layout);
        $this->load->view('layout/admin/2_preloader',$layout);
        $this->load->view('layout/admin/3_topbar',$layout);
        $this->load->view('layout/admin/4_leftsidebar',$layout);
        $this->load->view('pages/employee/EmployerDashboard',$data);
        $this->load->view('layout/admin/6_js',$layout);     
        $this->load->view('layout/admin/7_modals');
 
    }
    
    
 
 
 }