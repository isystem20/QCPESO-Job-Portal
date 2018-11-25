 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class EmployerController extends CI_Controller {
 
    function __construct() {
         parent::__construct();
         $this->load->model('admin/EmployerModel','appmamod');
         $this->load->model('admin/CountriesModel','countries');
     }
 
    public function EstablishmentMasterlist()
    {
 
        $layout = array('tables'=>TRUE, 'datepicker'=>TRUE);
        $data['masterlist'] = $this->appmamod->LoadMasterlist();
        $data['class'] = 'employermasterlist';
        $this->load->view('layout/admin/1_css');
        $this->load->view('layout/admin/2_preloader');
        $this->load->view('layout/admin/3_topbar');
        $this->load->view('layout/admin/4_leftsidebar');
        $this->load->view('pages/transaction/establishment/EmployerRegistration',$data);
        $this->load->view('layout/admin/6_js',$layout);     
        $this->load->view('layout/admin/7_modals'); 

    }

    public function EmployerInfo($id = null,$mode = null) {
        $layout = array('wizard'=>TRUE,'datepicker'=>TRUE, 'addons'=>TRUE);
        $data['countries'] = $this->countries->LoadMasterlist();


        if (!empty($id)) {

            $data['employer'] = $this->appmamod->LoadMasterlist($id);

            // print_r($data['applicant']);

            if (!empty($mode)) {
                if ($mode == 'edit') {
                    $mode = array('edit' => TRUE, );
                }
                elseif ($mode == 'view') {
                    $mode = array('view' => TRUE, );
                }
                else {
                    die('Invalid Mode');
                }
            }
            else {
                $mode = array('view' => TRUE, );
            }
        }

        $this->load->view('layout/admin/1_css',$layout);
        $this->load->view('layout/admin/2_preloader');
        $this->load->view('layout/admin/3_topbar');
        $this->load->view('layout/admin/4_leftsidebar');
        $this->load->view('pages/transaction/establishment/EmployerRegistration',$data);
        $this->load->view('layout/admin/6_js',$layout);     
        $this->load->view('layout/admin/7_modals'); 
    }

    public function Create() {
        $this->form_validation->set_rules('FirstName','Firstname','required');
        $this->form_validation->set_rules('LastName','Lastname','required');

        if ($this->form_validation->run() == FALSE){
             $errors = validation_errors();
             echo json_encode(['error'=>$errors]);
         }
        else {
            $postdata = $this->input->post();
            $inserted = $this->appmamod->Add($postdata);
            // echo json_encode(['success'=>TRUE]);
            if ($inserted != FALSE) {
                $json = json_encode($inserted);             
                echo $json;
            }
            else {
                echo json_encode(['error'=>'Update Unsuccessful.']);
            }
         }
 
    }
 
    public function Update() {
         $this->form_validation->set_rules('itemid', 'Item Record', 'required',
                array(
                'required'      => 'Cannot identify this record.',
                ));

        $postdata = $this->input->post();
        if ($this->form_validation->run() == FALSE){
            $errors = validation_errors();
            echo json_encode(['error'=>$errors]);
        }
        else{
            $id = $postdata['itemid'];
            unset($postdata['itemid']);
            $postdata = array_filter($postdata, 'strlen');

            $result = $this->appmamod->Update($id,$postdata);
            if ($result != FALSE) {
                $json = json_encode($result);             
                echo $json;
            }
            else {
                echo json_encode(['error'=>'Update Unsuccessful.']);
            }
        }




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
            $result = $this->appmamod->Delete($postdata);
            if ($result != FALSE) {
                $json = json_encode($result);              
                echo $json;
            }
            else {
                echo json_encode(['error'=>'Update Unsuccessful.']);
            }

        }



    }
 
    public function Read() {
 
    }
 
 
 
 }