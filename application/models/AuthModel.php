<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AuthModel extends CI_Model {


	public function LoginAdmin($data) {
		$this->db->select('user.*, emp.lastName, emp.firstName,emp.isActive as applicantstatus');
		$this->db->from('tbl_security_users user');
		$this->db->join('tbl_employees emp','emp.Id = user.PeopleId','left outer');
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