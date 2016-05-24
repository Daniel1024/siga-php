<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		$this->load->view('home');
		//header("Location: " . base_url() . "home/menu");
		//echo "Cargar Inicio de sesion";
	}
	public function menu()
	{
		$this->load->view('layouts/head');
		$this->load->view('layouts/menu');
		$this->load->view('menu/principal');
		$this->load->view('layouts/footer');
	}

	public function login()
	{

		$user = $this->input->post('user');
		$pass = $this->input->post('pass');

		$usuario = array(
			'user'	=> $user,
			'login'	=> true
		);

		if ($user == 'admin' && $pass == 'admin') {
			$this->session->set_userdata( $usuario );
			redirect('home/menu','refresh');
		}

		$this->load->view('login');
	}
/*
	public function comprobar()
	{
		$user = $this->input->post('user');
		$pass = $this->input->post('pass');

		$Usuario = array(
			'user'	=> $user,
			'login'	=> false
		);

		if ($user == 'admin' && $pass == 'admin') {
			$Usuario['login'] = true;
			$this->session->set_userdata( $Usuario );
		}

		echo "user: " . $user . "pass: " . $pass;

	}
*/
	public function salir()
	{
		$this->session->sess_destroy();
		redirect(base_url(),'refresh');
	}
}