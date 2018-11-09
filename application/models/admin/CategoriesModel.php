<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class CategoriesModel extends CI_Model {

		public function Load_CategoriesModel_Masterlist() {
			$this->db->select('*');
			$this->db->from('tbl_applicants_categories');
			return $this->db->get();

		}

	}