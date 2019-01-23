<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {


    public $webs = 'This is a test';

    function __construct()
    {

        parent::__construct();

        

    // $this->CI =& get_instance();

        // $this->db->flush_cache();
        // $websettings = $this->db->get('tbl_websettings')->result();
        // $this->session->set_userdata('websettings',$websettings);

        $userid = $this->session->userdata('userid');
        $usertype = $this->session->userdata('usertype');
        $activated = $this->session->userdata('activated');
        $profile = $this->session->userdata('profile');
        if (empty($userid)) {
            return redirect(base_url().'admin/login');
        }
         elseif ($activated != '1') {
             return redirect(base_url().'manage/verify');
         }
         elseif ($profile == 0) {
             $this->session->set_tempdata('caption', 'Update Profile', 300);
             return redirect(base_url().'account/profile');
         }
    }

}


class Public_Controller extends CI_Controller {



    function __construct()
    {
        parent::__construct();
        //Initialization code that affects Public controllers. Probably not much needed because everyone can access public.
        $WEBSET = $this->LoadWebSettings();
        if ($WEBSET['UNDER_CONSTRUCTION'] == 'YES') {
            die('UNDER_CONSTRUCTION');
        }
    }


    public function LoadWebSettings() {

        $websettings_keys = array();
        $websettings_val = array();

        $this->db->flush_cache();
        $get = $this->db->get('tbl_websettings');
        $result = $get->result();

        foreach ($result as $row) {
            array_push($websettings_keys, strtoupper($row->Parameter));
            array_push($websettings_val, strtoupper($row->Value));
        }
        return array_combine($websettings_keys, $websettings_val);          
    }


    public function CheckSiteUnderConstruction() {
        $this->db->flush_cache();
        $this->db->where('Parameter','UNDER_CONSTRUCTION');
        $this->db->where('Value','YES');
        $this->db->from('tbl_websettings');
        $found = $this->db->count_all_results();
        if ($found > 0) {
           return TRUE;
        }
        return FALSE;
    }

}

class Applicant_Controller extends MY_Controller {

    // function __construct()
    // {
    //     parent::__construct();

    //     $userid = $this->session->userdata('userid');
    //     $usertype = $this->session->userdata('usertype');
    //     // if (!empty($userid) && $usertype == 'APPLICANT') {
    //     //     return redirect(base_url().'403');
    //     // }
    //     if (empty($userid)) {
    //         return redirect(base_url().'web/login/applicant');
    //     }
        
    // }





}

class Employer_Controller extends MY_Controller {

    function __construct()
    {
        parent::__construct();

        //Initialization code that affects Member controllers. I.E. redirect and die if not logged in
    }

}


class Staff_Controller extends MY_Controller {

    function __construct()
    {
        parent::__construct();

        //Initialization code that affects Member controllers. I.E. redirect and die if not logged in
    }

}

class Manager_Controller extends MY_Controller {

    function __construct()
    {
        parent::__construct();

        //Initialization code that affects Member controllers. I.E. redirect and die if not logged in
    }

}

class Admin_Controller extends MY_Controller {

    // function __construct()
    // {
    //     parent::__construct();

    //     $userid = $this->session->userdata('userid');
    //     $usertype = $this->session->userdata('usertype');
    //     // if (!empty($userid) && $usertype != 'ADMIN') {
    //     //     return redirect(base_url().'403');
    //     // }else
    //     if (empty($userid)) {
    //         return redirect(base_url().'admin/login');
    //     }

    // }

    function __construct()
    {
        parent::__construct();
        //Initialization code that affects Public controllers. Probably not much needed because everyone can access public.
        $WEBSET = $this->LoadWebSettings();
        if ($WEBSET['UNDER_CONSTRUCTION'] == 'YES') {
            die('UNDER_CONSTRUCTION');
        }
    }


    public function LoadWebSettings() {

        $websettings_keys = array();
        $websettings_val = array();

        $this->db->flush_cache();
        $get = $this->db->get('tbl_websettings');
        $result = $get->result();

        foreach ($result as $row) {
            array_push($websettings_keys, strtoupper($row->Parameter));
            array_push($websettings_val, strtoupper($row->Value));
        }
        return array_combine($websettings_keys, $websettings_val);          
    }

}




?>