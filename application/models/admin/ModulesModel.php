<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class ModulesModel extends CI_Model {


		//public $tbl = 'tbl_security_modules sm';
		public $tbl = 'tbl_security_modules sm';
		public function LoadModuleslist($id = null) {
			$this->db->select('sm.*,secmod.Name Parentname');
			//$this->db->select('*');
			
			//$this->db->from($this->tbl);
			$this->db->from($this->tbl);
			$this->db->join('tbl_security_modules secmod','secmod.Id = sm.Parent', 'left outer');

			if (!empty($id)) {
				$this->db->where('sm.id',$id);
				return $this->db->get()->result();
			}else {
				$this->db->where('sm.isActive','1');
				$this->db->or_where('sm.isActive','2');
				return $this->db->get();
			}
				
		}


		public function Add($data) {
			$this->db->set('Name',"'".$data['name']."'",FALSE);
			$this->db->set('Url',"'".$data['url']."'",FALSE);
			$this->db->set('Parent',"'".$data['parent']."'",FALSE);
<<<<<<< HEAD
			$this->db->set('Description',"'".$data['description']."'",FALSE);
=======
>>>>>>> 51a1100072dd8e67281e7c19c39fd338194549ed
			$this->db->set('CreatedBy',"'".$this->session->userdata('userid')."'",FALSE);
			$this->db->set('ModifiedById',"'".$this->session->userdata('userid')."'",FALSE);	
			$this->db->set('IsActive',"'".$data['visible']."'",FALSE);

			$this->db->insert($this->tbl);

			$id = $this->db->insert_id();

			if ($id > 0) {
				$inserted = $this->LoadModuleslist($id);
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
			$this->db->update($this->tbl);
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
<<<<<<< HEAD
		    $this->db->set('Name', '"'.$data['name'].'"', FALSE);
		    $this->db->set('Url', '"'.$data['url'].'"', FALSE);
		    $this->db->set('Parent', '"'.$data['parent'].'"', FALSE); 
		    $this->db->set('Description', '"'.$data['description'].'"', FALSE); 
		    $this->db->set('IsActive', '"'.$data['status'].'"', FALSE);
		    $this->db->where('Id', $id);
=======
		    $this->db->set('name', '"'.$data['name'].'"', FALSE); 
		    $this->db->set('description', '"'.$data['description'].'"', FALSE); 
		    $this->db->set('isActive', '"'.$data['status'].'"', FALSE);
		    $this->db->where('id', $id);
>>>>>>> 51a1100072dd8e67281e7c19c39fd338194549ed
		    $query = $this->db->update($this->tbl);
			$update = $this->db->affected_rows();
			if ($update > 0) {
				$result = $this->LoadModuleslist($id);
				return $result;
			}
			else {
				return FALSE;
			}
		}



	}