<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('home');
		$this->load->view('template/footer');
	}
	public function Ecell()
	{
		$this->load->view('template/header');
		$this->load->view('ecell');
		$this->load->view('template/footer');
	}
	public function IRCell()
	{
		$this->load->view('template/header');
		$this->load->view('ircell');
		$this->load->view('template/footer');
	}
	public function Gallery()
	{
		$this->load->view('template/header');
		$this->load->view('gallery');
		$this->load->view('template/footer');
	}
	public function Blog()
	{
		$this->load->view('template/header');
		$this->load->view('blog');
		$this->load->view('template/footer');
	}
	public function Communities()
	{
		$this->load->view('template/header');
		$this->load->view('community');
		$this->load->view('template/footer');
	}
	public function Register()
	{
		$this->load->view('template/header');
		$this->load->view('register');
		$this->load->view('template/footer');
	}
	public function Team()
	{
		$this->load->view('template/header');
		$this->load->view('team');
		$this->load->view('template/footer');
	}
}
