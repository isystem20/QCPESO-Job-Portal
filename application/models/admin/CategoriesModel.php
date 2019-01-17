<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class CategoriesModel extends CI_Model {

	    // function __construct(){
	    //     parent::__construct();
	    //     // $this->ms = $this->load->database('msql', TRUE);
	    // }



		public function LoadCategoryMasterlist($id = null) {
			$this->db->select('c.*,u.FirstName as ModFirstName,u.LastName as ModLastName');
			$this->db->from('tbl_applicants_categories c');
			$this->db->join('tbl_employees u', 'u.Id = c.ModifiedById', 'left outer ' );
			if (!empty($id)) {
				$this->db->where('c.Id',$id);
				return $this->db->get()->result();
			}else {
				$this->db->where('c.IsActive','1');
				$this->db->or_where('c.IsActive','2');
				return $this->db->get();
			}
			
		}


		public function Add($data) {
			$this->db->set('Name',"'".$data['name']."'",FALSE);
			$this->db->set('Description',"'".$data['description']."'",FALSE);
			$this->db->set('CreatedById',"'".$this->session->userdata('userid')."'",FALSE);
			$this->db->set('ModifiedById',"'".$this->session->userdata('userid')."'",FALSE);	
			$this->db->set('IsActive',"'".$data['status']."'",FALSE);

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
			$this->db->set('Name','"[Del-'.strtotime(date('Y-m-d H:i:s')).']~'.$data['name'].'"',FALSE);
			$this->db->set('IsActive','"0"',FALSE);
			$this->db->where('Id', $data['id']);
			$this->db->update('tbl_applicants_categories');
			$deleted = $this->db->affected_rows();
			if ($deleted > 0) {
				return $data;
			}else {
				FALSE;
			}

		}



		public function Update($id, $data) {
		    $this->db->set('ModifiedById',"'".$this->session->userdata('userid')."'",FALSE);
		    $this->db->set('ModifiedAt','CURRENT_TIMESTAMP',FALSE);
		    $this->db->set('VersionNo', 'VersionNo+1', FALSE);  
		    $this->db->set('Name', '"'.$data['name'].'"', FALSE); 
		    $this->db->set('Description', '"'.$data['description'].'"', FALSE); 
		    $this->db->set('IsActive', '"'.$data['status'].'"', FALSE);
		    $this->db->where('Id', $id);
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