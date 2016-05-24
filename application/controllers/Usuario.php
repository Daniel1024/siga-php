<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {
	public function index()
	{
		header("Location: " . base_url() . "usuario/menu");
		//echo "Cargar Inicio de sesion";
	}
	public function menu()
	{
		$this->load->view('layouts/head');
		$this->load->view('layouts/menu');
		$this->load->view('menu/usuario');
		$this->load->view('layouts/footer');
	}

	public function aula()
	{
		$this->load->view('layouts/head');
		$this->load->view('layouts/menu');
		$this->load->view('menu/aulas');
		$this->load->view('layouts/footer');
	}

	public function agenda()
	{
		$this->load->view('layouts/head');
		$this->load->view('layouts/menu');
		$this->load->view('menu/relleno', array("relleno" => "Agenda Escolar"));
		$this->load->view('layouts/footer');
	}

	public function comportamiento()
	{
		$this->load->view('layouts/head');
		$this->load->view('layouts/menu');
		$this->load->view('menu/relleno', array("relleno" => "Comportamiento"));
		$this->load->view('layouts/footer');
	}
}