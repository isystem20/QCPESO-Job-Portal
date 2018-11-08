<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class CategoriesModel extends CI_Model {

		public function LoadCategoryMasterlist($id = null) {
			$this->db->select('*');
			$this->db->from('tbl_applicants_categories');
			if (!empty($id)) {
				$this->db->where('id',$id);
				return $this->db->get()->result();

			}else {
				return $this->db->get();
			}
			
		}


		public function Add($data) {
			if (empty($this->session->userdata('userid'))) {
				$user = 'DEV STAGE';
			}
			else {
				$user = $this->session->userdata('userid');
			}
			$this->db->set('name',"'".$data['name']."'",FALSE);
			$this->db->set('description',"'".$data['description']."'",FALSE);
			$this->db->set('createdById',"'".$user."'",FALSE);
			$this->db->set('modifiedById',"'".$user."'",FALSE);	
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



	}