<?php

defined('BASEPATH') or exit('No direct script access allowed');

class categoryModel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database(); //loading database
    }

    // To display parent category record
    function allCategories()
    {
        $q = $this->db->get("parent_category");
        if ($q->num_rows() > 0) {
            return $q->result();
        }
        return array();
    }

    // To display sub category record
    function categories()
    {
        $q = $this->db->get("category");
        if ($q->num_rows() > 0) {
            return $q->result();
        }
        return array();
    }

    // To display sub category record
    function one_category($cate_id)
    {
        $query = $this->db->where('category.cate_id =', $cate_id)->select("*")->from("category")->get();
       return $query->row();
    }

    // To display sub category what service provide
    function service_category($cate_id)
    {
        $q = $this->db->where('category_sub.cate_id =', $cate_id)->select("*")->from("category_sub")->get();
        if ($q->num_rows() > 0) {
            return $q->result();
        }
       return array();
    }

     //To display
     public function getdata()
     {
         $this->db->select("*");
         $this->db->from("category");
         if($query=$this->db->get())
         {
             return $query->result_array();
         } 
         else
         {
             return false;
         }
     }
}
?>
