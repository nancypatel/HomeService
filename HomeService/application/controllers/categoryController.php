<?php
defined('BASEPATH') or exit('No direct script access allowed');

class categoryController extends CI_Controller
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

    //All parent_category Category display...
    public function index()
    {
        //Parent category
        $this->load->model("categoryModel");
        $data['records'] = $this->categoryModel->allCategories();

        // Sub
        $this->load->model("categoryModel");
        $data['sub_records'] = $this->categoryModel->categories();
        $this->load->view('main/header');
        $this->load->view("service-provider", $data);
        $this->load->view('main/footer');
    }

    // All parent_category Category display...
    public function category($cate_id)
    {
        // Category data select category id on
        $this->load->model("categoryModel");
        $row = $this->categoryModel->one_category($cate_id);
        $row1 = $this->categoryModel->one_category($cate_id);
        // Show service select category id on\
        $this->load->model("categoryModel");
        $records = $this->categoryModel->service_category($cate_id);

        $this->load->view("service-category", compact('row','records','row1'));

    }

    public function getUsers(){
        // get data
        $data = $this->categoryModel->getRecords();
        echo json_encode($data);
    }

    //
    public function save()
    {
        $data = array(
            'parent_id' => $_POST['parent_id'],
            'title' => $_POST['title'],
            'banner' => $_POST['banner'],
            'parent_cate' => $_POST['parent_cate'],
            'icon' => $_POST['icon'],
            'image' => $_POST['image'],
            'highlight_msg' => $_POST['highlight_msg'],
            'why_msg' => $_POST['why_msg'],
            'how_work' => $_POST['how_work'],
            'about' => $_POST['about'],
            'isfeature' => $_POST['isfeature'],
            'status' => $_POST['status'],
            'service_time' => $_POST['service_time']
        );
        $this->Users_model->saverecords('category', $data);
        echo "Records Saved Successfully";
    }

}
