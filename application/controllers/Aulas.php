<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aulas extends CI_Controller {
	public function index()
	{
		//header("Location: " . base_url() . "admin/notificaciones");
	}
	public function aula()
	{
		$this->load->view('layouts/head');
		$this->load->view('layouts/menu-aulas');
		$this->load->view('menu/relleno', array("relleno" => "Aulas Asignadas"));
		$this->load->view('layouts/footer');
	}

	public function menu($value=0)
	{
		$titulo = array(
			'titulo'	=> '',
			'id'			=> $value);
		switch ($value) {
			case 1:
				$titulo['titulo'] = "4to Básica";
				break;
			case 2:
				$titulo['titulo'] = "5to Básica";
				break;
			case 3:
				$titulo['titulo'] = "6to Básica";
				break;
			case 4:
				$titulo['titulo'] = "7mo Básica";
				break;
			case 5:
				$titulo['titulo'] = "8vo Básica";
				break;
			case 6:
				$titulo['titulo'] = "9no Básica";
				break;
			default:
				$titulo['titulo'] = "Aula no asignada";
				break;
		}

		$this->load->view('layouts/head');
		$this->load->view('layouts/menu-aulas', $titulo);
		$this->load->view('menu/asignatura', $titulo);
		$this->load->view('layouts/footer');
	}
}