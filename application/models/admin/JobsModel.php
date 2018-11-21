<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class JobsModel extends CI_Model {

		// public function LoadCategoryMasterlist($id = null) {
		// 	$this->db->select('*');
		// 	$this->db->from('tbl_applicants_categories');
		// 	if (!empty($id)) {
		// 		$this->db->where('id',$id);
		// 		return $this->db->get()->result();
		// 	}else {
		// 		$this->db->where('isActive','1');
		// 		$this->db->or_where('isActive','2');
		// 		return $this->db->get();
		// 	}
			
		// }


		public function Add($data) {
			$this->db->set('JobTiltle',"'".$data['jobtitle']."'",FALSE);
			$this->db->set('Specialization',"'".$data['spec']."'",FALSE);
			$this->db->set('EmplTypeId',"'".$data['emptype']."'",FALSE);
			$this->db->set('PositionLevelId',"'".$data['postlevel']."'",FALSE);	
			$this->db->set('JobDescription',"'".$data['jobdesc']."'",FALSE);

			$this->db->insert('tbl_establishments_jobposts');

			

		}

}