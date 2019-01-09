
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ReportsApplicationsModel extends CI_Model {
    function __construct() {
        parent::__construct();
        $this->load->library('Uuid');
    }
    // public $categories ='tbl_applicants_categories';
    // public $tbl ='tbl_applicants_job_applications';
    // public $work ='tbl_applicants_work_history';
    // public $skill ='tbl_applicants_skills';
    // public $educ ='tbl_applicants_schools_attended';
    // public $dependent ='tbl_applicants_dependents';
    public $applications ='tbl_applicants_job_applications';
    // public $industries = 'tbl_establishment_industries';

    public function LoadReportsApplications($id = null, $filter = null) {
         $this->db->select('*');
            $this->db->from($this->applications);
            if (!empty($id)) {
                $this->db->where('id',$id);
                return $this->db->get()->result();
            }else {
                $this->db->where('isActive','1');
                return $this->db->get();
            }

        // $this->db->select('a.*,u.*,a.Id as Id, U.Id as UId, a.Remarks as Remarks, a.ModifiedDate as ModifiedDate, a.ModifiedById as ModifiedById,"" as WorkTbl, "" as SkillTbl, "" as EducTbl,"" as DependentTbl',"a.ApplicantId");
        // $this->db->from($this->applications.' a');
        // $this->db->join('tbl_applicants_job_applications', 'u.PeopleId = a.Id', 'left outer');
        // if (!empty($id)) {
        //     $this->db->where('a.Id', $id);
        //     $query = $this->db->get();
        //     if ($query->num_rows() > 0) {
        //         foreach ($query->result() as $row) {

        //             // Select * From tbl_work_history where applicantid = Id
        //            $this->db->flush_cache();
        //            $this->db->select('*');
        //            $this->db->from($this->work);
        //            $this->db->where('ApplicantId', $id);
        //            $row->WorkTbl = $this->db->get();


        //            $this->db->flush_cache();
        //            $this->db->select('*');
        //            $this->db->from($this->skill);
        //            $this->db->where('ApplicantId', $id);
        //            $row->SkillTbl = $this->db->get();

        //            $this->db->flush_cache();
        //            $this->db->select('*');
        //            $this->db->from($this->applications);
        //            $this->db->where('ApplicantId', $id);
        //            $row->EducTbl = $this->db->get();

        //           $this->db->flush_cache();
        //            $this->db->select('*');
        //            $this->db->from($this->industries);
        //            $this->db->where('ApplicantId', $id);
        //            $row->DependentTbl = $this->db->get();

                  
        //         }
        //      }
        //      return $query->result();
        // } 
        // else {
          if (!empty($filter)) {
             $this->db->like('a.Id', $filter['id']);
             $this->db->like('ApplicantId', $filter['applicantid']);
             $this->db->like('a.JobPostId', $filter['jobpostid']);
             // $this->db->like('a.ApplicationDate', $filter['applicationdate']);
             // $this->db->like('a.CreatedAt', $filter['CreatedAt']);
          }
          else
          {
            $this->db->where('a.isActive', '1');
            $this->db->or_where('a.isActive', '2');
          }
            
            $query = $this->db->get();
            return $query;
        }
       // die($this->db->last_query());
        
    }

    // public function LoadCategories($id = null) {
    //         $this->db->select('*');
    //         $this->db->from($this->categories);
    //         if (!empty($id)) {
    //             $this->db->where('id',$id);
    //             return $this->db->get()->result();
    //         }else {
    //             $this->db->where('isActive','1');
    //             return $this->db->get();
    //         }
            
            
        // }


// }