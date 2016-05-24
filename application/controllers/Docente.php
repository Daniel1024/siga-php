<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Docente extends CI_Controller {
	public function index()
	{
		header("Location: " . base_url() . "docente/menu");
		//echo "Cargar Inicio de sesion";
	}
	public function menu()
	{
		$this->load->view('layouts/head');
		$this->load->view('layouts/menu');
		$this->load->view('menu/docente');
		$this->load->view('layouts/footer');
	}

	public function registro()
	{
		$this->load->view('layouts/head');
		$this->load->view('layouts/menu');
		$this->load->view('menu/relleno', array("relleno" => "Registro"));
		$this->load->view('layouts/footer');
	}

	public function reporte()
	{
		$this->load->view('layouts/head');
		$this->load->view('layouts/menu');
		$this->load->view('menu/relleno', array("relleno" => "Reporte"));
		$this->load->view('layouts/footer');
	}

	public function estandares()
	{
		$this->load->view('layouts/head');
		$this->load->view('layouts/menu');
		$this->load->view('menu/relleno', array("relleno" => "Estandares"));
		$this->load->view('layouts/footer');
	}
}