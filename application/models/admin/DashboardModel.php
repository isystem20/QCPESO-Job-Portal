<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class DashboardModel extends CI_Model {

       
        
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
        // 0 rejected, 1 pending, 2 hired
            $query = $this->db->query("SELECT COUNT(Applicantid) as countsuccess from tbl_applicants_job_applications where IsActive ='2' ");
            return $query;

        }

        public function load_Categories(){
           // $query = $this->db->query("SELECT description,COUNT(*) as category from `tbl_applicants_categories` where isActive="1" GROUp BY description  ORDER BY `tbl_applicants_categories`.`description`  ASC")
            //return $query;

            $this->db->select('description, COUNT(*) as `category`');
            $this->db->from('tbl_applicants_categories');
            $where="isActive = '1'";
            $this->db->where($where);
            $this->db->group_by("description");
            $this->db->order_by('description ASC');
            $this->db->limit(6);
            $query = $this->db->get();
            return $query;
        }

        public function load_Dashboard2(){
            //Do not Delete this comment
       
            $query = $this->db->query("SELECT Year(CreatedAt) as Year, LEFT(MonthName(CreatedAt), 3) as Month, Month(CreatedAt) as MO, Count(CreatedAt)as Days From tbl_establishments  where Day(CreatedAt) Between 0 and 32 Group By Month Order By MO ASC");

            return $query->result();
           
           
        }
        public function load_Dashboard1(){
            //Do not Delete this comment
       
            $query = $this->db->query("SELECT Year(CreatedAt) as Year, LEFT(MonthName(CreatedAt), 3) as Month, Month(CreatedAt) as MO, Count(CreatedAt)as Days From tbl_applicants where Day(CreatedAt) Between 0 and 32 Group By Month Order By MO ASC");

            return $query->result();
           
           
        }

        // public function load_RecentHired(){


            // $query = $this->db->query("SELECT 
            //     t1.ApplicantId as Apptbl, 
            //     t2.Id as Ajatbl,
            //     t2.LastName as Lastname, 
            //     t2.FirstName as Firstname, 
            //     t3.JobTitle as Jobtitle, 
            //     t1.IsActive as Isactive,
            //     t1.ModifiedDate as dateaccepted 
            //     From tbl_applicants_job_applications t1 
            //     Left Join tbl_applicants t2 on t2.id = t1.ApplicantId 
            //     Left join tbl_establishments_jobposts t3 on t3.Id = t1.JobPostId
            //      where t1.IsActive ='2'
            //      GRoup By Apptbl 
            //      Order by dateaccepted desc");

        //     return $query->get();
        // }
       public function load_RecentHired(){
        $this->db->select('t1.ApplicantId as Apptbl, t2.Id as Ajatbl,t2.LastName as Lastname, t2.FirstName as Firstname,t2.MiddleName as Middlename, t3.JobTitle as Jobtitle, t1.IsActive as Isactive,t1.ModifiedDate as dateaccepted');
            $this->db->from('tbl_applicants_job_applications as t1');
            $this->db->join('tbl_applicants t2', 't2.id = t1.ApplicantId', 'left');
            $this->db->join('tbl_establishments_jobposts t3', 't3.Id = t1.JobPostId', 'left');
            $where="t1.IsActive = '3'";
            $this->db->where($where);
            //$this->db->limit(5);
            $this->db->group_by('Apptbl');
            $this->db->order_by('dateaccepted DESC');

            return $this->db->get();
       }

       
       public function load_ReferredApplicants(){
         $query = $this->db->query("SELECT Count(ApplicantId) as ReferredApplicants, TotalApplicants from (Select ApplicantId from tbl_applicants_job_applications  Group by ApplicantId) xDerived, (Select Count(Id) as TotalApplicants from tbl_applicants) xDerived1");
         return $query;
}

       
    
       

        }
        
    