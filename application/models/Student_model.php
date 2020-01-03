<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student_model extends CI_Model
{
function __construct()
  {
    parent::__construct(); // construct the Model class
  }
   
   public function stu_add($table,$data)
    {
        return $this->db->insert($table, $data);

    }
    public function stu_list()
    {
        $this->db->select('*');
        $this->db->from('student_detail');
       // $this->db->where('id',$id);
        $query = $this->db->get();
        return $query->result_array();
    }
}