<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {

	public function Sidebar()
	{
		$this->load->view('Admin/Main/sidebar');
	}
	public function AdminFooter()
	{
		$this->load->view('Admin/Main/footer');
	}
	public function Navbar()
	{
		$this->load->view('Admin/Main/Navbar');
	}
	public function adminHome()
	{
		$this->load->view('Admin/adminhome');
	}
	public function adcategory()
	{
		$this->load->view('Admin/Category/adminCategory');
	}
	public function Addcat()
	{
		$this->load->view('Admin/Category/AddCategory');
	}
	public function Editcat()
	{
		$this->load->view('Admin/Category/editCategory');
	}
}