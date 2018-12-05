<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class BrowseJobModel extends CI_Model {

		public function  BrowseJobModelMasterlist($str = null, $category = null) {
			$this->db->select('*');
			$this->db->from('tbl_establishments_jobposts');
			if (!empty($str)) {
				$this->db->like('JobTitle',$str);
			}
			return $this->db->get();

		}
		public function  MostRecentJobs() {
			 $this->db->select('*');
  			$this->db->order_by('Id', 'DESC');  
			$this->db->from('tbl_establishments_jobposts');
			$this->db->limit('3');
			$this->db->where('IsActive', 1);

			return $this->db->get();

		}

		}


	
