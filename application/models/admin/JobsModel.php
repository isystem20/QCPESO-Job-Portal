<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class JobsModel extends CI_Model {

		public function LoadMasterlist($id = null) {
			$this->db->select('*');
			$this->db->from('tbl_establishments_jobposts');
			if (!empty($id)) {
				$this->db->where('id',$id);
				return $this->db->get()->result();
			}else {
				$this->db->where('isActive','1');
				$this->db->or_where('isActive','2');
				return $this->db->get();
			}
			
		}


		public function Add($data) {
			$this->db->set('JobTitle',"'".$data['jtitle']."'",FALSE);
			$this->db->set('Specialization',"'".$data['speci']."'",FALSE);
			$this->db->set('EmpTypeId',"'".$data['emptype']."'",FALSE);
			$this->db->set('PositionLevelId',"'".$data['postlevel']."'",FALSE);	
			$this->db->set('JobDescription',"'".$data['jobdesc']."'",FALSE);
			$this->db->set('Salary',"'".$data['salary']."'",FALSE);
			$this->db->set('CreatedById',"'".$this->session->userdata('userid')."'",FALSE);
			$this->db->set('ModifiedById',"'".$this->session->userdata('userid')."'",FALSE);	
			
			$this->db->set('IsActive',"'".$data['stat']."'",FALSE);

			$this->db->insert('tbl_establishments_jobposts');

			

		}

}