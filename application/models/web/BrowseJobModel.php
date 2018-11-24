<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class BrowseJobModel extends CI_Model {

		public function  BrowseJobModelMasterlist() {
			$this->db->select('*');
			$this->db->from('tbl_web_posts');
			return $this->db->get();

		}

	}
