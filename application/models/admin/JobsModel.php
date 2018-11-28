<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class JobsModel extends CI_Model {


		public $tbl = 'tbl_establishments_jobposts';

		public function LoadMasterlist($id = null) {
			$this->db->select('*');
			$this->db->from('tbl_establishments_jobposts');
			if (!empty($id)) {
				$this->db->where('Id',$id);
				return $this->db->get()->result();
			}else {
				$this->db->where('IsActive','1');
				$this->db->or_where('IsActive','2');
				return $this->db->get();
			}
			
		}


		public function Add($data) {
			$this->db->set('JobTitle',"'".$data['jtitle']."'",FALSE);
			$this->db->set('Specialization',"'".$data['speci']."'",FALSE);
			$this->db->set('EstablishmentId',"'".$data['estab']."'",FALSE);
			$this->db->set('EmpTypeId',"'".$data['emptype']."'",FALSE);
			$this->db->set('PositionLevelId',"'".$data['postlevel']."'",FALSE);	
			$this->db->set('JobDescription',"'".$data['jobdesc']."'",FALSE);
			$this->db->set('Salary',"'".$data['salary']."'",FALSE);
			$this->db->set('CreatedById',"'".$this->session->userdata('userid')."'",FALSE);
			$this->db->set('ModifiedById',"'".$this->session->userdata('userid')."'",FALSE);	

			// $this->db->set('JobImage',"'".$data['jobimage']."'",FALSE);	

			
			
			$this->db->set('IsActive',"'".$data['stat']."'",FALSE);

			$this->db->insert('tbl_establishments_jobposts');			

			// $query = $this->db->insert('tbl_establishments_jobposts', $data);
			// if ($query) {
			// 	echo "alright";
			// }
			// else{
			// 	echo "error";
			// }
		}

			public function Delete($data) {
			//filerecord = [Del-1234567890]filerecord
			$this->db->set('JobTitle','"[Del-'.strtotime(date('Y-m-d H:i:s')).']~'.$data['exname'].'"',FALSE);
			$this->db->set('IsActive','"2"',FALSE);
			$this->db->where('Id', $data['id']);
			$this->db->update($this->tbl);
			$deleted = $this->db->affected_rows();
			if ($deleted > 0) {
				return $data;
			}else {
				FALSE;
			}

		}

}