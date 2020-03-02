<?php

  defined('BASEPATH') OR exit('No direct script access allowed');

  class Users_model extends CI_Model {
    function __construct()
    {
      parent::__construct();
      $this->load->database();//loading database
    }

    function saveRecords($t,$d)
    {
       $this->db->insert($t,$d); 
    }

    function diplayrecord()
    {
        $this->db->select("*");
        $this->db->from("users");
        if($query=$this->db->get())
        {
            return $query->result_array();
            //return $query->result_array();
        } 
        else
        {
            return false;
        }
    }

    //To delete
    function deleterecords($user_id)
    {
      $this->db->where('user_id', $user_id);
      return $this->db->delete('users');
    } 
  }
?>
  