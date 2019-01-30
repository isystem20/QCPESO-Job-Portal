 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class ApplicantNotificationsController extends Applicant_Controller {
 
    
 
    public function ApplicantNotifications()
    {
        $layout = array('tables'=>TRUE, 'datepicker'=>TRUE);
        $this->load->view('layout/admin/1_css',$layout);
        $this->load->view('layout/admin/2_preloader',$layout);
        $this->load->view('layout/admin/3_topbar',$layout);
        $this->load->view('layout/admin/4_leftsidebar',$layout);
        $this->load->view('pages/applicant/ApplicantNotifications',$layout);
        $this->load->view('layout/admin/6_js',$layout);     
        $this->load->view('layout/admin/7_modals');

       

    }

 
 }