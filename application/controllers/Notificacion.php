<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notificacion extends CI_Controller {
	public function index()
	{
		redirect(base_url("notificacion/menu"),'refresh');
		//echo "Cargar Inicio de sesion";
	}
	public function menu()
	{
		$this->load->view('layouts/head');
		$this->load->view('layouts/menu');
		$this->load->view('menu/notificacion');
		$this->load->view('layouts/footer');
	}

	public function comunicado()
	{
		$this->load->view('layouts/head');
		$this->load->view('layouts/menu');
		$this->load->view('menu/relleno', array("relleno" => "Comunicado"));
		$this->load->view('layouts/footer');
	}

	public function cartelera()
	{
		$this->load->view('layouts/head');
		$this->load->view('layouts/menu');
		$this->load->view('menu/relleno', array("relleno" => "Cartelera"));
		$this->load->view('layouts/footer');
	}

	public function calendario()
	{
		$this->load->view('layouts/head');
		$this->load->view('layouts/menu');
		$this->load->view('menu/relleno', array("relleno" => "Calendario"));
		$this->load->view('layouts/footer');
	}

}