<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UsersController extends CI_Controller {

  public function __construct()
   {
      parent::__construct();
      $this->load->model('Users_model', 'user');
  }
  public function display()
  {
        $this->load->view("Admin/AUser/UserList");

  }

  public function delete($user_id)
    {
        $id = $this->uri->segment(3);

        if (empty($user_id)) {
            show_404();
        }

        $news_item = $this->Users_model->deleterecords($user_id);
        $this->Users_model->deleterecords($user_id);
        redirect(base_url() + "Admin/AUser/UserList");
    }
}
?>