<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class EmployerModel extends CI_Model {


        public $tbl = 'tbl_establishments';

        public function LoadMasterlist($id = null) {
            $this->db->select('*');
            $this->db->from($this->tbl);
            if (!empty($id)) {
                $this->db->where('id',$id);
                return $this->db->get()->result();
            }else {
                $this->db->where('IsActive','1');
                return $this->db->get();
            }
            
        }

        public function PendingRequest($id = null) {
            $this->db->select('*');
            $this->db->from($this->tbl);
            if (!empty($id)) {
                $this->db->where('id',$id);
                return $this->db->get()->result();
            }else {
                $this->db->where('IsActive','2');
                return $this->db->get();
            }
            
        }


        public function Add($data) {

            $this->db->trans_start();
            $this->load->library('Uuid');
            $EstablishmentId = $this->uuid->v4();
            $code = rand(100000, 999999);

            $data['DressCode'] = json_encode($data['DressCode']);
            $data['SpokenLanguage'] = json_encode($data['SpokenLanguage']);


            $this->db->set('Id',"'".$EstablishmentId."'",FALSE);
            $this->db->set('CreatedById',"'".$this->session->userdata('userid')."'",FALSE);
            $this->db->set('ModifiedById',"'".$this->session->userdata('userid')."'",FALSE);    
            
            $UserId = $this->uuid->v4();
               
            $this->db->insert($this->tbl,$data);


            $this->db->flush_cache();
            $password = $data['DoleRegistration'];
            $key = $this->config->item('encryption_key');
            $salt1 = hash('sha512', $key . $password);
            $salt2 = hash('sha512', $password . $key);
            $hashed_password = hash('sha512', $salt1 . $password . $salt2);
            // echo $data['password'] = $hashed_password;

            $this->db->set('Id',"'".$UserId."'",FALSE);
            $this->db->set('LoginName',"'".$data['CompanyEmail']."'",FALSE);
            $this->db->set('PasswordHash',"'".$hashed_password."'",FALSE);
            $this->db->set('SecurityUserLevelId',"'2'",FALSE);
            $this->db->set('CreatedById',"'".$this->session->userdata('userid')."'",FALSE);
            $this->db->set('ModifiedById',"'".$this->session->userdata('userid')."'",FALSE);
            $this->db->set('UserType',"'EMPLOYER'",FALSE); 
            $this->db->set('PeopleId',"'".$EstablishmentId."'",FALSE);           
            $this->db->set('Email',"'".$data['CompanyEmail']."'",FALSE);
            $this->db->insert('tbl_security_users');

            $this->db->trans_complete();

            if ($this->db->trans_status() === FALSE)
            {
                    $this->db->trans_rollback();
                    return FALSE;

            }
            else
            {
                    $this->db->trans_commit();

                    return TRUE;

            }
                 
        }


        public function Delete($data) {
            //filerecord = [Del-1234567890]filerecord
            $this->db->set('CompanyName','"[Del-'.strtotime(date('Y-m-d H:i:s')).']~'.$data['name'].'"',FALSE);
            $this->db->set('IsActive','"0"',FALSE);
            $this->db->where('Id', $data['id']);
            $this->db->update($this->tbl);
            $deleted = $this->db->affected_rows();
            if ($deleted > 0) {
                return $data;
            }else {
                FALSE;
            }

        }



        public function Update($id, $data) {

            $data['SpokenLanguage'] = json_encode($data['SpokenLanguage']);
            $data['DressCode'] = json_encode($data['DressCode']);


            $this->db->set('ModifiedById',"'".$this->session->userdata('userid')."'",FALSE);
            $this->db->set('ModifiedAt','CURRENT_TIMESTAMP',FALSE);
            // $this->db->set('VersionNo', 'VersionNo+1', FALSE);  
            $this->db->where('Id', $id);
            $query = $this->db->update($this->tbl,$data);
            $update = $this->db->affected_rows();
            if ($update > 0) {
                $result = $this->LoadMasterlist($id);
                return $result;
            }
            else {
                return FALSE;
            }
        }

function GetAccreditationData($id){
            
            $this->db->select('e.*,e.IsActive as ApplicationStatus,e.Id as Id');
            $this->db->from('tbl_establishments e');
            $this->db->where('e.IsActive','2');
            $this->db->where('e.Id', $id);
            $get = $this->db->get();
            // die($this->db->last_query());
            return $get;
}


public function PendingRequest2($data) {
            $this->db->select('*');
            $this->db->from($this->tbl);
            if (!empty($id)) {
                $this->db->where('id',$postdata['Id']);
                return $this->db->get()->result();
            }else {
                $this->db->where('IsActive','2');
                return $this->db->get();
            }
            
        }
    

    }