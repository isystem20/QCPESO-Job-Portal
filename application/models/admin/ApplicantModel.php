<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ApplicantModel extends CI_Model {
    function __construct() {
        parent::__construct();
        $this->load->library('Uuid');
    }

    public $tbl = 'tbl_applicants';

    public function LoadMasterlist($id = null) {
        $this->db->select('a.*,u.*,a.Id as Id, U.Id as UId');
        $this->db->from($this->tbl.
            ' a');
        $this->db->join('tbl_security_users u', 'u.PeopleId = a.Id', 'left outer');
        if (!empty($id)) {
            $this->db->where('a.Id', $id);
            $query = $this->db->get()->result();
        } else {
            $this->db->where('a.isActive', '1');
            $this->db->or_where('a.isActive', '2');
            $query = $this->db->get();
        }
       
        return $query;
    }

    // public function ApplicantProfile($profile = FALSE){
    //     $this->db->select();
    //     $this->db->from($this->tbl);
    //      if (!empty($id)) {
    //         $this->db->where('Id',$id);
    //         return $this->db->get()->result();
    //     }else {
    //          return $this->db->get();
    //           }

    // }

    public function Add($data) {

        $this->db->trans_start();
        $this->load->library('Uuid');
        $id = $this->uuid->v4();
        $this->db->set('Id', "'".$id."'", FALSE);
        if (!empty($data["LanguageSpoken"])) {
         $this->db->set('LanguageSpoken',"'".json_encode($data["LanguageSpoken"])."'",FALSE);
         unset($data["LanguageSpoken"]);  
        }
        if (!empty($data["LanguageRead"])) {
             $this->db->set('LanguageRead',"'".json_encode($data["LanguageRead"])."'",FALSE);
             unset($data["LanguageRead"]);   
        }
         if (!empty($data["Dialect"])) {
             $this->db->set('Dialect',"'".json_encode($data["Dialect"])."'",FALSE);
             unset($data["Dialect"]);   
        }
         if (!empty($data["LanguageWritten"])) {
             $this->db->set('LanguageWritten',"'".json_encode($data["LanguageWritten"])."'",FALSE);
             unset($data["LanguageWritten"]);   
        }
          if (!empty($data["PreferredWorkLocations"])) {
             $this->db->set('PreferredWorkLocations',"'".json_encode($data["PreferredWorkLocations"])."'",FALSE);
             unset($data["PreferredWorkLocations"]);   
        }


        if (!empty($data["company_name"])) {
            $ed_s = $data['company_name'];
            $ed_h = $data['held_position'];
            $ed_c = $data['company_address'];
            $ed_f = $data['inclusive_datefrom'];
            $ed_t = $data['inclusive_dateto'];
            unset($data["company_name"]);
            unset($data['held_position']);
            unset($data['company_address']);
            unset($data['inclusive_datefrom']);
            unset($data['inclusive_dateto']);
        }

        if (!empty($data["skill_name"])) {
            $sk_name = $data['skill_name'];
            $sk_desc = $data['skill_description'];
            unset($data['skill_name']);
            unset($data['skill_description']);
        }

        if (!empty($data["school_name"])) {
            $sc_name = $data['school_name'];
            $sc_cour = $data['program_course'];
            $sc_hlvl = $data['highest_level'];
            $sc_yrgrad = $data['year_graduated'];
            $sc_yrlst = $data['year_lastattended'];
            unset($data['school_name']);
            unset($data['program_course']);
            unset($data['highest_level']);
            unset($data['year_graduated']);
            unset($data['year_lastattended']);
        }
        if (!empty($data["dependent_name"])) {
            $dp_name = $data['dependent_name'];
            $dp_desc = $data['dependent_description'];
            unset($data['dependent_name']);
            unset($data['dependent_description']);
        }
        $this->db->set('CreatedById', "'".$this->session->userdata('userid').
            "'", FALSE);
        $this->db->set('ModifiedById', "'".$this->session->userdata('userid').
            "'", FALSE);

        $this->db->insert('tbl_applicants', $data);

        
        // die($this->db->last_query());

        $this->db->trans_complete();

        if ($this->db->trans_status() === FALSE) {
            return FALSE;
        } else {
            // $this->db->set('CreatedById', "'".$this->session->userdata('userid').
            // "'", FALSE);
            // $this->db->set('ModifiedById', "'".$this->session->userdata('userid').
            // "'", FALSE);

            // $this->db->insert('tbl_security_users', $data);

            //Work History

            if (!empty($ed_s)) {
                $ctr = 0;
                foreach($ed_s as $company) {
                    $workdata = array('ApplicantId' => $id, 'CompanyName' => $company, 'HeldPosition' => $ed_h[$ctr], 'CompanyAddress' => $ed_c[$ctr], 'InclusiveDateFrom' => $ed_f[$ctr], 'InclusiveDateTo' => $ed_t[$ctr]);

                    $this->AddWorkHistory($workdata);
                    $ctr++;
                }
            }
            if (!empty($sk_name)) {
                $ctr = 0;
                foreach($sk_name as $skillname) {
                    $skilldata = array('ApplicantId' => $id, 'Name' => $skillname, 'Description' => $sk_desc[$ctr]);

                    $this->AddSkill($skilldata);
                    $ctr++;
                }
            }
            if (!empty($sc_name)) {
                $ctr = 0;
                foreach($sc_name as $schoolname) {
                    $schooldata = array('ApplicantId' => $id, 'SchoolName' => $schoolname, 'ProgramCourse' => $sc_cour[$ctr], 'HighestLevel' => $sc_hlvl[$ctr], 'YearGraduated' => $sc_yrgrad[$ctr], 'YearLastAttended' => $sc_yrlst[$ctr]);

                    $this->AddSchool($schooldata);
                    $ctr++;
                }
            }
            if (!empty($dp_name)) {
                $ctr = 0;
                foreach($dp_name as $dependentname) {
                    $dependentdata = array('ApplicantId' => $id, 'Name' => $dependentname, 'Description' => $dp_desc[$ctr]);

                    $this->AddDependent($dependentdata);
                    $ctr++;
                }
            }
            $result = $this->LoadMasterlist($id);
            return $result;
        }

    }

    
    function AddWorkHistory($data) {
        $this->db->set('CreatedById', "'".$this->session->userdata('userid').
            "'", FALSE);
        $this->db->set('ModifiedById', "'".$this->session->userdata('userid').
            "'", FALSE);
        $this->db->insert('tbl_applicants_work_history', $data);

    }

    function AddSkill($data) {
         $this->db->set('CreatedById', "'".$this->session->userdata('userid').
            "'", FALSE);
        $this->db->set('ModifiedById', "'".$this->session->userdata('userid').
            "'", FALSE);
        $this->db->insert('tbl_applicants_skills', $data);

    }

    function AddSchool($data) {
         $this->db->set('CreatedById', "'".$this->session->userdata('userid').
            "'", FALSE);
        $this->db->set('ModifiedById', "'".$this->session->userdata('userid').
            "'", FALSE);
        $this->db->insert('tbl_applicants_schools_attended', $data);

    }

    function AddDependent($data) {
         $this->db->set('CreatedById', "'".$this->session->userdata('userid').
            "'", FALSE);
        $this->db->set('ModifiedById', "'".$this->session->userdata('userid').
            "'", FALSE);
        $this->db->insert('tbl_applicants_ofw_dependents', $data);

    }

    public function Delete($data) {
        //filerecord = [Del-1234567890]filerecord
        $this->db->set('LastName', '"[Del-'.strtotime(date('Y-m-d H:i:s')).
            ']~'.$data['name'].
            '"', FALSE);
        $this->db->set('IsActive', '"0"', FALSE);
        $this->db->where('Id', $data['id']);
        $this->db->update($this->tbl);
        $deleted = $this->db->affected_rows();
        if ($deleted > 0) {
            return $data;
        } else {
            FALSE;
        }

    }

    public function Update($id, $data) {
         if (!empty($data["LanguageSpoken"])) {
         $this->db->set('LanguageSpoken',"'".json_encode($data["LanguageSpoken"])."'",FALSE);
         unset($data["LanguageSpoken"]);  
        }
        if (!empty($data["LanguageRead"])) {
             $this->db->set('LanguageRead',"'".json_encode($data["LanguageRead"])."'",FALSE);
             unset($data["LanguageRead"]);   
        }
         if (!empty($data["Dialect"])) {
             $this->db->set('Dialect',"'".json_encode($data["Dialect"])."'",FALSE);
             unset($data["Dialect"]);   
        }
         if (!empty($data["LanguageWritten"])) {
             $this->db->set('LanguageWritten',"'".json_encode($data["LanguageWritten"])."'",FALSE);
             unset($data["LanguageWritten"]);   
        }
          if (!empty($data["PreferredWorkLocations"])) {
             $this->db->set('PreferredWorkLocations',"'".json_encode($data["PreferredWorkLocations"])."'",FALSE);
             unset($data["PreferredWorkLocations"]);   
        }


        if (!empty($data["company_name"])) {
            $ed_s = $data['company_name'];
            $ed_h = $data['held_position'];
            $ed_c = $data['company_address'];
            $ed_f = $data['inclusive_datefrom'];
            $ed_t = $data['inclusive_dateto'];
            unset($data["company_name"]);
            unset($data['held_position']);
            unset($data['company_address']);
            unset($data['inclusive_datefrom']);
            unset($data['inclusive_dateto']);
        }

        if (!empty($data["skill_name"])) {
            $sk_name = $data['skill_name'];
            $sk_desc = $data['skill_description'];
            unset($data['skill_name']);
            unset($data['skill_description']);
        }

        if (!empty($data["school_name"])) {
            $sc_name = $data['school_name'];
            $sc_cour = $data['program_course'];
            $sc_hlvl = $data['highest_level'];
            $sc_yrgrad = $data['year_graduated'];
            $sc_yrlst = $data['year_lastattended'];
            unset($data['school_name']);
            unset($data['program_course']);
            unset($data['highest_level']);
            unset($data['year_graduated']);
            unset($data['year_lastattended']);
        }
        if (!empty($data["dependent_name"])) {
            $dp_name = $data['dependent_name'];
            $dp_desc = $data['dependent_description'];
            unset($data['dependent_name']);
            unset($data['dependent_description']);
        }
        $this->db->set('CreatedById', "'".$this->session->userdata('userid').
            "'", FALSE);
        $this->db->set('ModifiedById', "'".$this->session->userdata('userid').
            "'", FALSE);

        $this->db->insert('tbl_applicants', $data);

        
        // die($this->db->last_query());

        $this->db->trans_complete();

        if ($this->db->trans_status() === FALSE) {
            return FALSE;
        } else {
            // $this->db->set('CreatedById', "'".$this->session->userdata('userid').
            // "'", FALSE);
            // $this->db->set('ModifiedById', "'".$this->session->userdata('userid').
            // "'", FALSE);

            // $this->db->insert('tbl_security_users', $data);

            //Work History

            if (!empty($ed_s)) {
                $ctr = 0;
                foreach($ed_s as $company) {
                    $workdata = array('ApplicantId' => $id, 'CompanyName' => $company, 'HeldPosition' => $ed_h[$ctr], 'CompanyAddress' => $ed_c[$ctr], 'InclusiveDateFrom' => $ed_f[$ctr], 'InclusiveDateTo' => $ed_t[$ctr]);

                    $this->AddWorkHistory($workdata);
                    $ctr++;
                }
            }
            if (!empty($sk_name)) {
                $ctr = 0;
                foreach($sk_name as $skillname) {
                    $skilldata = array('ApplicantId' => $id, 'Name' => $skillname, 'Description' => $sk_desc[$ctr]);

                    $this->AddSkill($skilldata);
                    $ctr++;
                }
            }
            if (!empty($sc_name)) {
                $ctr = 0;
                foreach($sc_name as $schoolname) {
                    $schooldata = array('ApplicantId' => $id, 'SchoolName' => $schoolname, 'ProgramCourse' => $sc_cour[$ctr], 'HighestLevel' => $sc_hlvl[$ctr], 'YearGraduated' => $sc_yrgrad[$ctr], 'YearLastAttended' => $sc_yrlst[$ctr]);

                    $this->AddSchool($schooldata);
                    $ctr++;
                }
            }
            if (!empty($dp_name)) {
                $ctr = 0;
                foreach($dp_name as $dependentname) {
                    $dependentdata = array('ApplicantId' => $id, 'Name' => $dependentname, 'Description' => $dp_desc[$ctr]);

                    $this->AddDependent($dependentdata);
                    $ctr++;
                }
            }
            $result = $this->LoadMasterlist($id);
            return $result;
        }


        // if (!empty($data["LanguageSpoken"])) {
        //     $this->db->set('LanguageSpoken', "'".json_encode($data["LanguageSpoken"]).
        //         "'", FALSE);
        //     unset($data["LanguageSpoken"]);
        // }
        // if (!empty($data["LanguageRead"])) {
        //     $this->db->set('LanguageRead', "'".json_encode($data["LanguageRead"]).
        //         "'", FALSE);
        //     unset($data["LanguageRead"]);
        // }
        // if (!empty($data["Dialect"])) {
        //     $this->db->set('Dialect', "'".json_encode($data["Dialect"]).
        //         "'", FALSE);
        //     unset($data["Dialect"]);
        // }
        // if (!empty($data["LanguageWritten"])) {
        //     $this->db->set('LanguageWritten', "'".json_encode($data["LanguageWritten"]).
        //         "'", FALSE);
        //     unset($data["LanguageWritten"]);
        // }
       
        // if (!empty($data["PreferredWorkLocations"])) {
        //     $this->db->set('PreferredWorkLocations', "'".json_encode($data["PreferredWorkLocations"]).
        //         "'", FALSE);
        //     unset($data["PreferredWorkLocations"]);
        // }
        $this->db->set('ModifiedById', "'".$this->session->userdata('userid').
            "'", FALSE);
        $this->db->set('ModifiedAt', 'CURRENT_TIMESTAMP', FALSE);
        $this->db->set('VersionNum', 'VersionNum+1', FALSE);
        $this->db->where('Id', $id);
        $query = $this->db->update($this->tbl, $data);
        $update = $this->db->affected_rows();
        if ($update > 0) {
            $result = $this->LoadMasterlist($id);
            return $result;
        } else {
            return FALSE;
        }
    }

}