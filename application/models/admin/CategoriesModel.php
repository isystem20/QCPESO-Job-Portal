<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class CategoriesModel extends CI_Model {

	    // function __construct(){
	    //     parent::__construct();
	    //     // $this->ms = $this->load->database('msql', TRUE);
	    // }



		public function LoadCategoryMasterlist($id = null) {
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


		public function Add($data) {
			$this->db->set('name',"'".$data['name']."'",FALSE);
			$this->db->set('description',"'".$data['description']."'",FALSE);
			$this->db->set('createdById',"'".$this->session->userdata('userid')."'",FALSE);
			$this->db->set('modifiedById',"'".$this->session->userdata('userid')."'",FALSE);	
			$this->db->set('isActive',"'".$data['status']."'",FALSE);

			$this->db->insert('tbl_applicants_categories');

			$id = $this->db->insert_id();

			if ($id > 0) {
				$inserted = $this->LoadCategoryMasterlist($id);
				return $inserted;
			}
			else {
				return FALSE;
			}

		}


		public function Delete($data) {
			//filerecord = [Del-1234567890]filerecord
			$this->db->set('name','"[Del-'.strtotime(date('Y-m-d H:i:s')).']~'.$data['name'].'"',FALSE);
			$this->db->set('isActive','"0"',FALSE);
			$this->db->where('id', $data['id']);
			$this->db->update('tbl_applicants_categories');
			$deleted = $this->db->affected_rows();
			if ($deleted > 0) {
				return $data;
			}else {
				FALSE;
			}

		}



		public function Update($id, $data) {
		    $this->db->set('modifiedById',"'".$this->session->userdata('userid')."'",FALSE);
		    $this->db->set('modifiedAt','CURRENT_TIMESTAMP',FALSE);
		    $this->db->set('VersionNo', 'VersionNo+1', FALSE);  
		    $this->db->set('name', '"'.$data['name'].'"', FALSE); 
		    $this->db->set('description', '"'.$data['description'].'"', FALSE); 
		    $this->db->set('isActive', '"'.$data['status'].'"', FALSE);
		    $this->db->where('id', $id);
		    $query = $this->db->update('tbl_applicants_categories');
			$update = $this->db->affected_rows();
			if ($update > 0) {
				$result = $this->LoadCategoryMasterlist($id);
				return $result;
			}
			else {
				return FALSE;
			}
		}



	}