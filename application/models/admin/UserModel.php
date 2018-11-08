<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class UserModel extends CI_Model {

		public function Load_UserMasterlistModel_Masterlist() {
			$this->db->select('*');
			$this->db->from('tbl_security_users');
			return $this->db->get();

		}

	}