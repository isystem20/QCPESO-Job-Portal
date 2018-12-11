<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class BrowseJobModel extends CI_Model {

		public function  BrowseJobModelMasterlist($data = null) {
			$this->db->select('*');
			$this->db->from('tbl_establishments_jobposts');
			if (!empty($data['searchtext'])) {
				$this->db->like('JobTitle',$data['searchtext']);
			}
			if (!empty($data['Categories'])) {
				$this->db->group_start();
				$c = 0 ;

				foreach ($data['Categories'] as $Category) {
					if ($c == 0 ) {
					$this->db->like('Category',$Category);	
					}
					else{
						$this->db->or_like('Category',$Category);
					}
					$c = $c + 1;
				}
				$this->db->group_end();
			}
			if (!empty($data['Specialization'])) {
				$this->db->group_start();
				$c = 0 ;

				foreach ($data['Specialization'] as $Specialization) {
					if ($c == 0 ) {
					$this->db->like('Specialization',$Specialization);	
					}
					else{
						$this->db->or_like('Specialization',$Specialization);
					}
					$c = $c + 1;
				}
				$this->db->group_end();
			}
			if (!empty($data['EmploymentLevel'])) {
							$this->db->group_start();
							$c = 0 ;

							foreach ($data['EmploymentLevel'] as $EmploymentLevel) {
								if ($c == 0 ) {
								$this->db->like('PositionLevelId',$EmploymentLevel);	
								}
								else{
									$this->db->or_like('PositionLevelId',$EmploymentLevel);
								}
								$c = $c + 1;
							}
							$this->db->group_end();
						}
			return $this->db->get();
			
		}
		public function  MostRecentJobs() {
			 $this->db->select('*');
  			$this->db->order_by('Id', 'DESC');  
			$this->db->from('tbl_establishments_jobposts');
			$this->db->limit('3');
			$this->db->where('IsActive', 1);

			return $this->db->get();

		}

		}


	
// public function  BrowseJobModelMasterlist($str = null, $category = null) {
// 			$this->db->select('*');
// 			$this->db->from('tbl_establishments_jobposts');
// 			if (!empty($str)) {
// 				$this->db->like('JobTitle',$str, $category);
// 			}
// 			return $this->db->get();

// 		}