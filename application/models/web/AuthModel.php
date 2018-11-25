<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AuthModel extends CI_Model {


    function __construct() {
        parent::__construct();
        $this->load->library('Uuid');
    }


	public function RegisterApplicant($data) { //firstName,lastName,emailAddress,password,password2
		$this->db->trans_start();
		$id = $this->uuid->v4();
		$code = rand(100000, 999999);


		$this->db->set('id',"'".$id."'",FALSE);
		$this->db->set('lastName',"'".$data['lastName']."'",FALSE);
		$this->db->set('firstName',"'".$data['firstName']."'",FALSE);		
		$this->db->set('emailAddress',"'".$data['emailAddress']."'",FALSE);	
		$this->db->set('createdById',"'".$id."'",FALSE);
		$this->db->set('modifiedById',"'".$id."'",FALSE);			
		$this->db->insert('tbl_applicants');

		$this->db->flush_cache();
		$password = $data['password'];
		$uid = $this->uuid->v4();
        $key = $this->config->item('encryption_key');
        $salt1 = hash('sha512', $key . $password);
        $salt2 = hash('sha512', $password . $key);
        $hashed_password = hash('sha512', $salt1 . $password . $salt2);
        // echo $data['password'] = $hashed_password;

		$this->db->set('id',"'".$uid."'",FALSE);
		$this->db->set('LoginName',"'".$data['emailAddress']."'",FALSE);
		$this->db->set('PasswordHash',"'".$hashed_password."'",FALSE);
		$this->db->set('SecurityUserLevelId',"'0'",FALSE);
		$this->db->set('CreatedById',"'".$id."'",FALSE);
		$this->db->set('ModifiedById',"'".$id."'",FALSE);
		$this->db->set('UserType',"'APPLICANT'",FALSE);	
		$this->db->set('PeopleId',"'".$id."'",FALSE);			
		$this->db->set('Email',"'".$data['emailAddress']."'",FALSE);
		$this->db->set('ActivationCode',"'".$code."'",FALSE);
		$this->db->insert('tbl_security_users');

		$this->db->trans_complete();

		if ($this->db->trans_status() === FALSE)
		{
		        $this->db->trans_rollback();
		        return FALSE;

		}
		else
		{
		        $this->db->trans_commit();

		        return TRUE;

		}
	}

	public function LoginApplicant($data) {
		$this->db->select('user.*, app.lastName, app.firstName,app.isActive as applicantstatus');
		$this->db->from('tbl_security_users user');
		$this->db->join('tbl_applicants app','app.Id = user.PeopleId','left outer');
		$this->db->where('user.LoginName',$data['Email']);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->row();
		}
		else {
			return FALSE;
		}

	}

}