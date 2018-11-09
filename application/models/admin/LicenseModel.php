<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class LicenseModel extends CI_Model {

		public function Load_LicenseModel_Masterlist() {
			$this->db->select('*');
			$this->db->from('tbl_license_list');
			return $this->db->get();
		}

	}
