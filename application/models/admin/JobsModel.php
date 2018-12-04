<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class JobsModel extends CI_Model {


		public $tbl = 'tbl_establishments_jobposts';

		public function LoadMasterlist($id = null) {
			$this->db->select('*');
			$this->db->from($this->tbl);
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
			// $this->db->set('JobTitle',"'".$data['JobTitle']."'",FALSE);
			// $this->db->set('Specialization',"'".json_encode($data['Specialization'])."'",FALSE);
			// $this->db->set('EstablishmentId',"'".$data['EstablishmentId']."'",FALSE);
			// $this->db->set('EmpTypeId',"'".$data['EmpTypeId']."'",FALSE);
			// $this->db->set('PositionLevelId',"'".$data['PositionLevelId']."'",FALSE);	
			// $this->db->set('JobDescription',"'".$data['JobDescription']."'",FALSE);
			// $this->db->set('Salary',"'".$data['Salary']."'",FALSE);
			$data['Specialization'] = json_encode($data['Specialization']);
			
			$this->db->set('CreatedById',"'".$this->session->userdata('userid')."'",FALSE);
			$this->db->set('ModifiedById',"'".$this->session->userdata('userid')."'",FALSE);	

			$this->db->insert($this->tbl,$data);

			$added = $this->db->insert_id();

			if ($added > 0) {
                $inserted = $this->LoadMasterlist($added);
                return $inserted;
            }
            else {
                return FALSE;
            }
		}

			public function Delete($data) {
			//filerecord = [Del-1234567890]filerecord
			$this->db->set('JobTitle','"[Del-'.strtotime(date('Y-m-d H:i:s')).']~'.$data['name'].'"',FALSE);
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