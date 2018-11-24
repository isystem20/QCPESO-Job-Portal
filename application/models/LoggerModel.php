<?php
/**
* 
*/
class LoggerModel extends CI_Model
{
	

	public function log($action,$entity,$action_data){
		$this->load->library('user_agent');
		$userid = "";
		if (!empty($this->session->userdata('userid'))) {
			$userid = $this->session->userdata('userid');
		}
		$logdata = array(
				'UserId' => $userid,
				'Action' => $action,
				'Entity' => $entity,
				'ActionData' => $action_data,
				'IpAddress' => $this->input->ip_address(),
				'Device' => $this->agent->mobile(),
				'Platform' => $this->agent->platform(),
				'UserAgent' => $this->input->user_agent(),
				);
		$query = $this->db->insert('logs', $logdata);
		return $this->db->insert_id();
	}

}

?>