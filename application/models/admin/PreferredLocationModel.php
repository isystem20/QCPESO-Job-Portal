<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class PreferredLocationModel extends CI_Model {

		public function Load_PreferredLocationModel_Masterlist() {
			$this->db->select('*');
			$this->db->from('tbl_applicants_prefer_locations');
			return $this->db->get();

		}

	}