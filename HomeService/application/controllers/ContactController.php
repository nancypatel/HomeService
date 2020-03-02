<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ContactController extends CI_Controller
{
    public function __construct()
    {
        //call CodeIgniter's default Constructor
        parent::__construct();

        //load Model
        $this->load->model('ContactModel');
        $this->load->model('Users_model');
        $this->load->helper('url');
    }
    public function view()
    {
        $this->load->view("Contact/ContactUS");
    }

    public function index()
    {
        $this->load->view("Contact/CList");
    }

    public function edit($cid)
    {
        //loading model
        $this->load->model('ContactModel');
        $result = $this->ContactModel->editrecords($cid);
        // Passing Values to update view
        $this->load->view('Contact/CEdit', ['row' => $result]);
    }
    public function update()
    {
        $id = $this->input->post('cid');
        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'subject' => $this->input->post('subject'),
            'message' => $this->input->post('message')
        );
        $this->ContactModel->updaterecords($id, $data);
        redirect(base_url() + "Contact/index");
    }

    public function save()
    {
        $data = array(
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'subject' => $_POST['subject'],
            'message' => $_POST['msg']
        );
        $this->Users_model->saverecords('contacts', $data);
        echo "Records Saved Successfully";
    }

    public function delete($cid)
    {
        $id = $this->uri->segment(3);

        if (empty($cid)) {
            show_404();
        }

        $news_item = $this->ContactModel->deleterecords($cid);
        $this->ContactModel->deleterecords($cid);
        redirect(base_url() + "/Contact/index");
    }
}
