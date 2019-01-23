<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EmployeesModel extends CI_Model {
    function __construct() {
        parent::__construct();
        $this->load->library('Uuid');
    }

    public $tbl = 'tbl_employees';
  

   public function LoadMasterlist($id = null) {
           
       $this->db->select('a.*,a.Id as Id,u.Id as UId, a.Remarks as Remarks, a.ModifiedAt as ModifiedAt, a.ModifiedById as ModifiedById');
        $this->db->from($this->tbl.' a');
        $this->db->join('tbl_security_users u', 'u.PeopleId = a.Id', 'left outer');
        if (!empty($id)) {
            $this->db->where('a.Id', $id);
             return $this->db->get()->result();
              }
               else {
            $this->db->where('a.IsActive', '1');
            $this->db->or_where('a.IsActive', '2');
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
      
        $this->db->set('CreatedById', "'".$this->session->userdata('userid').
            "'", FALSE);
         $this->db->set('CreatedAt','CURRENT_TIMESTAMP',FALSE);
        $this->db->set('ModifiedById', "'".$this->session->userdata('userid').
            "'", FALSE);
          $this->db->set('ModifiedAt','CURRENT_TIMESTAMP',FALSE);
        $this->db->insert('tbl_employees', $data);

            $UserId = $this->uuid->v4();
        
         $this->db->flush_cache();
            // $position = $data['']
            $password = $data['SSS'];
            $key = $this->config->item('encryption_key');
            $salt1 = hash('sha512', $key . $password);
            $salt2 = hash('sha512', $password . $key);
            $hashed_password = hash('sha512', $salt1 . $password . $salt2);
            // echo $data['password'] = $hashed_password;
          


            $this->db->set('Id',"'".$id."'",FALSE);
          
                $this->db->set('LoginName',"'".$data['EmailAddress']."@qcpeso.com'",FALSE);
                $this->db->set('Email',"'".$data['EmailAddress']."@qcpeso.com'",FALSE);
             
           
            $this->db->set('PasswordHash',"'".$hashed_password."'",FALSE);
            $this->db->set('SecurityUserLevelId',"'3'",FALSE);
            $this->db->set('CreatedById',"'".$this->session->userdata('userid')."'",FALSE);
               $this->db->set('CreatedAt','CURRENT_TIMESTAMP',FALSE);
            $this->db->set('ModifiedById',"'".$this->session->userdata('userid')."'",FALSE);
            $this->db->set('ModifiedAt','CURRENT_TIMESTAMP',FALSE);
            $this->db->set('UserType',"'OFFICESTAFF'",FALSE); 
            $this->db->set('PeopleId',"'".$id."'",FALSE);           
          
            $this->db->insert('tbl_security_users');

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
            $result = $this->LoadMasterlist($id);
            return $result;
        }

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
         $UserId = $this->uuid->v4();
        
         $this->db->flush_cache();
            $password = $data['SSS'];
            $key = $this->config->item('encryption_key');
            $salt1 = hash('sha512', $key . $password);
            $salt2 = hash('sha512', $password . $key);
            $hashed_password = hash('sha512', $salt1 . $password . $salt2);
            // echo $data['password'] = $hashed_password;
          


            $this->db->set('Id',"'".$id."'",FALSE);
           $this->db->set('LoginName',"'".$data['EmailAddress']."@qcpeso.com'",FALSE);
                $this->db->set('Email',"'".$data['EmailAddress']."@qcpeso.com'",FALSE);
             
           
            $this->db->set('PasswordHash',"'".$hashed_password."'",FALSE);

            $this->db->set('ModifiedById',"'".$this->session->userdata('userid')."'",FALSE);
            $this->db->set('ModifiedAt','CURRENT_TIMESTAMP',FALSE);        
            $this->db->where('Id', $id);
            $this->db->update('tbl_security_users');
        
  
        $this->db->set('ModifiedById', "'".$this->session->userdata('userid').
            "'", FALSE);

       
        $this->db->set('ModifiedAt', 'CURRENT_TIMESTAMP', FALSE);
       
        $this->db->where('Id', $id);
       
        $this->db->update($this->tbl, $data);
          // die($this->db->last_query());
        $update = $this->db->affected_rows();
       if ($update > 0) {
           return TRUE;
        } else {
            return FALSE;
        }

        
     

       
    }

  }