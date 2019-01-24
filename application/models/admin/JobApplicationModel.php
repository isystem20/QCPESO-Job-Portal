<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class JobApplicationModel extends CI_Model {


		public $tbl = 'tbl_applicants_job_applications';

		public function LoadMasterlist($id = null) {
			$this->db->select('*');
			$this->db->from($this->tbl);
			if (!empty($id)) {
				$this->db->where('id',$id);
				return $this->db->get()->result();
			}else {
				$this->db->where('IsActive','1');
				$this->db->or_where('isActive','2');
				return $this->db->get();
			}
			if (!empty($id)) {
				$this->db->where('Id',$id);
			}

			$query = $this->db->get(); 
			
		}

		function LoadApplicationsMasterlist() {
			$this->db->select('ja.*,ja.IsActive as ApplicationStatus,ja.ApplicationDate,a.*, a.Id as ApplicantId, a.IsActive as ApplicantStatus, j.*, j.Id as JobId, e.*, e.Id as EstablishmentId');
			$this->db->from('tbl_applicants_job_applications ja');
			$this->db->join('tbl_applicants a','a.Id = ja.ApplicantId', 'left outer');
			$this->db->join('tbl_establishments_jobposts j','j.Id = ja.JobPostId','left outer');
			$this->db->join('tbl_establishments e','e.Id = j.EstablishmentId','left outer');
			$this->db->where('ja.IsActive', 2);
			$get = $this->db->get();
			// die($this->db->last_query());
			return $get;
		}


		public function  Add($data) {
			// /$this->db->set('name',"'".$data['name']."'",FALSE);
			// /$this->db->set('description',"'".$data['description']."'",FALSE);
			// /$this->db->set('createdById',"'".$this->session->userdata('userid')."'",FALSE);
			// /$this->db->set('modifiedById',"'".$this->session->userdata('userid')."'",FALSE);	
			// /$this->db->set('isActive',"'".$data['status']."'",FALSE);

			$this->db->set('ApplicantId',"'".$data['ApplicantId']."'",FALSE);
			$this->db->set('JobPostId',"'".$data['JobId']."'",FALSE);

			$this->db->insert($this->tbl);

			$id = $this->db->insert_id();

			if ($id > 0) {
				$inserted = $this->LoadMasterlist($id);
				return $inserted;
			}
			else {
				return FALSE;
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



		public function Update($id, $data) {
		   
		    $this->db->set('ApplicantId', '"'.$data['name'].'"', FALSE); 
		   
		    $this->db->set('isActive', '"'.$data['status'].'"', FALSE);
		    $this->db->where('id', $id);
		    $query = $this->db->update($this->tbl);
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