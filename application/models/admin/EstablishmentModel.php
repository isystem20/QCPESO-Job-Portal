<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class EstablishmentModel extends CI_Model {


		public $tbl = 'tbl_establishments';

		public function LoadMasterlist($id = null) {
			$this->db->select('*');
			$this->db->from($this->tbl);
			if (!empty($id)) {
				$this->db->where('id',$id);
				$this->db->where('isActive','2');
				return $this->db->get()->result();
			}else {
				// $this->db->where('isActive','1');
				$this->db->or_where('isActive','1');
				return $this->db->get();
			}
			
		}


		public function LoadMasterlistInactive($id = null) {
			$this->db->select('*');
			$this->db->from($this->tbl);
			if (!empty($id)) {
				$this->db->where('id',$id);
				$this->db->where('isActive','1');
				return $this->db->get()->result();
			}else {
				$this->db->where('isActive','2');
				// $this->db->or_where('isActive','2');
				return $this->db->get();
			}
			
		}

		// public function Add($data) {
		// 	$this->db->set('CompanyName',"'".$data['CompanyName']."'",FALSE);
		// 	$this->db->set('EstablismentType',"'".$data['EstablismentType']."'",FALSE);
		// 	$this->db->set('LandlineNum',"'".$data['LandlineNum']."'",FALSE);
		// 	$this->db->set('CompanyEmail',"'".$data['CompanyEmail']."'",FALSE);

		// 	$this->db->set('createdById',"'".$this->session->userdata('userid')."'",FALSE);
		// 	$this->db->set('modifiedById',"'".$this->session->userdata('userid')."'",FALSE);	
		// 	$this->db->set('isActive',"'".$data['status']."'",FALSE);

		// 	$this->db->insert($this->tbl);

		// 	$id = $this->db->insert_id();

		// 	if ($id > 0) {
		// 		$inserted = $this->LoadMasterlist($id);
		// 		return $inserted;
		// 	}
		// 	else {
		// 		return FALSE;
		// 	}

		// }


		public function Delete($data) {
			//filerecord = [Del-1234567890]filerecord
			$this->db->set('CompanyName','"[Del-'.strtotime(date('Y-m-d H:i:s')).']~'.$data['name'].'"',FALSE);
			$this->db->set('isActive','"0"',FALSE);
			$this->db->where('Id', $data['Id']);
			$this->db->update('tbl_establishments');
			$deleted = $this->db->affected_rows();
			if ($deleted > 0) {
				return $data;
			}else {
				FALSE;
			}

		}



		// public function Update($id, $data) {
		//     $this->db->set('modifiedById',"'".$this->session->userdata('userid')."'",FALSE);
		//     $this->db->set('modifiedAt','CURRENT_TIMESTAMP',FALSE);
		//     $this->db->set('VersionNo', 'VersionNo+1', FALSE);  
		//     $this->db->set('name', '"'.$data['name'].'"', FALSE); 
		//     $this->db->set('description', '"'.$data['description'].'"', FALSE); 
		//     $this->db->set('isActive', '"'.$data['status'].'"', FALSE);
		//     $this->db->where('id', $id);
		//     $query = $this->db->update($this->tbl);
		// 	$update = $this->db->affected_rows();
		// 	if ($update > 0) {
		// 		$result = $this->LoadMasterlist($id);
		// 		return $result;
		// 	}
		// 	else {
		// 		return FALSE;
		// 	}
		// }



	}