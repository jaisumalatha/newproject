<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {
function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('student_model');

    }
	
	public function index()
	{
		
		$data['stu_data']=$this->student_model->stu_list();
		$this->load->view('welcome_message',$data);
	}
	
	public function student_add()
	{
		$this->load->view('student-list');
		 $this->form_validation->set_rules('name', 'name', 'required');
         if ($this->form_validation->run() == true) { 
           $data = array(
               'city' => $this->input->post('city'),
               'name' => $this->input->post('name'),
               'contact_no' => $this->input->post('contact_no')
              );

                $this->student_model->stu_add('student_detail',$data);
                redirect("welcome-message");
         } 
         else { 

         } 
		//$this->load->view('student-list');
		//redirect("welcome_message");
	}


}
