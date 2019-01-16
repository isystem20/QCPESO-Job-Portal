<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class ApplicantDashboardModel extends CI_Model {

	//public $where = $this->session->user_data('userid');
		 
	 public function myTotalJobApplication(){
            $this->db->select('Count(Id) as `ID`');
            $this->db->from('tbl_applicants_job_applications');
           
            $this->db->where('Id', $this->session->userdata('userid'));
            $query=$this->db->get();
				return $query;

		// $query = $this->db->query("SELECT COunt(Id) as ID FROM `tbl_applicants_job_applications` where Id = $this->session->userdata('userid')");
		// 	return $query;


        }
        public function myTotalApprovedJob(){
            $this->db->select('Count(Id) as `ID`');
            $this->db->from('tbl_applicants_job_applications');
           
            $this->db->where('Id', $this->session->userdata('userid'));
            $this->db->where('IsActive','2');
            $query=$this->db->get();
				return $query;


}
 public function myTotalRejectJob(){
            $this->db->select('Count(Id) as `ID`');
            $this->db->from('tbl_applicants_job_applications');
           
            $this->db->where('Id', $this->session->userdata('userid'));
            $this->db->where('IsActive','1');
            $query=$this->db->get();
				return $query;


}
		public function myPendingJobs(){
		// 	Select 
		// t2.JobTitle as jobname,
  //       t1.IsActive as IsActive
		// from tbl_applicants_job_applications t1 
		// left join tbl_establishments_jobposts t2 on t2.Id = t1.JobPostId
		// where t1.ApplicantId = 2
		// and t1.IsActive = 0

		$this->db->select('t2.JobTitle as jobname, t1.IsActive as IsActive');
		$this->db->from('tbl_applicants_job_applications t1');
		$this->db->join('tbl_establishments_jobposts t2',' t2.Id = t1.JobPostId', 'left');
		$this->db->where('t1.ApplicantId', $this->session->userdata('userid'));
		$this->db->where('t1.IsActive','0');
		// $this->db->limit();
		$query = $this->db->get();
		return $query;
		}

		public function myRecentJobs(){

			 $this->db->select('CompanyName, HeldPosition, CreatedAt');
            $this->db->from('tbl_applicants_work_history');
           
            $this->db->where('Id', $this->session->userdata('userid'));
            
            $query=$this->db->get();
				return $query;
		}

	}