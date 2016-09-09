<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

	public function index()
	{
		$this->load->view('site/index');
	}

	public function infor(){
		$this->load->view('site/infor');
	}

	public function custom(){
		$this->load->view('site/custom');
	}

}
