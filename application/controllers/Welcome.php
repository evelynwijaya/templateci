<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
  //
	// public function __construct()
	// 	{
	// 		parent::__construct();
	// 		$this->load->helper('url');
	// 	}

	public function index()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/nav');
		$this->load->view('home');
		$this->load->view('layout/footer');
	}

	public function pelangi()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/nav');
		$this->load->view('pelangi');
		$this->load->view('layout/footer');
	}

	public function balonku()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/nav');
		$this->load->view('balonku');
		$this->load->view('layout/footer');
	}

	public function kebunku()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/nav');
		$this->load->view('kebunku');
		$this->load->view('layout/footer');
	}

	public function kereta()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/nav');
		$this->load->view('kereta');
		$this->load->view('layout/footer');
	}

	public function cicak()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/nav');
		$this->load->view('cicak');
		$this->load->view('layout/footer');
	}
}
