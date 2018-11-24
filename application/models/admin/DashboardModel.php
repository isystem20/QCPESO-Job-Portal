<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class DashboardModel extends CI_Model {

        public $val = '1';
    	
    public function total_Jobs(){
    		$query = $this->db->query("SELECT COUNT(JobTitle) from tbl_establishments_jobposts");
    		return $query;

		}
   	public function total_Employers(){
    		$query = $this->db->query("SELECT COUNT(CompanyName) from tbl_establishments");
    		return $query;

		}
   	public function total_Applicants(){
    		$query = $this->db->query("SELECT COUNT(Id) from tbl_applicants");
    		return $query;

		}
   	public function total_SuccessHires(){
    		$query = $this->db->query("SELECT COUNT(Applicantid) from tbl_applicants_job_applications");
    		return $query;

		}


	//	public function load_Categories() {
	//		$this->db->select('*');
	//		$this->db->from('tbl_applicants_categories');


            
	//		if (!empty($id)) {
	//			$this->db->where('id',$id);
	//			return $this->db->get()->result();

	//		}else {
      //          $this->db->where('isActive','1');
        //        $this->db->or_where('isActive','2');
		//		return $this->db->get();
		//	}
		//}
        public function load_Categories(){
           // $query = $this->db->query("SELECT description,COUNT(*) as category from `tbl_applicants_categories` where isActive="1" GROUp BY description  ORDER BY `tbl_applicants_categories`.`description`  ASC")
            //return $query;

            $this->db->select('description, COUNT(*) as `category`');
            $this->db->from('tbl_applicants_categories');
            $where="isActive = '1'";
            $this->db->where($where);
            $this->db->group_by("description");
            $this->db->order_by('description ASC');
            $query = $this->db->get();
            return $query;
        }
       

    	}
    