<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class EmployerDashboardModel extends CI_Model {

		public function EmployerTotalJobs(){

			$this->db->select('Count(Id) as `ID`');
            $this->db->from('tbl_establishments_jobposts');
           
            $this->db->where('EstablishmentId', $this->session->userdata('userid'));
            $query=$this->db->get();
				return $query;

		}

		public function EmployerTotalJobsDeployed(){
			$this->db->select('Count(Id) as `ID`');
            $this->db->from('tbl_establishments_jobposts');
           
            $this->db->where('EstablishmentId', $this->session->userdata('userid'));
            $this->db->where('IsActive',1);
            $query=$this->db->get();
				return $query;

		}

		public function EmployerHiredApplicants(){
			// 	Select 
			// Count(t1.JobPostId) as jobs
			// from tbl_applicants_job_applications t1 
			// left join tbl_establishments_jobposts t2 on t2.Id = t1.JobPostId
			
			// where t1.IsActive = 1


			$this->db->select('Count(t1.JobPostId) as jobs');
			$this->db->from('tbl_applicants_job_applications t1');
			$this->db->join('tbl_establishments_jobposts t2',' t2.Id = t1.JobPostId', 'left');
			$this->db->where('t2.EstablishmentId', $this->session->userdata('userid'));
			$this->db->where('t1.IsActive','1');
			// $this->db->limit();
			$query = $this->db->get();
			return $query;
		}

		public function EmployerRejectedApplicants(){
	
			$this->db->select('Count(t1.JobPostId) as jobs');
			$this->db->from('tbl_applicants_job_applications t1');
			$this->db->join('tbl_establishments_jobposts t2',' t2.Id = t1.JobPostId', 'left');
			$this->db->where('t2.EstablishmentId', $this->session->userdata('userid'));
			$this->db->where('t1.IsActive','2');
			// $this->db->limit();
			$query = $this->db->get();
			return $query;
		}

		public function EmployerLineChart(){
			// $query = $this->db->query("SELECT Year(CreatedAt) as Year, LEFT(MonthName(CreatedAt), 3) as Month, Month(CreatedAt) as MO, Count(CreatedAt)as Days From tbl_establishments_jobposts where EstablishmentId = "$this->session->userdata('userid');" and Day(CreatedAt)  Between 0 and 32 Group By Month Order By MO ASC");

			$this->db->select('Year(CreatedAt) as Year, LEFT(MonthName(CreatedAt), 3) as Month,Month(CreatedAt) as MO,Count(CreatedAt)as Days');
			$this->db->from('tbl_establishments_jobposts');
			$this->db->where('EstablishmentId', $this->session->userdata('userid'));
			$this->db->where('Day(CreatedAt) >=',0);
			$this->db->where('Day(CreatedAt) <=',32);
			$this->db->group_by('Month');
			$this->db->order_by('MO', 'ASC');

			$query = $this->db->get();
            return $query;
		}

		//public $est = $this->session->userdata('userid')";
		// public function EmployerJobPostings(){

					

		// 	      $query = $this->db->query(SELECT
		// 	   -- xDerived.JobTitle,
		// 	   --  xDerived.IsActive,
		// 	   --  xDerived.CreatedAt,
		// 	   --  xDerived1.id1,
		// 	   --  xDerived2.id2,
		// 	   --  xDerived3.id3
		// -- 	FROM
		// -- 	    (Select JobTitle, IsActive,CreatedAt from tbl_establishments_jobposts )xDerived,
			    
		// -- 	    (Select Count(t1.Id) as id1 from tbl_applicants_job_applications t1 Left join tbl_establishments_jobposts t2 on t2.Id = t1.JobPostId where t2.EstablishmentId = $est)xDerived1,
			    
		// -- 	    (Select Count(t1.Id) as id2 from tbl_applicants_job_applications t1 Left join tbl_establishments_jobposts t2 on t2.Id = t1.JobPostId where t2.EstablishmentId = $est and t1.IsActive = '3')xDerived2,
		// -- 	    (Select Count(t1.Id) as id3 from tbl_applicants_job_applications t1 Left join tbl_establishments_jobposts t2 on t2.Id = t1.JobPostId where t2.EstablishmentId = $est and t1.IsActive = '0')xDerived3");

		       // return $query;
		public function EmployerJobPostings(){

        $this->db->select('xDerived0.JobTitle, xDerived0.IsActive, xDerived0.CreatedAt, xDerived1.id1, xDerived2.id2, xDerived3.id3');

        $this->db->from('(Select JobTitle, IsActive,CreatedAt from tbl_establishments_jobposts )xDerived0');

        $this->db->from('(Select Count(t1.Id) as id1 from tbl_applicants_job_applications t1 Left join tbl_establishments_jobposts t2 on t2.Id = t1.JobPostId where t2.EstablishmentId = "'.$this->session->userdata('userid').'") xDerived1');

        $this->db->from('(Select Count(t1.Id) as id2 from tbl_applicants_job_applications t1 Left join tbl_establishments_jobposts t2 on t2.Id = t1.JobPostId where t2.EstablishmentId = "'.$this->session->userdata('userid').'" and t1.IsActive = "3") xDerived2');

        $this->db->from('(Select Count(t1.Id) as id3 from tbl_applicants_job_applications t1 Left join tbl_establishments_jobposts t2 on t2.Id = t1.JobPostId where t2.EstablishmentId = "'.$this->session->userdata('userid').'" and t1.IsActive = "0") xDerived3');

        $query = $this->db->get();
            return $query;
    }

    public function EmployerRecentApplicants(){
    	 $this->db->select('t1.ApplicantId as Apptbl, t2.Id as Ajatbl,t2.LastName as Lastname, t2.FirstName as Firstname,t2.MiddleName as Middlename, t3.JobTitle as Jobtitle, t1.IsActive as Isactive,t1.ModifiedDate as dateaccepted');
            $this->db->from('tbl_applicants_job_applications as t1');
            $this->db->join('tbl_applicants t2', 't2.id = t1.ApplicantId', 'left');
            $this->db->join('tbl_establishments_jobposts t3', 't3.Id = t1.JobPostId', 'left');
            $where="t1.IsActive = '3'";
            $this->db->where($where);
            $this->db->where('t3.EstablishmentId',$this->session->userdata('userid'));

            //$this->db->limit(5);
            $this->db->group_by('Apptbl');
            $this->db->order_by('dateaccepted DESC');

            return $this->db->get();
    }

    public function EmployerJobsByStatus(){
//              $query = $this->db->query("SELECT Count(IsActive) as isactive,CASE WHEN IsActive = 1 then 'Active' ELSE 'Unactive' END as 'Remarks' from tbl_establishments_jobposts Group By Remarks");
//             return $query;

//             SELECT
// 	t1.IsActive1,
//     t2.IsActive2,
//     t3.IsActive3
// FROM
// 	(SELECT Count(IsActive) as IsActive1 from tbl_establishments_jobposts WHERE IsActive ='0') t1,
//     (SELECT Count(IsActive) as IsActive2 from tbl_establishments_jobposts WHERE IsActive ='1') t2,
// 	(SELECT Count(IsActive) as IsActive3 from tbl_establishments_jobposts WHERE IsActive ='2') t3

            $this->db->select('t1.IsActive1, t2.IsActive2');
            $this->db->from('(SELECT Count(IsActive) as IsActive1 from tbl_establishments_jobposts WHERE IsActive ="0" and EstablishmentId = "'.$this->session->userdata('userid').'")t1');
            // $this->db->where('t1.EstablishmentId', $this->session->userdata('userid'));
             $this->db->from('(SELECT Count(IsActive) as IsActive2 from tbl_establishments_jobposts WHERE IsActive ="1" and EstablishmentId = "'.$this->session->userdata('userid').'") t2');
              // $this->db->from('(SELECT Count(IsActive) as IsActive3 from tbl_establishments_jobposts WHERE IsActive ="2" and EstablishmentId = "'.$this->session->userdata('userid').'") t3');
             // $this->db->where('EstablishmentId', $this->session->userdata('userid'));
              return $this->db->get();

    		
             
    }

   
	// $this->db->select('Count(IsActive) as isactive', 'CASE WHEN IsActive = 1 then "Active" ELSE "Unactive" END as "Remarks"');
    	// $this->db->from('tbl_establishments_jobposts');
    	// $this->db->group_by('Remarks');
    	// $query = $this->db->get();
     //        return $query;

	}