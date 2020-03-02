<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ApiCategoryController extends CI_Controller
{
    public function __construct()
    {
        //call CodeIgniter's default Constructor
        parent::__construct();
        //load database libray manually

        //load Model
        $this->load->model('categoryModel');
        $this->load->model('Users_model');
        $this->load->helper('url');
    }

    public function index()
    {
        $data['category'] = $this->categoryModel->getdata();
        echo json_encode($data['category']);
    }

}
