<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class ApplicantModel extends CI_Model {


        public $tbl = 'tbl_applicants';

        public function LoadMasterlist($id = null) {
            $this->db->select('*');
            $this->db->from($this->tbl);
            if (!empty($id)) {
                $this->db->where('id',$id);
                return $this->db->get()->result();
            }else {
                $this->db->where('isActive','1');
                $this->db->or_where('isActive','2');
                return $this->db->get();
            }
            
        }


        public function Add($data) {
            
        
            $this->db->set('CreatedById',"'".$this->session->userdata('userid')."'",FALSE);
            $this->db->set('ModifiedById',"'".$this->session->userdata('userid')."'",FALSE);    
        

            $this->db->insert($this->tbl,$data);

            $added = $this->db->insert_id();

            if ($added > 0) {
                $inserted = $this->LoadMasterlist($added);
                return $inserted;
            }
            else {
                return FALSE;
            }
        }


        public function Delete($data) {
            //filerecord = [Del-1234567890]filerecord
            $this->db->set('LastName','"[Del-'.strtotime(date('Y-m-d H:i:s')).']~'.$data['name'].'"',FALSE);
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
            $this->db->set('ModifiedById',"'".$this->session->userdata('userid')."'",FALSE);
            $this->db->set('ModifiedAt','CURRENT_TIMESTAMP',FALSE);
            $this->db->set('VersionNo', 'VersionNo+1', FALSE);  
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



    }