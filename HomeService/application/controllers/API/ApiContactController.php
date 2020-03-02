<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ApiContactController extends CI_Controller
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
        $data['contact'] = $this->ContactModel->displayrecords();
        echo json_encode($data['contact']);
    }

    public function add()
    {
        $request = json_decode(file_get_contents('php://input'), TRUE);
        $data1 = array(
            'name' => $request['name'],
            'email' => $request['email'],
            'subject' => $request['subject'],
            'message' => $request['msg']
        );

        $data = $this->Users_model->saveRecords('contacts', $data1);
        if ($data) {
            echo $result = '{"status" : "success"}';
        } else {
            echo $result = '{"status" : "failure"}';
        }
    }

    public function edit($cid)
    {
        $data['contact'] = $this->ContactModel->editrecords($cid);
        echo json_encode($data['contact']);
    }

    public function update()
    {
        $request = json_decode(file_get_contents('php://input'), TRUE);
        $data = array(
            'name' => $request['name'],
            'email' => $request['email'],
            'subject' => $request['subject'],
            'message' => $request['msg']
        );
        $res = $this->ContactModel->updaterecords($request['cid'], $data);
        if ($res) {
            echo $result = '{"status" : "success"}';
        } else {
            echo $result = '{"status" : "failure"}';
        }
    }

    public function delete()
    {
        $cid = $_GET['cid'];
        $feedback = $this->ContactModel->deleterecords($cid);
    }
}
