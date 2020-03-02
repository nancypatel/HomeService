<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginModel extends CI_Model {

        public $username;
        public $password;
        public $date;
		
		function __construct(){
			parent::__construct();
			//$this->load->database();
		}
		
		public function index(){
			//
		}
		
		public function login_user()
		{
			$userdata = $this->input->post('users');
			//$this->db->select('*');
			$this->db->select('username, email, password');
			$this->db->from('users');
			$this->db->where('username', $userdata['username']);
			$this->db->where('password', $userdata['password']);
			$query = $this->db->get();
			$res   = $query->result();      
			return $res;
		}
		
	
	
	
		//
        public function get_last_ten_entries(){
			$query = $this->db->get('entries', 10);
			return $query->result();
        }

        public function insert_entry()
        {
                $this->title    = $_POST['title']; // please read the below note
                $this->content  = $_POST['content'];
                $this->date     = time();

                $this->db->insert('entries', $this);
        }

        public function update_entry()
        {
                $this->title    = $_POST['title'];
                $this->content  = $_POST['content'];
                $this->date     = time();

                $this->db->update('entries', $this, array('id' => $_POST['id']));
        }

}

?>