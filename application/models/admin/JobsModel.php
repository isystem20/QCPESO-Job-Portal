<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class JobsModel extends CI_Model {

    function __construct() {
        parent::__construct();
		$this->load->model('notifications/PushNotif','push');
		$this->load->model('notifications/Email','email');

    }
				public $tbl = 'tbl_establishments_jobposts';


		public function LoadMasterlist($id = null) {
			$this->db->select(' estab.*, ej.*, ej.IsActive as ejStatus');
			$this->db->from('tbl_establishments_jobposts ej');
			$this->db->join('tbl_establishments estab', 'estab.Id = ej.EstablishmentId', 'left outer');

			if (!empty($id)) {
				$this->db->where('ej.Id',$id);
				return $this->db->get()->result();
			}else {
				$this->db->where('ej.IsActive','1');
				return $this->db->get();
			}
			
		}

		public function LoadMasterlistPending($id = null) {
			$this->db->select('ej.*, e.CompanyName as comname, ej.IsActive as PendingStatus');
			$this->db->from('tbl_establishments_jobposts ej');
			$this->db->join('tbl_establishments e', 'ej.EstablishmentId = e.Id', 'left outer');			

			if (!empty($id)) {
				$this->db->where('Id',$id);
				return $this->db->get()->result();
			}else {
				$this->db->where('ej.IsActive','0');
				
				return $this->db->get();
			}
			
		}

		public function Add($data) {

			 
		
			$data['Specialization'] = json_encode($data['Specialization']);
			$data['Category'] = json_encode($data['Category']);			
			

			
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
			$this->db->set('JobTitle','"[Del-'.strtotime(date('Y-m-d H:i:s')).']~'.$data['name'].'"',FALSE);
			$this->db->set('IsActive','"2"',FALSE);
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

			$data['Specialization'] = json_encode($data['Specialization']);
			$data['Category'] = json_encode($data['Category']);


		    $this->db->set('ModifiedById',"'".$this->session->userdata('userid')."'",FALSE);
		    $this->db->set('ModifiedAt','CURRENT_TIMESTAMP',FALSE);
		    $this->db->set('VersionNo', 'VersionNo+1', FALSE);  
		    $this->db->where('Id', $id);


		    $query = $this->db->update($this->tbl,$data);

		    // die($this->db->last_query());

			$update = $this->db->affected_rows();
			if ($update > 0) {
				$result = $this->LoadMasterlist($id);
				return $result;
			}
			else {
				return FALSE;
			}
		}

		public function Approve($data) {
			//filerecord = [Del-1234567890]filerecord
			$this->db->set('IsActive','"1"',FALSE);
			$this->db->where('Id', $data['id']);
			$this->db->update($this->tbl);
			$deleted = $this->db->affected_rows();
			if ($deleted > 0) {

				$jobtitle = $this->getJobtitle($data['id']);
				if ($jobtitle != FALSE) {
					$recipients = $this->getRecipients($jobtitle);
					// echo $jobtitle;
					// print_r($recipients);
					//Send Push notif
					if ($recipients != FALSE) {
						$data2 = $this->push->SentJobAlert($recipients->result(),$jobtitle,$data['id']);
						$rec_mobile = $recipients->result_array();
						// print_r($data2);
						// print_r($rec_mobile);
						// die();
						// die();
						$aid = $rec_mobile[0]['Id'];
						// die($aid);
						$smsnotif = $this->getRecipientsMobile($aid);	
						$data2 = $this->email->SentJobAlert($smsnotif[0]['MobileNum'],$jobtitle,$data['id']);					
					}
	
					
					//Add Notif for SMS and
					// $insertdata = array(
					// 	'UserId' => , 
					// );

				}
				return $data;
			}else {
				FALSE;
			}

		}

		function addNotif() {

		}


	    function getRecipients($str) {
	    	$this->db->select('Id');
	    	$this->db->from('tbl_applicants');
	    	$this->db->like('lower(PreferredJobs)',$str);
	    	// $this->db->limit('1');
	    	$get = $this->db->get();
	    	if ($get->num_rows() > 0) {
	    		return $get;
	    	}else {
	    		return FALSE;
	    	}
	    }

	    function getRecipientsMobile($id) {
	    	// foreach ($id as $i) {
	    	// 	$i->Id
	    	// }
	    	$this->db->select('a.MobileNum');
	    	$this->db->from('tbl_applicants a');
	    	$this->db->where('Id',$id);
	    	$get = $this->db->get();
	    	if ($get->num_rows() > 0) {
	    		return $get->result_array();
	    	}else {
	    		return FALSE;
	    	}
	    }

		function getJobtitle($id) {
			$this->db->select('JobTitle');
			$this->db->from($this->tbl);
			$this->db->where('Id',$id);
			$get = $this->db->get();
			if ($get->num_rows() > 0) {
				$jobtitle = '';
				foreach ($get->result() as $row) {
					$jobtitle = $row->JobTitle;
				}
				return $jobtitle;
			}else {
				return false;
			}
		}

}