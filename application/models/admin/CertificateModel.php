<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class CertificateModel extends CI_Model {

		public function Load_CertificateModel_Masterlist() {
			$this->db->select('*');
			$this->db->from('tbl_certificate_list');
			return $this->db->get();

		}

	}