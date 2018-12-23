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

		if (!empty($data['External_Id'])) {
			$ext = $data['External_Id'];
			unset($data['External_Id']);
		}

		$this->db->set('Id',"'".$id."'",FALSE);
		$this->db->set('CreatedById',"'".$id."'",FALSE);
		$this->db->set('ModifiedById',"'".$id."'",FALSE);			
		$this->db->insert('tbl_applicants',$data);

		$this->db->flush_cache();
		
		if (!empty($data['Password'])) {
			$password = $data['Password'];
		}else {
			$password = $code;
		}

		$uid = $this->uuid->v4();
        $key = $this->config->item('encryption_key');
        $salt1 = hash('sha512', $key . $password);
        $salt2 = hash('sha512', $password . $key);
        $hashed_password = hash('sha512', $salt1 . $password . $salt2);
        // echo $data['password'] = $hashed_password;

		$this->db->set('id',"'".$uid."'",FALSE);
		if (!empty($ext)) {
			$this->db->set('External_Id',"'".$ext."'",FALSE);
		}
		$this->db->set('LoginName',"'".$data['EmailAddress']."'",FALSE);
		$this->db->set('PasswordHash',"'".$hashed_password."'",FALSE);
		$this->db->set('SecurityUserLevelId',"'0'",FALSE);
		$this->db->set('CreatedById',"'".$id."'",FALSE);
		$this->db->set('ModifiedById',"'".$id."'",FALSE);
		$this->db->set('UserType',"'APPLICANT'",FALSE);	
		$this->db->set('PeopleId',"'".$id."'",FALSE);			
		$this->db->set('Email',"'".$data['EmailAddress']."'",FALSE);
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

	public function LoginApplicant($data,$ext = FALSE) {
		$this->db->select('user.*, app.lastName, app.firstName,app.isActive as applicantstatus');
		$this->db->from('tbl_security_users user');
		$this->db->join('tbl_applicants app','app.Id = user.PeopleId','left outer');
		$this->db->where('user.LoginName',$data['Email']);
		if ($ext == TRUE) {
			$this->db->where('user.External_Id', $data['External_Id']);
		}
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->row();
		}
		else {
			return FALSE;
		}

	}


	public function LoginApplicantGoogle($data) {

		if ($this->CheckExistingExt($data['External_Id'],$data['Email']) > 0) {
			$login =  $this->LoginApplicant($data,TRUE);
			return $login;
		}
		else {
			$data['EmailAddress'] = $data['Email'];
			unset($data['Email']);
			$reg = $this->RegisterApplicant($data);
			return $reg;
		}

	}

	function CheckExistingExt($extid,$email) {

		$this->db->where('u.External_Id', $extid);
		$this->db->where('u.LoginName', $email);
		$this->db->where('a.EmailAddress', $email);
		$this->db->from('tbl_security_users u');
		$this->db->join('tbl_applicants a','a.Id = u.PeopleId','left outer');
		return $this->db->count_all_results();
	}

}