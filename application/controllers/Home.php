<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
