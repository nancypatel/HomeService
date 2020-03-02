<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ServiceController extends CI_Controller {

	public function index()
	{
		$this->load->view('main/header');
		$this->load->view('Service/Service');
		//$this->load->view('main/footer');
	}
	public function work()
	{
		$this->load->view('main/header');
		$this->load->view('Worker/work');
		$this->load->view('main/footer');
	}
	public function wish()
	{
		$this->load->view('Service/wish');
	}
	
}
