<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function Register()
	{
		$this->load->view('register');
	}
	public function header()
	{
		$this->load->view('Main/header');
	}

	public function dashboard()
	{
		$this->load->view('Admin/dashboard');
	}
	public function home()
	{
		$this->load->view('main/header');
		$this->load->view('home');
		$this->load->view('main/footer');
	}

	public function about()
	{
		$this->load->view('main/header');
		$this->load->view('Aboutus/about');
		$this->load->view('main/footer');
	}
}
