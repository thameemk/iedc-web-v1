<?php

class Register extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('url','form');
  }
  public function userRegister(){
    $this->load->model('report_model');
    $data = $this->input->post();
    $data = $this->security->xss_clean($data);
    // $this->form_validation->set_rules('first_name', 'First Name', 'trim|required|');
    // $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required|');
    // $this->form_validation->set_rules('email', 'Email', 'trim|required|');
    // $this->form_validation->set_rules('phone', 'Phone', 'trim|required|');
    // $this->form_validation->set_rules('branch', 'Branch', 'trim|required|');
    // $this->form_validation->set_rules('course_duration_1', 'Course Duration 1', 'trim|required|');
    // $this->form_validation->set_rules('course_duration_2', 'Course Duration 2', 'trim|required|');
    // $this->form_validation->set_rules('admission_number', 'Admission Number', 'trim|required|');
    // $this->form_validation->set_rules('dob', 'Date of Birth', 'trim|required|');
    // $this->form_validation->set_rules('whyIedc', 'Why IEDC', 'trim|required|');
    if($this->form_validation->run() == FALSE){
         $this->session->set_flashdata('msgreq', 'Fill all required fields!');
         // redirect('signup');
         echo "flag3";
     }
     else{
          $data = array(
          'first_name' => $this->input->post('first_name'),
          'last_name' => $this->input->post('last_name'),
          'email' => $this->input->post('email'),
          'phone' => $this->input->post('phone'),
          'branch' => $this->input->post('branch'),
          'course_duration_1' => $this->input->post('course_duration_1'),
          'course_duration_2' => $this->input->post('course_duration_2'),
          'admission_number' => $this->input->post('admission_number'),
          'dob'=> $this->input->post('dob'),
          'whyIedc' => $this->input->post('whyIedc')
          );
          $this->report_model->userRegister($data);

          if($this->input->post()){
            $this->session->set_flashdata('success', 'Registered Successfully!');
            // redirect(base_url() . "register_backup");
            echo "flag1";
            }
          else {
            $this->session->set_flashdata('fail', 'Some error has been occured ! Please contact web admin');
            // redirect(base_url() . "register_backup");
            echo "flag2";
            }
          }

  }

}
