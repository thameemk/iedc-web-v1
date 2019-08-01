<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {
	function __construct() {
		parent::__construct();
		 $this->load->library('form_validation');
		$this->load->model('report_model');
	  }

	public function index()
	{
		$data['page_title'] = 'Home';
		$data['congrats']=$this->report_model->appreciation();
		$data['publicInfo']=$this->report_model->get_info();
		$data['upcomingInfo']=$this->report_model->upcomingEvents();
		$this->load->view('template/header',$data);
		$this->load->view('static/home',$data);
		$this->load->view('template/footer');
	}
	function view($page){

			if ( ! file_exists(APPPATH.'views/static/'.$page.'.php')){
					show_404();
			}
			$temp = ucfirst($page);
		 	$data['page_title'] = $temp;
			$data['congrats']=$this->report_model->appreciation();
			$data['publicInfo']=$this->report_model->get_info();
			$data['showGallery']=$this->report_model->gallery();
			$data['incubated']=$this->report_model->ecellInfo('incubated');
			$data['incubating']=$this->report_model->ecellInfo('incubating');
			$data['upcomingInfo']=$this->report_model->upcomingEvents();
			$data['execom5']=$this->report_model->execomInfo('2019-2020');
			$data['execom4']=$this->report_model->execomInfo('2018-2019');
			$data['execom3']=$this->report_model->execomInfo('2017-2018');
			$data['execom2']=$this->report_model->execomInfo('2016-2017');
			$data['execom1']=$this->report_model->execomInfo('2015-2016');
			$this->load->view('template/header',$data);
			$this->load->view('static/'.$page,$data);
			$this->load->view('template/footer');

	}
}
