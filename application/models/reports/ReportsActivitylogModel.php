<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class ReportsActivitylogModel extends CI_Model {


		public function LoadReportsActivitylog($id = null) {
		$this->db->select('*');
			$this->db->from('system_logs');
			return $this->db->get();

			}
		
			
		}