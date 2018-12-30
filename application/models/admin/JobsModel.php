<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class JobsModel extends CI_Model {


				public $tbl = 'tbl_establishments_jobposts';


		public function LoadMasterlist($id = null) {
			$this->db->select('ej.*, ej.IsActive as ActiveStatus');
			$this->db->from('tbl_establishments_jobposts ej');
			if (!empty($id)) {
				$this->db->where('Id',$id);
				return $this->db->get()->result();
			}else {
				$this->db->where('IsActive','1');
				return $this->db->get();
			}
			
		}

		public function LoadMasterlistPending($id = null) {
			$this->db->select('ej.*, e.CompanyName as comname, ej.IsActive as PendingStatus');
			$this->db->from('tbl_establishments_jobposts ej');
			$this->db->join('tbl_establishments e', 'ej.EstablishmentId = e.Id', 'left outer');			

			if (!empty($id)) {
				$this->db->where('Id',$id);
				return $this->db->get()->result();
			}else {
				$this->db->where('ej.IsActive','0');
				
				return $this->db->get();
			}
			
		}

		public function Add($data) {

			 
		
			$data['Specialization'] = json_encode($data['Specialization']);
			$data['Category'] = json_encode($data['Category']);			
			

			
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


		
		public function Update($id, $data) {

			$data['Specialization'] = json_encode($data['Specialization']);
			$data['Category'] = json_encode($data['Category']);




		    $this->db->set('ModifiedById',"'".$this->session->userdata('userid')."'",FALSE);
		    $this->db->set('ModifiedAt','CURRENT_TIMESTAMP',FALSE);
		    $this->db->set('VersionNo', 'VersionNo+1', FALSE);  
		    $this->db->where('Id', $id);
		    $query = $this->db->update($this->tbl,$data);
			$update = $this->db->affected_rows();
			if ($update > 0) {
				$result = $this->LoadMasterlist($id);
				return $result;
			}
			else {
				return FALSE;
			}
		}

}