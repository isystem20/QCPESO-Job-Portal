<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class MasterlistModel extends CI_Model {

		public function LoadMasterlist($id = null) {
			$this->db->select('*');
			$this->db->from('tbl_applicants_categories');
			if (!empty($id)) {
				$this->db->where('id',$id);
				return $this->db->get()->result();
			}else {
				$this->db->where('isActive','1');
				$this->db->or_where('isActive','2');
				return $this->db->get();
			}
			
		}