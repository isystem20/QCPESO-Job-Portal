<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class MyApplicationModel extends CI_Model {
		 
		public $tbl = 'tbl_applicants_job_applications';

		public function LoadMasterlist($id = null) {
			$this->db->select('app.*, app.ModifiedDate as ModifiedDate');
			$this->db->from('tbl_applicants_job_applications'.' app');
			if (!empty($id)) {
				
				return $this->db->get()->result();
			}else {
				$this->db->where('app.ApplicantId',$this->session->userdata('peopleid'));
				$this->db->where('app.isActive','1');
				$this->db->or_where('app.isActive','2');
				$query=$this->db->get();
				return $query;
				// die($this->db->last_query());
			}
			
		}



		public function Delete($data) {
			//filerecord = [Del-1234567890]filerecord
			$this->db->set('ApplicantId','"[Del-'.strtotime(date('Y-m-d H:i:s')).']~'.$data['name'].'"',FALSE);
			$this->db->set('IsActive','"0"',FALSE);
			$this->db->where('id', $data['id']);
			$this->db->update($this->tbl);
			$deleted = $this->db->affected_rows();
			if ($deleted > 0) {
				return $data;
			}else {
				FALSE;
			}

		}



	}