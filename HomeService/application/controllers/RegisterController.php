<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegisterController extends CI_Controller {

	public function __construct()
    {
        //call CodeIgniter's default Constructor
         parent::__construct();
        //load database libray manually
        
        //load Model
        $this->load->model('Users_model');
    }

    public function savedata()
    {   
        $data= array(
            'username'=>$_POST['usn'],
            'email'=>$_POST['email'],
            'password'=>$_POST['password'],
        );
        $this->Users_model->saverecords('users',$data);    
        echo "Records Saved Successfully";   
    }

    public function displaydata()
    {
       $this->load->model("Users_model");
         $data['records'] = $this->Users_model->diplayrecord();
        $this->load->view("users/Listuser",$data);
    }
}

  