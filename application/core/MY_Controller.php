<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {


    function __construct()
    {

        parent::__construct();
        // $this->CI =& get_instance();

        // $sess_id = $this->session->userdata('userid');
        // if(empty($sess_id))
        // {
        //     return redirect(base_url().'?ref='.base_url(uri_string()));

        // }


    }

}


class Public_Controller extends MY_Controller {

    function __construct()
    {
        parent::__construct();

        //Initialization code that affects Public controllers. Probably not much needed because everyone can access public.
    }

}

class Applicant_Controller extends MY_Controller {

    function __construct()
    {
        parent::__construct();

        $userid = $this->session->userdata('userid');
        $usertype = $this->session->userdata('usertype');
        if (!empty($userid) && $usertype == 'APPLICANT') {
            return redirect(base_url().'403');
        }elseif (empty($userid)) {
            return redirect(base_url().'web/login/applicant');
        }
        
    }





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

    function __construct()
    {
        parent::__construct();

        $userid = $this->session->userdata('userid');
        $usertype = $this->session->userdata('usertype');
        if (!empty($userid) && $usertype != 'ADMIN') {
            return redirect(base_url().'403');
        }elseif (empty($userid)) {
            return redirect(base_url().'admin/login');
        }

    }

}




?>