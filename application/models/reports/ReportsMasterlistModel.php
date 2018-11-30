<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class ReportsMasterlistModel extends CI_Model {

		public function LoadReportsMasterlist($id = null) {
			$this->db->select('*');
			$this->db->from('tbl_applicants');
			if (!empty($id)) {
				$this->db->where('id',$id);
				return $this->db->get()->result();
			}else {
				$this->db->where('isActive','1');
				$this->db->or_where('isActive','2');
				return $this->db->get();
			}
			
		}