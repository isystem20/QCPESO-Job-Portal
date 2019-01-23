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

		if (!empty($data['Password'])) {
			$password = $data['Password'];
			unset($data['Password']);
			unset($data['Password2']);			
		}else {
			$password = $code;
		}


		$this->db->set('Id',"'".$id."'",FALSE);
		$this->db->set('CreatedById',"'".$id."'",FALSE);
		$this->db->set('ModifiedById',"'".$id."'",FALSE);			
		$this->db->insert('tbl_applicants',$data);

		$this->db->flush_cache();
		


		$uid = $this->uuid->v4();
        $key = $this->config->item('encryption_key');
        $salt1 = hash('sha512', $key . $password);
        $salt2 = hash('sha512', $password . $key);
        $hashed_password = hash('sha512', $salt1 . $password . $salt2);
        // echo $data['password'] = $hashed_password;
        $activated = 0;
		$this->db->set('id',"'".$id."'",FALSE);
		if (!empty($ext)) {
			$this->db->set('External_Id',"'".$ext."'",FALSE);
			$this->db->set('Activated',"'1'",FALSE);
			$activated = 1;
		}
		else {
			$this->db->set('Activated',"'0'",FALSE);
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

				$this->load->model('notifications/Email','email');
				$notifdata = array('userid'=>$id,'r_fname'=>$data['FirstName'],'r_email' => $data['EmailAddress'], 'r_name'=>$data['FirstName'].' '.$data['LastName']);
				$send = $this->email->send_email_verification_code($code,$notifdata);
				$sent = 0;
				if ($send === true) {
					$sent = 1;
				}

		        $this->db->trans_commit();
        		$session_data = array(
        			'userid' => $id,
        			'lastname' => $data['LastName'],
        			'firstname'=> $data['FirstName'],
        			'status' => '1',
        			'username' => $data['EmailAddress'],
        			'email' => $data['EmailAddress'],
        			'active' => '1',
        			'security_id' =>'1',
        			'usertype' => 'APPLICANT',
        			'peopleid' => $id,
        			'activated' => $activated,
        			'sent' => $sent,
        			'profile' => '0',
        		);  
        		
        		$this->session->set_userdata($session_data);

		        return TRUE;

		}
	}

	public function LoginApplicant($data,$ext = FALSE) {
		$this->db->select('user.*, app.lastName, app.firstName,app.isActive as applicantstatus, app.PreferredJobs, app.PreferredWorkLocations, app.PhotoPath');
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
			if ($ext == FALSE) {
				$this->LoginAdmin($data);
			}
			return FALSE;
		}

	}


	public function LoginAdmin($data,$ext = FALSE) {
		$this->db->select('user.*, app.LastName, app.FirstName,app.IsActive as applicantstatus, app.EmailAddress');
		$this->db->from('tbl_security_users user');
		$this->db->join('tbl_employees app','app.Id = user.PeopleId','left outer');
		$this->db->where('user.LoginName',$data['Email']);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->row();
		}
		else {
			$this->LoginEmployer($data);
			return FALSE;
		}
	}

	function LoginEmployer() {
		$this->db->select('user.*, app.ContactPerson, app.CompanyName, app.EstablismentType,app.IsActive as applicantstatus, app.CompanyEmail');
		$this->db->from('tbl_security_users user');
		$this->db->join('tbl_establishments app','app.Id = user.PeopleId','left outer');
		$this->db->where('user.LoginName',$data['Email']);
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