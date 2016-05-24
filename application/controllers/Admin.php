<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function index()
	{
		header("Location: " . base_url() . "admin/notificaciones");
	}
	public function notificaciones()
	{
		$this->load->view('layouts/head');
		$this->load->view('layouts/menu');
		$this->load->view('layouts/content');
		$this->load->view('layouts/footer');
	}
}