 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class DisabilitiesController extends CI_Controller {
 
 	function __construct() {
         parent::__construct();
         $this->load->model('admin/DisabilityModel','dismod');
         $this->load->model('LoggerModel','logger'); //Include LoggerModel
     }
 
 	public function Disabilities()
 	{
 
 		$layout = array('tables'=>TRUE, 'datepicker'=>TRUE);
 		$data['masterlist'] = $this->dismod->LoadMasterlist();
        $data['class'] = 'disabilities';

 		$this->load->view('layout/admin/1_css');
 		$this->load->view('layout/admin/2_preloader');
 		$this->load->view('layout/admin/3_topbar');
 		$this->load->view('layout/admin/4_leftsidebar');
 		$this->load->view('pages/maintenance/Disabilities',$data);
 		$this->load->view('layout/admin/6_js',$layout);		
        $this->load->view('layout/admin/7_modals'); 

        $json = json_encode($data['masterlist']); //log
        $this->logger->log('Load Masterlist','Disabilities',$json); //Log  

 	}
 	public function Create() {
		$this->form_validation->set_rules('name','Name','required|is_unique[tbl_applicants_disabilities.name]',
		        array(
                'required'      => 'You have not provided %s.',
                'is_unique'     => 'This %s already exists.'
        		)
		    );

		    if ($this->form_validation->run() == FALSE){
             $errors = validation_errors();
             $this->logger->log('Error Form Create','Disabilities',$errors); //Log 
             echo json_encode(['error'=>$errors]);
         }
        else {
        	$postdata = $this->input->post();
        	$inserted = $this->dismod->Add($postdata);
        	// echo json_encode(['success'=>TRUE]);
         	if ($inserted != FALSE) {
	        	$json = json_encode($inserted);  
                $this->logger->log('Create','Disabilities',$json); //Log   



                # SEND NOTIFICATION
                // $this->load->library('pusherclass');
                // $options = array(
                //     'cluster' => 'ap1',
                //     'useTLS' => true
                //   );
                //   $pusher = new Pusher\Pusher(
                //     'b40201798c4cfcffea24',
                //     '1518e49272e3b378e3ba',
                //     '656525',
                //     $options
                //   );

                //   $data['message'] = $this->session->firstname.' added new licenses';
                //   $pusher->trigger('my-channel', 'my-event', $data);


        		echo $json;
        	}
        	else {
                $json = json_encode($postdata); // encode postdata
                $this->logger->log('Error Create','Disabilities',$json); //Log 
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
            $this->logger->log('Error Form Create','Disabilities',$errors); //Log
            echo json_encode(['error'=>$errors]);
        }
        else{
            $id = $postdata['itemid'];
            unset($postdata['itemid']);
            $postdata = array_filter($postdata, 'strlen');

            $result = $this->dismod->Update($id,$postdata);

            if ($result != FALSE) {
                $json = json_encode($result);
                $this->logger->log('Update','Disabilities',$json); //Log           
                echo $json;
            }
            else {
                $json = json_encode($postdata); // encode postdata
                $this->logger->log('Error Update','Disabilities',$json); //Log  
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
            $this->logger->log('Error Form Create','Disabilities',$errors); //Log
            echo json_encode(['error'=>$errors]);
        }
        else{
            $result = $this->dismod->Delete($postdata);
            if ($result != FALSE) {
                $json = json_encode($result);
                $this->logger->log('Delete','Disabilities',$json); //Log                
                echo $json;
            }
            else {
                $json = json_encode($postdata); // encode postdata
                $this->logger->log('Error Delete','Disabilities',$json); //Log 
                echo json_encode(['error'=>'Update Unsuccessful.']);
            }

        }



 	}
 
 	public function Read() {
 
 	}
 
 
 
 }