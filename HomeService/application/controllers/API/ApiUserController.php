<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ApiUserController extends CI_Controller
{
    public function __construct()
    {
        //call CodeIgniter's default Constructor
        parent::__construct();
        //load database libray manually

        //load Model
        $this->load->model('ContactModel');
        $this->load->model('Users_model');
        $this->load->helper('url');
    }

    public function index()
    {
        $data['users'] = $this->Users_model->diplayrecord();
        echo json_encode($data['users']);
    }

}
