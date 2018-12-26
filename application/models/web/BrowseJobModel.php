<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class BrowseJobModel extends CI_Model {

		public function  BrowseJobModelMasterlist($data = null, $id = null, $userid = null) {
			$this->db->select('ej.* ,"" as CategList, "" as SkillReq,estab.CompanyName,apposition.Name app_position,dress.Name dresscode,appemtype.Name apptype,appemlevel.Description applevel,(select count(Id) from tbl_applicants_job_applications where JobPostId = ej.Id and ApplicantId = "'.$userid.'" ) as AppliedJob');
			$this->db->from('tbl_establishments_jobposts ej');
			$this->db->join('tbl_establishments estab', 'estab.Id = ej.EstablishmentId', 'left outer');
			$this->db->join('tbl_applicants_positions apposition', 'apposition.Id = ej.PositionLevelId', 'left outer');
			//$this->db->join('tbl_applicants_levels applevel', 'applevel.Id = ej.EmpTypeId', 'left outer');
			//$this->db->join('tbl_establishment_industries industry', 'industry.Id = ej.IndustryId', 'left outer');
			$this->db->join('tbl_dresscodes dress', 'dress.Id = ej.DressCodeId', 'left outer');
			$this->db->join('tbl_applicants_employment_types appemtype', 'appemtype.Id = ej.EmpTypeId', 'left outer');
			$this->db->join('tbl_applicants_employment_level appemlevel', 'appemlevel.Id = ej.EmpLevelId', 'left outer');
			
			if (!empty($data['searchtext'])) {
				$this->db->like('ej.JobTitle',$data['searchtext']);
			}
			if (!empty($data['Categories'])) {
				$this->db->group_start();
				$c = 0 ;

				foreach ($data['Categories'] as $Category) {
					if ($c == 0 ) {
					$this->db->like('ej.Category',$Category);	
					}
					else{
						$this->db->or_like('ej.Category',$Category);
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
					$this->db->like('ej.Specialization',$Specialization);	
					}
					else{
						$this->db->or_like('ej.Specialization',$Specialization);
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
								$this->db->like('ej.PositionLevelId',$EmploymentLevel);	
								}
								else{
									$this->db->or_like('ej.PositionLevelId',$EmploymentLevel);
								}
								$c = $c + 1;
							}
							$this->db->group_end();
						}
			if (!empty($id)) {
				$this->db->where('ej.Id',$id);
			}

			$query = $this->db->get();  
			//die($this->db->last_query());
			if ($query->num_rows() > 0 && !empty($id)  ) {
				$result = $query->result();
				foreach ($result as &$object) {
					$object->CategList = $this->GetMultipleData('tbl_applicants_categories', json_decode($object->Category));
					$object->SkillReq = $this->GetMultipleData('tbl_applicants_skills', json_decode($object->Specialization));



				}


			}
			return $query;
			
		}

		function GetMultipleData($table, $array){
			 $this->db->select('*');
			 $this->db->from($table);
			 $this->db->where('IsActive', 1);
			 $this->db->group_start();
			 foreach ($array as $value) {
			 	$this->db->or_where('Id', $value);
			 }
			 	$this->db->group_end();
			 	return $this->db->get()->result();
		}

		public function  CompanyRecentJobs($Id = null) {
			
			 $this->db->select('*');
  			$this->db->order_by('Id', 'DESC');  
			$this->db->from('tbl_establishments_jobposts');
			$this->db->limit('3');
			$this->db->where('EstablishmentId',$Id);
			$this->db->where('IsActive', 1);
			

			return $this->db->get();

		}
		public function  MostRecentJobs() {
			 $this->db->select('*');
  			$this->db->order_by('Id', 'DESC');  
			$this->db->from('tbl_establishments_jobposts');
			$this->db->limit('3');
			$this->db->where('IsActive', 1);
			//$this->db->where('EstablishmentId', $Id);

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