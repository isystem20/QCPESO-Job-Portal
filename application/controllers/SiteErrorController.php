<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SiteErrorController extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function Error404()
	{
		$this->load->view('errors/custom/Error404');
	}
		public function Error403()
	{
		$this->load->view('errors/custom/Error403');
	}
		public function Error500()
	{
		$this->load->view('errors/custom/Error500');
	}

	public function UnderConstruction()
	{
		$this->load->view('errors/custom/UnderConstruction');
	}
}
