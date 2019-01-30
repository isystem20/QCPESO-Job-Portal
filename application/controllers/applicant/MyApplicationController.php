 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class MyApplicationController extends Applicant_Controller {
  function __construct() {
           parent::__construct();
           $this->load->model('applicant/MyApplicationModel','MyAppMod');

       }

    
 
    public function MyApplication()
    {
        $layout = array('tables'=>TRUE, 'datepicker'=>TRUE, 'pagetitle'=>'My Job Applications');
          $data['myapplication'] = $this->MyAppMod->LoadMasterlist();
          $data['class'] = 'myapplication';

          $this->load->view('layout/admin/1_css',$layout);
          $this->load->view('layout/admin/2_preloader',$layout);
          $this->load->view('layout/admin/3_topbar',$layout);
          $this->load->view('layout/admin/4_leftsidebar',$layout);
          $this->load->view('pages/applicant/MyApplications',$data);
          $this->load->view('layout/admin/6_js',$layout);     
          $this->load->view('layout/admin/7_modals',$layout);        

    }

 
 

     public function Delete() {
 
         $this->form_validation->set_rules('id', 'Item Record', 'required',
                array(
                'required'      => 'Cannot identify this record.',
                ));

        $postdata = $this->input->post();
        if ($this->form_validation->run() == FALSE){
            $errors = validation_errors();
            echo json_encode(['error'=>$errors]);
        }
        else{
            $result = $this->MyAppMod->Delete($postdata);
            if ($result != FALSE) {
                $json = json_encode($result);              
                echo $json;
            }
            else {
                echo json_encode(['error'=>'Update Unsuccessful.']);
            }

        }



    
}  

 }