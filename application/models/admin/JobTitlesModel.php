<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class JobTitlesModel extends CI_Model {

		public function Load_JobTitlesModel_Masterlist() {
			$this->db->select('*');
			$this->db->from('tbl_jobs_list');
			return $this->db->get();

		}

	}