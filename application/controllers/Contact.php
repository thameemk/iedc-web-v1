<?php

class Contact extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('url','form');
	}

	public function postEmail(){
		$this->load->model('report_model');
		$data = $this->input->post();
		$data = $this->security->xss_clean($data);

	    $data = array(
		'name' => $this->input->post('name'),
	    'email' => $this->input->post('email'),
	    'subject' => $this->input->post('subject'),
	    'message' => $this->input->post('message'),
	    );
		$this->report_model->messages($data);

		$config = array();
		$config['protocol'] = 'smtp';
		$config['smtp_host'] = '';
		$config['smtp_user'] = '';
		$config['smtp_pass'] = '';
		$config['smtp_port'] = '587';
		$this->load->library('email',$config);

		$this->email->set_newline("\r\n");
		$this->email->from($data['email'],$data['name']);
		$this->email->to('');
		$this->email->subject($data['subject']);
		$this->email->message($data['message']);

     // echo $this->email->print_debugger();
		if($this->email->send()){
			$this->session->set_flashdata('success', 'Email Sent Successfully!');
			redirect(base_url() . "contact");
          }
    else {
      $this->session->set_flashdata('fail', 'Email not Sent!');
      redirect(base_url() . "contact");
          }

	}


}
