 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class WebPostsController extends CI_Controller {
 
    function __construct() {
         parent::__construct();
         $this->load->model('admin/WebPostsModel','webpostmod');
         $this->load->model('admin/PostTypesModel','postymod');
     }
 
  public function AddWebPosts($id = null,$mode= null)
    {
 
        $layout = array('editor'=>TRUE, 'tags'=>TRUE, 'pagetitle'=>'Adding New Web Posts','uploadfile'=>TRUE);
        $data['posttypes'] = $this->postymod->LoadMasterlist();
        $data['class'] = 'webposts';

             

       if (!empty($id)) {

            $data['webposts'] = $this->webpostmod->LoadMasterlist($id);

            // print_r($data['applicant']);

            if (!empty($mode)) {
                if ($mode == 'edit') {
                    $data['mode']="edit";
                }
                elseif ($mode == 'view') {
                    $data['mode']="view";
                }
                else {
                    die('Invalid Mode');
                }
            }
            else {
                  $data['mode']="view";
            }
        }
        $this->load->view('layout/admin/1_css',$layout);
        $this->load->view('layout/admin/2_preloader',$layout);
        $this->load->view('layout/admin/3_topbar',$layout);
        $this->load->view('layout/admin/4_leftsidebar',$layout);
        $this->load->view('pages/settings/AddWebPosts',$data);
        $this->load->view('layout/admin/6_js',$layout);

    }
 
      public function AllWebPosts()
    {
 
        $layout = array('tables'=>TRUE,'pagetitle'=>'List of All Web Posts');
        $data['webposts'] = $this->webpostmod->LoadMasterlist();
        $data['class'] = 'webposts';

        $this->load->view('layout/admin/1_css',$layout);
        $this->load->view('layout/admin/2_preloader',$layout);
        $this->load->view('layout/admin/3_topbar',$layout);
        $this->load->view('layout/admin/4_leftsidebar',$layout);
        $this->load->view('pages/settings/AllWebPosts',$data);
        $this->load->view('layout/admin/6_js',$layout);     
        $this->load->view('layout/admin/7_modals'); 


    }

   
 	public function Create() {
		$this->form_validation->set_rules('PostTitle','title','required|is_unique[tbl_web_posts.PostTitle]',
		        array(
                'required'      => 'You have not provided %s.',
                'is_unique'     => 'This %s already exists.'
        		)
		    );
            $this->form_validation->set_rules('PostDescription','Post Description','required');
             $this->form_validation->set_rules('Tags','Tags','required');
            $this->form_validation->set_rules('PostContent','Post Content','required');
	     if ($this->form_validation->run() == FALSE){
             $errors = validation_errors();
             echo json_encode(['error'=>$errors]);

         }

         elseif (empty($_FILES["WebImage"]["name"])) {
            $errors = "Image File Needed.";
           
        }
  
            else {
            $imagepath="";
            $path = dirname(BASEPATH).'/uploads/';
            $config['upload_path'] = $path;
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '100000';
            $senderror = FALSE;
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('WebImage')) {
                $errors = $this->upload->display_errors();
                $senderror = TRUE;
            }       
            else {
                $imagedata = $this->upload->data();
                $imagepath =  'uploads/'.$imagedata['file_name'];   
            }




        	$postdata = $this->input->post();
            $postdata['WebImage']=$imagepath;
            unset($postdata['_wysihtml5_mode']);
        	$inserted = $this->webpostmod->Add($postdata);
        	// echo json_encode(['success'=>TRUE]);
         	if ($inserted != FALSE) {      		
        		
                echo json_encode(['success'=>TRUE,'url'=>base_url().'manage/settings/all-web-post']);
        	}
        	else {
        		echo json_encode(['error'=>'Update Unsuccessful.']);
        	}
         }
 
 	}
 
 	public function Update() {
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
            $id = $postdata['id'];
            unset($postdata['id']);
            unset($postdata['_wysihtml5_mode']);
            $postdata = array_filter($postdata, 'strlen');

            $result = $this->webpostmod->Update($id,$postdata);
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
            $result = $this->webpostmod->Delete($postdata);
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