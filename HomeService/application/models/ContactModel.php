<?php

  defined('BASEPATH') OR exit('No direct script access allowed');

  class ContactModel extends CI_Model {
    function __construct()
    {
    parent::__construct();
      $this->load->database();//loading database
    }

    // To display record
    function displayrecords()
    {
      $q = $this->db->get("contacts");
      if($q->num_rows() > 0)
      {
          return $q->result();
      }
      return array();
    }

    function editrecords($cid)
    {
       $query = $this->db->where('contacts.cid =', $cid)->select("*")->from("contacts")->get();
       return $query->row();

    } 

    //To update
    function updaterecords($id,$data)
    {
       // $this->db->where('$cid', $name,$email,$subject,$message);
       // $query = $this->db->update('contacts',$cid);

       $this->db->where('Cid', $id);
      $this->db->update('contacts', $data);
  
    } 

    //To delete
    function deleterecords($cid)
    {
      $this->db->where('cid', $cid);
      return $this->db->delete('contacts');
    } 

    //To display
    public function getdata()
    {
        $this->db->select("*");
        $this->db->from("contacts");
        if($query=$this->db->get())
        {
            return $query->result_array();
        } 
        else
        {
            return false;
        }
    }

    //To insert data...
    public function insert_form($request)
     {                                                        
        $insertStatus=$this->db->insert('contacts',array(
            'name'=>$request['name'],
            'email'=>$request['email'],
            'subject'=>$request['subject'],
            'msg'=>$request['msg']
            ));
        return $insertStatus;
     }

  }
?>
  